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
      'post_type' => $post_types,
      'allow_null' => 1,
      'multiple' => 1,
      'return_format' => 'object',
      'ui' => 1,
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
