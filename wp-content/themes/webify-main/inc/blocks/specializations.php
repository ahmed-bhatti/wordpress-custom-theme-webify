<?php

    $id = 'specializations-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';
    
?>

<section id="<?php echo esc_attr( $id ); ?>" class="specialization bg-darkBlue px-15px lg:px-0 pt-104px pb-128px">

    <div class="max-w-1140px mx-auto">

        <h2 class="text-white text-32px leading-45px lg:text-42px font-semibold font-poppins lg:leading-50px text-center mb-42px"><?php the_field( 'specialization_heading' ); ?></span></h2>

        <div class="sp-slider">
            <div class="owl-two owl-carousel">

                <?php if ( have_rows( 'specializations' ) ) : ?>
                    <?php while ( have_rows( 'specializations' ) ) : the_row(); ?>
                        <div>
                            <div class="spec-box border border-d-blue rounded-3xl py-27px px-18px text-center">
                                <div class="icon-wrap mx-auto">
                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) : ?>
                                        <img class="max-w-45px m-auto" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="content-wrap text-center">
                                    <h4 class="text-white text-22px leading-27px font-semibold font-poppins mt-33px mb-4"><?php the_sub_field( 'title' ); ?></h4>
                                    <p class="text-offWhite text-base leading-26px font-poppins font-regular"><?php the_sub_field( 'description' ); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>

    </div>

</section>