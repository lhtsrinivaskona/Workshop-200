<?php

$opt_name = 'whiteblogs_wtb_redux'; // Change this value to the option name, you can find this in functions.php e.g. $gp = get_option( 'option_name' );
$section = array(
    'title'  => 'General',
    'id'     => 'general',
    'desc'   => '',
    'icon'   => 'fa fa-home',
    'fields' => array(
        array(
            'id'       => 'primary',
            'type'     => 'color',
            'title'    => __('Primary Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #000000).', 'whiteblogs'),
            'default'  => '#000000',
            'validate' => 'color',
        ),
        array(
            'id'       => 'secondary',
            'type'     => 'color',
            'title'    => __('Secondary Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #FB397D).', 'whiteblogs'),
            'default'  => '#FB397D',
            'validate' => 'color',
        ),
        array(
	        'id'       => 'header-background',
	        'type'     => 'color',
	        'title'    => __('Header Background Color', 'whiteblogs'), 
	        'subtitle' => __('Pick a background color for the theme (default: #FFFFFF).', 'whiteblogs'),
	        'default'  => '#FFFFFF',
	        'validate' => 'color',
	    ),
	    array(
	        'id'       => 'footer-background',
	        'type'     => 'color',
	        'title'    => __('Footer Background Color', 'whiteblogs'), 
	        'subtitle' => __('Pick a background color for the theme (default: #FFFFFF).', 'whiteblogs'),
	        'default'  => '#FFFFFF',
	        'validate' => 'color',
	    ),
    ),
);
Redux::setSection( $opt_name, $section );
Redux::setSection( $opt_name, array(
        'title' => 'Menu',
        'id'    => 'menu',
        'icon'  => 'fa fa-bars'
    ) );
$sections = array(
    'title'  => 'Mobile Menu',
    'id'     => 'mobile-menu',
    'icon'  => 'fa fa-mobile',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'menu-button-color',
            'type'     => 'color',
            'title'    => __('Menu button Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #000000).', 'whiteblogs'),
            'default'  => '#000000',
            'validate' => 'color',
        ),
        array(
            'id'       => 'menu-background',
            'type'     => 'color',
            'title'    => __('Menu background Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #008EED).', 'whiteblogs'),
            'default'  => '#008EED',
            'validate' => 'color',
        ),
        array(
            'id'       => 'submenu-background',
            'type'     => 'color',
            'title'    => __('Submenu background Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #5EB4ED).', 'whiteblogs'),
            'default'  => '#5EB4ED',
            'validate' => 'color',
        ),
        array(
            'id'       => 'subsubmenu-background',
            'type'     => 'color',
            'title'    => __('Sub Submenu background Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #9ccbed).', 'whiteblogs'),
            'default'  => '#9ccbed',
            'validate' => 'color',
        ),
        array(
            'id'       => 'currentmenu-background',
            'type'     => 'color',
            'title'    => __('Current Menu background Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #277599).', 'whiteblogs'),
            'default'  => '#277599',
            'validate' => 'color',
        ),
    )
);
Redux::setSection( $opt_name, $sections );
$sections = array(
    'title'  => 'Desktop Menu',
    'id'     => 'desktop-menu',
    'icon'  => 'fa fa-desktop',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'menu-text-color',
            'type'     => 'color',
            'title'    => __('Menu Text Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #000000).', 'whiteblogs'),
            'default'  => '#000000',
            'validate' => 'color',
        ),
        array(
            'id'       => 'menu-hover-color',
            'type'     => 'color',
            'title'    => __('Menu Hover Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #fb397d).', 'whiteblogs'),
            'default'  => '#fb397d',
            'validate' => 'color',
        ),
        array(
            'id'       => 'submenu-background-color',
            'type'     => 'color',
            'title'    => __('Submenu Background Color', 'whiteblogs'), 
            'subtitle' => __('Pick a background color for the theme (default: #b5b3b4).', 'whiteblogs'),
            'default'  => '#b5b3b4',
            'validate' => 'color',
        ),
    )
);
Redux::setSection( $opt_name, $sections );
$sections = array(
    'title'  => 'Blog',
    'id'     => 'blog',
    'desc'   => '',
    'icon'   => 'fa fa-cog', 
    'fields' => array(
        array(
            'id'       => 'the-primary-width',
            'type'     => 'dimensions',
            'units'    => array('%', 'px'),
            'title'    => __('Primary width', 'whiteblogs'),
            'height'    => false,
            'subtitle' => __('pick a primary width for the blog (default: 70px).', 'whiteblogs'),
            'default'  => array(
                'Width'   => '70', 
                'units'  => '%'
            ),
        ),
        array(
            'id'       => 'the-secondary-width',
            'type'     => 'dimensions',
            'units'    => array('%', 'px'),
            'title'    => __('Secondary width', 'whiteblogs'),
            'height'    => false,
            'subtitle' => __('pick a secondary width for the blog (default: 30px).', 'whiteblogs'),
            'default'  => array(
                'Width'   => '30', 
                'units'  => '%'
            ),
        ),
        array(
            'id'              => 'opt-font-family',
            'type'            => 'typography', 
            'title'           => __('Font Family', 'whiteblogs'),
            'google'          => true, 
            'font-family'     => true,
            'font-backup'     => false,
            'font-size'       => false,
            'font-weight'     => false,
            'font-style'      => false,
            'subsets'         => false,
            'text-align'      => false,
            'text-transform'  => false,
            'font-variant'    => false,
            'text-decoration' => false,
            'color'           => false,
            'preview'         => false,
            'line-height'     => false,
            'output'      => array('h2.site-description'),
            'units'       =>'px',
            'subtitle'    => __('Font Family option with each property can be called individually.', 'whiteblogs'),
            'default'     => array( 
                'font-family' => 'Abel', 
                'google'      => true,
            ),
        ),
    )
);
Redux::setSection( $opt_name, $sections );


$args = array(
    'show_options_object' => false,
);
Redux::setArgs( $opt_name, $args );

?>