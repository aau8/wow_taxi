<?php get_header(); ?>
<?php get_template_part('wp-parts/bread'); ?>
<?php get_template_part('wp-parts/page-header'); ?>
<?php set_query_var('support_class', 'support-page'); get_template_part('wp-parts/support'); ?>

<?php get_footer(); ?>