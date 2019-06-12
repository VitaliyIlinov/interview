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
            <b>Воркеры очереди</b> - длительные процессы и хранят в памяти состояние загруженного приложения.(создает
            екземпляр класса и хранить его в памяти) В результате, они не заметят изменений в вашей базе кода после
            своего запуска. Поэтому самый простой способ развернуть приложения используя воркеры очереди - перезагрузить
            воркеров во время процесса развертывания
        </p>
        <b>For supervisor </b>supervisorctl restart < name > || service supervisor restart
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
<a href="#workers3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Очереди-воркеры
</a>
<div class="collapse multi-collapse" id="workers3">
    <div class="card card-body">
        <p>
            Очередь записывает в <b>сторендж</b>(РЕДИС,МУСКУЛЬ).<br>
            <b>Демон</b> - длительные процессы(фоновые циклы) которые дергают обработчики(воркеры),а они дергают
            сторендж,которые были кинуты извне(в очередь кинутые).
            <br>
            супервизор следить за демоном,потомучто пхп демон падает,супервизор его перезапускает.
        </p>
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
        Стандарты рекоммендаций PHP
        <ul>
            <li>PSR-1 — основной стандарт написания кода.</li>
            <li>PSR-2 — руководство по стилю написания кода.</li>
            <li>PSR-3 — описание единого интерфейса для ведения логирования.</li>
            <li>PSR-4 — стандарт автозагрузки.</li>
            <li>PSR-6 — стандарт интерфейсов кеширования.</li>
            <li>PSR-7 — стандарт интерфейса HTTP-сообщений.</li>
            <li>PSR-11 — стандарт контейнера интерфейсов.</li>
            <li>PSR-15 — стандарт гиперссылок.</li>
            <li>PSR-16 — стандарт простого кеширования.</li>
        </ul>
        <a target="_blank" class="btn btn-secondary"
           href="https://world-hello.ru/php/psr/about-psr.html">
            https://world-hello.ru/php/psr/about-psr.html
        </a>
        <br>
        <a target="_blank" class="btn btn-secondary"
           href="https://www.php-fig.org/psr/">
            https://www.php-fig.org/psr/
        </a>

    </div>
</div>
<a href="#psr2" data-toggle="collapse" class="list-group-item list-group-item-action">
    PSR-4 (Autoload),PSR-2 (Coding Style Guide) зачем нужен и что решает?
</a>
<div class="collapse multi-collapse" id="psr2">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary"
           href="https://www.php-fig.org/psr/">
            https://www.php-fig.org/psr/
        </a>
        <br>
        <a target="_blank" class="btn btn-secondary"
           href="https://art-lemon.com/chto-takoe-php-fig">
            https://art-lemon.com/chto-takoe-php-fig
        </a>
    </div>
</div>

<hr>
PHP: Base (типы данных, type hint, global vars)
<hr>
<a href="#base1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие типы данных PHP?
</a>
<div class="collapse multi-collapse" id="base1">
    <div class="card card-body">
        Bool, int, float, string, array, object, callback, iterable,resource,null
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.types.intro.php">
            www.php.net
        </a>
    </div>
</div>
<a href="#base2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое type hinting?
</a>
<div class="collapse multi-collapse" id="base2">
    <div class="card card-body">
        type-hint ("намек на тип") -- указание на ожидаемый тип значения (например, для входных аргументов функции).
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.oop5.typehinting.php">
            www.php.net
        </a>
    </div>
</div>
<a href="#base3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Чем отличается isset от empty?
</a>
<div class="collapse multi-collapse" id="base3">
    <div class="card card-body">
        <p>
            <b>isset</b> — Определяет, была ли установлена переменная значением, отличным от <b>NULL</b>
        </p>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/function.isset.php">
            www.php.net isset
        </a>
        <br>
        <p>

            <b>empty</b> — Проверяет, пуста ли переменная.
        </p>
        <br>
        Следующие значения воспринимаются как пустые:
        <ul>
            <li>"" (пустая строка)</li>
            <li>0 (целое число)</li>
            <li>0.0 (число с плавающей точкой)</li>
            <li>"0" (строка)</li>
            <li>NULL</li>
            <li>FALSE</li>
            <li>array() (пустой массив)</li>
        </ul>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/function.empty.php">
            www.php.net empty
        </a>
    </div>
</div>
<a href="#base4" data-toggle="collapse" class="list-group-item list-group-item-action">
    >Какие суперглобальные переменные в PHP знаешь?
