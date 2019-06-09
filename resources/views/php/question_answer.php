<a href="/solid/single_responsibility" target="_blank" class="list-group-item list-group-item-action">
    Solid.<br>
    Что такое программирование на основе интерфейса. Нужен пример.
</a>
<a href="#solid1" data-toggle="collapse" target="_blank" class="list-group-item list-group-item-action">
    В чем основной смысл принципа инверсии зависимостей? Что именно мы инвертируем?
</a>
<div class="collapse multi-collapse" id="solid1">
    <div class="card card-body">
        Зависимость от абстракций, а не от чего-то конкретного. Применяя этот принцип, одни модули можно легко
        заменять другими, всего лишь меняя модуль зависимости, и тогда никакие перемены в низкоуровневом модуле не
        повлияют на высокоуровневый.
    </div>
</div>
<a href="/php/kiss_and_dry" class="list-group-item list-group-item-action">
    DRY && KISS
</a>
<a href="#a1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Нужно реализовать функционал авторизации. На какие компоненты вы бы его разделили, так, чтобы соблюсти принцип
    Single responsibility?
</a>
<div class="collapse multi-collapse" id="a1">
    <div class="card card-body">
        Валидация<br>
        Работа с БД<br>
        Чекер<br>
        Сессия<br>
    </div>
</div>
<a href="/php/class_object_oop" target="_blank" class="list-group-item list-group-item-action">
    Какие парадигмы ООП можешь назвать? (Инкапсуляция, Наследование, Полиморфизм, Абстракция)
</a>
<a href="#a2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое композиция?
</a>
<div class="collapse multi-collapse" id="a2">
    <div class="card card-body">
        В объектно-ориентированных языках программирования существует способы организации взаимодействия между
        классами.
        <br>
        <b>Наследование</b> — это когда класс-наследник имеет все поля и методы родительского класса, и, как правило,
        добавляет какой-то новый функционал или/и поля. Наследование описывается словом «является». Легковой автомобиль
        является автомобилем.
        <br>
        <b>Композиция</b> – Свойство,которое будет содержать ссылку на другой объект этого класса, когда один объект
        предоставляет другому свою функциональность частично или полностью. Экземпляр зависимого обьекта будет
        создаваться в конструкторе. Двигатель не существует отдельно от автомобиля. Он создается при создании автомобиля
        и полностью управляется автомобилем.
        <br>
        Агрегация – это когда экземпляр зависимого обьекта создается где-то в другом месте кода, и передается в
        конструктор в качестве параметра.

        <a href="https://habr.com/ru/post/354046/" target="_blank" class="btn btn-primary">
            https://habr.com/ru/post/354046/
        </a>
        <br>
        <a href="https://habr.com/ru/post/325478/" target="_blank" class="btn btn-primary">
            https://habr.com/ru/post/325478/
        </a>

    </div>
</div>
<hr>
Паттерны
<hr>
<a href="#pattern3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужны паттерны?
</a>
<div class="collapse multi-collapse" id="pattern3">
    <div class="card card-body">
        <b>Паттерн проектирования</b> — это часто встречающееся решение определённой проблемы при проектировании
        архитектуры программ.
        <a href="https://refactoring.guru/ru/design-patterns/why-learn-patterns" class="btn btn-secondary">
            https://refactoring.guru/ru/design-patterns/why-learn-patterns
        </a>
    </div>
</div>
<a href="#pattern1" data-toggle="collapse" class="list-group-item list-group-item-action" tabindex="-1">
    Какие паттерны знаешь?
</a>
<div class="collapse multi-collapse" id="pattern1">
    <div class="card card-body">
        <a href="https://refactoring.guru/ru/design-patterns/catalog" class="btn btn-secondary">
            https://refactoring.guru/ru/design-patterns/catalog
        </a>
    </div>
</div>
<a href="#pattern2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие использовал?
</a>
<div class="collapse multi-collapse" id="pattern2">
    <div class="card card-body">
        <a href="https://refactoring.guru/ru/design-patterns/catalog" class="btn btn-secondary">
            https://refactoring.guru/ru/design-patterns/catalog
        </a>
    </div>
</div>
<a href="#pattern4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какую задачу решает паттерн Внедрение зависимостей (Dependency Injection)
</a>
<div class="collapse multi-collapse" id="pattern4">
    <div class="card card-body">
        Уменьшить связность кода,также чтобы получить более тестируемый, сопровождаемый и расширяемый код.
    </div>
