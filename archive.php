<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="tencol center-grid clearfix" role="main">

							<?php if (is_category('recordings')) { ?>
								<h1 class="archive-header">
									<span>Recordings</span>
								</h1>
								<p class="intro-body">If you enjoy exquisite music performed by fine vocal and instrumental musicians, you will want to add these albums to your collection. Click on the title to see each album's repertoire, to hear sound samples and to order. CDs are $15 and tapes (if available) are $12.</p>
								<p><strong>Filter by:</strong> <a href="http://localhost/exultate/?tag=masterworks">Masterworks</a> | <a href="#">Christmas</a></p>
							<?php } elseif (is_tag()) { ?>
								<h1 class="archive-header h2">
									<?php single_tag_title(); ?>
								</h1>

							<?php } elseif (is_author()) {
								global $post;
								$author_id = $post->post_author;
							?>
								<h1 class="archive-title h2">

									<span><?php _e("Posts By:", "bonestheme"); ?></span> <?php the_author_meta('display_name', $author_id); ?>

								</h1>
							<?php } elseif (is_day()) { ?>
								<h1 class="archive-title h2">
									<span><?php _e("Daily Archives:", "bonestheme"); ?></span> <?php the_time('l, F j, Y'); ?>
								</h1>

							<?php } elseif (is_month()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e("Monthly Archives:", "bonestheme"); ?></span> <?php the_time('F Y'); ?>
									</h1>

							<?php } elseif (is_year()) { ?>
									<h1 class="archive-title h2">
										<span><?php _e("Yearly Archives:", "bonestheme"); ?></span> <?php the_time('Y'); ?>
									</h1>
							<?php } ?>
							<?php if (is_category("recordings")) { ?>

								<h3 class="featured">Featured Recordings</h3>

								<?php $my_query = new WP_Query('category_name=featured-recordings&posts_per_page=3');
							  	while ($my_query->have_posts()) : $my_query->the_post();
							  	$do_not_duplicate[] = $post->ID ?>
							    <article id="post-<?php the_ID(); ?>" role="article" class="clearfix archive-article featured-archive">

								<header class="article-header">

									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<?php the_post_thumbnail(); ?>

									<?php the_excerpt(); ?>


								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->
							  <?php endwhile; ?>

							  <hr/>

							<?php } ?>
							    
							<?php if (have_posts()) : while (have_posts()) : the_post();
								if (isset($do_not_duplicate)) {
									if (in_array($post->ID, $do_not_duplicate)) continue;
								}
							?>

							<article id="post-<?php the_ID(); ?>" role="article" class="clearfix archive-article">

								<header class="article-header">

									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>

									<?php the_excerpt(); ?>

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
												<p><?php _e("This is the error message in the archive.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

								</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
