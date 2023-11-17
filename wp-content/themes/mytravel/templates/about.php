<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
		<!--about section begins-->
		<section class="section-about" style="background: url(<?php echo CFS()->get('background-about'); ?>) no-repeat rgba(0,0,0,.5) center;background-size:cover;background-attachment: fixed;background-blend-mode: multiply">
			<div class="container">
				<div class="about">
					<h2 class="heading" data-aos="zoom-out"><?php the_title(); ?></h2>
					<div class="details">
						<div class="box" data-aos="zoom-in">
							<h3>Почему выбрали нас?</h3>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, ratione iste architecto qui rem sapiente quidem aliquam mollitia. Dolore, pariatur!</p>
							<a href="contacts.html" class="btn">Наши контакты</a>
						</div>
					</div>
					<div class="grid">
					    <?php
					    $loop = CFS()->get('about-cards');
							foreach ($loop as $row) {
						?>
    						<div class="box" data-aos="fade-up">
    						    <img src="<?= $row['card-img']; ?>" alt="img">
    							<h3><?= $row['about-card_title']; ?></h3>
    							<p><?= $row['about-card_description']; ?></p>
    						</div>
						<?php
						}
						?>
					</div>
				</div>
			</div>
		</section>
		<!--about section ends-->
		<!--reviews section begins-->
		<section class="section-reviews">
			<div class="contaner">
				<div class="reviews">
					<h1 class="heading" data-aos="zoom-out">Отзывы наших клиентов</h1>
					<div class="grid">
					     <?php
    					    $loop = CFS()->get('reviews_cards');
    							foreach ($loop as $row) {
    								?>
        						<div class="box" data-aos="fade-up">
        						    	<img src="<?= $row['review_img']; ?>" alt="img">
        								<h3><?= $row['review_name']; ?></h3>
        								<p><?= $row['review_text']; ?></p>
        								<div class="starts">
            								<i class="fas fa-star"></i>
            								<i class="fas fa-star"></i>
            								<i class="fas fa-star"></i>
            								<i class="fas fa-star"></i>
            								<i class="fas fa-star"></i>
    							        </div>
    							 </div>
    						<?php
    						}
    						?>
					</div>
				</div>
			</div>
		</section>
		<!--reviews section ends-->
<?php get_footer(); ?>