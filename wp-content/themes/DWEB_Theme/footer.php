<?php
    $footer_social = get_field('footer_social', 'options');
    $footer_about = get_field('footer_about', 'options');
    $footer_about2 = get_field('footer_about2', 'options');

    $logo = get_field('logo', 'options');
    $head_tool = get_field('head_tool2', 'options');
    $favicon = get_field('head_favicon', 'options');
    $logoHeader = '';
    if (!empty($logo['url'])) {
        $logoHeader = $logo['url'];
    } else {
        $logoHeader = get_template_directory_uri() . '/img/shoes/logo.png';
    }
    $bg = get_template_directory_uri() . '/image/bg_footer.png';
?>

<footer class="footer lazy" data-src="<?= $bg ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="footer__inner">
                    <div class="footer__col">
                        <div class="footer__logo">
                            <img src="<?= $logoHeader; ?>" alt="">
                        </div>
                        <div class="footer__social">
                            <?php foreach ($footer_social as $i): ?>
                                <a href="<?= $i['footer_social_url'] ?>">
                                    <i class="<?= $i['footer_social_image'] ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="footer__about">
                            <?= $footer_about2 ?>
                        </div>
                    </div>
                    <div class="footer__col">
                        <h3 class="footer__headline">Thông tin</h3>
                        <?= $footer_about ?>
                    </div>
                    <div class="footer__col">
                        <h3 class="footer__headline">Liên kết</h3>
                        <?php if (has_nav_menu('footer-menu-1')) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer-menu-1',
                                    'container_class' => 'footer__menu',
                                    'menu_class' => 'footer__menu'
                                )
                            );
                        } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php
$footer_script = get_field('script_footer', 'options', false);
if (!empty($footer_script)):
    echo $footer_script;
endif; ?>

</body>

</html>
