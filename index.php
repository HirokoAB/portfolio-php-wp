<?php get_header(); ?>

		<div id="wrapper">
			
			<div id="header" class="content-block header-wrapper">
				<div class="header-wrapper-inner">
					<section class="top clearfix">
						<div class="pull-left">
							<h1><a class="logo" href="index.php">Yakeyu</a></h1>
						</div>
						<div class="pull-right">
							<a class="toggleDrawer" href="#"><i class="fa fa-bars fa-2x"></i></a>
						</div>
					</section>
					<section class="center">
						<div class="slogan">
							My name is Yuji.
						</div>
						<div class="secondary-slogan">
							I'm live in Okinawa Uruma City.
						</div>
					</section>
					<section class="bottom">
						<a id="scrollToContent" href="#">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_down.png">
						</a>
					</section>
				</div>
			</div><!-- header -->


			<div class="content-block" id="hobbies">
				<div class="container">
					<header class="block-heading cleafix">
						<a href="#" class="btn btn-o btn-lg pull-right">View All</a>
						<h1>My best hobbies</h1>
						<p>Take a look at some of my hobbies</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-sm-4">
								<a href="<?php echo the_permalink(''); ?>" class="hobby" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/myImg/yoga.jpg)">
									<span class="btn btn-o-white">Yoga</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="hobby" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/myImg/karaoke.jpg)">
									<span class="btn btn-o-white">Karaoke</span>
								</a>
							</div>
							<div class="col-sm-4">
								<a href="#" class="hobby" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/myImg/draque.gif)">
									<span class="btn btn-o-white">Game</span>
								</a>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #hobby -->


			<div class="content-block parallax" id="dreams">
				<div class="container text-center">
					<header class="block-heading cleafix">
						<h1>My Dreams</h1>
						<p>What I wanna do in my life</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-4">
								<div class="dream">
									<i class="fas fa-globe-asia"></i>
									<h2>Traveling world</h2>
									<p>I want to go around world and to be free worker.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dream">
									<i class="fas fa-praying-hands"></i>
									<h2>To be Yoga master</h2>
									<p>I want to be extreme about Yoga, then I wanna live in Southeast Asia.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="dream">
									<i class="fas fa-futbol"></i>
									<h2>Watching world cup</h2>
									<p>I want to watch FIFA world cup soccer in stadium.</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #dreams -->


			<div class="content-block" id="blog">
				<?php if(have_posts()): ?>
				<div class="container">
					<header class="block-heading cleafix">
						<a href="archive.php" class="btn btn-o btn-lg pull-right">View All</a>
						<h1>From the Blog</h1>
						<p>Keep up with the latest happenings.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<?php for($i = 0; $i < 3; $i++):
										if(have_posts()): the_post(); ?>
							<div class="col-sm-4 blog-post" id="post-<?php the_ID(); ?>">
								<?php if(has_post_thumbnail()): ?>
								<a href="<?php echo the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url('thumbnail'); ?>"></a>
								<a href="<?php echo the_permalink(); ?>"><h2><?php echo the_title(); ?></h2></a>
								<div class="date"></div>
								<?php else: ?>
        				<a href="<?php echo the_permalink(); ?>">
        			  <img src="https://placehold.jp/150x150.png" alt="">
        				</a>
        				<?php endif; ?>
								<p><?php echo the_excerpt(); ?></p>
								<a href="<?php echo the_permalink(); ?>">Read More</a>
			      	</div>
							<?php endif;
										endfor; ?>
			      </div>
    			</section>
		  		<?php else: ?>
    			<h2 class="sub-title">投稿はありません</h2>
  			</div>
  			<?php endif; ?>
  			</div>
			</div><!-- #blog -->


			<div class="video-pan text-center">
				<a id="video" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=aatr_2MstrI&list=RDaatr_2MstrI&start_radio=1',containment:'.bg-container-youtube', showControls:false,autoPlay:true, loop:true, startAt:0, opacity:1, addRaster:false, quality:'large'}"></a>
				<!-- 5.0 background container autoPlay:true,  -->
				<div class="bg-container-youtube"></div>
				<header>
					<a class="popup-vimeo video-button" href="https://www.youtube.com/watch?v=aatr_2MstrI&list=RDaatr_2MstrI&start_radio=1">
					<i class="fa fa-caret-right" aria-hidden="true"></i>
					</a>
					<h4>My favorite music video</h4>
				</header>
			</div><!-- video -->


			<div class="content-block" id="skills">
				<div class="container">
					<header class="block-heading cleafix">
						<h1>My skills</h1>
						<p>Keep up with the latest skillss.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-4">
								<div class="skill">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/myImg/six-pack.jpeg"><br>
									<strong>Muscle training</strong><br/>
									<span>Oct, 2017</span>
									<p>I have training about 2 years.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="skill">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/myImg/marathon.jpeg"><br>
									<strong>Marathon</strong><br/>
									<span>Feb, 2018</span>
									<p>I participated in the "Okinawa marathon contest", and I could finished.</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="skill">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/myImg/store.jpg"><br>
									<strong>Store Manager</strong><br/>
									<span>Oct, 2018 from 2008</span>
									<p>I was working at the supermarket company.</p>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div><!-- skills -->


			<div class="content-block" id="contact">
				<div class="container text-center">
					<header class="block-heading cleafix">
						<h1>Contact Us</h1>
						<p>Feel free to drop us a line.</p>
					</header>
					<section class="block-body">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
								<form action="check.php" method="post" class="" role="form">
									<div class="form-group">
								    	<input type="text" class="form-control form-control-white" id="subject" placeholder="Your Name" name="nickname" required>
								  	</div>
								    <div class="form-group">
								    	<input type="email" class="form-control form-control-white" id="exampleInputEmail2" placeholder="Enter email" name="email" required>
								    </div>
								    <div class="form-group">
								    	<textarea class="form-control form-control-white" placeholder="Write Something" name="content" required></textarea>
								    </div>
								  <input type="submit" class="btn btn-o-white" value="Say Hello">
								</form>
							</div>
						</div>
					</section>
				</div>
			</div><!-- #contact -->

<?php get_footer(); ?>