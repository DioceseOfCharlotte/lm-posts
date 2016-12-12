<?php
/**
 * Post Types.
 *
 * @package  RCDOC
 */

add_action( 'init', 'lm_register_post_types' );

/**
 * Register post_types.
 *
 * @since  0.1.0
 * @access public
 */
function lm_register_post_types() {

	$supports = array(
		'title',
		'editor',
		'thumbnail',
		'arch-post',
		'excerpt',
		'post-formats',
		'page-attributes',
		'theme-layouts',
		'archive',
	);

	register_extended_post_type( 'lm-arden',
		array(
		'admin_cols' => array(
			'featured_image' => array(
				'title'          => 'Image',
				'featured_image' => 'abe-icon',
			),
		),
		'admin_filters' => array(
			'component' => array(
				'title'    => 'All block types',
				'meta_key' => 'arch_component',
			),
		),
		'menu_icon'           => 'dashicons-admin-users',
		'supports'            => $supports,
		'capability_type'     => 'lm-arden',
		'map_meta_cap'        => true,
		'capabilities'        => lm_posts_plugin()->lm_get_capabilities( 'lm-arden' ),
	),
		array(
	    'singular' => 'Arden Post',
	    'plural'   => 'Arden Posts',
		)
	);

	register_extended_taxonomy( 'arden_course', 'lm-arden' );

		register_extended_post_type( 'lm-charlotte',
			array(
			'admin_cols' => array(
				'featured_image' => array(
					'title'          => 'Image',
					'featured_image' => 'abe-icon',
				),
			),
			'admin_filters' => array(
		        'component' => array(
		            'title'    => 'All block types',
		            'meta_key' => 'arch_component',
		        ),
			),
			'menu_icon'           => 'dashicons-awards',
			'supports'            => $supports,
			'capability_type'     => 'lm-charlotte',
			'map_meta_cap'        => true,
			'capabilities'        => lm_posts_plugin()->lm_get_capabilities( 'lm-charlotte' ),
		),
			array(
		    'singular' => 'Charlotte Post',
		    'plural'   => 'Charlotte Posts',
			)
		);

		register_extended_taxonomy( 'charlotte_course', 'lm-charlotte' );

		register_extended_post_type( 'lm-greensboro',
			array(
			'admin_cols' => array(
				'featured_image' => array(
					'title'          => 'Image',
					'featured_image' => 'abe-icon',
				),
			),
			'admin_filters' => array(
		        'component' => array(
		            'title'    => 'All block types',
		            'meta_key' => 'arch_component',
		        ),
			),
			'menu_icon'           => 'dashicons-clipboard',
			'supports'            => $supports,
			'capability_type'     => 'lm-greensboro',
			'map_meta_cap'        => true,
			'capabilities'        => lm_posts_plugin()->lm_get_capabilities( 'lm-greensboro' ),
		),
		array(
	    'singular' => 'Greensboro Post',
	    'plural'   => 'Greensboro Posts',
		)
		);

		register_extended_taxonomy( 'greensboro_course', 'lm-greensboro' );

		register_extended_post_type( 'lm-lenoir',
			array(
			'admin_cols' => array(
				'featured_image' => array(
					'title'          => 'Image',
					'featured_image' => 'abe-icon',
				),
			),
			'admin_filters' => array(
		        'component' => array(
		            'title'    => 'All block types',
		            'meta_key' => 'arch_component',
		        ),
			),
			'menu_icon'           => 'dashicons-welcome-learn-more',
			'supports'            => $supports,
			'capability_type'     => 'lm-lenoir',
			'map_meta_cap'        => true,
			'capabilities'        => lm_posts_plugin()->lm_get_capabilities( 'lm-lenoir' ),
		),
		array(
	    'singular' => 'Lenoir Post',
	    'plural'   => 'Lenoir Posts',
		)
		);

		register_extended_taxonomy( 'lenoir_course', 'lm-lenoir' );

		register_extended_post_type( 'lm-espanol',
			array(
			'admin_cols' => array(
				'featured_image' => array(
					'title'          => 'Image',
					'featured_image' => 'abe-icon',
				),
			),
			'admin_filters' => array(
		        'component' => array(
		            'title'    => 'All block types',
		            'meta_key' => 'arch_component',
		        ),
			),
			'menu_icon'           => 'dashicons-admin-customizer',
			'supports'            => $supports,
			'capability_type'     => 'lm-espanol',
			'map_meta_cap'        => true,
			'capabilities'        => lm_posts_plugin()->lm_get_capabilities( 'lm-espanol' ),
		),
		array(
	    'singular' => 'Espanol Post',
	    'plural'   => 'Espanol Posts',
		)
		);

		register_extended_taxonomy( 'espanol_course', 'lm-espanol' );

		// register_extended_post_type( 'classroom',
		// 	array(
		// 	'admin_cols' => array(
		// 		'grade' => array(
		// 			'taxonomy' => 'classroom_grade',
		// 		),
		// 		'featured_image' => array(
		// 			'title'          => 'Image',
		// 			'featured_image' => 'abe-icon',
		// 		)
		// 	),
		// 	'admin_filters' => array(
		//         'component' => array(
		//             'title'    => 'All block types',
		//             'meta_key' => 'arch_component',
		//         ),
		// 	),
		// 	'menu_icon'           => 'dashicons-editor-spellcheck',
		// 	'supports'            => $supports,
		// 	'capability_type'     => 'classroom',
		// 	'map_meta_cap'        => true,
		// 	'capabilities'        => lm_posts_plugin()->lm_get_capabilities( 'classroom' ),
		// 	)
		// );

}
