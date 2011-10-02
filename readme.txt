=== Is Latest Post? ===
Contributors: ggalmazor
Donate link: http://greenpeace.org
Tags: post, tag, template, loop, latest
Requires at least: 3.2.1
Tested up to: 3.2.1
Stable tag: trunk

This plugin adds a template tag to know if the current post in the_loop() is the latest post.

==Screenshots == 

None

== Description ==

This plugin adds a template tag called <em>is_latest()</em> to know if the <strong>current post</strong> in <em>the_loop()</em> is the <strong>latest post</strong>.

== Installation ==

1. Unzip the plugin package and upload it to `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use your new <em>is_latest()</em> template tag in your theme's loops.

== Upgrade notice ==

This plugin doesn't have configuration nor database storage. Just replace the files with the new package.

== Examples ==

**Use h1 for the latest post's title, h2 in the remaining posts:**

`<?php // Code taken from TwentyTen loop.php file ?>
<?php while ( have_posts() ) : the_post(); ?>

  // [...] blah blah blah

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h<?php echo (is_latest()) ? "1" : "2" ?> class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h<?php echo (is_latest()) ? "1" : "2" ?>>

    // [...] rest of the post stuff
  </div>

  // [...] more blah blah blah

<?php endwhile; // End the loop. Whew. ?>`

**Show full content on latest post only, summary on rest:**

`<?php if (is_latest()): ?>
  <?php the_content('Continue reading <span class="meta-nav">&rarr;</span>'); ?>
<?php else: ?>
  <?php echo wp_trim_excerpt(''); ?>
<?php endif; ?>`

== Frequently Asked Questions ==

None yet. Be the first, I dare you!

== Changelog ==

= 0.2 =
* Fixed sql query sentence for latest Wordpress versions (> 3.2.1)
* Improved usage examples avoiding the use of the_excerpt() (deprecated function)

= 0.1 =
* First implementation
* Created readme.txt file