</a>
<div class="collapse multi-collapse" id="base4">
    <div class="card card-body">
        $_SERVER, $_GET, $_POST, $_REQUEST, $_COOKIE, $_SESSION, $_FILES, $_ENV, $GLOBALS
        <br>
        $_REQUEST — Переменные HTTP-запроса.Ассоциативный массив (array), который по умолчанию содержит данные
        переменных $_GET, $_POST и $_COOKIE.
        <a target="_blank" class="btn btn-secondary"
           href="https://www.php.net/manual/ru/language.variables.superglobals.php">
            www.php.net
        </a>
    </div>
</div>
<a href="#base5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как получить тело PUT-запроса в PHP?
</a>
<div class="collapse multi-collapse" id="base5">
    <div class="card card-body">
        php:// — Доступ к различным потокам ввода-вывода
        file_get_contents('php://input ');
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/wrappers.php.php">
            www.php.net
        </a>
    </div>
</div>

<hr>
PHP: Common (session, exceptions)
<hr>

<a href="#common1" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем разница между include и require в PHP?
</a>
<div class="collapse multi-collapse" id="common1">
    <div class="card card-body">
        Конструкция include выдаст предупреждение уровня E_WARNING, если не сможет найти файл; поведение отлично от
        require, который выдаст фатальную ошибку уровня E_COMPILE_ERROR.
    </div>
</div>

<a href="#common2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Exception vs Throwable?
</a>
<div class="collapse multi-collapse" id="common2">
    <div class="card card-body">
        Exception — это базовый класс для всех исключений в PHP 5 и базовый класс для всех пользовательских исключений в
        PHP 7.
        <br>
        Throwable является родительским интерфейсом для всех объектов, выбрасывающихся с помощью выражения throw в PHP
        7, включая классы Error( базовый класс для всех внутренних ошибок PHP) и Exception.
    </div>
</div>
<a href="#common3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как работает сессия в PHP? Где она хранится? Как связывается браузер с сессией.
</a>
<div class="collapse multi-collapse" id="common3">
    <div class="card card-body">
        Сессии являются простым способом хранения информации для отдельных пользователей с уникальным идентификатором
        сессии.Это может использоваться для сохранения состояния между запросами страниц. Идентификаторы сессий обычно
        отправляются браузеру через сессионный cookie и используются для получения имеющихся данных сессии.
        <br>
        По умолчанию PHP использует внутренний обработчик files для сохранения сессий, который установлен в
        INI-переменной session.save_handler. Этот обработчик сохраняет данные на сервере в директории, указанной в
        конфигурационной директиве session.save_path.
        <br>
        Сессии могут запускаться вручную с помощью функции session_start(). Если директива session.auto_start
        установлена в 1, сессия автоматически запустится, в начале запроса.
        <br>
        Существуют два метода передачи идентификатора сессии:
        <ul>
            <li>Cookies</li>
            <li>Индефикатор через параметр URL</li>
        </ul>
        <br>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/session.examples.basic.php">
            www.php.net
        </a>
        <br>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/session.idpassing.php">
            www.php.net
        </a>
    </div>
</div>
<a href="#common4" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем разница между сессией и кукой?
</a>
<div class="collapse multi-collapse" id="common4">
    <div class="card card-body">
        Cookies - это механизм хранения данных браузером,которые храняться на стороне клиента
        <br>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/features.cookies.php">
            www.php.net
        </a>
        <br>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/session.idpassing.php">
            www.php.net
        </a>
    </div>
</div>
<a href="#common5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как можно использовать наследование исключений?
</a>
<div class="collapse multi-collapse" id="common5">
    <div class="card card-body">

    </div>
</div>

<hr>
PHP: OOP (interfaces, traits)
<hr>

<a href="#oop1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что мы описываем в Interface: сигнатуры методов, методы, константы? Какие области видимости мы можем использовать в
    Interface: public, protected, private?
</a>
<div class="collapse multi-collapse" id="oop1">
    <div class="card card-body">
        Интерфейсы объектов позволяют создавать код, который указывает, какие методы должен реализовать класс, без
        необходимости определять, как именно они должны быть реализованы.
        <br>
        Интерфейсы объявляются так же, как и обычные классы, но с использованием ключевого слова interface вместо class.
        Тела методов интерфейсов должны быть пустыми.
        <br>
        Все методы, определенные в интерфейсах должны быть общедоступными, что следует из самой природы интерфейса.
        <br>
        Обратите внимание, что возможно объявить конструктор в интерфейсе. Это может быть полезно для некоторых задач,
        например при реализации фабрик.
        <br>
        Интерфейс, совместно с контролем типов, предоставляет отличный способ проверки того, что определенный объект
        содержит определенный набор методов
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.oop5.interfaces.php">
            www.php.net
        </a>
    </div>
</div>
<a href="#oop2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие магические методы ты знаешь?
</a>
<div class="collapse multi-collapse" id="oop2">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="/php/class_object_oop">
            www.php.net
        </a>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.oop5.magic.php">
            own
        </a>
    </div>
