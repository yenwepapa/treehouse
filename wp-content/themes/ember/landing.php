<?php
/* Template Name: Landing Page */
get_header();
if (function_exists('ember_companion')) {
    get_template_part( 'parts/companion/frontpage','about');
    get_template_part( 'parts/companion/frontpage','action');
    get_template_part( 'parts/companion/frontpage','featured');
    get_template_part( 'parts/companion/frontpage','test');
    get_template_part( 'parts/companion/frontpage','team');
    get_template_part( 'parts/companion/frontpage','news');
    get_template_part( 'parts/companion/frontpage','action2');
    get_template_part( 'parts/companion/frontpage','social');
} else {
    get_template_part( 'parts/loop');
}
get_footer();
?>