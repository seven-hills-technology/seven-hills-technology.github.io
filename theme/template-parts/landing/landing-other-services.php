<?php

$post = get_post();

?>

<section class="sh-white-band">
    <div class="sh-product-list">
        <div class="sh-product-wrapper">
            <div class="small-image-wrapper">
                <div class="icon small-icon d-block d-md-none">
                    <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/consulting-color.svg" alt="Technology Consulting Icon" height="150">
                </div>
            </div>
            <div class="sh-product">
                <div class="text">
                    <h2><a href="/consulting" alt="<?php the_field('technology_consulting_title'); ?>"><?php the_field('technology_consulting_title'); ?></a></h2>
                    <div>
                        <?php the_field('technology_consulting_description'); ?>
                    </div>
                    <div class="small-link">
                        <a href="/consulting" alt="<?php the_field('technology_consulting_title'); ?>"><?php the_field('technology_consulting_link'); ?> <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="icon pull-right d-none d-md-block">
                    <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/consulting-color.svg" alt="<?php the_field('technology_consulting_title'); ?> Icon" height="200">
                </div>
            </div>
        </div>
        <div class="sh-product-wrapper">
            <div class="small-image-wrapper">
                <div class="icon small-icon d-block d-md-none">
                    <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/government.svg" alt="<?php the_field('ps_title'); ?> Icon" height="150">
                </div>
            </div>
            <div class="sh-product">
                <div class="text">
                    <h2><a href="/public-sector" alt="<?php the_field('ps_title'); ?>"><?php the_field('ps_title'); ?></a></h2>
                    <div>
                    <?php the_field('ps_description'); ?>
                    </div>
                    <div class="small-link">
                        <a href="/public-sector" alt="<?php the_field('ps_title'); ?>"><?php the_field('ps_link'); ?> <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="icon pull-right d-none d-md-block">
                    <img class="lozad" data-src="/wp-content/themes/sevenhillstechnology/images/government.svg" alt="<?php the_field('ps_title'); ?> Icon" height="200">
                </div>
            </div>
        </div>
    </div>
</section>