<?php

    $id = 'services-' . $block['id'];
    $classes = $block['className'];
    $classes .= 'hero-sec';

?>


<section id="<?php echo esc_attr( $id ); ?>" class="services px-15px lg:px-0 pt-138px pb-119px -mt-45px bg-darkBlue">

    <div class="max-w-1140px mx-auto">

        <h2 class="text-white text-32px leading-45px lg:text-42px font-semibold font-poppins lg:leading-66px text-center mb-90px"><?php the_field( 'Services_title' ); ?></h2>

        <div class="services-inner flex justify-center flex-wrap gap-5">


        <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => 5,
                'post_status'    =>  'publish'
            );

            $the_query = new WP_Query( $args );

			$i = 1;

            if ( $the_query->have_posts() ):
                while ( $the_query->have_posts() ) : $the_query->the_post();


           ?>
        

            <div class="services-box border border-d-blue rounded-3xl pt-45px px-30px pb-8">

                <?php the_post_thumbnail( 'thumbnail' ); ?>

                <h3 class="text-white text-22px font-semibold leading-30px font-poppins mt-25px mb-30px"><?php the_title(); ?></h3>


                    <?php the_content(); ?>


                <a href="<?php the_permalink(); ?>" class="git-btn flex items-center max-w-186px justify-between border rounded-full uppercase border-orange pl-30px pr-22px py-3 mt-55px">
                    <span class="text-sm text-white font-poppins font-medium tracking-widest">view details</span>
                    <span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
                </a>

            </div>

            <?php

				$i++;

				endwhile;

				wp_reset_postdata();

			    endif;
			?>
        </div>

        <?php $s_request_proposal_button = get_field( 's_request_proposal_button' ); ?>
	    <?php if ( $s_request_proposal_button ) : ?>

            <a href="<?php echo esc_url( $s_request_proposal_button['url'] ); ?>" target="<?php echo esc_attr( $s_request_proposal_button['target'] ); ?>" class="cta-btn flex items-center justify-between max-w-264px mx-auto border-orange border rounded-full uppercase mt-99px py-15px pl-8 pr-9 md:py-21px" onclick="toggleModal('modal-id')">
                <span class="text-sm text-white font-poppins font-medium tracking-widest"><?php echo esc_html( $s_request_proposal_button['title'] ); ?></span>
                <span><img src="/wp-content/uploads/2022/07/btn-arrow-icon.png" alt=""></span>
            </a>
            
        <?php endif; ?>

    </div>
</section>