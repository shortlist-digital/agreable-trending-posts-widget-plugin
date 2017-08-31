<?php

$key = 'widget_trending_posts';
$widgetplacement = self::$config['tab_placement'];
$post_types = self::$config['post_types'];

$widget_config = array (
  'key' => $key,
  'name' => 'trending_posts',
  'label' => 'Trending Posts',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
	array (
		'key' => $key . '_tags_manual',
		'label' => 'Trending Posts Category',
		'name' => 'tags_manual',
		'type' => 'taxonomy',
		'taxonomy' => 'category',
		'field_type' => 'select',
		'add_term' => 0,
		'save_terms' => 0,
		'return_format' => 'object'
	),
	array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    )
  )
);

$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
