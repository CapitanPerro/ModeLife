<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */

?>
<?php
$metaGeneratorContent = 'TDiZkyt 1.4, diegoportovillanueva.com';
$meta_generator = '';
if ($metaGeneratorContent) {
    remove_action('wp_head', 'wp_generator');
    $meta_generator = '<meta name="generator" content="' . $metaGeneratorContent . '" />' . "\n";
    $GLOBALS['meta_generator'] = true;
}
$hideHeader = false; // default header is visible
global $hideFooter;
$hideFooter = false; // default footer is visible
$pageBlog = is_home();
$pagePost = is_single();
$pageProducts = theme_woocommerce_enabled() ? is_shop() || is_product_category() : false;
$pageProduct = theme_woocommerce_enabled() ? is_product() : false;
$pageCart = theme_woocommerce_enabled() ? is_cart() : false;
$defaultPath = $pageProducts || $pageProduct || $pageCart ? '/woocommerce' : '';
if ($pageBlog) {
    $template = 'blog';
}
if ($pagePost) {
    $template = 'post';
}
if ($pageProducts) {
    $template = 'products';
}
if ($pageProduct) {
    $template = 'product';
}
if ($pageCart) {
    $template = 'cart';
}
$wpCustomTemplate = false;
global $isWpCustomTemplate, $blog_custom_template, $post_custom_template;
if ($isWpCustomTemplate) {
    $template = $blog_custom_template ? $blog_custom_template : $post_custom_template;
    if ($template) {
        $wpCustomTemplate = true;
    }
}
if ($pageBlog || $pagePost || $pageProducts || $pageProduct || $pageCart || $wpCustomTemplate) {
    $defaultName = $pageCart ? '‌shoppingCart' : $template;
    global ${$template . "_custom_template"};
    ${$template . "_custom_template"} = ${$template . "_custom_template"} ? ${$template . "_custom_template"} : $defaultName . 'Template';
    $customPath = $wpCustomTemplate ? $template : ${$template . "_custom_template"};
    $fileWithOptions = get_template_directory() . $defaultPath . '/template-parts/' . $customPath . '/custom-template-options.php';
    if ( file_exists( $fileWithOptions ) ) {
        include_once $fileWithOptions;
    }
} ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" style="font-size:<?php echo apply_filters('theme_base_font_size', '16'); ?>px">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php echo $meta_generator; ?>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
    
    
    
</head>

<body <?php body_class(); ?><?php body_style_attribute(); ?> <?php body_data_attributes(); ?>>
<?php if (version_compare( $wp_version, '5.2', '>=' )) { wp_body_open(); } ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'modelife' ); ?></a>
    <?php if (!$hideHeader) { ?>
    <header class="u-align-center-xs u-border-1 u-border-grey-25 u-clearfix u-grey-25 u-header u-header" id="sec-61a4">
  <div class="u-clearfix u-sheet u-sheet-1">
    <?php $logo = theme_get_logo(array(
            'default_src' => "/images/7f83d16629da851aff1c616149f6d0f601439c2b16bf553121a2f62d800b25af3b38b1f8095bea7db5512b1475739eb520ad85384bc56dbf401c90_1280.png",
            'default_url' => home_url('/')
        )); ?><a <?php if (is_customize_preview()) echo 'data-default-src="' . esc_url($logo['default_src']) . '" '; ?>href="<?php echo esc_url($logo['url']); ?>" class="u-image u-logo u-image-1 custom-logo-link" data-image-width="1280" data-image-height="960">
      <img <?php if ($logo['svg']) {echo 'style="width:'.$logo['width'].'px"';} else {echo 'style="width:auto"';}?>src="<?php echo esc_url($logo['src']); ?>" class="u-logo-image u-logo-image-1" data-image-width="131.1428">
    </a>
    <?php
            ob_start();
            ?><nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1">
      <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
        <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 3px 0px; font-size: calc(1em + 6px);">
          <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
        </a>
      </div>
      <div class="u-custom-menu u-nav-container">
        {menu}
      </div>
      <div class="u-custom-menu u-nav-container-collapse">
        <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
          <div class="u-sidenav-overflow">
            <div class="u-menu-close"></div>
            {responsive_menu}
          </div>
        </div>
        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
      </div>
    </nav><?php
            $menu_template = ob_get_clean();
            echo Theme_NavMenu::getMenuHtml(array(
                'container_class' => 'u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1',
                'menu' => array(
                    'menu_class' => 'u-nav u-spacing-30 u-unstyled u-nav-1',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90',
                    'link_style' => 'padding: 10px 0px;',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-924a-19',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link u-white',
                    'submenu_link_style' => '',
                ),
                'responsive_menu' => array(
                    'menu_class' => 'u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2',
                    'item_class' => 'u-nav-item',
                    'link_class' => 'u-button-style u-nav-link',
                    'link_style' => '',
                    'submenu_class' => 'u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-block-924a-20',
                    'submenu_item_class' => 'u-nav-item',
                    'submenu_link_class' => 'u-button-style u-nav-link',
                    'submenu_link_style' => '',
                ),
                'theme_location' => 'primary-navigation-1',
                'template' => $menu_template,
            )); ?>
  </div>
</header>
    
    <?php } ?>
    <div id="content">
