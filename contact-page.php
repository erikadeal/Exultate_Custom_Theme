<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol center-grid clearfix" role="main">

							<article class="contact-page" role="article">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><span>Contact</span></h1>


								</header> <!-- end article header -->
								<div class="entry-content">
								<section class="sixcol first clearfix">
									<p>We'd love to hear from you!</p>
									<div>
											<p><label for="name">Name:</label><br/>
											<input type="text" id="name" placeholder="Your name here"></p>
											<p><label for="email">Email:</label><br/>
											<input type="text" id="email" placeholder="musicfan@exulta.te"></p>
											<p><label for="message">Message</label><br/>
											<textarea id="styled" name="message" rows="6">Your message here...</textarea></p>
									</div>
								</section> 
								<section class="sixcol contact-information clearfix">
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
							</section> <!-- end article section -->

							<?php endwhile; else : ?>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>

							<?php endif; ?>

								</section>
								</div>
								<!-- end article section -->

								<footer class="article-footer">
								

								</footer> <!-- end article footer -->


							</article> <!-- end article -->


						</div> <!-- end #main -->
				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->
			<div class="push"></div>

<?php get_footer(); ?>