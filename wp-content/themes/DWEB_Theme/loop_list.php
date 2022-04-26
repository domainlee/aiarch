<section class="category">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category__inner">
                    <div class="news__inner">
                            <div class="news-single__relation">
                                <?php
                                if (have_posts()): while (have_posts()) : the_post();
                                    $thumbnailUrl = get_the_post_thumbnail_url($post->ID);
                                    $thumbnailID = get_post_thumbnail_id($post->ID);
                                    $alt = get_post_meta($thumbnailId, '_wp_attachment_image_alt', true);
                                    $content = get_the_content($post->ID);
                                    $save_post = $post;
                                    $post = get_post($post->ID);
                                    setup_postdata( $post ); // hello
                                    $output = get_the_excerpt();
                                    $post = $save_post;
                                    ?>
                                    <div class="post-new__item page-posts__post-new--item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="post-new__item--img page-posts__post-new__img" style="background-image: url('<?= $thumbnailUrl; ?>')"> </div>
                                            <div class="post-new__item--details">
                                                <div class="post-new__item--name">
                                                    <h3><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                                <?php else: ?>
                                    <article>
                                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
                                    </article>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php get_template_part('pagination'); ?>
                </div>
            </div>
        </div>
    </div>
</section>

