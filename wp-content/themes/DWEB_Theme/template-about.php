<?php
  /* Template Name: Trang Giới Thiệu */
    get_header();
?>

<?php
if( have_rows('about_page') ):
    while ( have_rows('about_page') ) : the_row();
        $type = get_row_layout();
        switch ($type) {
            case "layout_banner":
                the_module('hero-slider', ['list' => get_sub_field('banner_list'), 'title' => get_sub_field('banner_title'), 'content' => get_sub_field('banner_content')]);
                break;
            case "layout_member";
                the_module('member');
                break;
            case "layout_strategy":
                the_module('strategy', ['heading' => get_sub_field('strategy_heading'), 'image' => get_sub_field('strategy_image'), 'list' => get_sub_field('strategy_list'), 'bg' => get_sub_field('background_image_option')]);
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


