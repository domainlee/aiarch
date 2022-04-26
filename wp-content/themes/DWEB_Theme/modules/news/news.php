<?php
    $news_headline = get_sub_field('news_headline');
    $news_list = get_sub_field('news_list');
?>
<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="news__inner">
                    <h2 class="news__headline"><?= $news_headline ?></h2>
                    <div class="news__list">
                        <?php foreach ($news_list as $n): ?>
                        <div class="news__item">
                            <figure class="lazy news__image" data-src="<?= $n['news_image']['url'] ?>"></figure>
                            <h3 class="news__title"><?= $n['news_title'] ?></h3>
                            <div class="news__other">
                                <span class="news__view"><?= $n['news_view'] ?></span>
                                <span class="news__date"><?= $n['news_date'] ?></span>
                            </div>
                            <div class="news__button">
                                <a class="more-default" href="<?= $n['news_url'] ?>">Read more <i class=""></i></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>