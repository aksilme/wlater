<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package electro
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<!--barre superieur-->	
<body <?php body_class(); ?>>
<div class="row" style="background-color: #333D49;height: 30px;">
	<div class="container">
		<div class="col-md-2 col-md-offset-11 col-sm-4">
			<a href="http://instagram.com"><i class="fa fa-instagram" aria-hidden="true" style="color:white;"></i></a>
			&nbsp;&nbsp;
			<a href="http://facebook.com"><i class="fa fa-facebook" aria-hidden="true" style="color:white;"></i></a>
			
		</div>
	</div>
</div>
<!--fin de barre superieur-->	
<!-- de barre logo menu-->	
<div class="row menu-logo-costum">
	<div class="container">
		<div class="col-md-7 col-md-offset-5 col-sm-12">
			<div class="col-md-6 col-sm-12 col-xs-12 ">
				<div class="williamlogo">
					<a href="<?php echo esc_url(bloginfo('url')) ;?>">
						<img class="img-logo" src="https://www.kralskazakuska.com/wp-content/uploads/2016/12/pepsi.jpg" alt="">	
					</a>				
				</div>
			</div>
			<div class="col-md-6 col-sm-12 col-xs-12">    
				<div class="col-md-6 col-sm-6 hidden-xs"><a href="<?php echo bloginfo('url') . '/mon-compte'; ?>" class="account-link">MON COMPTE</a></div>
				<div class="col-md-6 col-panier col-sm-6">
					<ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
				<li class="nav-item dropdown">
					<a href="http://localhost:8080/walter/panier/" class="nav-link" data-toggle="dropdown" aria-expanded="false">
						<i class="ec ec-shopping-bag"></i>
						<span class="cart-items-count count">0</span>
						<span class="cart-items-total-price total-price"><span class="woocommerce-Price-amount amount">0,00<span class="woocommerce-Price-currencySymbol">€</span></span></span>
					</a>
					<ul class="dropdown-menu dropdown-menu-mini-cart">
						<li>
							<div class="widget_shopping_cart_content">

						<p class="woocommerce-mini-cart__empty-message">Votre panier est vide.</p>


					</div>
						</li>
					</ul>
				</li>
				</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- de barre logo menu-->	

<div id="page" class="hfeed site">

	

	<header id="masthead" class="site-header<?php if ( ! apply_filters( 'electro_show_header_support_info', true ) ) { echo esc_attr( ' no-header-support-info' ); } ?><?php if ( apply_filters( 'electro_enable_flex_header', false ) ) { echo esc_attr( ' flex-header' ); } ?>">
		<div class="container <?php echo has_electro_mobile_header() ? 'hidden-md-down' : ''; ?>">
			<?php
			/**
			 * @hooked electro_row_wrap_start - 0
			 * @hooked electro_header_logo - 10
			 * @hooked electro_primary_menu - 20
			 * @hooked electro_header_support_info - 30
			 * @hooked electro_row_wrap_end - 40
			 */
			do_action( 'electro_header' ); ?>

		</div>
		
		<?php
		/**
		 * @hooked electro_handheld_header - 10
		 */
		do_action( 'electro_after_header' ); ?>
		
	</header><!-- #masthead -->

	

	<div id="content" class="site-content" tabindex="-1">
		<div class="container">

		<?php
		/**
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action( 'electro_content_top' ); ?>