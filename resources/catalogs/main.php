<ul class="list-group" id="catalog">

    <?php foreach ($catalog as $mainMenuKey => $menuInfo): ?>
        <li class="list-group-item">
            <a href="#<?= $mainMenuKey ?>" class="btn btn-outline-primary"><?= $mainMenuKey ?></a>
            <ul id="<?= $mainMenuKey ?>">
                <?php foreach ($menuInfo as $subMenuKey => $subMenuKeyInfo): ?>
                    <li class="list-group-item">
                        <a href="/<?= $mainMenuKey ?>/<?= $subMenuKey ?>" class="btn-outline-primary"><?= $subMenuKeyInfo['text'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
    <?php endforeach; ?>
</ul>