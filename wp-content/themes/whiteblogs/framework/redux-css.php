<?php

function get_redux_field_values() {

	$redux = get_option('redux');

	?>
	<style type="text/css">
		.site-header {
			background-color: <?php echo $redux['header-background'];?>;
		}
		.site-footer {
			background-color: <?php echo $redux['footer-background'];?>;
		}
		main.article_categories, 
		main.site-main {
			width: <?php echo $redux['the-primary-width']['width'];?>;
		}
		.site aside.widget-area {
			width: <?php echo $redux['the-secondary-width']['width'];?>;
		}
		a, .cat-links a, 
		.site a, 
		.main-navigation li.current-menu-item li a, 
		.nav-previous a {
			color: <?php echo $redux['primary'];?>;
		}
		.cat-links a, 
		.nav-previous, 
		.nav-next, 
		button, 
		input[type="button"], 
		input[type="reset"], 
		input[type="submit"] {
			background-color: <?php echo $redux['secondary'];?>;
		}
		a:hover, .cat-links a:hover, 
		.site a:hover, 
		.nav-previous a:hover, 
		.widget-area h2, 
		header.page-header, 
		.main-navigation li.current-menu-item a, .main-navigation li.current_page_item a, .main-navigation li.current-menu-item a:hover, .main-navigation li.current_page_item a:hover {
			color: <?php echo $redux['secondary'];?>;
		}
		.cat-links a:hover, 
		.nav-previous:hover, 
		.nav-next:hover, 
		button:hover, 
		input[type="button"]:hover, 
		input[type="reset"]:hover, 
		input[type="submit"]:hover {
			background-color: <?php echo $redux['primary'];?>;
		}
		#secondary .widget-title:after {
		    background-color: <?php echo $redux['secondary'];?>;
		}
		.site {
			font-family: <?php echo $redux['opt-font-family']['font-family'];?>;
		}
		.main-navigation button.menu-toggle, 
		.main-navigation button.dropdown-toggle {
		    background: none !important;
		}
		.main-navigation a, 
		.nav-menu ul.sub-menu a {
			color: <?php echo $redux['menu-text-color'];?>;
		}
		.main-navigation li.current-menu-item a, 
		.main-navigation a:hover, 
		.nav-menu ul.sub-menu a:hover  {
			color: <?php echo $redux['menu-hover-color'];?>;
		}
		.nav-menu ul.sub-menu {
			background-color: <?php echo $redux['submenu-background-color'];?>;
		}


		@media screen and (max-width: 767px){
			main.article_categories, main.site-main {
				width: auto !important;
			}
			.site aside.widget-area {
				width: 100%;
			}
			nav.toggled > div {
				background-color: <?php echo $redux['menu-background'];?>;
			}
			.main-navigation li.current-menu-item {
				background-color: <?php echo $redux['currentmenu-background'];?>;
			}
			.main-navigation .sub-menu li {
				background-color: <?php echo $redux['submenu-background'];?>;
			}
			.main-navigation ul ul ul.toggled-on li{
				background-color: <?php echo $redux['subsubmenu-background'];?>;
			}	
			svg.svg-icon.open_menu_svg {
			    color: <?php echo $redux['menu-button-color'];?>;
			}
			svg.svg-icon.close_menu_svg {
				color: <?php echo $redux['menu-button-color'];?>;
			}
		}
	</style>
	<?php
}
add_action( 'wp_head', 'get_redux_field_values' );

?>