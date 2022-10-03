<?php

    $id = 'workflow-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>

<section id="<?php echo esc_attr( $id ); ?>" class="workflow bg-darkBlue px-15px py-120px">

    <div class="max-w-910px mx-auto">

        <div class="md:flex items-center">

            <div class="md:w-55 flex justify-center"> <!-- column1 -->
                <div class="circles border-4 rounded-full bg-cynaBlue text-center"> 
                    <h3 class="text-white text-3xl lg:text-4xl xl:text-5xl font-poppins font-semibold"><?php the_field( 'workflow_title' ); ?></h3>
                </div>
            </div>

            <div class="md:w-45"> <!-- column2 -->

                <div class="workflow-steps">

                    <?php if ( have_rows( 'workflow_steps' ) ) : ?>
                        <?php while ( have_rows( 'workflow_steps' ) ) : the_row(); ?>
                            <div class="steps-wrapper max-w-412px flex items-center border border-orange rounded-full p-7px mb-4">
                                <div class="step-num">
                                    <span class="text-white text-31px font-poppins font-semibold"><?php the_sub_field( 'number' ); ?></span>
                                </div>
                                <div class="step-content ml-18px">
                                    <h6 class="text-white text-22px leading-26px font-semibold font-poppins mb-1.5"><?php the_sub_field( 'title' ); ?></h6>
                                    <p class="text-white text-11px leading-16px font-normal font-poppins"><?php the_sub_field( 'description' ); ?></p>
                                </div>   
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div> 
        </div>

    </div>
</section>