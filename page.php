<!-- page.php -->

<!-- Gets header -->
<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    <!-- WordPress loop. Loops if there are posts while there are posts left -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php /* Title of the post */ the_title() ?></h1>
      <hr>
      <p><?php /* Post content */ the_content() ?></p>

    <!-- End while. If there are no posts... -->
	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no pages found.' ); ?></p>

	<?php endif; ?> 

    </div>
  </div>
</section>

<!-- Gets footer -->
<?php get_footer() ?>