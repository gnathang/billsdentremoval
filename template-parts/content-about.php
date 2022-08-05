
<?php 
// Query for our about category
  $args = array (
    'post_type' => 'post',
    'category_name' => 'about',
  );
  $about = new WP_Query ($args);

  if ( $about->have_posts() ) : while ( $about->have_posts() ) : $about->the_post(); ?>

  <section class="entry-post about mulish pa5-ns pa4">

    <h2 class="entry-title near-black f2-l pb2-l">
      <?php the_title ();?>
    </h2>

    <p class="entry-content near-black f2-l mt4-l">
      <?php the_content();?>
    </p>
  
  </section>


  <?php
  endwhile;
  endif; 
?>