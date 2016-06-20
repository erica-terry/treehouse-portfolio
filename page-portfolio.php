<!-- page-portfolio.php -->

<?php
/* 
  Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">
    <!-- WordPress loop. Loops if there are posts while there are posts left -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php /* Title of the post */ the_title() ?></h1>
      <?php /* Post content */ the_content() ?>

    <!-- End while. If there are no posts... -->
	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no pages found.' ); ?></p>

	<?php endif; ?> 

    </div>
  </div>
</section>

<?php 

$args = array(
  'post_type' => 'portfolio'
);
$query = new WP_Query( $args );

?>

<section class="row no-max pad">

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

  <div class="small-6 medium-4 large-3 columns grid-item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</section>

<!-- Gets footer -->
<?php get_footer() ?>