<?php

    $id = 'wmud-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>

<!-- What make us different -->

<section id="<?php echo esc_attr( $id ); ?>" class="wmud bg-cynaBlue px-15px lg:px-0 pt-138px pb-119px -mt-45px">

    <div class="max-w-1140px mx-auto">

        <h2 class="text-white text-32px leading-45px lg:text-42px font-semibold lg:leading-66px font-poppins text-center mb-53px"><?php the_field( 'wmud_title' ); ?></h2>

        <div class="flex flex-wrap gap-4 justify-between">

            <?php if ( have_rows( 'wmud_box' ) ) : ?>
                <?php while ( have_rows( 'wmud_box' ) ) : the_row(); ?>

                    <div class="wmud-box w-full text-center mb-5 lg:mb-0 lg:text-left md:max-w-214px py-25px px-18px border rounded-3xl border-blue">

                        <?php $icon = get_sub_field( 'icon' ); ?>
                        <?php if ( $icon ) : ?>
                            <img class="mx-auto lg:mx-0" src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                        <?php endif; ?>

                        <p class="text-white text-lg leading-26px mt-8 font-medium font-poppins"><?php the_sub_field( 'description' ); ?></p>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>

</section>