<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="relative z-20 pt-15px px-15px xl:px-0">

		<div class="mx-auto max-w-1140px">

			<div class="lg:flex lg:justify-between lg:items-center">
				
				<div class="flex justify-between items-center">
					<div>
						<?php if ( has_custom_logo() ) { ?>
                            <?php the_custom_logo(); ?>
						<?php } else { ?>
							<div class="text-lg uppercase">
								<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo( 'name' ); ?>
								</a>
							</div>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo( 'description' ); ?>
							</p>

						<?php } ?>
					</div>

					<div class="toggle lg:hidden">
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>

				</div>

				<div class="flex items-center">
					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'site-menu bg-darkBlue w-full mt-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'text-white hover:text-orange font-poppins text-17px font-medium leading-16px mb-6 lg:mb-0 lg:mx-3 xl:mx-5',
							'fallback_cb'     => false,
						)
					);
					?>
<!-- 					<a href="#" class="nav-btn hidden lg:flex items-center justify-between border-orange border rounded-full px-6 py-3 lg:ml-7" onclick="toggleModal('modal-id')">
 -->

					<a href="#" class="nav-btn hidden lg:flex items-center justify-between border-orange border rounded-full px-6 py-3 lg:ml-7" id="model_pop">
						<span class="text-17px text-white font-poppins font-medium tracking-wider">Request proposal</span>
						<span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
					</a>

				</div>

			</div>
		</div>
	</header>
