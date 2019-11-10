<?php $uriItems = explode('/', \app\support\Facades\Request::getServer()->get('REQUEST_URI')); ?>
<div class="page-header" id="top">
    <h2 class="pageheader-title"><?= $menu[$uriItems[2]]['submenu'][$uriItems[3]]['text'] ?></h2>
    <div class="page-breadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#" class="breadcrumb-link">
                        <?= $menu[$uriItems[2]]['text'] ?>
                    </a>
                </li>
                <li class="breadcrumb-item active"
                    aria-current="page"><?= $menu[$uriItems[2]]['submenu'][$uriItems[3]]['text'] ?></li>
            </ol>
        </nav>
    </div>
</div>
