<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version 	3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product, $woocommerce_loop, $woodmart_loop;

$slider = false;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

if ( empty( $woocommerce_loop['quick_view_loop'] ) )
	$woocommerce_loop['quick_view_loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = ( woodmart_get_opt( 'per_row_columns_selector' ) ) ? apply_filters( 'loop_shop_columns', woodmart_get_products_columns_per_row() ) : woodmart_get_opt( 'products_columns' );

// if content in slider carousel
if ( ! empty( $woocommerce_loop['slider'] ) )
	$slider = true;

// Ensure visibility
if ( ! $product || ( ! $slider && ! $product->is_visible() ) )
	return;

// Increase loop count
//$woocommerce_loop['loop']++;
$woocommerce_loop['quick_view_loop']++;

// Extra post classes
$classes = array( 'product-grid-item' );

$hover = 1;

if( woodmart_get_opt( 'products_hover' ) != '' ) {
	$hover = woodmart_get_opt( 'products_hover' );
}

if( ! empty( $woocommerce_loop['product_hover'] ) ) {
	$hover = $woocommerce_loop['product_hover'];
}

$classes[] = 'product'; 
$classes[] = ( get_option('woocommerce_enable_review_rating') == 'yes' && $product->get_rating_count() > 0 ) ? 'has-stars' : 'without-stars'; 


//Grid or list style
$current_view = woodmart_get_shop_view();
$shop_view = woodmart_get_opt('shop_view');

if ( $shop_view == 'grid' || $shop_view == 'list' ) {
	$current_view = $shop_view;
}

if( ! empty( $woocommerce_loop['products_view'] ) ) {
	$current_view = $woocommerce_loop['products_view'];
}

if ( ! empty( $woocommerce_loop['slider'] ) ){
	$current_view = 'grid';
}

if( $current_view == 'list' ){
	$hover = 'list';
	$woocommerce_loop['columns'] = 1;
	$classes[] = 'product-list-item'; 
}else{
	$classes[] = 'woodmart-hover-base';
}


$quick_shop = woodmart_get_opt( 'quick_shop_variable' );
if( $quick_shop )
	$classes[] = 'quick-shop-on'; 

$quick_view = woodmart_get_opt( 'quick_view' );
if( $quick_view )
	$classes[] = 'quick-view-on'; 
else 
	$classes[] = 'quick-view-off'; 


$isotope =  woodmart_get_opt( 'products_masonry' );
$different_sizes = woodmart_get_opt( 'products_different_sizes');
if ( ! empty( $woocommerce_loop['different_sizes'] ) ) {
	$different_sizes = ( $woocommerce_loop['different_sizes']  == 'enable' ) ? true : false;
}
if ( ! empty( $woocommerce_loop['masonry'] ) ) {
	$isotope = ( $woocommerce_loop['masonry']  == 'enable' ) ? true : false;
}

$woocommerce_loop['swatches'] = woodmart_swatches_list();
$classes[] = ( ! $woocommerce_loop['swatches'] ) ? 'product-no-swatches' : 'product-with-swatches';

$xz_columns = (int) woodmart_get_opt( 'products_columns_mobile' );

$xz_size = 12 / $xz_columns;

$items_wide = woodmart_get_wide_items_array( $different_sizes );
if( $different_sizes && ( in_array( $woocommerce_loop['loop'] - 1, $items_wide ) ) ) { 
	$woodmart_loop['double_size'] = true;
}

if( ! $slider )
	$classes[] = woodmart_get_grid_el_class($woocommerce_loop['loop'] - 1, $woocommerce_loop['columns'], $different_sizes, $xz_size);
else 
	$classes[] = 'product-in-carousel';

?>
<div <?php post_class( $classes ); ?> data-loop="<?php echo esc_attr( $woocommerce_loop['loop'] ); ?>" data-id="<?php echo esc_attr( $product->get_id() ); ?>">

    <div class="bg-product-grid-item hidden-widget">
        <div class="content-product-imagin">


        </div>
        <div class="product-grid-item__title">
            <h3 class="product-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_field('short_title'); ?>
                    <?php the_field('model'); ?>
                </a>
            </h3>
        </div>

        <div class="product-element-top">
            <a href="<?php echo esc_url( get_permalink() ); ?>" class="product-image-link">
                <?php
                /**
                 * woocommerce_before_shop_loop_item_title hook
                 *
                 * @hooked woocommerce_show_product_loop_sale_flash - 10
                 * @hooked woodmart_template_loop_product_thumbnail - 10
                 */
                do_action( 'woocommerce_before_shop_loop_item_title' );
                ?>
            </a>
            <?php woodmart_hover_image(); ?>
            <div class="wrapp-swatches"></div>

            <?php woodmart_quick_shop_wrapper(); ?>


            <div class="widget-icon widget-icon-grid">
                <div class="widget__add-to-wishlist">
                    <?php echo do_shortcode("[yith_wcwl_add_to_wishlist]"); ?>
                </div>

                <div class="widget__compare">
                    <?php woodmart_compare_btn(); ?>
                </div>

                <div class="widget__quick-view">
                    <?php woodmart_quick_view_btn( get_the_ID() ); ?>
                </div>

                <div class="widget__oneclick">
                    <?php echo do_shortcode("[viewBuyButton]"); ?>
                </div>
            </div>

        </div>

        <div class="product-information">
            <?php
            woodmart_product_categories();
            woodmart_product_brands_links();
            ?>
            <div class="product-price-rating">
                <?php
                /**
                 * woocommerce_after_shop_loop_item_title hook
                 *
                 * @hooked woocommerce_template_loop_rating - 5
                 * @hooked woocommerce_template_loop_price - 10
                 */
                do_action( 'woocommerce_after_shop_loop_item_title');
                ?>
            </div>

            <div class="fade-in-block">

                <div class="woodmart-buttons">

                    <div class="woodmart-add-btn"><?php do_action( 'woocommerce_after_shop_loop_item' ); ?></div>


                </div>
                <?php if ( $timer ): ?>
                    <?php woodmart_product_sale_countdown(); ?>
                <?php endif ?>
            </div>
        </div>
    </div>

</div>
<?php $woodmart_loop['double_size'] = false; ?>
<?php if( ! $slider && ! $isotope && $current_view != 'list' ) echo woodmart_get_grid_clear($woocommerce_loop['loop'], $woocommerce_loop['columns'], $xz_columns); ?>