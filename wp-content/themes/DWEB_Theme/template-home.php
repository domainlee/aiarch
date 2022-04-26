<?php
  /* Template Name: Trang Chủ */
    get_header();
?>

<?php
if( have_rows('home_page') ):
    while ( have_rows('home_page') ) : the_row();
        $type = get_row_layout();
        switch ($type) {
            case "layout_banner":
                the_module('hero-slider', ['list' => get_sub_field('banner_list'), 'title' => get_sub_field('banner_title'), 'content' => get_sub_field('banner_content')]);
                break;
            case "layout_profilo":
                the_module('profilo');
                break;
            case "layout_form":
                the_module('form');
                break;
            case "layout_member";
                the_module('member');
                break;
            case "layout_news";
                the_module('posts-new');
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


