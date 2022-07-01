<?php

function whiteblogs_wtb_get_redux_field_values() {

	$whiteblogs_wtb_redux = get_option('whiteblogs_wtb_redux');

	?>
	<style type="text/css">
		.site-header {
			background-color: <?php echo $whiteblogs_wtb_redux['header-background'];?>;
		}
		.site-footer {
			background-color: <?php echo $whiteblogs_wtb_redux['footer-background'];?>;
		}
		main.article_categories, 
		main.site-main {
			<?php if (!empty($whiteblogs_wtb_redux['the-primary-width']['width'])){ ?>
				
			width: <?php echo $whiteblogs_wtb_redux['the-primary-width']['width'];?>;
			<?php } ?>
		}
		.site aside.widget-area {
			<?php if (!empty($whiteblogs_wtb_redux['the-secondary-width']['width'])){ ?>
				
			width: <?php echo $whiteblogs_wtb_redux['the-secondary-width']['width'];?>;
			<?php } ?>
		}
		a, .cat-links a, 
		.site a, 
		.main-navigation li.current-menu-item li a, 
		.nav-previous a {
			color: <?php echo $whiteblogs_wtb_redux['primary'];?>;
		}
		.cat-links a, 
		.nav-previous, 
		.nav-next, 
		button, 
		input[type="button"], 
		input[type="reset"], 
		input[type="submit"] {
			background-color: <?php echo $whiteblogs_wtb_redux['secondary'];?>;
		}
		a:hover, .cat-links a:hover, 
		.site a:hover, 
		.nav-previous a:hover, 
		.widget-area h2, 
		header.page-header, 
		.main-navigation li.current-menu-item a, .main-navigation li.current_page_item a, .main-navigation li.current-menu-item a:hover, .main-navigation li.current_page_item a:hover {
			color: <?php echo $whiteblogs_wtb_redux['secondary'];?>;
		}
		.cat-links a:hover, 
		.nav-previous:hover, 
		.nav-next:hover, 
		button:hover, 
		input[type="button"]:hover, 
		input[type="reset"]:hover, 
		input[type="submit"]:hover {
			background-color: <?php echo $whiteblogs_wtb_redux['primary'];?>;
		}
		#secondary .widget-title:after {
		    background-color: <?php echo $whiteblogs_wtb_redux['secondary'];?>;
		}
		.site {
			font-family: <?php echo $whiteblogs_wtb_redux['opt-font-family']['font-family'];?>;
		}
		.main-navigation button.menu-toggle, 
		.main-navigation button.dropdown-toggle {
		    background: none !important;
		}
		.main-navigation a, 
		.nav-menu ul.sub-menu a {
			color: <?php echo $whiteblogs_wtb_redux['menu-text-color'];?>;
		}
		.main-navigation li.current-menu-item a, 
		.main-navigation a:hover, 
		.nav-menu ul.sub-menu a:hover  {
			color: <?php echo $whiteblogs_wtb_redux['menu-hover-color'];?>;
		}
		.nav-menu ul.sub-menu {
			background-color: <?php echo $whiteblogs_wtb_redux['submenu-background-color'];?>;
		}


		@media screen and (max-width: 767px){
			main.article_categories, main.site-main {
				width: auto !important;
			}
			.site aside.widget-area {
				width: 100%;
			}
			nav.toggled > div {
				background-color: <?php echo $whiteblogs_wtb_redux['menu-background'];?>;
			}
			.main-navigation li.current-menu-item {
				background-color: <?php echo $whiteblogs_wtb_redux['currentmenu-background'];?>;
			}
			.main-navigation .sub-menu li {
				background-color: <?php echo $whiteblogs_wtb_redux['submenu-background'];?>;
			}
			.main-navigation ul ul ul.toggled-on li{
				background-color: <?php echo $whiteblogs_wtb_redux['subsubmenu-background'];?>;
			}	
			svg.svg-icon.open_menu_svg {
			    color: <?php echo $whiteblogs_wtb_redux['menu-button-color'];?>;
			}
			svg.svg-icon.close_menu_svg {
				color: <?php echo $whiteblogs_wtb_redux['menu-button-color'];?>;
			}
		}
	</style>
	<?php
}
add_action( 'wp_head', 'whiteblogs_wtb_get_redux_field_values' );

?>