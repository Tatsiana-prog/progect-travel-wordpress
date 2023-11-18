<?php
/*
Template Name: relations
*/
?>
<?php get_header(); ?>
<section class="section-contacts" style="background: url(<?php echo CFS()->get('background-contacts'); ?>) no-repeat rgba(0,0,0,.5) center;background-size:cover;background-attachment: fixed;background-blend-mode: multiply">
            <div class="container">
                <div class="contact">
			<h1 class="heading" data-aos="zoom-out">контакты</h1>
			 <div class="row">
				<div class="map" data-aos="flip-left">
                        		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2243.5510964671284!2d49.12341731295015!3d55.783667972983466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead0f7f18fd83%3A0x806ad71c92b7ab9!2z0YPQuy4g0J7RgdGC0YDQvtCy0YHQutC-0LPQviwgNjcsINCa0LDQt9Cw0L3RjCwg0KDQtdGB0L8uINCi0LDRgtCw0YDRgdGC0LDQvSwg0KDQvtGB0YHQuNGPLCA0MjAxMDc!5e0!3m2!1sru!2sby!4v1700216087355!5m2!1sru!2sby" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        	</div>
				<div class="form" data-aos="flip-right">
    					<form action="mailto:programvtv07@gmail.com" method="post">
                				<h3>Связаться с нами</h3>
                				<?php echo do_shortcode('[contact-form-7 id="78ef9fc" title="Связаться с нами"]') ?>
                			</form>
				</div>
			</div>
                   	<div class="grid">
				<div class="box" data-aos="fade-up">
					<i class="fas fa-phone"></i>
					<h3>номер телефона</h3>
                            		<a href="tel:<?php the_field( 'firstnumber-tel' ); ?>"><?php the_field( 'firstshow-tel' ); ?></a>
                            		<a href="tel:<?php the_field( 'secondnumber-tel'); ?>"><?php the_field( 'secondshow-tel' ); ?></a>
                       		 </div>
                        	<div class="box" data-aos="fade-up">
					<i class="fas fa-envelope"></i>
					<h3>Email адрес</h3>
					<a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a>
                        	</div>
                        	<div class="box" data-aos="fade-up">
					<i class="fas fa-map-marker-alt"></i>
					<h3>Наш адрес</h3>
					<a href="#"><?php the_field( 'adress' ); ?></a>
				</div>
                    	</div>
                </div>
            </div>
        </section>
		<!--contact section ends-->
		<?php get_footer(); ?>