</div>

<a href="#oop3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужны Traits в PHP? Есть же абстрактный класс.
</a>
<div class="collapse multi-collapse" id="oop3">
    <div class="card card-body">
        Traits - это механизм обеспечения повторного использования кода в языках с поддержкой только одиночного
        наследования, таких как PHP. Трейт предназначен для уменьшения некоторых ограничений одиночного наследования,
        позволяя разработчику повторно использовать наборы методов свободно, в нескольких независимых классах и
        реализованных с использованием разных архитектур построения классов. Семантика комбинации трейтов и классов
        определена таким образом, чтобы снизить уровень сложности, а также избежать типичных проблем, связанных с
        множественным наследованием и смешиванием.
        <br>
        <h3>Приоритет</h3>
        Наследуемый член из базового класса переопределяется членом, находящимся в трейте. Порядок приоритета следующий:
        члены из текущего класса переопределяют методы в трейте, которые в свою очередь переопределяют унаследованные
        методы
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.oop5.traits.php">
            own
        </a>
    </div>
</div>

<a href="#oop4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужен Interface? Есть же абстрактный класс.
</a>
<div class="collapse multi-collapse" id="oop4">
    <div class="card card-body">
        Абстрактный класс нужен, когда нужно семейство классов, у которых есть много общего. Конечно, можно применить и
        интерфейс, но тогда нужно будет писать много идентичного кода.
        <br>
        Интерфейс представляет собой контракт для взаимодействий
    </div>
</div>

<a href="#oop5" data-toggle="collapse" class="list-group-item list-group-item-action">
    В абстрактном классе какие области видимости можно использовать для абстрактных методов: public, protected, private?
</a>
<div class="collapse multi-collapse" id="oop5">
    <div class="card card-body">
        public, protected
        <a target="_blank" class="btn btn-secondary" href="https://php.net/manual/ru/language.oop5.abstract.php">
            php.net
        </a>
    </div>
</div>

<a href="#oop6" data-toggle="collapse" class="list-group-item list-group-item-action">
    1.Можно ли в классе переопределить метод трэйта?
    <br>
    2.Можно ли в трейте объявить константы?
    <br>
    3.Можно ли Trait использовать в Type hint?
</a>
<div class="collapse multi-collapse" id="oop6">
    <div class="card card-body">
        <p>1. ДА, Если два трейта вставляют метод с одним и тем же именем, это приводит к фатальной ошибке в случае,
            если конфликт явно не разрешен.<br>
        </p>
        <pre>
            <code class="php">
                  use A, B {
                        B::smallTalk insteadof A; //использовать метод smallTalk трейта B вместо А
                        A::bigTalk insteadof B;   //использовать метод bigTalk трейта A вместо B
                        B::bigTalk as talk;       //переименовать  метод bigTalk трейта B как talk
                        B::bigTalk as private talk; //переименовать и изменить областьвидимости метода bigTalk трейта B как talk b
                    }
            </code>
        </pre>
        <p>
            <b>Приоритет</b> -Наследуемый член из базового класса переопределяется членом, находящимся в трейте. Порядок
            приоритета следующий: члены из текущего класса переопределяют методы в трейте, которые в свою очередь
            переопределяют унаследованные методы.
        </p>
        <pre>
            <code class="php">
                  class Base {
                        public function sayHello() {
                            echo 'Hello ';
                        }
                    }

                    trait SayWorld {
                        public function sayHello() {
                            parent::sayHello();
                            echo 'World!';
                        }
                    }

                    class MyHelloWorld extends Base {
                        use SayWorld;
                    }

                    $o = new MyHelloWorld();
                    $o->sayHello(); // Hello World!
            </code>
        </pre>
        <p>2. Трейты не могут иметь констант</p>
        <p>Да, можо использовать в Type hint </p>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.oop5.traits.php">
            php.net
        </a>
    </div>
</div>

<a href="#oop7" data-toggle="collapse" class="list-group-item list-group-item-action">
    В каких случаях можно/стоить делать закрытый (private/protected) конструктор?
</a>
<div class="collapse multi-collapse" id="oop7">
    <div class="card card-body">
        Извне не возможно было создать екземпляр класса.
    </div>
</div>

<a href="#oop8" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как реализовать singleton в PHP?
</a>
<div class="collapse multi-collapse" id="oop8">
    <div class="card card-body">
        <pre>
            <code class="php">
        class TestController
        {
            public static $instance;

            private function __construct()
            {
                // приватный конструктор ограничивает реализацию getInstance ()
            }

            protected function __clone()
            {
                // ограничивает клонирование объекта
            }

            public static function getInstance()
            {
                if (!self::$instance) {
                    self::$instance = new self();
                }
                return self::$instance;
            }
        }
            </code>
        </pre>
    </div>
