
<?php

$args = array (
  'post_type' => 'post',
  'category_name' => 'pride',
  'posts_per_page' => 1,
);

  $pride = new WP_Query($args);

if ( $pride->have_posts() ) : while ( $pride->have_posts() ) :$pride->the_post();?>

<section class="bg-near-white pride w-100 raleway fw1 tracked-mega pb6-l pb4 ph4">

  <h2 class="ph5-l tracked mb5 f2-l f3 pt5-l pt3"><?php the_title(); ?>
  </h2>

  <div class="entry-post attributes w-80-s">

    <div class="mobile flex items-start ph3-l ph2 mv2-l">
      <img class="w-20 mr5-l mr4" src="<?php bloginfo('template_directory');?>/images/van-icon.svg">
      <div class="attribute">
        <h2 class="f2-l f4-s"><?php the_field('attribute_1'); ?></h2>
        <p> 
          <?php the_field('attribute_1_desc'); ?>
        </p>
      </div>
    </div>

    <div class="professional flex items-start ph3-l ph2 mv2-l">
      <img class="w-20 mr5-l mr4" src="<?php bloginfo('template_directory');?>/images/star-gold.svg">
      <div class="attribute">
        <h2 class="f2-l f4-s"><?php the_field('attribute_2'); ?></h2>
        <p>
          <?php the_field('attribute_2_desc'); ?>
        </p>
        </div>
    </div>

    <div class="efficient flex items-start ph3-l ph2 mv2-l">
      <img class="w-20 mr5-l mr4" src="<?php bloginfo('template_directory');?>/images/clock-pale-gold.svg">
      <div class="attribute">
        <h2 class="f2-l f4-s"><?php the_field('attribute_3'); ?></h2>
        <p><?php the_field('attribute_3_desc'); ?></p>
      </div>
    </div>

    <div class="affordable flex items-start ph3-l ph2 mv2-l">
      <img class="w-20 mr5-l mr4" src="<?php bloginfo('template_directory');?>/images/piggy-bank-colour.svg">
      <div class="attribute">
        <h2 class="f2-l f4-s"><?php the_field('attribute_4'); ?></h2>
        <p class="">
          <?php the_field('attribute_4_desc'); ?>
        </p>
      </div>
    </div>

  </div>
</section>


<?php
endwhile;
endif;
?>