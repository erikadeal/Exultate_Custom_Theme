<?php
/*
Template Name: Concerts
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="tencol center-grid clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><span><?php the_title(); ?></span></h1>


								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<div class="featured-image fivecol last">
									<?php 
										if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										  the_post_thumbnail('full');
										} 
										?>
									</div>
									<?php the_content(); ?>
									<!--<?php if (has_post_thumbnail()) {?>
										<aside class="twocol last featured-image">
											<?php the_post_thumbnail();?>
											</aside>
										<?php }?>-->
							</section> <!-- end article section -->
								<footer class="article-footer">
								

								</footer> <!-- end article footer -->


							</article> <!-- end article -->
						<?php endwhile; ?>
					<?php endif; ?>

						<?php query_posts('cat=8'); ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php
								global $more;
								$more = 0;
								?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('concert-archive'); ?> role="article">

								<header class="article-header">

									<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">

									<?php the_content("Learn more", FALSE); ?>

								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; ?>

									<?php if (function_exists('bones_page_navi')) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the custom posty type archive template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

								</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
