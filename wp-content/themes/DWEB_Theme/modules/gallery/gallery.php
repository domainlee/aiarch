<?php
    $gallery_list;
?>

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="offset-2 col-8">
                <div class="gallery__js owl-carousel owl-theme">
                    <?php foreach ($gallery_list as $l): ?>
                        <div class="gallery__item">
                            <a href="<?= $l['gallery_url'] ?>">
                                <figure class="ratio ratio-2x3 owl-lazy" data-src="<?= $l['gallery_image']['url'] ?>">
                                    <div class="gallery__content">
                                        <img src="<?= $l['gallery_logo']['url'] ?>" alt="" />
                                        <div class=""><?= $l['gallery_content'] ?></div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
