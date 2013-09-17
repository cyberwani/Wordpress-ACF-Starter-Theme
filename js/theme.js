;(function($, window, document, undefined) {

    /*
        Global variable OBJECT is passed to this file called "wptheme"

        Valid properties:

        ajaxurl - The AJAX url to post to, always populated,
        nonce - A security precaution to prevent fraudulent AJAX requests, always populated
        post_id - If on a page or post with a post ID this will be populated with it
        post_name - If on a valid page or post, this will be populated
        post_author - If on a valid page or post, this will be populated
        post_type - If on a valid page or post, this will be populated
        post_status - If on a valid page or post, this will be populated
        post_date - If on a valid page or post, this will be populated
    */

    // Document ready
    $(function() {

        /*
            Example AJAX Request

            $.post(
                wptheme.ajaxurl, {
                    action            : "wpwtheme-ajaxcall",
                    themenonce : wptheme.nonce
                },
                function (response) {
                    console.log(response);
                }
            );
        */

    });

})(jQuery, window, document);
