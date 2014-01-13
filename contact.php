<?php
/*
Template Name: Contact Form Template
*/
?>


<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="tencol center-grid clearfix" role="main">

						     <?php while ( have_posts() ) : the_post(); ?>
						 
						          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						 
						            <header class="entry-header">
						              <h1 class="entry-title"><?php the_title(); ?></h1>
						            </header>
						 
						            <div class="entry-content">
						              <?php the_content(); ?>
						 
						 
						            </div><!-- .entry-content -->
						 
						          </article><!-- #post -->
						 
						      <?php endwhile; // end of the loop. ?>

						</div>

				</div>

			</div>

<?php get_footer(); ?>
