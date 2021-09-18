<?php get_header(); ?>

<?php $hero = get_field("hero"); //Connects acf plugin - Changes can be made in text -> pages -> Home ?>
<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
								<img src="<?php bloginfo("template_directory");?>/img/city.jpg" />
								<div class="text">
									<h1><?php echo $hero["main_title"];?></h1>
									<p><?php echo $hero["small_title"];?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        </main>
<?php get_footer(); ?>