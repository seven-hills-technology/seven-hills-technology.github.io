<?php

global $post;
$post_slug = $post->post_name;

?>

<section class="sh-landing-intro landing-big-background <?php echo $post_slug ?>">
    <h1>
        <?php the_field('page_header'); ?>
    </h1>
    <p>
        <?php the_field('page_subheader'); ?>
    </p>
    
    <?php if(the_field('page_mainCTA')) : ?>
        <div class="cta-button-wrapper"> 
            <a class="cta-button" href="https://app.hubspot.com/meetings/bradgardner/1-hour-consultation"
                rel="noreferrer" target="_blank"><?php the_field('page_mainCTA'); ?></a>
        </div>
    <?php endif; ?>
</section>