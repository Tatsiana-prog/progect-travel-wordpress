<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
		<!--home section begins-->
        <section class="section-about" style="background: url(<?php echo CFS()->get('background-home'); ?>) no-repeat rgba(0,0,0,.5) center;background-size:cover;background-attachment: fixed;background-blend-mode: multiply">
			<div class="container">
				<div class="home" data-aos="zoom-in" data-aos-delay="600">
					<form action="mailto:programvtv07@gmail.com" method="post">
					<h3>Поиск вашего тура</h3>
					<?php echo do_shortcode('[contact-form-7 id="8bac587" title="Контактная форма 1"]') ?>
					</form>
				</div>
			</div>
		</section>
		<!--home section ends-->
<?php get_footer(); ?>
