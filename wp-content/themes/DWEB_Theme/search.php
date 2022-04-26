<?php get_header(); ?>

<div class="search-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12 append-content">
                <div class="category-product__headline">
                    <p><?php echo sprintf( __( 'Chúng tôi tìm thấy %s kết quả ', 'html5blank' ), $wp_query->found_posts ); echo 'cho từ khoá "'. get_search_query().'"'; ?></p>
                </div>

                <?php
                get_template_part('loop-product-filter');
                global $wp_query;
                if ( $wp_query->max_num_pages > 1 ) {
                    get_template_part('pagination');
                }
                ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
