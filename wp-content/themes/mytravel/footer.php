<?php
/*
Template Name: footer
*/
?>


<footer class="footer">
	<div class="container">
		<div class="footer-wrapper">
			<a href="Главная" class="logo">Travel</a>
			<div class="box">
				<a href="tel:<?php the_field( 'firstnumber-tel' ); ?>"><?php the_field( 'firstshow-tel' ); ?></a>
                        	<a href="tel:<?php the_field( 'secondnumber-tel'); ?>"><?php the_field( 'secondshow-tel' ); ?></a>
				<a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a>
			</div>
		</div>
	</div>
</footer>
		<?php wp_footer(); ?>
	</body>
</html>
