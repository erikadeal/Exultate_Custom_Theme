<?php
/*
Template Name: News Archive
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h1 class="h1"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content clearfix">

									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

							<?php endif; ?>

							<?php
								$type = 'post';
								$posts = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => 10);
								$query = query_posts($posts);

								while(have_posts()): the_post();
								?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								</header>

								<section class="entry-content clearfix">

									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>
							<?php endwhile ?>
						</div>

						<?php get_sidebar(); ?>

					</div>

			</div>

<?php get_footer(); ?>
