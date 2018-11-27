<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

 ?>

	<div class="container">
      <div class="row">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
?>
			<div class="col-md-4 mb-5">
            <?php  get_template_part( 'templates/content', 'post' ); ?>
        </div>
<?php
		// End the loop.
		endwhile;
		?>

		</div><!-- .site-main -->
		<?php ti_pagination();  ?>
	</div><!-- .content-area -->

 
