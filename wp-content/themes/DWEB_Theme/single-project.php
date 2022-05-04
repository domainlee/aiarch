<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap');
</style>

<div class="single">
    <div class="container">
        <div class="row">
            <div class="col-3">
                project
            </div>
            <div class="col-md-9">
                <div class="hom-page__inner">
                    <div class="home-page__main">
                        <div class="single-post">
                            <div class="single-post__inner">
                                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                                    <h2 class="single__heading">
                                        <?= get_the_title() ?>
                                    </h2>
                                    <div class="sigle-post__date">
                                        <?php the_time('d/m/Y'); ?>
                                    </div>
                                    <div class="sigle-post__content">
                                        <?php the_content(); ?>
                                    </div>
                                <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>

                        <div class="social-share">
                            <div class="social">
                                <div class="fb-like" data-href="<?= get_the_permalink() ?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                                <div class="g-plusone" style="" data-size="medium"></div>
                            </div>
                            <script src="https://apis.google.com/js/platform.js" async defer>
                                {lang: 'vi'}
                            </script>
                        </div>


                        <?php
                        $tag = get_the_tags();
                        if (!empty($tag)):
                            ?>
                            <div class="single-post__tag">
                                <div class="news-single__relation_title">Tìm kiếm theo: </div>
                                <?php
                                foreach ($tag as $item):
                                    $term_link = get_term_link($item->term_id);
                                    ?>
                                    <div class="tag__item">
                                        <div class="tag__name">
                                            <a href="<?= $term_link; ?>"><i class="fa fa-search"></i><?= $item->name; ?></a>
                                        </div>
                                    </div>
                                <?php endforeach;
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php
                        $post_author = get_field('post_author');
                        ?>
                        <?php if(!empty($post_author)): ?>
                            <div class="single__author">
                                <?= $post_author ?>
                            </div>
                        <?php endif; ?>


                        <?php
                        $post_relation = get_field('post_relation');
                        ?>
                        <div class="post-content__relation">
                            <div class="news-single__relation_title">Bài viết liên quan</div>
                            <?php if(!empty($post_relation)):
                                ?>
                                <div class="news-single__relation">
                                    <?php
                                    foreach ($post_relation as $item):
                                        $thumbnailId = get_post_thumbnail_id($item->ID);
                                        $img = wp_get_attachment_image_src($thumbnailId, 'base-small')[0];
                                        $alt = get_post_meta($thumbnailId, '_wp_attachment_image_alt', true);
                                        $link = get_permalink($item->ID); ?>
                                        <div class="news-single__relation--item">
                                            <div class="new-single__relation--img">
                                                <a href="<?= $link; ?>">
                                                    <figure class="single-relate__img" style="background-image: url('<?= $img ?>')" data-src = ""></figure>
                                                </a>
                                            </div>
                                            <div class="new-single__relation--name">
                                                <a href="<?= $link; ?>">
                                                    <h3><?= $item->post_title; ?></h3>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <?php if (empty($post_relation)): ?>
                                <?php
                                global $post;
                                $secondary = new WP_Query( array(
                                    'post_type'     => 'post',
                                    'posts_per_page'=> 3,
                                    'post__not_in' => array(get_the_ID())
                                ) );
                                if( $secondary->have_posts() ) : ?>
                                    <div class="news-single__relation">
                                        <?php
                                        while( $secondary->have_posts() ) : $secondary->the_post();
                                            $thumbnailId = get_post_thumbnail_id($post->ID);
                                            $img = wp_get_attachment_image_src($thumbnailId, 'base-small')[0];
                                            $alt = get_post_meta($thumbnailId, '_wp_attachment_image_alt', true);
                                            ?>
                                            <div class="news-single__relation--item">
                                                <div class="news-single__relation--inner">
                                                    <div class="new-single__relation--img">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <figure class="single-relate__img lazy" data-src="<?= $img ?>"></figure>
                                                        </a>
                                                    </div>
                                                    <h3 class="new-single__relation--name">
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h3>
                                                </div>
                                            </div>
                                        <?php endwhile;
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                    <?php
                                endif;
                                ?>
                            <?php endif; ?>
                        </div>

                        <div class="commentFacebook">
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1138345072867205&autoLogAppEvents=1';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));</script>
                            <div class="fb-comments" data-href="<?= get_the_permalink() ?>" data-width="100%" data-numposts="5"></div>
                        </div>
                    </div>
                    <?php
                    get_template_part('bottom-page');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

