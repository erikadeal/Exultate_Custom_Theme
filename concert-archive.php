<?php
/*
Template Name: Concert Archive
*/
?>
<?php get_header(); ?>

			<div id="content" class="concerts">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="tencol center-grid clearfix" role="main">

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
								$type = 'concert';
								$posts = array('post_type' => $type, 'post_status' => 'publish', 'posts_per_page' => 4);
								$query = query_posts($posts);

								while(have_posts()): the_post();
								?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'concert clearfix' ); ?> role="article">

								<header class="article-header">

									<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

								</header>

								<section class="sidebar fourcol last push-8 clearfix">

								<aside>
									
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
									</aside>

								</section>

								<section class="entry-content eightcol first pull-4 clearfix">

									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</article>
							<?php endwhile ?>
						</div>

								</div>

			</div>

<?php get_footer(); ?>
