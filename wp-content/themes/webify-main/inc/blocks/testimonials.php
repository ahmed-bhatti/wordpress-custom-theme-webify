<?php



    $id = 'testimonials-' . $block['id'];

    $classes = $block['className'];

    $classes .= '';



?>

<section id="<?php echo esc_attr( $id ); ?>" class="testimonials bg-cynaBlue px-15px lg:px-0 pt-113px pb-126px">

    <div class="max-w-1140px mx-auto">

        <h2 class="text-white text-32px leading-45px lg:text-42px font-semibold font-poppins lg:leading-50px text-center mb-120px"><?php the_field( 'testimonials_title' ); ?></h2>

        <div class="t-slider border border-d-blue rounded-3xl">

            <div class="owl-one owl-carousel">
                <?php if ( have_rows( 'testimonials_content' ) ) : ?>
                    <?php while ( have_rows( 'testimonials_content' ) ) : the_row(); ?>
                        <div>
                            <div class="text-center px-15px pt-24 lg:px-0 lg:pt-113px pb-47px relative">

                                <div class="t-img">

                                    <?php $customer_image = get_sub_field( 'customer_image' ); ?>
                                    <?php if ( $customer_image ) : ?>
                                        <img class="max-w-100px lg:max-w-144px border-2 border-orange rounded-full" src="<?php echo esc_url( $customer_image['url'] ); ?>" alt="<?php echo esc_attr( $customer_image['alt'] ); ?>" />
                                    <?php endif; ?>

                                    <span class="t-quotes-icon">
                                        <img src="/wp-content/uploads/2022/07/quotes-icon.png" alt="">
                                    </span>

                                </div>
                                <p class="text-white text-base md:leading-30px lg:text-26px lg:leading-42px font-semibold font-poppins max-w-865px mx-auto"><?php the_sub_field( 'description' ); ?></p>
                                <div class="c-bio relative">
                                    <p class="text-offWhite font-normal text-sm leading-26px mt-5 lg:text-lg lg:leading-42px font-poppins lg:mt-47px mb-27px"><?php the_sub_field( 'namedesignation' ); ?></p>
                                </div>
                                <div class="c-logo">

                                    <?php $company_logo = get_sub_field( 'company_logo' ); ?>
                                    <?php if ( $company_logo ) : ?>
                                        <img class="mx-auto w-94" src="<?php echo esc_url( $company_logo['url'] ); ?>" alt="<?php echo esc_attr( $company_logo['alt'] ); ?>" />
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

        </div>

    </div>

</section>