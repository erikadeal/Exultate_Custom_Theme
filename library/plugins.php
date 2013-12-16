<?php
//Custom Meta Boxes for Exultate Theme

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_concert-fields',
		'title' => 'Concert Fields',
		'fields' => array (
			array (
				'key' => 'field_52adf27439556',
				'label' => 'Ticket Purchase Link',
				'name' => 'ticket_purchase_link',
				'type' => 'page_link',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_52a9f7585c946',
				'label' => 'Recording URL',
				'name' => 'recording_url',
				'type' => 'post_object',
				'instructions' => 'Link to the recording for this concert here.',
				'post_type' => array (
					0 => 'recording',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_52a9f5f65c942',
				'label' => 'Date 1',
				'name' => 'date_1',
				'type' => 'date_picker',
				'instructions' => 'Add first concert date.',
				'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_52a9f8f04af1a',
				'label' => 'Time 1',
				'name' => 'time_1',
				'type' => 'text',
				'instructions' => 'Add time for the first concert date.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '7:30PM',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52a9f6f95c945',
				'label' => 'Location 1',
				'name' => 'location_1',
				'type' => 'google_map',
				'instructions' => 'Add first concert location here.',
				'required' => 1,
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
			array (
				'key' => 'field_52a9f6bc5c943',
				'label' => 'Date 2',
				'name' => 'date_2',
				'type' => 'date_picker',
				'instructions' => 'Add second concert date.',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_52a9f9254af1b',
				'label' => 'Time 2',
				'name' => 'time_2',
				'type' => 'text',
				'instructions' => 'Add time for second concert date.',
				'default_value' => '',
				'placeholder' => '7:30PM',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52a9f8d94af19',
				'label' => 'Location 2',
				'name' => 'location_2',
				'type' => 'google_map',
				'instructions' => 'Add concert address here.',
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
			array (
				'key' => 'field_52a9f6e15c944',
				'label' => 'Date 3',
				'name' => 'date_3',
				'type' => 'date_picker',
				'instructions' => 'Add third concert date here.',
				'date_format' => 'yymmdd',
				'display_format' => 'mm/dd/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_52a9f93b4af1c',
				'label' => 'Time 3',
				'name' => 'time_3',
				'type' => 'text',
				'instructions' => 'Add time for third concert date.',
				'default_value' => '',
				'placeholder' => '2:00PM',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52a9f9764957f',
				'label' => 'Location 3',
				'name' => 'location_3',
				'type' => 'google_map',
				'instructions' => 'Add location for third concert date.',
				'center_lat' => '',
				'center_lng' => '',
				'zoom' => '',
				'height' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'concert',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'discussion',
				1 => 'comments',
				2 => 'revisions',
				3 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_image-1-details',
		'title' => 'Image 1 Details',
		'fields' => array (
			array (
				'key' => 'field_52ad6c2c557c9',
				'label' => 'Tagline 1',
				'name' => 'tagline_1',
				'type' => 'text',
				'instructions' => 'Add tagline for first image ("Listen")',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52ad6c46557ca',
				'label' => 'URL 1',
				'name' => 'url_1',
				'type' => 'page_link',
				'instructions' => 'Add link for page you want this image to link to.',
				'required' => 1,
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_52ad6c5d557cb',
				'label' => 'Image 1',
				'name' => 'image_1',
				'type' => 'image',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_image-2-details',
		'title' => 'Image 2 Details',
		'fields' => array (
			array (
				'key' => 'field_52ad6aff4ea1b',
				'label' => 'Tagline 2',
				'name' => 'tagline_2',
				'type' => 'text',
				'instructions' => 'Text input for "Learn..."',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52ad6b264ea1c',
				'label' => 'URL 2',
				'name' => 'url_2',
				'type' => 'page_link',
				'instructions' => 'Link to the page you want this image to lead to.',
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_52ad6bae7663c',
				'label' => 'Image 2',
				'name' => 'image_2',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'discussion',
				1 => 'comments',
				2 => 'revisions',
				3 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_image-3-details',
		'title' => 'Image 3 Details',
		'fields' => array (
			array (
				'key' => 'field_52ad6c8f765ee',
				'label' => 'Tagline 3',
				'name' => 'tagline_3',
				'type' => 'text',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52ad6ca0765ef',
				'label' => 'URL 3',
				'name' => 'url_3',
				'type' => 'page_link',
				'required' => 1,
				'post_type' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_52ad6ca8765f0',
				'label' => 'Image 3',
				'name' => 'image_3',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'front-page.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_recordings-fields',
		'title' => 'Recordings Fields',
		'fields' => array (
			array (
				'key' => 'field_52acde78d831d',
				'label' => 'Shopping Cart Button',
				'name' => 'shopping_cart_button',
				'type' => 'wysiwyg',
				'instructions' => 'Select the shopping cart button from the toolbar and select the product information you want to associate with this recording. Click "Add to cart button" to add a code to this field that will generate a button.',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_52aa59a29892d',
				'label' => 'iTunes URL',
				'name' => 'itunes_url',
				'type' => 'text',
				'instructions' => 'Paste link to iTunes here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52aa59b99892e',
				'label' => 'Amazon URL',
				'name' => 'amazon_url',
				'type' => 'text',
				'instructions' => 'Paste link to Amazon here.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52aa59ce9892f',
				'label' => 'Track listing',
				'name' => 'track_listing',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'recording',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'custom_fields',
				1 => 'discussion',
				2 => 'comments',
				3 => 'revisions',
				4 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}

//Use shortcodes in sidebar

add_filter('widget_text', 'do_shortcode');


//Add a sidebar widget for concert posts
class ConcertCalendar extends WP_Widget
{
  function ConcertCalendar()
  {
    $widget_ops = array('classname' => 'ConcertCalendar', 'description' => 'Displays list of concert dates' );
    $this->WP_Widget('ConcertCalendar', 'Concert Calendar', $widget_ops);
  }
 
  function form($instance)
  {
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title = $instance['title'];
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance)
  {
    $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    return $instance;
  }
 
  function widget($args, $instance)
  {
    extract($args, EXTR_SKIP);
 
    echo $before_widget;
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
 
    if (!empty($title))
      echo $before_title . $title . $after_title;;
 
   $query = new WP_Query(array('post_type' => 'concert', 'posts_per_page' => 4));	
			while ($query->have_posts()) : $query->the_post(); 
				?>

				<article>
					<a href="<?php the_permalink(); ?>" class="event-header" target="blank"><h3><?php the_title() ;?></h3></a>
						<table class="events-list">
							<tbody>
								<tr>
									<td><i class="fa fa-calendar"></i></td>
									<td><time><?php the_field("time_1"); ?> on </time><?php echo $date1 ?> at <a target="blank" href="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=<?php echo the_field('location_1'); ?>"><?php $location = get_field('location_1'); echo $location['address']?></a></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><a class="button" target="blank" href="<?php the_permalink(); ?>">See more dates...</td>
								</tr>
							</tbody>
						</table>
				</article>

			<?php
					
			endwhile;
		wp_reset_query();
 
    echo $after_widget;
  }
 
}
add_action( 'widgets_init', create_function('', 'return register_widget("ConcertCalendar");') );

?>