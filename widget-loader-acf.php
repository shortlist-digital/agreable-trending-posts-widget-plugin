<?php

$key = 'widget_trending';
$widgetplacement = self::$config['tab_placement'];

$widget_config = array (
  'key' => $key,
  'name' => 'trending',
  'label' => 'Trending',
  'display' => 'block',
  'sub_fields' => array (
    array (
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
    array (
      'key' => $key . '_lists',
      'label' => 'Lists',
      'name' => 'lists',
      'type' => 'post_object',
      'post_type' => array (
        0 => 'list',
      ),
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
      'key' => $key . '_posts_manual',
      'label' => 'Manually insert content (Posts or Tiles)',
      'name' => 'posts',
      'type' => 'post_object',
      'post_type' => array (
        0 => 'post',
        1 => 'longform',
        2 => 'category',
        3 => 'sponsored_post',
        4 => 'sponsored_longform',
        5 => 'page',
        6 => 'sponsored_hub',
        7 => 'partnership',
        8 => 'tile'
      ),
      'allow_null' => 1,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
    ),
    array (
		'key' => $key . '_tags_manual',
			'label' => 'Tags',
			'name' => 'tags',
			'type' => 'taxonomy',
			'taxonomy' => 'post_tag',
			'field_type' => 'multi_select',
			'add_term' => 0,
			'save_terms' => 0,
			'return_format' => 'object'
		),
	),
	array (
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ),
);

$widget_config["content-types"] = array('category', 'sponsored_hub', 'page');
$widget_config["content-sizes"] = array('main', 'main-full-bleed'); // main, main-full-bleed, sidebar
