<?php

    $id = 'general-hero-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>

<section id="<?php echo esc_attr( $id ); ?>" class="gen-hero bg-darkBlue relative z-10 px-15px lg:px-0 pt-232px pb-141px bg-cover -mt-97px" style="background-image:url('<?php the_field( 'background_image' ); ?>');">
    
    <div class="max-w-1140px mx-auto">

        <div class="content-wrap text-center">

            <h1 class="text-white text-32px leading-45px lg:text-58px lg:leading-66px font-semibold font-poppins"><?php the_field( 'ghs_heading' ); ?></h1>
            <p class="text-offWhite text-19px leading-30px font-poppins font-medium mt-4 max-w-530px mx-auto"><?php the_field( 'ghs_sub_heading' ); ?></p>
        
        </div>

    </div>

</section>