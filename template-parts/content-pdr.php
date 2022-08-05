

<?php 

$args = array (
  'post_type' => 'post',
  'category_name' => 'what-is-pdr',
);

$pdr = new WP_Query ($args);

if ( $pdr->have_posts() ) : while ( $pdr->have_posts() ) : $pdr->the_post(); ?>

<section class="about-wrapper flex flex-wrap items-center">

  <div class="entry-post pdr mulish w-50-l w-100 pa5-l pa4 pa3-s">

    <h2 class="entry-title near-black f1-l f2 pb2-l">
      <?php the_title ();?>
    </h2>

    <p class="entry-content near-black f2-l f3 mt4-l">
      <?php the_content();?>
    </p>

  </div>

  <div class="pdr-video flex justify-center w-50-l w-100 pa5-l pa4 pa3-s">
    <video width="480" height="848" controls>
      <source src="<?php bloginfo('template_directory');?>/images/pdr-video.mp4" type="video/mp4">
    </video>
    </div>
</section>

<?php
endwhile;
endif; 
?>