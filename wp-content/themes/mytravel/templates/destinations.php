<?php
/*
Template Name: destinations
*/
?>
<?php get_header(); ?>
		<!-- destinations section begins-->
		<section class="section-destinations" style="background: url(<?php echo CFS()->get('background-destinations'); ?>) no-repeat rgba(0,0,0,.5) center;background-size:cover;background-attachment: fixed;background-blend-mode: multiply">
				<div class="destinations">
					<h1 class="heading" data-aos="zoom-out">Направления</h1>
					<div class="grid" >
						    <?php
							$loop = CFS()->get('destination-cards');
							foreach ($loop as $row) {
								?>
								<a href="#" class="box" data-aos="zoom-in">
								<img src="<?= $row['destination-bg']; ?>" alt="picture">
								<h3><span><?= $row['destination-title']; ?></span></h3>
								</a>
								<?php
								}
								?>
					</div>
				</div>
		</section>
		<!--destinations section ends-->
<?php get_footer(); ?>