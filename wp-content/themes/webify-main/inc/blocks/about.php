<?php

    $id = 'about-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>

<section id="<?php echo esc_attr( $id ); ?>" class="about-sec bg-darkBlue relative px-15px lg:px-0 pt-114px pb-120px">

    <div class="max-w-1140px mx-auto">

    <div class="lg:flex items-center">
        <div class="about-img">
            <?php $about_image = get_field( 'about_image' ); ?>
            <?php if ( $about_image ) : ?>
                <img class="rounded-3xl" src="<?php echo esc_url( $about_image['url'] ); ?>" alt="<?php echo esc_attr( $about_image['alt'] ); ?>" />
            <?php endif; ?>
        </div>

        <div class="text-white lg:max-w-585px lg:ml-86px">
            <h3 class="text-white text-32px leading-45px lg:text-42px mt-4 lg:mt-0 font-semibold lg:leading-50px font-poppins mb-30px"><?php the_field( 'about_title' ); ?></span></h3>
            <ul class="mb-14">
                <?php if ( have_rows( 'about_highlights' ) ) : ?>
                    <?php while ( have_rows( 'about_highlights' ) ) : the_row(); ?>
                        <li class="relative text-offWhite text-base md:text-lg font-normal md:leading-28px font-poppins pl-47px mb-23px"><?php the_sub_field( 'highlight_text' ); ?></li>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>

            <?php $about_button = get_field( 'about_button' ); ?>
	        <?php if ( $about_button ) : ?>
                <a href="<?php echo esc_url( $about_button['url'] ); ?>" target="<?php echo esc_attr( $about_button['target'] ); ?>" class="git-btn relative z-50 flex items-center max-w-515px justify-between bg-darkBlue border rounded-full uppercase border-orange px-34px py-19.5px">
                    <span class="text-sm text-white font-poppins font-medium tracking-widest"><?php echo esc_html( $about_button['title'] ); ?></span>
                    <span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
                </a>
            <?php endif; ?>
        </div>
    </div>

    </div>

</section>