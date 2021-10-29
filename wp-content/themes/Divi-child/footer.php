
<?php
if ( et_theme_builder_overrides_layout( ET_THEME_BUILDER_HEADER_LAYOUT_POST_TYPE ) || et_theme_builder_overrides_layout( ET_THEME_BUILDER_FOOTER_LAYOUT_POST_TYPE ) ) {
    // Skip rendering anything as this partial is being buffered anyway.
    // In addition, avoids get_sidebar() issues since that uses
    // locate_template() with require_once.
	return;
}

/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

	<footer id="main-footer">
		<?php get_sidebar( 'footer' ); ?>


		<?php
		if ( has_nav_menu( 'footer-menu' ) ) : ?>

			<div id="et-footer-nav">
				<div class="container">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'depth'          => '1',
						'menu_class'     => 'bottom-nav',
						'container'      => '',
						'fallback_cb'    => '',
					) );
					?>
				</div>
			</div>

		<?php endif; ?>

		<div id="footer-bottom">
			<div class="container clearfix">
				<?php
				if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
					get_template_part( 'includes/social_icons', 'footer' );
				}

					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
				echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>
			</div>
		</div>
	</footer>
</div>

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

</div>

<script>
	jQuery(document).ready(function(){

		jQuery('.ratingbudfacts li').prepend("<svg xmlns='http://www.w3.org/2000/svg' width='34' height='60' viewBox='0 0 34 60'><text id='_' data-name='✓' transform='translate(17 49)' fill='#262578' font-size='45' font-family='SegoeUIEmoji, Segoe UI Emoji' style=' '><tspan x='-16.853' y='0'>✓</tspan></text></svg>");

		jQuery('.switcher-popup span').remove();
		jQuery('.switcher-popup img').attr("src", "<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/earth.png").addClass("custom-globe");

		jQuery( "body" ).click(function() {
			jQuery('.switcher-popup span').remove();
			jQuery('.switcher-popup img').attr("src", "<?php echo get_site_url(); ?>/wp-content/uploads/2021/10/earth.png").addClass("custom-globe");
		});

		jQuery("#service-row .s-column").hover(
			function () {
				jQuery("#service-row .s-column").removeClass("active");
				jQuery(this).addClass('active');
			}, 
			function () {
				jQuery(this).removeClass('active');
				jQuery('#service-row .always-active').addClass('active');
			}
			);

//  For Flexslider 

		jQuery(window).load(function() {
		  // The slider being synced must be initialized first
		  jQuery('#carousel').flexslider({
		  	animation: "slide",
		  	controlNav: false,
		  	animationLoop: false,
		  	slideshow: false,
		  	itemWidth: 140,
		  	itemMargin: 20,
		  	asNavFor: '#slider'
		  });

		  jQuery('#slider').flexslider({
		  	animation: "slide",
		  	controlNav: false,
		  	animationLoop: false,
		  	slideshow: false,
		  	sync: "#carousel"
		  });
		});

		//product finder
		/*jQuery(document).find('input[name="rsubmit"]').on("click", function(){

		});*/

	});

</script>

<?php wp_footer(); ?>
</body>
</html>
