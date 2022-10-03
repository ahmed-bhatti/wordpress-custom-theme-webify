<?php

    $id = 'hero-section-' . $block['id'];
    $classes = $block['className'];
    $classes .= 'hero-sec';

?>

<section id="<?php echo esc_attr( $id ); ?>"  class="hero-sec -mt-105px px-15px lg:px-0 pt-226px pb-165px bg-cover" style="background-image:url('<?php the_field( 'hero_background' ); ?>');">
    <div class="max-w-1140px mx-auto">
        <div class="font-poppins text-center lg:text-left">
            <h1 class="text-white text-32px leading-45px lg:text-58px lg:leading-66px font-semibold font-poppins md:max-w-760px md:mx-auto lg:mx-0"><?php the_field( 'hero_title' ); ?>   </span></h1>
            <p class="text-base md:font-medium md:text-19px md:leading-30px text-white mt-21px mb-59px lg:max-w-620px"><?php the_field( 'hero_description' ); ?>  </p>

            <?php $hero_button = get_field( 'hero_button' ); ?>
	        <?php if ( $hero_button ) : ?>  
                <a href="<?php echo esc_url( $hero_button['url'] ); ?>"  target="<?php echo esc_attr( $hero_button['target'] ); ?>" class="hero-btn flex items-center justify-between mx-auto lg:mx-0 max-w-264px border-white border rounded-full uppercase pl-8 pr-9 py-21px" onclick="toggleModal('modal-id')">
                    <span class="text-sm text-white font-poppins font-medium tracking-widest"><?php echo esc_html( $hero_button['title'] ); ?></span>
                    <span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
                </a>
            <?php endif; ?>

        </div>
    </div>
</section