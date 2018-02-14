<?php

/**
 * Retrieves the root plugin path.
 *
 * @return string Root path to the gutenberg extensibility workshop plugin.
 *
 * @since 1.0.0
 */
function gew_dir_path() {
	return plugin_dir_path( dirname(__FILE__ ) );
}

/**
 * Retrieves a URL to a file in the gutenberg extensibility workshop plugin.
 *
 * @param  string $path Relative path of the desired file.
 *
 * @return string       Fully qualified URL pointing to the desired file.
 *
 * @since 1.0.0
 */
function gew_url( $path ) {
	return plugins_url( $path, dirname( __FILE__ ) );
}
