<?php get_header(); ?>
	<?php get_template_part('banner') ?>


	<!-- 	our-services -->
	<section id="service" class="title-a">

		<div class="title">

			<h2>OUR SERVICES</h2>
			<span>Services</span>
		</div>
		<p class="lorem">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</P>

			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contend-card">
							<div class="contend-icon">
								<i class="fa fa-pencil icon-services" aria-hidden="true"></i>
							</div>
							<div class="contend-text text-center">
								<strong>Content Writing</strong>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt..</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contend-card">
							<div class="contend-icon">
								<i class="fa fa-cog icon-services" aria-hidden="true"></i>
							</div>
							<div class="contend-text text-center">
								<strong>Web Development</strong>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contend-card">
							<div class="contend-icon">
								<i class="fa fa-line-chart icon-services" aria-hidden="true"></i>
							</div>
							<div class="contend-text text-center">
								<strong>Graphic Design</strong>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contend-card">
							<div class="contend-icon">
								<i class="fa fa-paper-plane-o icon-services" aria-hidden="true"></i>
							</div>
							<div class="contend-text text-center">
								<strong>UI/UX Design</strong>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contend-card">
							<div class="contend-icon">
								<i class="fa fa-desktop icon-services" aria-hidden="true"></i>
							</div>
							<div class="contend-text text-center">
								<strong>App Development</strong>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contend-card">
							<div class="contend-icon">
								<i class="fa fa-bar-chart icon-services" aria-hidden="true"></i>
							</div>
							<div class="contend-text text-center">
								<strong>Digital Marketing</strong>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
		<!-- fin de our services -->
		<!-- Are You Ready To Get Started? -->
	<section class="ready-to">
		<div>
			<h2>Are You Ready To Get Started?</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
				<br> Lorem ipsum dolorsit amet, consectetuer
			</p>
			<a href="">PURCHASE NOW!</a>
		</div>
	</section>
		<!--  FIN 	Are You Ready To Get Started? -->
		<!-- why -->
		<?php get_template_part('choose') ?>

		<!-- VIDEO -->
	<section class="video-promo">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="text-video">
						<div class="video-promo-content">
							<a class="promo" href="https://www.youtube.com/embed/LSgBpbgTlhw" target="_blank" >
								<i class="fa fa-play-circle-o" aria-hidden="true" ></i>
							</a>
						</div>
						<h2>OUR INTRODUCTORY VIDEO</h2>
						<p >Learn more about us, its only 30mins</p>

					</div>

				</div>
			</div>
		</div>
	</section>
		<!-- FIN video -->
		<?php get_template_part('gallery') ?>

		<!-- CONTADOR  -->
	<section class="contador .d-none .d-xl-block">
		<div class="wrapper">
			<div class="counter col_fourth">
				<i class="fa fa-rocket fa-2x"></i>
				<h2 class="timer count-title count-number" data-to="300" data-speed="1500"></h2>
				<p class="count-text ">Faster</p>
			</div>

			<div class="counter col_fourth">
				<i class="fa fa-coffee fa-2x"></i>
				<h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
				<p class="count-text ">Cup of Coffee</p>
			</div>

			<div class="counter col_fourth">
				<i class="fa fa-user-o fa-2x"></i>
				<h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
				<p class="count-text ">Active Clients</p>
			</div>

			<div class="counter col_fourth end">
				<i class="fa fa-heart-o fa-2x"></i>
				<h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
				<p class="count-text ">Peoples Love</p>
			</div>
		</div>
	</section>
		<!-- FIN DEL CONTADOR  -->
		<?php get_template_part('team') ?>

<?php get_footer(); ?>
