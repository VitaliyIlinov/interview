<!--https://www.gotbootstrap.com/themes/smartadmin/4.0.2/settings_layout_options.html-->
<ul class="list-group" id="catalog">
    <?php foreach ($catalog as $mainMenuKey => $menuInfo): ?>
        <li class="list-group-item">
            <a href="#<?= $mainMenuKey ?>" class="">
                <?= $mainMenuKey ?>
                <i class="fa fa-angle-down"></i>
            </a>

            <ul id="<?= $mainMenuKey ?>">
                <?php foreach ($menuInfo as $subMenuKey => $subMenuKeyInfo): ?>
                    <li class="list-group-item">
                        <a href="/<?= $mainMenuKey ?>/<?= $subMenuKey ?>"
                           class=""><?= $subMenuKeyInfo['text'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>