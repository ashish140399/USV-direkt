<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage ShoppingCart
 * @since ShoppingCart 1.0
 */

$shoppingcart_settings = shoppingcart_get_theme_options(); ?>
</div><!-- end #content -->
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer" role="contentinfo">
<?php

$footer_column = $shoppingcart_settings['shoppingcart_footer_column_section'];
	if( is_active_sidebar( 'shoppingcart_footer_1' ) || is_active_sidebar( 'shoppingcart_footer_2' ) || is_active_sidebar( 'shoppingcart_footer_3' ) || is_active_sidebar( 'shoppingcart_footer_4' )) { ?>
	<div class="widget-wrap" style="padding: 3% 5%">
		<div class="row">
			<div class="col-sm-5">
				<img src="http://localhost/direkt/wp-content/uploads/2019/09/USV-Direkt-Logo-Small.png" style="width:40%;padding: 5%">
			</div>
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-4">
						<div style="font-size: 19px">KUNDEN SERVICE</div>
						<div>
							Hilfe <br>
							Konaktiere uns <br>
							Garantie <br>
							Geschäftsbedingungen <br>
							AGB
						</div>
					</div>
					<div class="col-sm-4">
						<div style="margin-top: 20px">
							Datenschutz <br>
							FAQ <br>
							Impressum
						</div>
						
					</div>
					<div class="col-sm-4">
						<div style="font-size: 19px">ÜBER UNSERE</div>
						<div>
							Partner <br>
							Projkete <br>
							Dienste <br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end .widget-wrap -->
	<?php } ?>
	<div class="site-info">	
		<div class="wrap d-flex justify-content-between">
			<div>Copyright &copy; 2018 <span style="color:#15A4FA">Patrick Butke & USV-Direkt.</span>All Rights Reserved.</div>
			<div class="footer_social_icon">
				<img src="http://localhost/direkt/wp-content/uploads/2019/09/Facebook-B-copy.png">
				<img src="http://localhost/direkt/wp-content/uploads/2019/09/Twitter-B_w.png">
				<img src="http://localhost/direkt/wp-content/uploads/2019/09/Instagram_w.png">
				<img src="http://localhost/direkt/wp-content/uploads/2019/09/Linkedin-B_w.png">
				<img src="http://localhost/direkt/wp-content/uploads/2019/09/Behance_w.png">
			</div>
		</div> <!-- end .wrap -->
	</div> <!-- end .site-info -->
	<?php
		$disable_scroll = $shoppingcart_settings['shoppingcart_scroll'];
		if(1):?>
			<button type="button" class="go-to-top" type="button">
				<span class="screen-reader-text"><?php esc_html_e('Go to top','shoppingcart'); ?></span>
				<span class="icon-bg"></span>
				<span class="back-to-top-text"><i class="fa fa-angle-up"></i></span>
				<i class="fa fa-angle-double-up back-to-top-icon"></i>
			</button>
	<?php endif; ?>
	<div class="page-overlay"></div>
</footer> <!-- end #colophon -->
</div><!-- end .site-content-contain -->
</div><!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>