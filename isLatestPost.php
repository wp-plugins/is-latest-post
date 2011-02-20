<?php

/*
  Plugin Name: Is Latest Post?
  Plugin URI: http://www.programania.net/wordpress-plugin-is-latest-post/
  Description: This plugin adds a template tag to know if the current post in the_loop() is the latest post.
  Version: 0.1
  Author: Guillermo Gutiérrez
  Author URI: http://www.nianoniano.com
  License: GPL2
 */
?>
<?php

/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
?>
<?php

/**
 * Finds out if the current post is the latest published post
 *
 * @global $post
 * @global $wpdb
 * @return bool true if the posts is the latest post, false otherwise
 */
function is_latest() {
  global $post, $wpdb;
  $sql = sprintf("SELECT COUNT(*) FROM %s WHERE post_data > '%s' AND post_type = 'post' AND post_status = 'publish';",
          $wpdb->posts,
          $post->post_date
  );
  return $wpdb->get_var($wpdb->prepare($sql)) == 0;
}
?>