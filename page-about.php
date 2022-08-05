<?php
get_header();
?>
<!-- The following is the code our our about page hero, 
followed by the template files at the bottom -->

	<main id="primary" class="site-main">

	<section class="about-hero cover"
		style="<?php if (get_field('about_hero_image') ): ?>
						background-image: url(<?php the_field('about_hero_image'); ?>);
            <?php endif; ?>">
	</section>

	<section class="section-hero-text absolute">
    <div class="about-hero-text w-60-l center ttu relative tc"> 
      <img class="w-20" src="<?php bloginfo('template_directory');?>/images/cropped-IMG_0325-1-300x294.png">
      <h2 class="tracked-mega f1 fw4">
      	Bill's Dent Removal
      </h2>
		</div>
  </section>
			
		<?php
			get_template_part( 'template-parts/content-about' );
      get_template_part( 'template-parts/content-pride' );
			get_template_part( 'template-parts/content-pdr' );
		?>

	</main><!-- #main -->

<?php

get_footer();
