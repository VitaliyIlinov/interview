<h2>Git Rebase: руководство по использованию</h2>
<p>Источники&raquo;
    <a class="btn btn-secondary" target="_blank" href="https://habr.com/ru/post/161009/">
        habr
    </a>
    <a class="btn btn-secondary" target="_blank" href="https://learn.javascript.ru/screencast/git">
        javascript
    </a>
</p>
<p>
    <b>Rebase</b> — с ее помощью можно переписывать историю объединить,редактировать коммиты.
</p>
<h2>REBASE -i</h2>
<p>
    Изменение коммитов - удаление,изменения,изменения порядка
<ul>
    <li>
        <b>pick,p</b> - скопировать коммит
    </li>
    <li>
        <b>reword,r</b> - изменить сообщение коммита(в редакторе который ребейз вызовет позже)
    </li>
    <li>
        <b>edit,e</b> - разширенное возможность по редактированию коммита(ребейз копирует коммиты по очереди,а edit
        заставить ребейз остановиться после копи етого коммита и можно будет редактировать)
    </li>
    <li>
        <b>squash,s</b> - изменения слить с предыдущим(обьединить). Не должен быть в первой строке
    </li>
    <li>
        <b>fixup,f</b> -тоже что и squash, но сообщение коммита при етом отбрасывается
    </li>
    <li>
        <b>exec,f</b> - -x < make test>
    </li>
    <li>
        <b>drop,d</b> - пропустить коммит
    </li>
</ul>
</p>

<h2>MERGE vs REBASE</h2>
<p>
<ul>
    <li>
        Порядок коммиттов при ребейз(при мердже в очередности в той последовательности,-слияние, в котором комитилось)
    </li>
    <li>
        не сохраняет(перезаписывает) историю коммитов
    </li>
</ul>


</p>

<p>
    У нас есть две ветки — master и feature, обе локальные, feature была создана от master в состоянии A и содержит в
    себе коммиты C, D и E. В ветку master после отделения от нее ветки feature был сделан 1 коммит B.
</p>
<img src="/img/git/rebase_1.png" class="rounded mx-auto d-block">
<p>
    После применения операции rebase master в ветке feature, дерево коммитов будет иметь вид:
</p>
<img src="/img/git/rebase_2.png" class="rounded mx-auto d-block">
<p>
    Обратите внимание, что коммиты C', D' и E' — не равны C, D и E, они имеют другие хеши, но изменения (дельты),
    которые они в себе несут, в идеале точно такие же. Отличие в коммитах обусловлено тем, что они имеют другую базу (в
    первом случае — A, во втором — B), отличия в дельтах, если они есть, обусловлены разрешением конфликтных ситуаций,
    возникших при rebase. Об этом чуть подробнее далее.
</p>

<p>
    Процесс rebase-а детально<br><br>
    Давайте теперь разберемся с механикой этого процесса, как именно дерево 1 превратилось в дерево 2?<br><br>
    Напомню, перед rebase вы находтесь в ветке feature, то есть ваш HEAD смотрит на указатель feature, который в свою
    очередь смотрит на коммит E. Идентификатор ветки master вы передаете в команду как аргумент:<br><br>
    git rebase master<br><br>
    Для начала git находит базовый коммит — общий родитель этих двух состояний. В данном случае это коммит A. Далее
    двигаясь в направлении вашего текущего HEAD git вычисляет разницу для каждой пары коммитов, на первом шаге между A и
    С, назовем ее ΔAC. Эта дельта применяется к текущему состоянию ветки master. Если при этом не возникает конфликтное
    состояние, создается коммит C', таким образом C' = B + ΔAC. Ветки master и feature при этом не смещаются, однако,
    HEAD перемещается на новый коммит (C'), приводя ваш репозитарий состояние «отделеной головы» (detached HEAD).
</p>