</div>

<hr>
PHP: Advanced (Iterators, generators, links)
<hr>
<a href="#advanced1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужен интерфейс ArrayAccess?
</a>
<div class="collapse multi-collapse" id="advanced1">
    <div class="card card-body">
        Интерфейс обеспечивает доступ к объектам в виде массивов.
        <pre>
            <code class="php">
                ArrayAccess {
                /* Методы */
                abstract public offsetExists ( mixed $offset ) : bool  // on isset($obj["key"])
                abstract public offsetGet ( mixed $offset ) : mixed   // $obj["key"]
                abstract public offsetSet ( mixed $offset , mixed $value ) : void  // $obj["key"] ='value'
                abstract public offsetUnset ( mixed $offset ) : void   // unset($obj["key"])
                }
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/class.arrayaccess.php">
            php.net
        </a>
    </div>
</div>
<a href="#advanced2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужен интерфейс Iterator?
</a>
<div class="collapse multi-collapse" id="advanced2">
    <div class="card card-body">
        Интерфейс для внешних итераторов или объектов, которые могут повторять себя изнутри.
        <pre>
            <code class="php">
               Iterator extends Traversable {
                /* Методы */
                abstract public rewind ( void ) : void    //Перемотать итератор на первый элемент
                ||
                abstract public next ( void ) : void      //Переход к следующему элементу

                abstract public valid ( void ) : bool     //Проверяет корректность||isset текущей позиции
                abstract public current ( void ) : mixed  //Возврат текущего элемента
                abstract public key ( void ) : scalar     //Возврат ключа текущего элемента
                }
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/class.iterator.php">
            php.net
        </a>
    </div>
</div>
<a href="#advanced3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как работают генераторы в PHP? Для чего это можно использовать?
    Как написать простой генератор?
</a>
<div class="collapse multi-collapse" id="advanced3">
    <div class="card card-body">
        <p>
            Генератор позволяет вам писать код, использующий foreach для перебора набора данных без необходимости
            создания массива в памяти, что может привести к превышению лимита памяти, либо потребует довольно много
            времени для его создания. Вместо этого, вы можете написать функцию-генератор, которая, по сути, является
            обычной функцией, за исключением того, что вместо возврата единственного значения, генератор может
            возвращать (yield) столько раз, сколько необходимо для генерации значений, позволяющих перебрать исходный
            набор данных.
        </p>
        <p>
            Наглядным примером вышесказанного может послужить использование функции range() как генератора. Стандартная
            функция range() должна генерировать массив, состоящий из значений, и возвращать его, что может послужить
            результатом генерации огромных массивов: например, вызов range(0, 1000000), приведёт к использованию более
            100 МБ используемой памяти.
        </p>
        <p>
            Когда функция генератор вызывается, она вернет объект встроенного класса Generator.
        </p>
        <pre>
            <code class="php">
                Generator implements Iterator {
                /* Методы */
                public current ( void ) : mixed  //получить текущее значение генератора
                public getReturn ( void ) : mixed  //Получить значение, возвращаемое генератором
                public key ( void ) : mixed //Получить ключ сгенерированного элемента
                public next ( void ) : void //Возобновить работу генератора
                public rewind ( void ) : void //Перемотать итератор
                public send ( mixed $value ) : mixed //Передать значение в генератор
                public throw ( Throwable $exception ) : mixed //Бросить исключение в генератор
                public valid ( void ) : bool //Проверка, закрыт ли итератор
                public __wakeup ( void ) : void //Callback-функция сериализации
                }
            </code>
        </pre>
        Примеры :
        <pre>
            <code class="php">
                function getLines($file) {
                    $f = fopen($file, 'r');
                    try {
                        while ($line = fgets($f)) {
                            yield $line;
                        }
                    } finally {
                        fclose($f);
                    }
                }

                foreach (getLines("file.txt") as $n => $line) {
                    if ($n > 5) break;
                    echo $line;
                }

                //another example

                function gen_one_to_three() {
                    echo 55; //one time
                    for ($i = 1; $i <= 3; $i++) {
                        // Обратите внимание, что $i сохраняет свое значение между вызовами.
                        yield $i;
                    }
                }
                foreach (gen_one_to_three() as $value) {
                    echo "$value\n";
                }
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary"
           href="https://www.php.net/manual/ru/language.generators.overview.php">
            php.net
        </a>
    </div>
