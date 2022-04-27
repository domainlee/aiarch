<?php
    $list;
    $title;
    $content;
?>

<section class="hero">
    <?php if($list): ?>
    <div class="hero__slider">
        <div class="hero__js owl-carousel owl-theme">
            <?php foreach ($list as $b): ?>
                <div>
                    <figure class="hero__image ratio ratio-21x9 m-0 owl-lazy" data-src="<?= $b['banner_image']['url'] ?>">
                        <div class="hero__content">
                            <h3><?= $b['banner_heading'] ?></h3>
                        </div>
                    </figure>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

</section>

