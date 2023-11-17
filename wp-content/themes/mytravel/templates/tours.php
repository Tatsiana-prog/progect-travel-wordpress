<?php
/*
Template Name: tours
*/
?>
<?php get_header(); ?>

		<!--tours section begins-->
		<section class="section-tours" style="background: url(<?php echo CFS()->get('background-tours'); ?>) no-repeat rgba(0,0,0,.5) center;background-size:cover;background-attachment: fixed;background-blend-mode: multiply">
				<div class="tours">
					<h1 class="heading" data-aos="zoom-in">Популярные туры</h1>
					<div class="grid">
					    <?php
					    $loop = CFS()->get('tours-cards');
							foreach ($loop as $row) {
								?>
    						<div class="box" data-aos="fade-up" data-aos-delay="400" >
    							<p class="price">
    								<i class="fas fa-dollar-sign"></i><span class="amount"><?= $row['tour_price']; ?></span>
    							</p>
    								<img src="<?= $row['tour_bg']; ?>" alt="photo" class="image">
    								<h3 class="name"><?= $row['tour_title']; ?></h3>
    								<p class="adress"><?= $row['tour_subtitle']; ?></p>
    								<a href="#" class="btn">Оставить заявку</a>
    						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</section>
		<!--tours section ends-->
		<?php get_footer(); ?>