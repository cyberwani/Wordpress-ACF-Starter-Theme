<?php

add_filter('template_include', 'theme_json_api');

function theme_json_api($template)
{
    if (isset($_REQUEST['json']))
    {
        global $query_string;
        global $post;

        $my_query_string = $query_string . '&posts_per_page=' . (isset($_GET['posts_per_page']) ? htmlspecialchars($_GET['posts_per_page']) : 10) . (isset($_GET['offset']) ? '&offset=' . htmlspecialchars($_GET['offset']) : '');

        query_posts($my_query_string);

        $result = array();

        if ( have_posts() ):
            while (have_posts()): the_post();

                $the_post_data = array(
                        'ID'                              => $post->ID,
                        'the_title'                     => get_the_title(),
                        'the_content'              => get_the_content(),
                        'the_excerpt'              => get_the_excerpt(),
                        'the_date'                   => get_the_date('Y-m-d H:i'),
                        'the_permalink'          => get_permalink(),
                        'the_post_thumbnail' => wp_get_attachment_image_src(
                            get_post_thumbnail_id($post->ID),
                            (isset($_GET['imgsize']) ? htmlspecialchars($_GET['imgsize']) : 'small' )
                        ),
                    );

                $fields = get_post_custom();
                if ($fields)
                {
                    foreach ($fields AS $key => $value)
                    {
                        if (substr($key, 0, 1) == '_')
                        {
                            unset($fields[$key]);
                        }
                    }
                }

                if (count($fields) >= 1)
                {
                    $the_post_data['custom_fields'] = $fields;
                }

                $result[] = $the_post_data;
            endwhile;
        endif;

        echo json_encode($result);

        return false;
    }
    else
    {
        return $template;
    }
}
