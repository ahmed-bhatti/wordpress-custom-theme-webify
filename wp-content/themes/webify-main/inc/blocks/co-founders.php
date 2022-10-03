<?php

    $id = 'co-founders-' . $block['id'];
    $classes = $block['className'];
    $classes .= '';

?>

<section id="<?php echo esc_attr( $id ); ?>" class="founder relative px-15px py-100px xl:px-0 xl:py-120px bg-darkBlue">

    <div class="max-w-1140px mx-auto">

        <?php if ( have_rows( 'co_founders' ) ) : 

             $i = 0; 

             while ( have_rows( 'co_founders' ) ) : the_row(); ?>

            <?php 

                if ( $i == 1 ) {

                    echo '<div class="main-wrapper row2 mt-12 md:mt-80px lg:mt-120px md:flex">';
                }
                else {
                    echo '<div class="main-wrapper md:flex">';
                }

            ?>
            
                    <div class="column1">

                        <div class="image-wrap relative">
                            <?php $image = get_sub_field( 'image' ); ?>
                            <?php if ( $image ) : ?>
                                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                            <?php endif; ?>
                            <div class="overlay-content">
                                <a href="<?php the_sub_field( 'linkedin_link' ); ?>">
                                    <div class="icon">
                                        <?php $linkedin = get_sub_field( 'linkedin' ); ?>
                                        <?php if ( $linkedin ) : ?>
                                            <img src="<?php echo esc_url( $linkedin['url'] ); ?>" alt="<?php echo esc_attr( $linkedin['alt'] ); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </a>
                                <a href="<?php the_sub_field( 'twitter_link' ); ?>">
                                    <div class="icon">
                                        <?php $twitter = get_sub_field( 'twitter' ); ?>
                                        <?php if ( $twitter ) : ?>
                                            <img src="<?php echo esc_url( $twitter['url'] ); ?>" alt="<?php echo esc_attr( $twitter['alt'] ); ?>" />
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    
                    <div class="column2 md:ml-6 xl:ml-86px">

                        <div class="content-wrap max-w-520px mt-6 md:mt-0">
                            <h3 class="text-white font-poppins text-3xl leading-40px lg:text-42px lg:leading-50px font-semibold"><?php the_sub_field( 'title' ); ?></h3>
                            <div class="relative founder-text text-orange text-sm leading-22px md:text-lg md:leading-28px font-poppins font-normal pl-58px mt-1.5 mb-31px"><?php the_sub_field( 'designation' ); ?></div>
                            <div class="text-offWhite text-base leading-26px lg:text-lg lg:leading-28px font-poppins font-normal">
                                <?php the_sub_field( 'founder_detail' ); ?>
                            </div>
                        </div>

                    </div>

                </div>

            <?php 
             $i++;
            endwhile; 
           
            ?>

        <?php endif; ?>

    </div>

</section>