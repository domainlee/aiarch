<?php
    $list;
    $title;
    $content;
    $bg = get_template_directory_uri() . '/image/bg_hero.png';
?>

<section class="hero">
    <?php if($list): ?>
    <div class="hero__slider">
        <div class="hero__js owl-carousel owl-theme">
            <?php foreach ($list as $b): ?>
                <div>
                    <figure class="lazy hero__image" style="background-image: url(<?= $b['banner_image']['url'] ?>)"></figure>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

</section>

