<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Robot WordPress Theme Framework
 * @subpackage robot
 * @author Simple Themes - www.simplethemes.com
 */

get_header();

//do_action('robot_before_content', 'eight'); ?>
<article>
<?php get_template_part( 'loops/loop', 'page' ); ?>
</article>
<?php get_footer();