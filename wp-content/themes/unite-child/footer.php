<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
<div id="secondary" class="widget-area col-sm-12 col-md-2" role="complementary">
    <?php $loop = get_transient_from_query_string('aside_post','post_type=agency');
    while ( $loop->have_posts() ) : $loop->the_post();
    ?>
    <a href="<?=get_post_permalink(get_the_ID())?>" class="aside_link"><?= get_the_title() ?></a>
    <?php endwhile;?>
</div>
</main><!-- #main -->
</div><!-- #primary -->


</div><!-- #secondary -->
</div><!-- row -->

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info container">
        <div class="row">
            <nav role="navigation" class="col-md-6">
                <?php unite_footer_links(); ?>
            </nav>

            <div class="copyright col-md-6">
                <?php do_action( 'unite_credits' ); ?>
                <?php echo unite_get_option( 'custom_footer_text' ); ?>
                <?php do_action( 'unite_footer' ); ?>
            </div>
        </div>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>