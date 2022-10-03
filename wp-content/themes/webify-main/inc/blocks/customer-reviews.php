<?php

    $id = 'customer-reviews-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>


<section id="<?php echo esc_attr( $id ); ?>" class="int-clients bg-cynaBlue px-15px pt-100px pb-180px lg:px-0 md:pt-106px md:pb-155px">

    <div class="max-w-1140px mx-auto">
q
        <h2 class="text-white text-32px leading-45px lg:text-42px font-semibold font-poppins lg:leading-50px text-center mb-90px"><?php the_field( 'internation_title' ); ?></h2>

        <div class="md:flex gap-x-8">

            <?php if ( have_rows( 'testimonials_text_box' ) ) : ?>
                <?php while ( have_rows( 'testimonials_text_box' ) ) : the_row(); ?>

                    <div class="testimonials-box md:w-3/6 relative text-center border border-d-blue rounded-3xl mb-80px md:mb-0 pt-20 px-20px pb-22px">
                        <div class="testimonial-img">

                            <?php $clients_image = get_sub_field( 'clients_image' ); ?>
                            <?php if ( $clients_image ) : ?>
                                <img class="rounded-full" src="<?php echo esc_url( $clients_image['url'] ); ?>" alt="<?php echo esc_attr( $clients_image['alt'] ); ?>" />
                            <?php endif; ?>

                            <span class="quotes-icon bg-white border border-d-blue rounded-full">
                                <img src="/wp-content/uploads/2022/07/quotes-icon.png" alt="">
                            </span>

                        </div>
                        <p class="text-white text-lg font-medium leading-28px font-poppins mb-34px"><?php the_sub_field( 'testimonial_text' ); ?></p>
                        <div class="client-bio max-w-xs mx-auto">
                            <p class="text-offWhite leading-22px text-sm font-normal font-poppins mb-33px"><?php the_sub_field( 'namedesignation' ); ?></p>
                        </div>
                        <div class="company-logo">
                            <?php $company_logo = get_sub_field( 'company_logo' ); ?>
                            <?php if ( $company_logo ) : ?>
                                <img class="mx-auto" src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

        <!-- CTA -->

        <div class="cta relative border border-d-blue rounded-3xl bg-darkBlue text-center pt-44 pb-40 px-3 md:px-0 md:pt-72px md:pb-78px mt-110px overflow-x-hidden overflow-y-hidden">
            <div class="circles">
                <img src="/wp-content/uploads/2022/07/cta3.png" alt="">
            </div>
            <h3 class="text-white text-26px leading-26px lg:text-58px font-semibold lg:leading-66px font-poppins"><?php the_field( 'cta_heading' ); ?></h3>
            <p class="text-white text-xl font-normal leading-30px font-poppins mb-55px mt-6"><?php the_field( 'cta_sub_heading' ); ?></p>
            
            <?php $cta_button = get_field( 'cta_button' ); ?>
	        <?php if ( $cta_button ) : ?>

                <a href="<?php echo esc_url( $cta_button['url'] ); ?>" target="<?php echo esc_attr( $cta_button['target'] ); ?>" class="cta-btn flex items-center justify-between max-w-264px mx-auto border-white border rounded-full uppercase py-15px pl-8 pr-9 md:py-21px" onclick="toggleModal('modal-id')">
                    <span class="text-sm text-white font-poppins font-medium tracking-widest"><?php echo esc_html( $cta_button['title'] ); ?></span>
                    <span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
                </a>

            <?php endif; ?>
        </div>

    </div>

</section>