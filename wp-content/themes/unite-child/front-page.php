<?php

$loop = get_transient_from_query_string('front_page_posts','post_type=real_estate');

 get_header(); ?>

	<div id="primary" class="content-area col-sm-12 col-md-12">
		<main id="main" class="site-main" role="main">

                <div class="row col-sm-12 col-md-10">
			<?php while ( $loop->have_posts() ) : $loop->the_post();
              $floor =  get_field('floor',get_the_ID());
			?>
                    <a href='<?=get_post_permalink(get_the_ID())?>' class="home col-sm-6 col-lg-4">
                        <div class="home__img">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="home__title">
                            <h2><?= get_the_title() ?></h2>
                        </div>
                        <div class="home__desc description">

                                <div class="row">
                                    <p class="description__square col-xs-3 col-sm-4 col-md-4">
                                        <?= get_field('square',get_the_ID()) ?>  m<sup>2</sup>
                                    </p>
                                    <p class="description__address col-xs-9 col-sm-8 col-md-8">
                                        <?= get_field('address',get_the_ID()) ?>
                                    </p>
                                    <?php $has_floor = (!empty($floor))? 'col-xs-4 col-sm-4 col-md-4' : 'col-xs-6 col-sm-6 col-md-6'; ?>
                                    <p class="description__price <?= $has_floor ?>">
                                        <?= get_field('price',get_the_ID()) ?>$
                                    </p>

                                    <p class="description__space <?= $has_floor ?>">
                                        <?= get_field('living_space',get_the_ID()) ?> m<sup>2</sup>
                                    </p>
                                    <p class="description__floor <?= $has_floor ?>">
                                        <?= $floor;
                                        if($floor)
                                           echo ' floor'; ?>
                                    </p>
                                </div>

                        </div>
                    </a>



<!--                    --><?php //var_dump($post);?>





			<?php endwhile; // end of the loop. ?>
                </div>



<?php
	get_footer();

?>