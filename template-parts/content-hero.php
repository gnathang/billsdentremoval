<?php
// Query for our hero category
  $args = array (
    'post_type' => 'post',
    'category_name' => 'hero',
  );

    $hero = new WP_Query($args);

  if ( $hero->have_posts() ) : while ( $hero->have_posts() ) : $hero->the_post(); ?>

  <section class="section-hero-bg w-100 cover" style="<?php if (get_field ('hero_image') ): ?> 
            background-image: url(<?php the_field('hero_image'); ?>);
            <?php endif; ?>">
  </section>

  <section class="section-hero-text absolute">
    <div class="hero-text flex flex-wrap w-60-l w-90 center ttu items-center justify-center"> 

      <img class="w4-l w3" src="<?php bloginfo('template_directory');?>/images/cropped-IMG_0325-1-300x294.png">

      <h1 class="tracked-mega f1-l f2 fw4 tc">
        <?php bloginfo('description');?>
      </h1>

      <h2 class="tracked-mega tc f2-l f3 lh-title fw1 w-100 mt0-s">
        <?php the_content();?>
      </h2>

      <div class="hero-buttons block flex w-100-l w-80 flex-wrap items-center justify-center">
        
          <a href="get-a-quote" class="get-a-quote-button ba br-pill w-third-l w-50-ns w-100 f4-l f5 fw4 tc tracked-mega ba pa2-l pa3 mh2">
            Get a quote
          </a>
      
          <a href="work" class="work-button ba br-pill w-third-l w-50-ns w-100 f4-l f5 fw4 tc tracked-mega pa2-l pa3 mh2 mt0-l mt3">
            Work
          </a>
        
      </div>

    </div>
  </section>

<?php
endwhile;
endif;
?>