</div>
<a href="#advanced4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как меняется поведение PHP если включить Strict Mode?
</a>
<div class="collapse multi-collapse" id="advanced4">
    <div class="card card-body">
        <b>declare(strict_types=1);</b> <br>
        Строгая типизация. Не преобразовывает типы.
        <a target="_blank" class="btn btn-secondary"
           href="https://www.php.net/manual/ru/functions.arguments.php#functions.arguments.type-declaration.strict">
            php.net
        </a>
    </div>
</div>

<a href="#advanced5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие побитовые операции ты знаешь
</a>
<div class="collapse multi-collapse" id="advanced5">
    <div class="card card-body">
        <ul>
            <li>$a & $b <b>И</b> Устанавливаются только те биты, которые установлены и в $a, и в $b.</li>
            <li>$a | $b <b>Или</b> Устанавливаются те биты, которые установлены в $a или в $b.</li>
            <li>$a ^ $b <b>Исключающее или</b> Устанавливаются только те биты, которые установлены либо только в $a,
                либо
                только в $b, но не в обоих одновременно.
            </li>
            <li>~ $a <b>Отрицание</b> Устанавливаются те биты, которые не установлены в $a, и наоборот.</li>
            <li>$a << $b <b>Сдвиг влево</b> Все биты переменной $a сдвигаются на $b позиций влево (каждая позиция
                подразумевает
                "умножение на 2")
            </li>
            <li>$a >> $b <b>Сдвиг вправо</b> Все биты переменной $a сдвигаются на $b позиций вправо (каждая позиция
                подразумевает "деление на 2")
            </li>
        </ul>
        AND (&), OR (|), NOT (~), XOR (^), <<, >>
        <a target="_blank" class="btn btn-secondary"
           href="https://www.php.net/manual/ru/language.operators.bitwise.php">
            php.net
        </a>
    </div>
</div>

<hr>
Frameworks Laravel
<hr>
<a href="#laravel1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужны Service Providers?
</a>
<div class="collapse multi-collapse" id="laravel1">
    <div class="card card-body">
        <p>
            Сервис-провайдеры лежат в основе первоначальной загрузки всех приложений на Laravel. И ваше приложение, и
            все базовые сервисы Laravel загружаются через сервис-провайдеры.
        </p>
        <p>
            Но что мы понимаем под "первоначальной загрузкой"? В общих чертах, мы имеем ввиду регистрацию таких вещей,
            как биндингов в IoC-контейнер (фасадов и т.д.), слушателей событий, фильтров роутов и даже самих роутов.
            Сервис-провайдеры - центральное место для конфигурирования вашего приложения.
        </p>
        <p>
            Если вы откроете файл config/app.php, поставляемый с Laravel, то увидите массив providers. В нём перечислены
            все классы сервис-провайдеров, которые загружаются для вашего приложения. Конечно, многие из них являются
            "отложенными" провайдерами, т.е. они не загружаются при каждом запросе, а только при необходимости.
        </p>
        <p>
            В этом обзоре вы узнаете, как создавать свои собственные сервис-провайдеры и регистрировать их в своём
            приложении.
        </p>
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/providers">
            http://laravel.su/docs/5.4/providers
        </a>
    </div>
</div>
<a href="#laravel2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как работает Middlewares?
</a>
<div class="collapse multi-collapse" id="laravel2">
    <div class="card card-body">
        <p>
            Посредники предоставляют удобный механизм для фильтрации HTTP-запросов вашего приложения. Например, в
            Laravel есть посредник для проверки аутентификации пользователя. Если пользователь не аутентифицирован,
            посредник перенаправит его на страницу входа в систему. Если же пользователь аутентифицирован, посредник
            позволит запросу пройти далее в приложение.
        </p>
        <p>
            Конечно, посредники нужны не только для авторизации. CORS-посредник может пригодиться для добавления особых
            заголовков ко всем ответам в вашем приложении. А посредник логов может зарегистрировать все входящие
            запросы.
        </p>
        <p>
            В Laravel есть несколько стандартных посредников, включая посредники для аутентификации и CSRF-защиты. Все
            они расположены в директории app/Http/Middleware.
        </p>
        <img class="img-fluid" src="/img/laravel/laravel-middleware.png">
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/middleware">
            http://laravel.su/docs/5.4/middleware
        </a>
    </div>
</div>
<a href="#laravel2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как работает Faсade?
</a>
<div class="collapse multi-collapse" id="laravel2">
    <div class="card card-body">
        <p>
            <b>Сервис-контейнер в Laravel</b> — это мощное средство для управления зависимостями классов и внедрения
            зависимостей. Внедрение зависимостей — это распространенный термин, который означает добавление других
            классов в этот класс через конструктор или, в некоторых случаях, метод-сеттер.
        </p>
        <p>
            Фасады предоставляют "статический" интерфейс к классам, доступным в сервис-контейнере. Laravel поставляется
            со множеством фасадов, которые предоставляют доступ практически ко всем функциям Laravel. Фасады Laravel
            служат "статическими прокси" для основополагающих классов в сервис-контейнере, предоставляя преимущество
            лаконичного, выразительного синтаксиса, сохраняя при этом большую тестируемость и гибкость по сравнению с
            обычными статическими методами.
            Все фасады Laravel определены в пространстве имен Illuminate\Support\Facades
        </p>
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/container">
            http://laravel.su/docs/5.4/container
        </a>
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/facades">
            http://laravel.su/docs/5.4/facades
        </a>
    </div>
