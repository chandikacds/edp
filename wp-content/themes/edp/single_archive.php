<?php
/**
 * Template Name: Single Archive Page Template
 */
?>
<div class="container">
      <div class="row">
       
      	<?php if (have_posts()) : ?>
      		 <?php 

					while (have_posts()) : the_post();
                 	echo '<div class="col-md-4 mb-5">';
                        get_template_part( 'templates/content', 'post' );
                     echo '</div>';  
                    endwhile; ?>

      	<?php endif; ?>
        
    </div>
    <?php ti_pagination(); ?>
</div>