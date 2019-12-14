<?php 
   // the query
   $the_query = new WP_Query( array(
     'post_type' => 'post',
      'posts_per_page' => 3,
   )); 
?>



<section class="sh-white-band">
    <h2>Read Our Blog</h2>
    <p>Read our recent blog posts</p>
    <div class="sh-blog">
    <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <div class="post">
                <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title() ?>">
                    <div>
                        <h4><?php the_title(); ?></h4>
                    </div>
                </a>
            </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

    <?php endif; ?>
    </div>
    <div class="default-button-wrapper"> 
        <a class="default-button" href="/blog">View Our Blog</a>
    </div>
</section>