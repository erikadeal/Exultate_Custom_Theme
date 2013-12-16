<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div id="featured-images" class="twelvecol center-grid clearfix">
						<div class="featured-image fourcol first clearfix">
							<a href="<?php the_field('url_1');?>"><img src='<?php the_field('image_1'); ?>'/></a>
							<a href="<?php the_field('url_1');?>"><p class="call-to-action">Listen</p></a>
							<p class="tagline"><?php the_field('tagline_1'); ?></p>
						</div>
						<div class="featured-image fourcol clearfix">
							<a href="<?php the_field('url_2');?>"><img src='<?php the_field('image_2'); ?>'/></a>
							<a href="<?php the_field('url_2');?>"><p class="call-to-action">Learn</p></a>
							<p class="tagline"><?php the_field('tagline_2'); ?></p>
						</div>
						<div class="featured-image fourcol last clearfix">
							<a href="<?php the_field('url_3');?>"><img src='<?php the_field('image_3'); ?>'/></a>
							<a href="<?php the_field('url_3');?>"><p class="call-to-action">Join</p></a>
							<p class="tagline"><?php the_field('tagline_3'); ?></p>
						</div>
					</div>

						<div id="main" class="eightcol first clearfix" role="main">

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer">
									<p class="clearfix"><?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

							</article>

							<?php endwhile; ?>

							<?php endif; ?>

							<section class="front-page news clearfix">

								<h1 class="h2 section-header">News and Events</h2>

								<?php $query = new WP_Query( array(
					                'post_type' => 'post',
					                'posts_per_page' => 3
					            ) );
					            while ($query->have_posts()) : $query->the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

								<header class="article-header">

									<h1 class="h3"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

								</header>

								<section class="entry-content clearfix">
									<?php the_excerpt(); ?>
								</section>

								<footer class="article-footer">
									<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

								</footer>

							</article>

					        <?php endwhile;?>
							</section>

						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
