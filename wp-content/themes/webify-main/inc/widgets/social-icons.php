

<div class="social-icons text-center md:text-left">

    <h6 class="text-white relative text-xl leading-4 font-semibold font-poppins mt-8 md:mt-0 mb-43px"><?php the_field( 'social_icons_title' ); ?></h6>

    <div class="flex md:flex-col gap-5 md:gap-0">

        <a href="<?php the_field( 'facebook_link' ); ?>" class="bg-darkCynaBlue w-40 h-40px inline-flex justify-center items-center rounded-full md:mb-9px">

            <?php $facebook_icon = get_field( 'facebook_icon' ); ?>
            <?php if ( $facebook_icon ) : ?>
                <img src="<?php echo esc_url( $facebook_icon['url'] ); ?>" alt="<?php echo esc_attr( $facebook_icon['alt'] ); ?>" />
            <?php endif; ?>

        </a>

        <a href="<?php the_field( 'twitter_link' ); ?>" class="bg-darkCynaBlue w-40 h-40px inline-flex justify-center items-center rounded-full md:mb-9px">

            <?php $twitter_icon = get_field( 'twitter_icon' ); ?>
            <?php if ( $twitter_icon ) : ?>
                <img src="<?php echo esc_url( $twitter_icon['url'] ); ?>" alt="<?php echo esc_attr( $twitter_icon['alt'] ); ?>" />
            <?php endif; ?>

        </a>

        <a href="<?php the_field( 'instagram_link' ); ?>" class="bg-darkCynaBlue w-40 h-40px inline-flex justify-center items-center rounded-full md:mb-9px">

            <?php $instagram_icon = get_field( 'instagram_icon' ); ?>
            <?php if ( $instagram_icon ) : ?>
                <img src="<?php echo esc_url( $instagram_icon['url'] ); ?>" alt="<?php echo esc_attr( $instagram_icon['alt'] ); ?>" />
            <?php endif; ?>

        </a>

        <a href="<?php the_field( 'linkedin_link' ); ?>" class="bg-darkCynaBlue w-40 h-40px inline-flex justify-center items-center rounded-full">

            <?php $linkedin_icon = get_field( 'linkedin_icon' ); ?>

            <?php if ( $linkedin_icon ) : ?>
                <img src="<?php echo esc_url( $linkedin_icon['url'] ); ?>" alt="<?php echo esc_attr( $linkedin_icon['alt'] ); ?>" />
            <?php endif; ?>

        </a>
    </div>

</div>