</div>
<a href="#laravel3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Если ты хочешь после каждой созданной задачи отправлять почту тому, на кого эту задачу поставили - опиши свои
    действия.
</a>
<div class="collapse multi-collapse" id="laravel3">
    <div class="card card-body">
        Observer, Mail drivers, Queue
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/facades">
            http://laravel.su/docs/5.4/facades
        </a>
    </div>
</div>
<a href="#laravel4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Должны ли фигурировать в коде вызовы функции env()?
</a>
<div class="collapse multi-collapse" id="laravel4">
    <div class="card card-body">
        нет
    </div>
</div>

<a href="#laravel5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужны параметры роутинга?
</a>
<div class="collapse multi-collapse" id="laravel5">
    <div class="card card-body">
        захватить сегменты URI
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/routing#route-parameters">
            http://laravel.su/docs/5.4/routing#route-parameters
        </a>
    </div>
</div>

<a href="#laravel6" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как можно создать новый класс?
</a>
<div class="collapse multi-collapse" id="laravel6">
    <div class="card card-body">
        <ul>
            <li>new Class</li>
            <li>app(Class::class)</li>
            <li>DI: __construct(Class $class)</li>
        </ul>
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4">
            http://laravel.su/docs/5.4
        </a>
    </div>
</div>

<a href="#laravel7" data-toggle="collapse" class="list-group-item list-group-item-action">
    1. Если ты хочешь проверить может ли юзер изменять объект, как ты будешь это делать?
    <br>
    2. Как работают Policies?
</a>
<div class="collapse multi-collapse" id="laravel7">
    <div class="card card-body">
        1.Authorization, Policies
        <br>
        2 .Сначала мы разберем шлюзы, а затем рассмотрим политики
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/authorization">
            http://laravel.su/docs/5.4/authorization
        </a>
    </div>
</div>

<a href="#laravel8" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как можно кастомизировать ошибку валидации формы?
</a>
<div class="collapse multi-collapse" id="laravel8">
    <div class="card card-body">
        используя в form request метод messages
        <pre>
            <code class="php">
                public function messages()
                {
                    return [
                        'title.required' => 'A title is required',
                        'body.required'  => 'A message is required',
                    ];
                }
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary"
           href="http://laravel.su/docs/5.4/validation#customizing-the-error-messages">
            http://laravel.su/docs/5.4/validation#customizing-the-error-messages
        </a>
        <p>
            При необходимости, вы можете использовать свои сообщения об ошибках вместо значений по умолчанию. Существует
            несколько способов для указания кастомных сообщений. Во-первых, можно передать сообщения в качестве третьего
            аргумента в метод Validator::make:
        </p>
        <pre>
            <code class="php">
                $messages = [
                    'required' => 'The :attribute field is required.',
                ];

                $validator = Validator::make($input, $rules, $messages);
            </code>
        </pre>
        <p>
            В этом примере :attributeбудет заменен на имя проверяемого поля. Вы также можете использовать и другие
            строки-переменные. Пример:
        </p>
        <pre>
            <code class="php">
              $messages = [
                    'same'    => 'The :attribute and :other must match.',
                    'size'    => 'The :attribute must be exactly :size.',
                    'between' => 'The :attribute must be between :min - :max.',
                    'in'      => 'The :attribute must be one of the following types: :values',
                ];
            </code>
        </pre>
        <p>
            Иногда есть необходимость указать собственное сообщение для конкретного поля, это можно сделать с помощью
            синтаксиса с точкой. Просто укажите имя атрибута и текст сообщения:
        </p>
        <pre>
            <code class="php">
              $messages = [
                    'email.required' => 'We need to know your e-mail address!',
                ];
            </code>
        </pre>

        <p>
            Также можно определять сообщения в файле локализации вместо того, чтобы передавать их в валидатор напрямую.
            Для этого добавьте сообщения в массив custom файла локализации resources/lang/xx/validation.php.
        </p>
        <pre>
            <code class="php">
            'custom' => [
            'email' => [
                    'required' => 'We need to know your e-mail address!',
                ],
            ],
            </code>
        </pre>
        <p>
            Если вы хотите, чтобы :attribute был заменен на кастомное имя, можно указать в массиве attributes файле
            локализации resources/lang/xx/validation.php
        </p>
        <pre>
            <code class="php">
            'attributes' => [
            'email' => 'email address',
        ]
            </code>
        </pre>

        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/validation#custom-error-messages">
            http://laravel.su/docs/5.4/validation#custom-error-messages
        </a>

    </div>
