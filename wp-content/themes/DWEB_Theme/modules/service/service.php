<?php
    $service_list = get_sub_field('service_list');
?>
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach($service_list as $i): ?>
                <div class="service__item">
                    <div class="service__col">
                        <figure class="service__image lazy" data-src="<?= $i['service_image']['url'] ?>"></figure>
                    </div>
                    <div class="service__col">
                        <h2 class="service__title"><?= $i['service_title'] ?></h2>
                        <div class="service__intro">
                            <?= $i['service_description'] ?>
                        </div>
                        <a class="service__button" href="<?= $i['service_url'] ?>">Chi tiết</a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
