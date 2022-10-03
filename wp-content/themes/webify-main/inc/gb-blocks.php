<?php





add_action('acf/init', 'webify_acf_block');

function webify_acf_block() {



    if( function_exists('webify_acf_block') ) {



		// Widgets



		acf_register_block_type(

			array(

				'name'              => __('Social icons'),

				'title'             => __('Social icons'),

				'description'       => __(''),

				'render_template'   => 'inc/widgets/social-icons.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','social-icons' ),

			)

		);

		// Widget End
		

        acf_register_block_type(

			array(

				'name'              => __('Hero section'),

				'title'             => __('Hero section'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/hero.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','hero' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('wmud'),

				'title'             => __('wmud'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/wmud.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','wmud' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('about'),

				'title'             => __('about'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/about.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','about' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('Testimonials'),

				'title'             => __('Testimonials'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/testimonials.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','testimonials' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('Specializations'),

				'title'             => __('Specializations'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/specializations.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','specializations' ),

			)

		);





		acf_register_block_type(

			array(

				'name'              => __('Customer Reviews'),

				'title'             => __('Customer Reviews'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/customer-reviews.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','customer-reviews' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('General Hero'),

				'title'             => __('General Hero'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/gen-hero.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','gen-hero' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('About webify'),

				'title'             => __('About webify'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/about-webify.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','about-webify' ),

			)

		);



		acf_register_block_type(

			array(

				'name'              => __('Co founders'),

				'title'             => __('Co founders'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/co-founders.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','co-founders' ),

			)

		);

		acf_register_block_type(

			array(

				'name'              => __('Workflow'),

				'title'             => __('Workflow'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/workflow.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','workflow' ),

			)

		);

		acf_register_block_type(

			array(

				'name'              => __('Case Studies'),

				'title'             => __('Case Studies'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/case-studies.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','case-studies' ),

			)

		);

		acf_register_block_type(

			array(

				'name'              => __('Services'),

				'title'             => __('Services'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/services.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','services' ),

			)

		);

		acf_register_block_type(

			array(

				'name'              => __('Popup'),

				'title'             => __('Popup'),

				'description'       => __(''),

				'render_template'   => 'inc/blocks/popup.php',

				'category'          => 'webify',

				'icon'				=> 'block-default',

				'keywords'			=> array( 'webify','popup' ),

			)

		);

    }



}