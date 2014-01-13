<?php
/*
Template for concert posts
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="tencol center-grid clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('concert clearfix'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

								</header>

								<section class="sidebar fourcol last push-8 clearfix">

									<h1 class="h3 glance">At a Glance</h1>

									<?php
									$date = DateTime::createFromFormat('Ymd', get_field('date_1'));
									$date1 = $date->format('l, F j, Y');
									?>

									<table class="events-list">
										<tbody>
											<tr>
												<td><i class="fa fa-calendar"></i></td>
												<td><time><?php the_field("time_1"); ?> on </time><?php echo $date1 ?> at <a target="blank" href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo the_field('location_1'); ?>"><?php $location = get_field('location_1'); echo $location['address']?></a></td>
											</tr>

									<?php if (get_field('date_2'))

									{ ?>
									<tr>
									<td><i class="fa fa-calendar"></i></td>
									<td><time><?php the_field("time_2"); ?> on </time><?php $date = DateTime::createFromFormat('Ymd', get_field('date_2')); $date2 = $date->format('l, F j, Y'); echo $date2?> at <a target="blank" href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo the_field('location_2'); ?>"><?php $location = get_field('location_2'); echo $location['address']?></a></td>
									</tr>
									<?php }?>

									<?php if (get_field('date_3'))

									{ ?>
									<tr>
									<td><i class="fa fa-calendar"></i></td>
									<td><time><?php the_field("time_3"); ?> on </time><?php $date = DateTime::createFromFormat('Ymd', get_field('date_3')); $date3 = $date->format('l, F j, Y'); echo $date3?> at <a target="blank" href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo the_field('location_3'); ?>"><?php $location = get_field('location_3'); echo $location['address']?></a></td>
									</tr>
									<?php }?>
										</tbody>
									</table>

									<?php if (get_field('ticket_purchase_link'))

										{ ?>

									<p class="buy-button"><a href="<?php the_field('ticket_purchase_link');?>" class="button">Buy Tickets</a></p>

									<?php }?>

									<?php 

									$recording = get_field('recording_url');

									if($recording):

										$post = $recording;
										setup_postdata( $post );
									?>

									<p>Missed the show? <a href=" <?php the_permalink(); ?> ">Get the recording here!</a></p>

									<?php wp_reset_postdata(); ?>

								<?php endif;?>
								</section>

								<section class="entry-content eightcol first pull-4 clearfix">

									<?php the_content(); ?>

								</section>

								<footer class="article-footer">
									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'concert_tag', '<span class="tags-title">' . __( 'Concert Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>

								</footer>

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
