<?php
    $client_background = get_sub_field('client_background');
    $client_headline = get_sub_field('client_headline');
    $client_image_large = get_sub_field('client_image_large');
    $client_list = get_sub_field('client_list');
?>
<section class="client">
    <div class="client__hero lazy" data-src="<?= $client_background['url'] ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="client__inner">
                    <div class="client__left">
                        <h2 class="client__headline"><?= $client_headline ?></h2>
                        <figure class="lazy client__image" data-src="<?= $client_image_large['url'] ?>"></figure>
                    </div>
                    <div class="client__right">
                        <div class="client__list">
                            <?php foreach ($client_list as $c): ?>
                                <div class="client__item">
                                    <figure class="lazy client__image--small" data-src="<?= $c['client_image']['url'] ?>"></figure>
                                    <h3 class="client__title"><?= $c['client_title'] ?></h3>
                                    <div class="client__intro"><?= $c['client_intro'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>