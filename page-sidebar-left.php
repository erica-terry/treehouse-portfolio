<!-- page-sidebar-left.php - Template for page with left sidebar -->

<?php
/*
	Template Name: Left Sidebar
*/
?>

<!-- Gets header -->
<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">

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
	  <!-- Secondary Column -->
	  <div class="small-12 medium-4 medium-pull-8 columns">
	    <div class="secondary">
		  <h2 class="module-heading">Sidebar</h2>
	    </div>
	  </div>
    </div>
  </div>
</section>
<!-- Gets footer -->
<?php get_footer() ?>