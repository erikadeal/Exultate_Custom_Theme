<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="tencol center-grid clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

								</header>

								<section class="sidebar fourcol last push-8 clearfix">

								<h1 class="h3 glance">At a glance</h1>

								<?php the_post_thumbnail();?>

								<?php echo apply_filters('the_content', get_post_meta($post->ID, 'shopping_cart_button', true)); ?>
								<div id="validation-message">
								<p>1 Item added to cart.</p>

								<!-- FIX THIS -->
								<p><a href="http://localhost/testultate/?page_id=32">Continue shopping</a> or <a href="<?php echo esc_url( get_option( 'shopping_cart_url' ) ); ?>">checkout</a></p>
								</div>
								<?php if (get_field('itunes_url'))

									{?>

									<p><a href="<?php the_field('itunes_url');?>" target="blank" style="display:inline-block;overflow:hidden;background:url(https://linkmaker.itunes.apple.com/htmlResources/assets/en_us//images/web/linkmaker/badge_itunes-lrg.png) no-repeat;width:110px;height:40px;@media only screen{background-image:url(https://linkmaker.itunes.apple.com/htmlResources/assets/en_us//images/web/linkmaker/badge_itunes-lrg.svg);}"></a></p>

									<?php }?>

								<?php if (get_field('amazon_url'))

									{?>

									<p><a href=" <?php the_field('amazon_url'); ?>" style="display:inline-block;overflow:hidden;background:url(https://images-na.ssl-images-amazon.com/images/G/01/associates/remote-buy-box/buy3._V192207739_.gif) no-repeat;width:120px;height:40px;"></a></p>

									<?php }?>

									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'recording_tag', '<span class="tags-title">' . __( 'Recording Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>

								</section>

								<section class="entry-content eightcol first pull-4 clearfix">

									<?php the_content(); ?>

								</section>

							</article>

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
