
		
	<?php if ( !empty($photos) ): ?>

		<?php foreach ( $photos as $photo ): ?>
		
			<div class="col pl-0">
				<a href="<?php echo esc_attr( $photo['link'] ); ?>" title="<?php echo esc_attr( $photo['caption'] ); ?>" target="_blank" rel="nofollow">
				<div class="insta-wrapper play" style="background-image: url('<?php echo esc_attr( $photo[$size['thumbnail']] ); ?>');">
				</div>
				</a>

			</div>

		<?php endforeach; ?>

	<?php endif; ?>



<?php //if ( !empty($instance['link_text']) && !empty($follow_link) ): ?>
	
	<!-- <p class="meks-instagram-follow-link">
		<a href="<?php echo esc_attr( $follow_link ) ?>" target="_blank" rel="nofollow" class="mks_author_link meks-widget-cta"><i class="fa fa-instagram"></i> <?php echo esc_html( $instance['link_text'] ); ?></a>
	</p> -->

<?php //endif; ?>
<style type="text/css">
	.insta-wrapper {
    width: 16.3%;
    height: 150px;
    background-size: cover;
    display: inline-block;
    float: left;
}
.widget_meks_instagram h3{
	color: #fff;
}
</style>