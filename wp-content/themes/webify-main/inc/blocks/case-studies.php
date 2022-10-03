<?php

    $id = 'case-studies-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>

<section id="<?php echo esc_attr( $id ); ?>" class="caseStudy bg-cynaBlue px-15px lg:px-0 pt-138px -mt-45px">

    <div class="case-wrapper max-w-1164px mx-auto md:px-15px xl:px-0">

        <h2 class="text-white text-center text-32px leading-45px lg:text-42px font-semibold lg:leading-66px font-poppins mb-53px"><?php the_field( 'case_studies_heading' ); ?></h2>

        <?php if ( have_rows( 'case_studies' ) ) : ?>
		    <?php while ( have_rows( 'case_studies' ) ) : the_row(); ?>

                <div class="caseStudy-inner bg-darkBlue rounded-3xl px-6 py-70px lg:px-50px xl:px-100px mb-72px">

                    <div class="cs-content text-center">
                        <h3 class="max-w-760px mx-auto text-white text-2xl md:text-32px md:leading-40px font-semibold font-poppins"><?php the_sub_field( 'title' ); ?></h3>
                        <p class="text-white text-lg leading-32px md:leading-28px font-medium font-poppins mt-11px mb-43px lg:max-w-795px lg:mx-auto"><?php the_sub_field( 'description' ); ?></p>
                    </div>

                    <div class="box-wrapper grid grid-flow-row grid-cols-1 md:grid-rows-1 md:grid-flow-col md:grid-cols-3 gap-5">

                        <?php if ( have_rows( 'approaches' ) ) : ?>
                            <?php while ( have_rows( 'approaches' ) ) : the_row(); ?>

                                <div class="caseStudy-box border border-d-blue rounded-3xl px-15px py-8 lg:px-30px">

                                    <?php $icon = get_sub_field( 'icon' ); ?>
                                    <?php if ( $icon ) : ?>
                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                    <?php endif; ?>

                                    <h4 class="text-white text-22px font-semibold leading-30px font-poppins mt-25px mb-30px"><?php the_sub_field( 'title' ); ?></h4>
                                    <p class="text-offWhite text-15px leading-6 font-normal font-poppins mb-8"><?php the_sub_field( 'description' ); ?></p>

                                </div>
                                
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div>


                    <h3 class="max-w-660px mx-auto text-white text-2xl md:text-32px leading-40px font-semibold font-poppins text-center mt-63px mb-30px">
                        <?php the_sub_field( 'graph_image_title' ); ?>
                    </h3>

                    <div class="">
                        <div class="seo-cs">
                            <?php $graph_image = get_sub_field( 'graph_image' ); ?>
                            <?php if ( $graph_image ) : ?>
                                <img class="mx-auto" src="<?php echo esc_url( $graph_image['url'] ); ?>" alt="<?php echo esc_attr( $graph_image['alt'] ); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

</section>