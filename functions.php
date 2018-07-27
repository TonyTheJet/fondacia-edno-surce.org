<?php

// theme support
add_theme_support( 'post-thumbnails' );

/**
 * @return WP_Post[]
 */
	function fes_home_child_posts(): array {
		return get_posts(
			[
				'order' => 'ASC',
				'orderby' => 'menu_order',
				'post_parent' => get_option('page_on_front'),
				'post_status' => 'publish',
				'post_type' => 'page',
				'posts_per_page' => 999
			]
		);
	}