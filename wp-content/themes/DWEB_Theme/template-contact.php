<?php
/* Template Name: Trang Liên hệ */
get_header();
?>

<?php
if( have_rows('contact_page') ):
    while ( have_rows('contact_page') ) : the_row();
        $type = get_row_layout();
        switch ($type) {
            case "layout_heading":
                the_module('heading', ['title' => get_the_title()]);
                break;
            case "layout_form2";
                the_module('form2');
                break;
            case "layout_banner";
                the_module('banner');
                break;
            case "layout_team":
                    the_module('social', ['image'=> get_sub_field('team_image')]);
                    break;
            default:
                break;
        }
    endwhile;
endif;
?>

<?php
get_footer();
?>


