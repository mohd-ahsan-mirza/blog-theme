<?php get_header(); ?>
		<!-- Header -->
			<!-- <header id="header">
				<div class="logo"><a href="index.html">Road Trip <span>by TEMPLATED</span></a></div>
				<a href="#menu"><span>Menu</span></a>
			</header> -->
	<div class="after-load">
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
		<?php 
			//TODO: Fix the issue for getting pages by publish date
			if($_GET['p']){
				$post = get_post(sanitize_text_field($_GET['p']));
				setup_postdata( $post );
				$prev_post = get_previous_post();
				$next_post = get_next_post();
				$all_posts = get_posts(array('orderby' => 'ID','order' => 'ASC'));

				if($next_post == '')
				{
					$next_post = $all_posts[0];
				}
				if($prev_post == ''){
					$prev_post = $all_posts[count($all_posts)-1];
				}
			
		?>
			<section id="post" class="wrapper bg-img">
				<div class="inner">
					<article class="box">
						<header>
							<h2><?php echo $post->post_title; ?></h2>
							<!-- <p>01.01.2017</p> -->
						</header>
						<div class="content">
							<?php echo  $post->post_content; ?>
						</div>
						<footer>
							<ul class="actions">
								<li><a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="button alt icon fa-chevron-left"><span class="label">Previous</span></a></li>
								<li class="home_icon"><a href="<?php echo get_home_url(); ?>" class="button alt icon fa-home"></a></li>
								<li><a href="<?php echo get_permalink( $next_post->ID ); ?>" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
							</ul>
						</footer>
					</article>
				</div>
			</section>
		<?php
			}
			else{
		?>
			<section id="banner" class="bg-img" style="background-image: url("../images/banner9.jpg");" data-bg="banner.jpg">
				<div class="inner">
					<header>
						<h1>Working towards being extraordinary</h1>
					</header>
				</div>
			</section>

<!--			<section id="bio" class="wrapper post bg-img" data-bg="banner2.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>Me In A Nutshell</h2>
						</header>
						<div class="content">
							<p>Software Engineer by profession, because who doesn't like having super powers. One of my guilty 
								pleasure is reading on human psychology and random statistics. If I could describe myself in three words they would be Thinker, dreamer, traveller. That reminds me, I am very passionate about travelling 
								because as Mark Twain once said, Travel is fatal to prejudice and narrow-mindedness. I also believe that learning is a life long process and it comes 
								to us in many different forms. Sometimes it comes through travelling, life experiences, people and even through disappointment. If I am not working, 
								I am either working out or I am trying to improve on my broken French.
							</p>
						</div>
						<footer>
						</footer>
					</article>
				</div>
				<a href="#recommendations" class="more">Learn More</a>
			</section>

			<section id="recommendations" class="wrapper post bg-img" data-bg="slideshow.JPG">
				<div class="inner">
					<article class="box">
						<header>
							<h2>What people are saying about me</h2>
						</header>
						<div class="content">
							<div id="slideshow">
								<div class="active-recommendation" id="recommendation1">
     								<p>As an Account Director, I rely heavily on our development teams support on one of our largest nationwide accounts. Thankfully I have Ahsan’s support 
     									and expertise at hand. Ahsan is a dedicated Software Engineer that I have the pleasure of working with for over 1.5 years. Both myself and our clients 
     									can always count on his attention to detail, passion to create/develop what has been requested and proactively call out any gaps and/or improvements to a
     									new development solution. On several occasions, there have been times when we are on client calls, where he has lead the conversation and walked the 
     									client through better/efficient alternatives to their solution requests, saving our client time and money. Our clients at times have acknowledged that 
     									he knows the solution better then they do and always feel confident knowing that they have Ahsan on their side.
     								</p>
     								<span class="recommender">John Medeiros, Account Director at Engage People Inc. - 2018</span>
   								</div>
   								<div class="active-recommendation" id="recommendation2">
     								<p>Ahsan is a developer with a ton of potential and a keen eye for detail. He has continued to surpass my expectations by tackling all assigned tasks 
     									not just from a technical perspective but also identifying future technical and user problems to deliver quality work. His communication with the 
     									client has been fantastic and recognized and I could not be more pleased to have someone take lead on major projects.
     								</p>
     								<span class="recommender">Raahul Biswas, IT Product Manager at Engage People Inc. - 2018</span>
   								</div>
   								<div class="active-recommendation" id="recommendation3">
     								<p>Muhammad Mirza is a diligent member of the team at Spire Software. His hard work, attention to detail, and strong problem solving skills 
     									benefited each project that he worked on. Called upon to do everything from front end programming to database schema design to virtual machine 
     									set up, Muhammad always applied himself with the greatest commitment to the challenges put before him. His positive attitude and 
     									strong social skills made him a pleasure to work with and a trusted customer contact person for support issues. A fine worker!
     								</p>
     								<span class="recommender">Ryan Gallimore, Owner at Spire Software Canada - 2017</span>
   								</div>
							</div>
						</div>
						<footer>
							<ul class="actions">
								<li id="nextRecommendation"><a href="#" class="button alt icon fa-chevron-right"><span class="label">Next</span></a></li>
							</ul>
						</footer>
					</article>
				</div>
				<a href="#skills" class="more">Learn More</a>
			</section>

			<section id="skills" class="wrapper post bg-img" data-bg="skills.JPG">
				<div class="inner">
					<article class="box">
						<header>
							<h2>my top skills</h2>
						</header>
						<div class="content">
							<div class="skillbar clearfix " data-percent="80%">
								<div class="skillbar-title" style="background: red;"><span>PHP</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>

							<div class="skillbar clearfix " data-percent="70%">
								<div class="skillbar-title" style="background: red;"><span>Architecture</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>

							<div class="skillbar clearfix " data-percent="85%">
								<div class="skillbar-title" style="background: red;"><span>OOP</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>

							<div class="skillbar clearfix " data-percent="60%">
								<div class="skillbar-title" style="background: red;"><span>QA</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>

							<div class="skillbar clearfix " data-percent="80%">
								<div class="skillbar-title" style="background: red;"><span>SQL</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>

							<div class="skillbar clearfix " data-percent="80%">
								<div class="skillbar-title" style="background: red;"><span>GIT</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">1 Year</div>
							</div>

							<div class="skillbar clearfix " data-percent="50%">
								<div class="skillbar-title" style="background: red;"><span>MongoDB</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">1 Year</div>
							</div>

							<div class="skillbar clearfix " data-percent="70%">
								<div class="skillbar-title" style="background: red;"><span>jQuery</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>	

							<div class="skillbar clearfix " data-percent="40%">
								<div class="skillbar-title" style="background: red;"><span>AngularJS</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">1 Year</div>
							</div>

							<div class="skillbar clearfix " data-percent="60%">
								<div class="skillbar-title" style="background: red;"><span>WordPress</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">1 Year</div>
							</div>

							<div class="skillbar clearfix " data-percent="65%">
								<div class="skillbar-title" style="background: red;"><span>Linux</span></div>
								<div class="skillbar-bar" style="background: #F64747;"></div>
								<div class="skill-bar-percent">2 Years</div>
							</div>

						</div>
						<footer>
						</footer>
					</article>
				</div>
				<a href="#3" class="more">Learn More</a>
			</section>-->

			<?php
				$post_list = get_posts(array('orderby' => 'publish_date','order' => 'DESC', 'numberposts'  => -1));
				//Update in JS and
				$bannerIndex = 3;
				foreach ( $post_list as $post ) :
					setup_postdata( $post );
			?>
			<section id="<?php echo $bannerIndex ?>" class="wrapper post bg-img" style="display:none;">
				<div class="inner">
					<article class="box">
						<header>
							<h2><?php the_title(); ?></h2>
						</header>
						<div class="content">
							<p><?php echo wp_trim_words(get_the_content(),100,'.....'); ?></p>
						</div>
						<footer>
							<a href="<?php the_permalink(); ?>" class="button alt">Continue Reading</a>
						</footer>
					</article>
				</div>
				<?php $bannerIndex++; ?>
				<a href="#<?php echo (($bannerIndex-3)==count($post_list)) ?  'footer': $bannerIndex ?>" class="more">Learn More</a>
			</section>
			<?php
					endforeach;
			?>
			<?php } ?>
	</div>
<?php get_footer(); ?>
