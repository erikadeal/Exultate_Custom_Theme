<?php
/*
Template Name: Recordings Archive
*/
?>
<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix recordings">

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

							<div id="recordings-grid">

							<?php
								$type = 'recording';
								$posts = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => 4);
								$query = query_posts($posts);

								while(have_posts()): the_post();
								?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'fivecol first clearfix recording' ); ?> role="article">

								<header class="article-header">

									<a href="<?php the_permalink() ?>" rel="bookmark" target="blank" title="<?php the_title_attribute(); ?>"><h3 class="h2"><?php the_title(); ?></h3></a>

								</header>

								<section class="image clearfix">
									
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

								</section>

								<section class="entry-content clearfix">

									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>
							<?php endwhile ?>
						</div>
						</div>

						<?php get_sidebar('recordings_sidebar'); ?>

								</div>

			</div>

<?php get_footer(); ?>
