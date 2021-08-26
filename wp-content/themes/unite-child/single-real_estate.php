<?php
get_header();?>
    <div id="primary" class="content-area col-sm-12 col-md-12">
        <main id="main" class="site-main" role="main">

                <div class="row col-sm-12 col-md-10 estate">
                    <div class="estate__img col-sm-12 col-md-6">
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                    </div>
                    <div class="estate__description col-sm-12 col-md-6">
                        <h1><?=get_the_title()?></h1>
                        <p class="estate__square ">
                            <?= get_field('square') ?>  m<sup>2</sup>
                        </p>
                        <p class="estate__address ">
                            <?= get_field('address') ?>
                        </p>

                        <p class="estate__price">
                            <?= get_field('price') ?>$
                        </p>

                        <p class="estate__space">
                            <?= get_field('living_space') ?> m<sup>2</sup>
                        </p>
                        <?php if(get_field('floor')):?>
                        <p class="estate__floor">
                            <?= get_field('floor') ; ?>
                        </p>
                        <?php endif; ?>
                    </div>
                </div>

<?php get_footer();