<?php
/**
 * ------------------------------------------------------------------------------------------------
 *  List element map
 * ------------------------------------------------------------------------------------------------
 */

if( ! function_exists( 'woodmart_vc_map_list' ) ) {
	function woodmart_vc_map_list() {
		vc_map( array(
			'name' => esc_html__( 'List', 'woodmart' ),
			'base' => 'woodmart_list',
			'category' => esc_html__( 'Theme elements', 'woodmart' ),
			'description' => esc_html__( 'Display a list with icon', 'woodmart' ),
			'icon' => WOODMART_ASSETS . '/images/vc-icon/list.svg',
			'params' => array(
				//General
				array(
					'type' => 'dropdown',
					'heading' => esc_html__( 'List size', 'woodmart' ),
					'param_name' => 'size',
					'value' => array(
						esc_html__( 'Default', 'woodmart' ) => 'default',
						esc_html__( 'Small', 'woodmart' ) => 'small',
						esc_html__( 'Medium', 'woodmart' ) => 'medium',
						esc_html__( 'Large', 'woodmart' ) => 'large',
						esc_html__( 'Extra Large', 'woodmart' ) => 'extra-large',
					)
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__( 'Color scheme', 'woodmart' ),
					'param_name' => 'color_scheme',
					'value' => array(
						'' => '',
						esc_html__( 'Light', 'woodmart' ) => 'light',
						esc_html__( 'Dark', 'woodmart' ) => 'dark',
					)
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Extra class name', 'woodmart' ),
					'param_name' => 'el_class',
					'description' => esc_html__( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'woodmart' )
				),
				//List
				array(
					'type'       => 'param_group',
					'param_name' => 'list',
					'group'      => esc_html__( 'List', 'woodmart' ),
					'params'     => array(
						array(
							'type'             => 'textarea',
							'heading'          => esc_html__( 'Content', 'woodmart' ),
							'param_name'       => 'list-content'
						)
					)
				),
				//Icon
				array(
					'type' => 'dropdown',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'List type', 'woodmart' ),
					'value' => array(
						esc_html__( 'With icon', 'woodmart' ) => 'icon',
						esc_html__( 'With image', 'woodmart' ) => 'image',
						esc_html__( 'Ordered', 'woodmart' ) => 'ordered',
						esc_html__( 'Unordered', 'woodmart' ) => 'unordered',
						esc_html__( 'Without icon', 'woodmart' ) => 'without'
					),
					'param_name' => 'list_type'
				),
				array(
					'type' => 'dropdown',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'List style', 'woodmart' ),
					'value' => array(
						esc_html__( 'Default', 'woodmart' ) => 'default',
						esc_html__( 'Rounded', 'woodmart' ) => 'rounded',
						esc_html__( 'Square', 'woodmart' ) => 'square',
					),
					'param_name' => 'list_style',
					'dependency' => array(
						'element' => 'list_type',
						'value' => array( 'icon', 'ordered', 'unordered' )
					)
				),
				array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Image', 'woodmart' ),
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'image',
					'value' => '',
					'description' => esc_html__( 'Select image from media library.', 'woodmart' ),
					'dependency' => array(
						'element' => 'list_type',
						'value' => array( 'image' ),
					),
				),
				array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Image size', 'woodmart' ),
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'img_size',
					'description' => esc_html__( 'Enter image size. Example: "thumbnail", "medium", "large", "full" or other sizes defined by current theme. Alternatively enter image size in pixels: 200x100 (Width x Height). Leave empty to use "thumbnail" size.', 'woodmart' ),
					'dependency' => array(
						'element' => 'list_type',
						'value' => array( 'image' ),
					),
				),
				array(
					'type' => 'dropdown',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon library', 'woodmart' ),
					'value' => array(
						esc_html__( 'Font Awesome', 'woodmart' ) => 'fontawesome',
						esc_html__( 'Open Iconic', 'woodmart' ) => 'openiconic',
						esc_html__( 'Typicons', 'woodmart' ) => 'typicons',
						esc_html__( 'Entypo', 'woodmart' ) => 'entypo',
						esc_html__( 'Linecons', 'woodmart' ) => 'linecons',
						esc_html__( 'Mono Social', 'woodmart' ) => 'monosocial',
						esc_html__( 'Material', 'woodmart' ) => 'material'
					),
					'param_name' => 'icon_library',
					'description' => esc_html__( 'Select icon library.', 'woodmart' ),
					'dependency' => array(
						'element' => 'list_type',
						'value' => 'icon'
					)
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_fontawesome',
					'value' => 'fa fa-adjust',
					'settings' => array(
						'emptyIcon' => false,
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'fontawesome'
					),
					'description' => esc_html__( 'Select icon from library.', 'woodmart' ),
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_openiconic',
					'settings' => array(
						'emptyIcon' => false,
						'type' => 'openiconic',
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'openiconic'
					),
					'description' => esc_html__( 'Select icon from library.', 'woodmart' ),
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_typicons',
					'settings' => array(
						'emptyIcon' => false,
						'type' => 'typicons',
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'typicons'
					),
					'description' => esc_html__( 'Select icon from library.', 'woodmart' )
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_entypo',
					'settings' => array(
						'emptyIcon' => false,
						'type' => 'entypo',
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'entypo'
					)
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_linecons',
					'settings' => array(
						'emptyIcon' => false,
						'type' => 'linecons',
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'linecons'
					),
					'description' => esc_html__( 'Select icon from library.', 'woodmart' )
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_monosocial',
					'settings' => array(
						'emptyIcon' => false,
						'type' => 'monosocial',
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'monosocial'
					),
					'description' => esc_html__( 'Select icon from library.', 'woodmart' )
				),
				array(
					'type' => 'iconpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icon', 'woodmart' ),
					'param_name' => 'icon_material',
					'settings' => array(
						'emptyIcon' => false,
						'type' => 'material',
						'iconsPerPage' => 4000
					),
					'dependency' => array(
						'element' => 'icon_library',
						'value' => 'material'
					),
					'description' => esc_html__( 'Select icon from library.', 'woodmart' )
				),
				array(
					'type' => 'colorpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icons color', 'woodmart' ),
					'param_name' => 'icons_color',
					'dependency' => array(
						'element' => 'list_type',
						'value' => array( 'icon', 'ordered', 'unordered' )
					)
				),
				array(
					'type' => 'colorpicker',
					'group' => esc_html__( 'Icon', 'woodmart' ),
					'heading' => esc_html__( 'Icons background color', 'woodmart' ),
					'param_name' => 'icons_bg_color',
					'dependency' => array(
						'element' => 'list_style',
						'value' => array( 'rounded', 'square' )
					)
				),
				//Style
				array(
					'type' => 'css_editor',
					'heading' => esc_html__( 'CSS box', 'woodmart' ),
					'param_name' => 'css',
					'group' => esc_html__( 'Design Options', 'woodmart' )
				)
			)
		) );
	}
	add_action( 'vc_before_init', 'woodmart_vc_map_list' );
}