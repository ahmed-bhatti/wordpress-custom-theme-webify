<?php

    $id = 'about-webify-' . $block['id'];
    $classes = $block['className'];
    $classes .= 'about';

?>

<section id="<?php echo esc_attr( $id ); ?>" style="background-color: <?php the_field( 'background_color' ); ?>;" class="about relative bg-darkBlue px-15px lg:px-0 pt-120px pb-100px -mt-35px">

    <div class="max-w-1140px mx-auto">

        <div class="content-wrap max-w-1000px mx-auto text-center">

            <h2 class="text-white text-32px leading-45px lg:text-42px font-semibold lg:leading-66px font-poppins mb-53px"><?php the_field( 'about_webify_title' ); ?></h2>

            <p class="text-offWhite text-lg leading-28px font-normal font-poppins mt-21px mb-52px"><?php the_field( 'about_webify_description' ); ?></p>
            <?php $about_webify_button = get_field( 'about_webify_button' ); ?>
            <?php if ( $about_webify_button ) : ?>
                <a href="<?php echo esc_url( $about_webify_button['url'] ); ?>" target="<?php echo esc_attr( $about_webify_button['target'] ); ?>" class="hero-btn flex items-center justify-between mx-auto max-w-264px border-white border rounded-full uppercase pl-8 pr-9 py-21px" onclick="toggleModal('modal-id')">
                    <span class="text-sm text-white font-poppins font-medium tracking-widest"><?php echo esc_html( $about_webify_button['title'] ); ?></span>
                    <span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
                </a>
            <?php endif; ?>
        </div>

    </div>

</section>