</div>

<hr>
Базы данных
<hr>
<a href="#mysql1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие движки в MySQL ты знаешь?
</a>
<div class="collapse multi-collapse" id="mysql1">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="/mysql/engine">
            mysql/engine
        </a>
    </div>
</div>
<a href="#mysql2" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем разница между InnoDB и MyISAM в MySQL?
</a>
<div class="collapse multi-collapse" id="mysql2">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="/mysql/engine">
            mysql/engine
        </a>
    </div>
</div>
<a href="#mysql3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какую задачу решает HAVING? Чем не устраивает WHERE?
</a>
<div class="collapse multi-collapse" id="mysql3">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="/mysql/query">
            /mysql/query
        </a>
    </div>
</div>
<a href="#mysql4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое INSERT.. ON DUPLICATE KEY UPDATE... Для чего? По какому индексу проверяет уникальность записи?
</a>
<div class="collapse multi-collapse" id="mysql4">
    <div class="card card-body">
        <p>
            unique, Primary key
        </p>
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/providers">
            http://laravel.su/docs/5.4/providers
        </a>
    </div>
</div>
<a href="#mysql5" data-toggle="collapse" class="list-group-item list-group-item-action">
    При создании таблиц пишут INT(11) - что означает 11? Всегда ли 11?
</a>
<div class="collapse multi-collapse" id="mysql5">
    <div class="card card-body">
        Отображение символов в колонке
    </div>
</div>

<a href="#mysql6" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие варианты хранения md5 в базе
</a>
<div class="collapse multi-collapse" id="mysql6">
    <div class="card card-body">
        CHAR 32
    </div>
</div>

<hr>
Проектирование
<hr>
<a href="#pr1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как реализовать связь многие ко многим?Как реализовать связь один ко многим?
</a>
<div class="collapse multi-collapse" id="pr1">
    <div class="card card-body">
        Связывающея таблца
        <a target="_blank" class="btn btn-secondary" href="/mysql/relation_type">
            /mysql/relation_type
        </a>
    </div>
</div>
<a href="#pr2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие варианты хранения JSON в реляционной БД существуют. Какой вариант предпочтительнее?
</a>
<div class="collapse multi-collapse" id="pr2">
    <div class="card card-body">
        json_decode, json_encode ??????
    </div>
</div>
<a href="#pr3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Если мы храним JSON в текстовом поле, то как потом искать по какому-то полю из JSON?
</a>
<div class="collapse multi-collapse" id="pr3">
    <div class="card card-body">
        Like??????
    </div>
</div>

<hr>
MySQL Indexes
<hr>
<a href="#index1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Почему не стоит добавлять индексы сразу на каждую колонку?
</a>
<div class="collapse multi-collapse" id="index1">
    <div class="card card-body">
        Ефекта не будет + место будет занимать + условия запросов поиска надо предосмотреть
    </div>
</div>
<a href="#index2" data-toggle="collapse" class="list-group-item list-group-item-action">
    ак работают внешние ключи (foreign keys)?
</a>
<div class="collapse multi-collapse" id="index2">
    <div class="card card-body">
        ссылка на запись с другой таблицы
    </div>
</div>
<a href="#index3" data-toggle="collapse" class="list-group-item list-group-item-action">
    В каких случаях не стоит использовать индексы
</a>
<div class="collapse multi-collapse" id="index3">
    <div class="card card-body">
        когда записей мало,селективность к нулю
    </div>
</div>
<a href="#index4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Задача: Если у нас есть составной индекс по двум колонкам, и мы делаем выборку только по первой колонке, сможет ли
    MySQL использовать этот индекс? А если только по второй колонке?
</a>
<div class="collapse multi-collapse" id="index4">
    <div class="card card-body">
        очередность важна.По первому да,по второму - нет
    </div>
</div>
<a href="#index5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие типы индексов ты знаешь?
</a>
<div class="collapse multi-collapse" id="index5">
    <div class="card card-body">
        btree,hash,fulltext ?? primary/unique/key|index
    </div>
</div>
<a href="#index6" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как устроен индекс?
</a>
<div class="collapse multi-collapse" id="index6">
    <div class="card card-body">
        Файл со сотритрованной колонкой -> id строки
    </div>
</div>
<a href="#index7" data-toggle="collapse" class="list-group-item list-group-item-action">
    Нужен ли индекс на поле со значениями (0 и 1)? Почему?
