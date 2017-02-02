<?php

// =============================================================================
// VIEWS/RENEW/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Renew.
// =============================================================================

?>

	<div id="location-map" class="x-section _before _overlay-black bg-image" style="margin: 0px;padding: 5% 0px; background-image: url(http://rebel.dev/wp-content/uploads/2017/01/location-map.png); background-color: transparent;" data-x-element="section" data-x-params="{&quot;type&quot;:&quot;image&quot;,&quot;parallax&quot;:false}">
		
		<div class="x-container location max width" style="margin: 0px auto;padding: 0px;">
			<div class="x-column x-sm cs-ta-center location x-1-1" style="padding: 15px;border-style: solid;border-width: 5px;border-color: hsl(0, 0%, 100%);">
				<div class="x-text">
					
					<?php $address_info = get_field('address_info', 'options'); ?>
					<?php if( $address_info ): ?>
						<?php echo $address_info; ?>
					<?php endif; ?>
										
				</div>
			</div>
		</div>
	</div>

	<?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
	<?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
	<?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>

	<?php if ( x_get_option( 'x_footer_bottom_display' ) == '1' ) : ?>
	
	<footer class="x-colophon bottom" role="contentinfo">
	  <div class="x-container marginless-columns">
	
	    <?php if ( x_get_option( 'x_footer_menu_display' ) == '1' ) : ?>
	      <?php x_get_view( 'global', '_nav', 'footer' ); ?>
	    <?php endif; ?>
		
			
		<div class="x-column x-sm x-1-2">
		    <?php if ( x_get_option( 'x_footer_content_display' ) == '1' ) : ?>
		      <div class="x-colophon-content">
		        <?php echo do_shortcode( x_get_option( 'x_footer_content' ) ); ?>
		      </div>
		    <?php endif; ?>
		</div>
	    
	    <div class="x-column x-sm x-1-2 follow-us">
		    <?php if ( x_get_option( 'x_footer_social_display' ) == '1' ) : ?>
		      Follow Us: <?php x_social_global(); ?>
		    <?php endif; ?>
	    </div>
		

	  </div>
	</footer>
	
	<?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>