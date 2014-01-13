<?php
/*
Template Name: Recordings
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol center-grid clearfix recordings" role="main">

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
									
							</section> <!-- end article section -->
								<footer class="article-footer">
								

								</footer> <!-- end article footer -->


							</article> <!-- end article -->
						<?php endwhile; ?>
					<?php endif; ?>

					<h1 class="h2">Featured Recordings</h1>

						<?php $my_query = new WP_Query('category_name=featured-recordings&posts_per_page=3');
							  	while ($my_query->have_posts()) : $my_query->the_post();
							  	$do_not_duplicate[] = $post->ID ?>

						 <article id="post-<?php the_ID(); ?>" role="article" class="clearfix archive-article featured-archive">

								<header class="article-header">

									<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								</header> <!-- end article header -->

								<section class="entry-content clearfix">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>

									<?php the_excerpt(); ?>


								</section> <!-- end article section -->

								<footer class="article-footer">

								</footer> <!-- end article footer -->

							</article> <!-- end article -->
						<?php endwhile; ?>

					<h1 class="h2">All Recordings</h1>

					<p class="tag-list">See recordings tagged:</p>

					<?php
						$custom_query = new WP_Query('posts_per_page=-1&category_name=recordings');
						if ($custom_query->have_posts()) :
							while ($custom_query->have_posts()) : $custom_query->the_post();
								$posttags = get_the_tags();
								if ($posttags) {
									foreach($posttags as $tag) {
										$all_tags[] = $tag->term_id;
									}
								}
							endwhile;
						endif;

						$tags_arr = array_unique($all_tags);
						$tags_str = implode(",", $tags_arr);

						$args = array(
						'smallest'  => 12,
						'largest'   => 12,
						'unit'      => 'px',
						'number'    => 0,
						'format'    => 'list',
						'include'   => $tags_str
						);
						wp_tag_cloud($args);
						?>

						<?php query_posts('cat=3'); ?>
						
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