</a>
<div class="collapse multi-collapse" id="index7">
    <div class="card card-body">
        селективность, количество уныкальных значений индекса/количество строк
    </div>
</div>
<a href="#index8" data-toggle="collapse" class="list-group-item list-group-item-action">
    В БД есть 1 млн записей, и 80% из них имеют одинаковое значение. Нужен ли индекс на это поле? Почему?
</a>
<div class="collapse multi-collapse" id="index8">
    <div class="card card-body">
        Если по 80 то не нужен ????
    </div>
</div>


<hr>
Transactions
<hr>
<a href="#transaction1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как работают транзакции?
</a>
<div class="collapse multi-collapse" id="transaction1">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="/mysql/useful_information">
            /mysql/useful_information
        </a>
    </div>
</div>
<a href="#transaction2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Если у меня есть две разные БД, и мне нужно консистентно что-то менять в обоих БД, могу ли я использовать
    транзакции?
</a>
<div class="collapse multi-collapse" id="transaction2">
    <div class="card card-body">
        Нет
    </div>
</div>

<hr>
Explain
<hr>
<a href="#explain1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как профилировать запросы?
</a>
<div class="collapse multi-collapse" id="explain1">
    <div class="card card-body">
        <p>
            Профилирование запросов MySQL – это полезный метод анализа общей производительности приложений на основе БД.
            Лог медленных запросов MySQL (или slow query log) — это лог, в который MySQL отправляет медленные и
            потенциально проблемные запросы. Эта функция поставляется с MySQL, но по умолчанию отключена. MySQL
            определяет, какие запросы нужно внести в этот лог, с помощью специальных переменных, которые позволяют
            профилировать запрос на основе требований к производительности приложения. Обычно в этот лог вносятся
            запросы, обработка которых занимает больше времени, и запросы, которые неправильно индексы.
            <b>/etc/mysql/mysql.conf.d/mysqld.cnf</b>
        </p>
        <pre>
            <code>
            #slow_query_log         = 1   //булево значение включающее лог
            #slow_query_log_file    = /var/log/mysql/mysql-slow.log  //путь абсолютный путь к файлу лога.
                                        Владельцем каталога должен быть пользователь mysqld, а также директория должна
                                        иметь корректные разрешения для чтения и записи. Чаще всего демон mysql работает
                                        от имени пользователя mysql.
            #long_query_time = 2 //время в секундах для проверки продолжительности запроса >2
            #log-queries-not-using-indexes  //тут не надо значение, включает сохранение запросов не использующих индексы
            #min_examined_row_limit     //указывает минимальное значение количества рядов данных для анализа. Значение
                                            1000 проигнорирует запросы возвращающие меньше 1000 рядов значений.

            </code>
        </pre>
        Изменения вступят только при очередном запуске MySQL, если вам необходимо динамическое изменение параметров,
        используйте другие методы установки переменных:
        <pre>
            <code>
                mysql> SET GLOBAL slow_query_log = 'ON';
                mysql> SET GLOBAL slow_query_log_file = '/var/log/mysql/localhost-slow.log';
                mysql> SET GLOBAL log_queries_not_using_indexes = 'ON';
                mysql> SET SESSION long_query_time = 1;
                mysql> SET SESSION min_examined_row_limit = 100;
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary" href="https://www.8host.com/blog/profilirovanie-zaprosov-mysql/">
            https://www.8host.com/blog/profilirovanie-zaprosov-mysql/
        </a>
        <a target="_blank" class="btn btn-secondary"
           href="https://devacademy.ru/article/profilirovanie-zaprosov-v-mysql/">
            https://devacademy.ru/article/profilirovanie-zaprosov-v-mysql/
        </a>
    </div>
</div>
<a href="#explain2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое Explain?
</a>
<div class="collapse multi-collapse" id="explain2">
    <div class="card card-body">
        <p>
            Когда вы выполняете какой-нибудь запрос, оптимизатор запросов MySQL пытается придумать оптимальный план
            выполнения этого запроса. Вы можете посмотреть этот самый план используя запрос с ключевым словом EXPLAIN.
            EXPLAIN – это один из самых мощных инструментов, предоставленных в ваше распоряжение для понимания
            MySQL-запросов и их оптимизации
        </p>
    </div>
</div>
<a href="#explain3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Есть запрос, который тормозит. С чего стоит начать поиск проблем?<br>
    Куда смотреть в Explain, чтобы понять, что идет не так?
</a>
<div class="collapse multi-collapse" id="explain3">
    <div class="card card-body">
        Explain
        <a target="_blank" class="btn btn-secondary" href="/mysql/useful_information">
            /mysql/useful_information
        </a>
    </div>
</div>