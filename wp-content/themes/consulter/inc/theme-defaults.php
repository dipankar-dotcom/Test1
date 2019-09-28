<?php
/**
||-> Defining Default datas
*/


function consulter_init_function( $key = null ){

    $primary_color = get_theme_mod( 'primary_color' );
    $primary_hover_color = get_theme_mod( 'primary_hover_color' );
    if(empty($primary_color)) {
        $primary_color = '#b2dd4c';
    }
    if(empty($primary_hover_color)) {
        $primary_hover_color = '#b2dd4c';
    }

    $consulter_init = array(
        /* Blog Variant
        Choose from: blogloop-v1, blogloop-v2, blogloop-v3, blogloop-v4, blogloop-v5 */
        'blog_variant' => 'blogloop-v3',
        /* Header Variant 
        Choose from: header1, header2, header3, header4, header5, header8, header9 */
        'header_variant' => 'header2',
        /* Footer Variant 
        Choose from: footer1, footer2 */
        'footer_variant' => 'footer2',
        /* Header Navigation Hover
        Choose from: navstyle-v1, navstyle-v2, navstyle-v3, navstyle-v4, navstyle-v5, navstyle-v6, navstyle-v7, navstyle-v8 */
        'header_nav_hover' => 'navstyle-v8',
        /* Header Navigation Submenus Variant
        Choose from: nav-submenu-style1, nav-submenu-style2 */
        'header_nav_submenu_variant' => 'nav-submenu-style1',
        /* Sidebar Widgets Defaults
        Choose from: widgets_v1, widgets_v2 */
        'sidebar_widgets_variant' => 'widgets_v1',
        /* 404 Template Variant
        Choose from: page_404_v1_center, page_404_v2_left */
        'page_404_template_variant' => 'page_404_v1_center',
        /* Default Styling
        Set a HEXA Color Code */
        'fallback_primary_color' => esc_attr($primary_color), // Primary Color
        'fallback_primary_color_hover' => esc_attr($primary_hover_color), // Primary Color - Hover
        'fallback_main_texts' => '#454646', // Main Texts Color
        'fallback_semitransparent_blocks' => 'rgba(155, 89, 182, 0.7)' // Semitransparent Blocks
    );
    // The Condition
    if ( is_null($key) ){
        return $consulter_init;
    } else if ( array_key_exists($key, $consulter_init) ) {
        return $consulter_init[$key];
    }
}
class Consulter_Init_Class{
    public function consulter_get_blog_variant(){
        return consulter_init_function('blog_variant');
    }
    public function consulter_get_header_variant(){
        return consulter_init_function('header_variant');
    }
    public function consulter_get_footer_variant(){
        return consulter_init_function('footer_variant');
    }
    public function consulter_get_header_nav_hover(){
        return consulter_init_function('header_nav_hover');
    }
    public function consulter_get_header_nav_submenu_variant(){
        return consulter_init_function('header_nav_submenu_variant');
    }
    public function consulter_get_sidebar_widgets_variant(){
        return consulter_init_function('sidebar_widgets_variant');
    }
    public function consulter_get_page_404_template_variant(){
        return consulter_init_function('page_404_template_variant');
    }
    public function consulter_get_fallback_primary_color(){
        return consulter_init_function('fallback_primary_color');
    }
    public function consulter_get_fallback_primary_color_hover(){
        return consulter_init_function('fallback_primary_color_hover');
    }
    public function consulter_get_fallback_main_texts(){
        return consulter_init_function('fallback_main_texts');
    }
    public function consulter_get_fallback_semitransparent_blocks(){
        return consulter_init_function('fallback_semitransparent_blocks');
    }
    // Blog Loop Variant
    public function consulter_blogloop_variant(){
        $theme_init = new Consulter_Init_Class;
        return $theme_init->consulter_get_blog_variant();
    }
    // Navstyle Variant
    public function consulter_navstyle_variant(){
		$theme_init = new Consulter_Init_Class;
		return $theme_init->consulter_get_header_nav_hover();
    }
}