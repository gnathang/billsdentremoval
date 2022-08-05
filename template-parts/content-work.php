
<!-- here we use wp_qeuey to query for our category name. -->

<!-- putting everything inside this div ensures that the
		columns happen!!  -->



    <?php

$args = array(
  'post_type' => 'post',
  'category_name' => 'work',
);

$welcome = new WP_Query( $args );

if ( $welcome->have_posts() ) : while ( $welcome->have_posts() ) :$welcome->the_post();?> 

<section id="welcome">
    
  <div class="entry-post welcome w-90 pa5-l pa4 pa3-s">
<!-- 
    <h2 class="entry-title f2">
        <?php the_title(); ?>
    </h2> -->

    <p class="entry-content fw1 near-black">
        <?php the_content(); ?>
    </p>

  </div><!-- .entry-post -->	

</section>


<?php 
endwhile;
endif;
?>