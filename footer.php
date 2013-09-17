    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info">
            <?php do_action( 'theme_credits' ); ?>
            <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wptheme' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wptheme' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            <?php printf( __( 'Theme: %1$s by %2$s.', 'wptheme' ), 'wptheme', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
