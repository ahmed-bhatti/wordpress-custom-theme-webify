</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>


<!-- Main modal -->

<div id="modal-id" tabindex="-1" class="modalPopup hidden px-15px overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center" aria-hidden="true" role="dialog">
    <div class="relative mt-32 max-w-696px mx-auto">

        <div class="relative bg-white rounded-3xl shadow ">
            <button id="closeBtn" type="button" class="absolute top-4 right-4 text-NeonBlue border border-NeonBlue bg-transparent hover:bg-NeonBlue hover:text-white rounded-full text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>

            <div class="text-center px-4 pt-100px pb-50px md:py-50px md:px-40px">

                <h2 class="text-darkBlue text-2xl leading-30px md:text-38px md:leading-66px font-semibold font-poppins mb-3 md:mb-0">What Makes Us Different?</h2>

				<p class="max-w-490px mx-auto text-cyanblue text-base leading-26px font-normal font-poppins mb-22px">Please fill out the short form below with your project details and we will be in touch shortly.</p>

				<div class="cf7">
                	<?php echo do_shortcode( '[contact-form-7 id="322" title="Modal Popup"]' ); ?>
            	</div>
            </div>

        </div>
    </div>
</div> 




<footer class="site-footer bg-darkBlue px-15px lg:px-0 pt-125px pb-50px">
	<div class="max-w-1140px mx-auto">

		<!-- <div class="md:flex md:justify-between">

			<div class="site-about">

				<img class="mx-auto" src="/wp-content/uploads/2022/07/footer-logo.png" alt="Webify-logo">

				<div class="tersOfservice flex justify-center mt-10 mb-12 md:mb-0 md:mt-95px">

					<?php
						if ( is_active_sidebar( 'footer-col1' ) ) :
							dynamic_sidebar( 'footer-col1' );
						endif;
					?>

				</div>

			</div>

			<div class="f-menu f-navigation text-center md:text-left">

				<h6 class="text-white relative text-xl leading-4 font-semibold font-poppins mt-8 md:mt-0 mb-43px">Navigation</h6>

				<?php
					wp_nav_menu (
						array (
							'container'         => 'ul',
							'menu_class'        => 'f-menu',
							'theme_location'    => 'footer',
							'fallback_cb'       => false,
						)
					);
				?>

			</div>

			<div class="f-menu f-services text-center md:text-left">

				<h6 class="text-white relative text-xl leading-4 font-semibold font-poppins mt-8 md:mt-0 mb-43px">Services</h6>
				
				<?php
					if ( is_active_sidebar( 'footer-col-s' ) ) :
						dynamic_sidebar( 'footer-col-s' );
					endif;
				?>

			</div>

			<div>
				<?php get_sidebar('social-icons'); ?>
			</div>

		</div> -->

		<!-- Copy right text -->

		<!-- <div class="flex items-center justify-between border-t border-md-blue pt-53px mt-68px"> -->

		<div class="flex items-center justify-between">
			<div>
				<p class="text-base text-offWhite font-normal font-poppins">© 2022 <a class="text-white text-base font-medium" href="#">Webify</a>. All Rights Reserved.</p>
			</div>

			<a href="https://www.linkedin.com/company/webify-io/">
				<img src="/wp-content/uploads/2022/07/LinkedIn-3.png" alt="LinkedIn icon">
			</a>
		</div>

</footer>

</div>

<script>

function toggleModal(modalID){

    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
	
  }

jQuery(document).ready( function(){
jQuery(function() {
  jQuery("#model_pop").on("click", function(e) {
    jQuery(".modalPopup").removeClass("hidden");
    e.stopPropagation()
  });
  jQuery(document).on("click", function(e) {
    if (jQuery(e.target).is(".modalPopup") === true) {
      jQuery(".modalPopup").addClass("hidden");
    }
  });
});
	
// 	jQuery("#model_pop").on("click",function() {
// 		jQuery(".modalPopup ").removeClass("hidden");
// 	});
	
	

	
	jQuery(".row2 > .column1 ").addClass("order-2");


	// Popup close

	jQuery("#closeBtn").on("click",function() {

		jQuery(".modalPopup ").addClass("hidden");

	});


	// menu jQuery

	jQuery(".toggle").on("click",function() {
		if(jQuery(".site-menu").hasClass("active")){
			jQuery(".site-menu").removeClass("active");
		} else{
			jQuery(".site-menu").removeClass("active");
			jQuery(".site-menu").addClass("active");
		}
	});

	jQuery(".toggle").on("click",function() {
		if(jQuery(this).hasClass("active")){
			jQuery(this).removeClass("active");
		} else{
			jQuery("icon").removeClass("active");
			jQuery(this).addClass("active");
		}
	});

	// owl One

	jQuery('.owl-one').owlCarousel({
		loop:true,
		margin:10,
		navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:1,
				nav:false
			},
			1000:{
				items:1,
				nav:true,
				loop:false
			}
		}
	});

	// owl Two

	jQuery('.owl-two').owlCarousel({
		loop:true,
		margin:20,
		navText : ["<i class='fa fa-long-arrow-left'></i>","<i class='fa fa-long-arrow-right'></i>"],
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:true,
				loop:false
			}
		}
	});

	});

</script>


<?php wp_footer(); ?>

</body>
</html>
