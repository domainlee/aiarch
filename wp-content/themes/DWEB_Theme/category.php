<?php get_header(); ?>
<section class="product-single__breadcrumb category__breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb__title">
                    <?php my_breadcrumb() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    get_template_part('loop_list');
?>
<?php get_footer(); ?>
