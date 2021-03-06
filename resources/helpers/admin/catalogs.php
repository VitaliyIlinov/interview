<ul class="navbar-nav flex-column">
    <?php foreach ($menu as $mainMenuKey => $menuInfo): ?>
        <?php if ($menuInfo === 'divider'): ?>
            <li class="nav-divider">
                <?= $mainMenuKey; ?>
            </li>
            <?php continue; ?>
        <?php endif; ?>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#<?= $mainMenuKey ?>">
                <i class="<?= $menuInfo['icon'] ?>"></i>
                <?= $menuInfo['text'] ?>
                <!--                                    <span class="badge badge-success">6</span>-->
            </a>
            <div id="<?= $mainMenuKey ?>" class="collapse submenu">
                <ul class="nav flex-column">
                    <?php foreach ($menuInfo['submenu'] as $subMenuKey => $subMenuKeyInfo): ?>
                        <li class="nav-item">
                            <a href="/admin_panel/<?= $mainMenuKey ?>/<?= $subMenuKeyInfo['link'] ?>" class="nav-link">
                                <?= $subMenuKeyInfo['text'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </li>
    <?php endforeach; ?>
</ul>