</div>
<a href="#pattern5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Пример использование паттерна Строитель (Builder)?
</a>
<div class="collapse multi-collapse" id="pattern5">
    <div class="card card-body">
        В системе могут существовать сложные объекты, создание которых за одну операцию затруднительно или невозможно.
        Требуется поэтапное построение объектов(cоздавать объекты пошагово).
        <br>
        Одним из лучших применений паттерна Строитель является конструктор запросов SQL.
        <br>
        <a target="_blank" href="https://refactoring.guru/ru/design-patterns/builder/php/example#example-1"
           class="btn btn-secondary">
            https://refactoring.guru/ru/design-patterns/builder/php/example#example-1
        </a>
        <br>Небольшой пример
        <a target="_blank" href="https://tproger.ru/translations/design-patterns-simple-words-1/#12"
           class="btn btn-secondary">
            https://tproger.ru/translations/design-patterns-simple-words-1/#12
        </a>
        <br>
        <pre>
            <code class="php">
                <?= str_replace(
                    '<?php',
                    '',
                    app('files')->get(
                        app()->path() . '/Models/Info/Patterns/Creational/Builder.php')
                ); ?>
            </code>
        </pre>

    </div>
</div>


<hr>
Архитектура
<hr>
<a href="#arc1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Нам нужно отдавать файл только авторизованным пользователям. Как это сделать?
</a>
<div class="collapse multi-collapse" id="arc1">
    <div class="card card-body">
        header authorisation Bearer or check is userAuth by session
    </div>
</div>
<a href="#arc2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Immutable object – в чем суть? Когда можно/нужно использовать?
</a>
<div class="collapse multi-collapse" id="arc2">
    <div class="card card-body">
        <h3>Неизменяемые объекты в PHP</h3>
        <p>
            Неизменяемыми называются объекты, чьё состояние остаётся постоянным с момента их создания. Обычно такие
            объекты очень просты.
        </p>
        При реализации неизменяемых объектов необходимо:
        <ul>
            <li>
                Объявить класс как final, чтобы его нельзя было переопределить при добавлении методов, изменяющих
                внутреннее состояние.
            </li>
            <li>
                Объявить свойства как private, чтобы опять же их нельзя было изменить.
            </li>
            <li>
                Избегать сеттеров и использовать конструктор для задания параметров.
            </li>
            <li>
                Не хранить ссылки на изменяемые объекты или коллекции. Если вы внутри неизменяемого объекта храните
                коллекцию, то она тоже должна быть неизменяемой.
            </li>
            <li>
                Проверять, что, если вам нужно модифицировать неизменяемый объект, вы делали его копию, а не
                переиспользовали существующий.
            </li>
        </ul>
        <a target="_blank" href=" https://habr.com/ru/company/mailru/blog/301004/" class="btn btn-secondary">
            https://habr.com/ru/company/mailru/blog/301004/
        </a>


    </div>
</div>
<a href="#arc3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Компонент B зависит от компонента A. Но бизнес требует, чтобы оба компонента разрабатывались одновременно. Как это
    организовать?
</a>
<div class="collapse multi-collapse" id="arc3">
    <div class="card card-body">
        <h2>В процессе</h2>
    </div>
</div>

<hr>

