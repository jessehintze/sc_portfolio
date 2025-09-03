<?php

/**
 * Plugin Name: JH Theme enchancements
 * Description: Customize the JH theme outside of functions.php
 * Version: 1.0
 * Author: Jesse Hintze
 * Author URI: squarecat.studio
 * Text Domain: jh-theme-enhancements
 */

// Force previous/next post links to display "Previous" and "Next"
add_filter('previous_post_link', 'my_custom_previous_link');
add_filter('next_post_link', 'my_custom_next_link');

function my_custom_previous_link($output)
{
    return '<div class="nav-previous"><a  href="' . get_permalink(get_previous_post()) . '">Previous</a></div>';
}

function my_custom_next_link($output)
{
    return '<div class="nav-next"><a href="' . get_permalink(get_next_post()) . '">Next</a></div>';
}