Workers
<hr>
<a href="#workers1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как реализовать автоматический запуск воркера (чтобы не запускать его вручную)
</a>
<div class="collapse multi-collapse" id="workers1">
    <div class="card card-body">
        <p>
            <b>Воркер</b> - это интерфейс, который позволяет подключаться и общаться с самой очередью
        </p>
        есть несколько подходов
        <ul>
            <li><b>Cron</b></li>
            <li><b>Supervisord</b> - монитор процессов</li>
        </ul>
        Для запуска нескольких копий одного процесса необходимо также указать параметр process_name для определения
        уникального имени процесса.
        <br>
        добавляется строчка process_name=%(program_name)s_%(process_num)02d, которая задает имена всех копий процесса, в
        нашем случае worker_00, worker_01 и т.д.
        <br>
        В файле конфигурации (nano /etc/supervisor/supervisord.conf), в самом низу добавляем настройки для нужного
        воркера:
        <pre>
            <code>
                [program:worker]
                command=/usr/bin/php /var/www/worker.php
                process_name=%(program_name)s_%(process_num)02d
                numprocs=10
                directory=/var/www/worker
                stdout_logfile=/var/log/worker.log
                autostart=true
                autorestart=true
                user=www-data
                stopsignal=KILL
            </code>
        </pre>
        Supervisor сам будет следить за процессами, запускать их в случае падения, а также после перезагрузки системы.
        Вы можете запускать несколько копий.

        <ul>
            <li><b>[program:worker]</b> — название процесса/воркера, к которому будут относиться все последующие
                параметры секции;
            </li>
            <li><b>command=/usr/bin/php /var/www/worker.php</b> — команда на запуск файла, то есть путь к нужному файлу;
            </li>
            <li><b>stdout_logfile=/var/log/worker.log</b> — вывод консоли в файл;</li>
            <li><b>autostart=true</b> — запуск воркера вместе с запуском supervisor;</li>
            <li><b>autorestart=true</b> — перезапуск воркера, если тот по какой-то причине упал;</li>
            <li><b>user=www-data</b> — запуск процесса под определенным пользователем;</li>
            <li><b>stopsignal=KILL</b> — сигнал остановки (убийства) процесса. Если не определяется, то используется
                команда по умолчанию — TERM;
            </li>
            <li><b>numprocs=1</b> — количество инстансов заданного воркера</li>
        </ul>
        <b>После добавления новых процессов/воркеров не забывайте перезагружать supervisor</b>
        <b>Supervisor дергает пхп скрипты(воркеры) а воркеры дергают сервер очередей</b>
    </div>
</div>
<a href="#workers2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как перезапускать воркера? В каких случаях это нужно делать?
</a>
<div class="collapse multi-collapse" id="workers2">
    <div class="card card-body">
        <p>
            <b>Воркеры очереди</b> - длительные процессы и хранят в памяти состояние загруженного приложения. В
            результате, они не заметят изменений в вашей базе кода после своего запуска. Поэтому самый простой способ
            развернуть приложения используя воркеры очереди - перезагрузить воркеров во время процесса развертывания
        </p>
        <b>For supervisor </b>ssupervisorctl restart < name > || service supervisor restart
        <br>
        <b>For cron </b>sudo service cron reload || /etc/init.d/cron reload
        <br>
        <a target="_blank" class="btn btn-secondary"
           href="https://ruhighload.com/%D0%97%D0%B0%D0%BF%D1%83%D1%81%D0%BA+%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%BE%D0%B2+%D0%B2+supervisor">
            ruhighload
        </a>
        <br>
        <a target="_blank" class="btn btn-secondary"
           href="https://badcode.ru/chto-takoie-php-ochieried-zadach/">
            ruhighload
        </a>
    </div>
</div>

<hr>
PSR
<hr>
<a href="#psr1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое PSR-стандарты и зачем они нужны?
</a>
<div class="collapse multi-collapse" id="psr1">
    <div class="card card-body">
        <h2>В процессе</h2>
    </div>
</div>
<a href="#psr2" data-toggle="collapse" class="list-group-item list-group-item-action">
    PSR-4 (Autoload) зачем нужен и что решает?
</a>
<div class="collapse multi-collapse" id="psr2">
    <div class="card card-body">
        <h2>В процессе</h2>
    </div>
</div>
<a href="#psr3" data-toggle="collapse" class="list-group-item list-group-item-action">
    PSR-2 зачем нужен и что решает?
</a>
<div class="collapse multi-collapse" id="psr3">
    <div class="card card-body">
        <h2>В процессе</h2>
    </div>
</div>
<hr>
PHP: Base (типы данных, type hint, global vars)
<hr>
<a href="#3" target="_blank" class="list-group-item list-group-item-action disabled" tabindex="-1"
   aria-disabled="true">Какие типы данных PHP?
</a>
<a href="#3" target="_blank" class="list-group-item list-group-item-action disabled" tabindex="-1"
   aria-disabled="true">Что такое type hinting?
</a>
<a href="#3" target="_blank" class="list-group-item list-group-item-action disabled" tabindex="-1"
   aria-disabled="true">Чем отличается isset от empty?
</a>
<a href="#3" target="_blank" class="list-group-item list-group-item-action disabled" tabindex="-1"
   aria-disabled="true">Какие суперглобальные переменные в PHP знаешь?
</a>
<a href="#3" target="_blank" class="list-group-item list-group-item-action disabled" tabindex="-1"
   aria-disabled="true">Как получить тело PUT-запроса в PHP?
</a>

<hr>
PHP: Common (session, exceptions)
<hr>
