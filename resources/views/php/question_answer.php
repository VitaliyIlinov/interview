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
        <ul>
            <li><b>Наследование</b> — это когда класс-наследник имеет все поля и методы родительского класса, и, как
                правило,
                добавляет какой-то новый функционал или/и поля. Наследование описывается словом «является». Легковой
                автомобиль
                является автомобилем.
            </li>
            <li><b>Композиция</b> – Свойство,которое будет содержать ссылку на другой объект этого класса, когда один
                объект
                предоставляет другому свою функциональность частично или полностью. Экземпляр зависимого обьекта будет
                создаваться в конструкторе. Двигатель не существует отдельно от автомобиля. Он создается при создании
                автомобиля
                и полностью управляется автомобилем.
            </li>
            <li><b>Агрегация</b> – это когда экземпляр зависимого обьекта создается где-то в другом месте кода, и
                передается в
                конструктор в качестве параметра.
            </li>
        </ul>
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
        Это часто встречающееся решение определённой проблемы при проектировании архитектуры программ.
        <ul>
            <li><b>Проверенные решения.</b> Вы тратите меньше времени, используя готовые решения, вместо повторного
                изобретения
                велосипеда.
            </li>
            <li><b>Стандартизация кода.</b> Вы делаете меньше просчётов при проектировании, используя типовые
                унифицированные решения, так как все скрытые проблемы в них уже давно найдены.
            </li>
            <li><b>Общий программистский словарь.</b> Вы произносите название паттерна, вместо того, чтобы час объяснять
                другим программистам, какой крутой дизайн вы придумали и какие классы для этого нужны.
            </li>
        </ul>
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
        <ul>
            <li>
                <b>Порождающие</b> - Отвечают за удобное и безопасное создание новых объектов
                <ul>
                    <li><b>Фабричный метод</b> - Это способ делегирования логики создания объектов
                        дочерним классам.
                    </li>
                    <li><b>Абстрактная фабрика</b> - Это фабрика фабрик. То есть фабрика, группирующая индивидуальные,
                        но взаимосвязанные/взаимозависимые фабрики без указания для них конкретных классо
                    </li>
                    <li><b>Строитель</b> - озволяет создавать сложные объекты пошагово</li>
                    <li><b>Прототип</b> - позволяет копировать объекты, не вдаваясь в подробности их реализации</li>
                    <li><b>Одиночка</b> - гарантирует, что у класса есть только один экземпляр</li>
                </ul>
            </li>
            <li><b>Структурные</b> - облегчают проектирование, определяя простой способ реализации взаимоотношений между
                сущностями.
                <ul>
                    <li><b>Адаптер</b>- позволяет объектам с несовместимыми интерфейсами работать вместе.</li>
                    <li><b>Мост</b> Отделить абстракцию от её реализации так, что они могут изменяться независимо друг
                        от друга.
                    </li>
                    <li><b>Декоратор</b> позволяет динамически добавлять объектам новую функциональность, оборачивая их
                        в
                        полезные «обёртки».
                    </li>
                    <li><b>Реестр</b>Для реализации централизованного хранения объектов, часто используемых во всем
                        приложении,как правило, реализуется с помощью абстрактного класса только c статическими методами
                    </li>
                    <li><b>Фасад</b></li>
                    <li><b>Компоновщик (Composite)</b> - Взаимодействие с иерархической группой объектов также, как и с
                        отдельно взятым экземпляром.
                    </li>
                    <li><b>Прокси (Proxy)</b> Создать интерфейс взаимодействия с любым классом, который трудно или
                        невозможно использовать в оригинальном виде
                    </li>
                </ul>
            </li>
            <li><b>Поведенческие</b> - Решают задачи эффективного и безопасного взаимодействия между объектами
                программы.
                <ul>
                    <li>
                        <b>Цепочка обязанностей</b> - Построить цепочку объектов для обработки вызова в последовательном
                        порядке. Если один объект не может справиться с вызовом, он делегирует вызов для следующего в
                        цепи и так далее.
                    </li>
                    <li><b>Команда</b></li>
                    <li><b>Итератор</b></li>
                    <li><b>Посредник (Mediator)</b></li>
                    <li><b>Хранитель (Memento)</b></li>
                    <li><b>Наблюдатель (Observer)</b> создаёт механизм подписки, позволяющий одним объектам следить и
                        реагировать на события, происходящие в других объектах.
                    </li>
                    <li><b>Состояние (State)</b></li>
                    <li><b>Стратегия (Strategy)</b></li>
                    <li><b>Посетитель (Visitor)</b></li>
                </ul>
            </li>
        </ul>
        <a target="_blank" href="https://refactoring.guru/ru/design-patterns/catalog" class="btn btn-secondary">
            https://refactoring.guru/ru/design-patterns/catalog
        </a>
        <a target="_blank" href="https://designpatternsphp.readthedocs.io/ru/latest/Structural/Proxy/README.html"
           class="btn btn-secondary">
            designpatternsphp
        </a>
        <a target="_blank" href="https://habr.com/ru/company/mailru/blog/325492" class="btn btn-secondary">
            habr
        </a>
        <a target="_blank" href="https://habr.com/ru/post/214285/" class="btn btn-secondary">
            habr
        </a>
    </div>
</div>
<a href="#pattern2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие использовал?
</a>
<div class="collapse multi-collapse" id="pattern2">
    <div class="card card-body">
        синглетон,репозиторий,билдер
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
        <h3>PSR2</h3>
        <ul>
            <li>Файлы НЕОБХОДИМО представлять только в кодировке UTF-8 без BOM-байта.</li>
            <li>Имена классов ДОЛЖНЫ быть объявлены используя StudlyCaps.</li>
            <li>Константы класса ДОЛЖНЫ быть объявлены в верхнем регистре с подчеркиванием в качестве разделителей.</li>
            <li>Имена методов ДОЛЖНЫ быть объявлены используя camelCase.</li>
            <li>Полностью сформированное пространство имен и класс должны иметь следующую структуру \< Vendor Name>\(<
                Namespace>\)*< Class Name>
            </li>
            <li>Каждое пространство имен должно иметь пространство имен верхнего уровня ("Vendor Name").</li>
            <li>Каждый разделитель пространств имен преобразуется в DIRECTORY_SEPARATOR при загрузке из файловой
                системы.
            </li>
            <li>Полностью сформированное пространство имен и класс дополняются суффиксом .php при загрузке из файловой
                системы.
            </li>
            <li>Для оформления отступов ДОЛЖНЫ использоваться четыре пробела (но не знак табуляции).</li>
            <li>НЕДОПУСТИМО жёстко ограничивать длину строки; мягкое ограничение ДОЛЖНО составлять 120 символов; СЛЕДУЕТ
                стараться, чтобы длина строки составляла 80 символов или менее.
            </li>
            <li>После определения пространства имён (namespace) и после блока импорта пространств имён (use) ДОЛЖНА быть
                одна пустая строка.
            </li>
            <li>Открывающая фигурная скобка в определении класса ДОЛЖНА располагаться на новой строке, а закрывающая
                фигурная скобка ДОЛЖНА располагаться на следующей строке после тела класса.
            </li>
            <li>Область видимости ДОЛЖНА быть указана явно для всех свойств и методов;</li>
            <li>Константы PHP true, false и null ДОЛЖНЫ быть написаны в нижнем регистре.</li>
            <li>Ключевые слова extends и implements ДОЛЖНЫ находиться на той же строке, на которой находится имя
                класса.
            </li>
            <li></li>
        </ul>
        <h3>PSR-4</h3>
        <ul>
            <li>Полностью сформированное пространство имен и класс должны иметь следующую структуру \< Vendor Name>\(<
                Namespace>\)*< Class Name>
            </li>
            <li>Каждое пространство имен должно иметь пространство имен верхнего уровня ("Vendor Name").</li>
            <li></li>
        </ul>
        <a target="_blank" class="btn btn-secondary"
           href="http://idealcms.ru/blog/PSR-1-basic-coding-standard.html">
            http://idealcms.ru/blog/PSR-1-basic-coding-standard.html
        </a>
        <br>
        <a target="_blank" class="btn btn-secondary"
           href="https://svyatoslav.biz/misc/psr_translation/">
            https://svyatoslav.biz/misc/psr_translation/
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
        <b>Exception</b> это базовый класс для всех исключений в PHP 5 и базовый класс для всех пользовательских
        исключений в PHP 7.
        <br>
        <b>Throwable</b> является родительским интерфейсом для всех объектов, выбрасывающихся с помощью выражения throw
        в PHP7, включая классы Error( базовый класс для всех внутренних ошибок PHP) и Exception.
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
            own
        </a>
        <a target="_blank" class="btn btn-secondary" href="https://www.php.net/manual/ru/language.oop5.magic.php">
            www.php.net
        </a>
    </div>
</div>

<a href="#oop3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужны Traits в PHP? Есть же абстрактный класс.
</a>
<div class="collapse multi-collapse" id="oop3">
    <div class="card card-body">
        Они нужны для избавления от дублирования кода, ну или например для множественного наследования.
        <br>
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
        <p>Да, можо использовать в Type hint</p>
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
<a href="#laravel3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как работает Faсade?
</a>
<div class="collapse multi-collapse" id="laravel3">
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
<a href="#laravel4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Если ты хочешь после каждой созданной задачи отправлять почту тому, на кого эту задачу поставили - опиши свои
    действия.
</a>
<div class="collapse multi-collapse" id="laravel4">
    <div class="card card-body">
        Observer, Mail drivers, Queue
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/facades">
            http://laravel.su/docs/5.4/facades
        </a>
    </div>
</div>
<a href="#laravel5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Должны ли фигурировать в коде вызовы функции env()?
</a>
<div class="collapse multi-collapse" id="laravel5">
    <div class="card card-body">
        нет
    </div>
</div>

<a href="#laravel6" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужны параметры роутинга?
</a>
<div class="collapse multi-collapse" id="laravel6">
    <div class="card card-body">
        захватить сегменты URI
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/routing#route-parameters">
            http://laravel.su/docs/5.4/routing#route-parameters
        </a>
    </div>
</div>

<a href="#laravel7" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как можно создать новый класс?
</a>
<div class="collapse multi-collapse" id="laravel7">
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

<a href="#laravel8" data-toggle="collapse" class="list-group-item list-group-item-action">
    1. Если ты хочешь проверить может ли юзер изменять объект, как ты будешь это делать?
    <br>
    2. Как работают Policies?
</a>
<div class="collapse multi-collapse" id="laravel8">
    <div class="card card-body">
        1.Authorization, Policies
        <br>
        2 .Сначала мы разберем шлюзы, а затем рассмотрим политики
        <a target="_blank" class="btn btn-secondary" href="http://laravel.su/docs/5.4/authorization">
            http://laravel.su/docs/5.4/authorization
        </a>
    </div>
</div>

<a href="#laravel9" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как можно кастомизировать ошибку валидации формы?
</a>
<div class="collapse multi-collapse" id="laravel9">
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
        <ul>
            <li><b>btree</b>(хранит элементы в отсортированном порядке) -поиск по диапазонам, =, >, >=, <, <=, or
                BETWEEN operators
                <ul>
                    <li>primary</li>
                    <li>unique</li>
                    <li>key|index</li>
                    <li>FULLTEXT</li>
                </ul>
            </li>
            <li><b>hash</b> MEMORY table "=" очень быстро, не может использоваться для операций диапазонов > и <</li>
        </ul>
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
        <p>
            Колонка <b>key</b> показывает используемый индекс. Колонка <b>possible_keys</b> показывает все индексы,
            которые могут быть использованы для этого запроса. Колонка <b>rows</b> показывает число записей, которые
            пришлось прочитать базе данных для выполнения этого запроса
        </p>
        <a target="_blank" class="btn btn-secondary" href="/mysql/useful_information">
            /mysql/useful_information
        </a>
    </div>
</div>
<hr>
JOIN
<hr>
<a href="#join1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие типы JOIN ты знаешь
</a>
<div class="collapse multi-collapse" id="join1">
    <div class="card card-body">
        LEFT, RIGHT, INNER, OUTER
        <a target="_blank" class="btn btn-secondary" href="/mysql/query">
            /mysql/query
        </a>
    </div>
</div>

<a href="#join2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Если объеденить через JOIN две таблицы, при этом ни в WHERE ни в ON ничего не написав, то, что мы получим в
    результате? (SELECT a.*, b.* FROM a JOIN b)
</a>
<div class="collapse multi-collapse" id="join2">
    <div class="card card-body">
        выборка вернёт т.н. декартово произведение, в котором каждая строка одной таблицы будет сопоставлена с каждой
        строкой другой таблицы:
        <a target="_blank" class="btn btn-secondary" href="https://anton-pribora.ru/articles/mysql/mysql-join/">
            https://anton-pribora.ru/articles/mysql/mysql-join/
        </a>
    </div>
</div>

<a href="#join3" data-toggle="collapse" class="list-group-item list-group-item-action">
    У нас есть две таблицу: users и profiles. В таблицу profiles есть поле user_id. Как нам выбрать юзеров, у которых
    нет профиля?
</a>
<div class="collapse multi-collapse" id="join3">
    <div class="card card-body">
        <pre>
            <code>
                SELECT *
                FROM user
                left join profiles on user.id = profiles.user_id;
                where profiles.user_id is null

                SELECT *
                FROM user
                WHERE id NOT IN (SELECT user_id FROM profiles );

                SELECT *
                FROM user
                WHERE NOT EXISTS (SELECT user_id FROM profiles WHERE user.id=profiles.user_id);
            </code>
        </pre>
        <p>
            По скорости исполнения вариант с <b>LEFT JOIN</b> сильно проигрывает вариантам со вложеными запросами.
            Вариант с
            NOT IN всегда быстрее варианта с <b>NOT EXIST</b> в случаях, когда число записей в таблице user больше числа
            записей в таблице profiles. В противном случае, <b>NOT IN</b> оказывается быстрее только на таблицах с
            небольшим числом записей, а на больших объемах уже проигрывает <b>NOT EXIST</b>. Причем чем больше записей в
            таблице profiles тем существеннее разница в скорости выполнения.
        </p>
        <a target="_blank" class="btn btn-secondary"
           href="https://shpargalki.org.ua/146/poisk-zapisei-v-odnoi-tablitse-kotorym-net-sootvetstviya-v-drugoi-tablitse">
            https://shpargalki.org.ua/146/poisk-zapisei-v-odnoi-tablitse-kotorym-net-sootvetstviya-v-drugoi-tablitse
        </a>
    </div>
</div>

<hr>
MySQL Admin (Slow log, Backup)
<hr>
<a href="#mysql_admin1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как сделать дамп базы данных?
</a>
<div class="collapse multi-collapse" id="mysql_admin1">
    <div class="card card-body">
        <pre>
            <code>
                mysqldump -uUSER -pPASSWORD DB_NAME > FILE_NAME_TO_SAVE
                //example
                mysqldump -uroot -p123456 mydb > dump.sql
            </code>
        </pre>
        <ul>
            <li><b>uUser</b> — имя пользователя базы в формате типа -u[root]</li>
            <li>-<b>pPassword</b> — пароль пользователя в формате типа -p[123456]</li>
            <li><b>DB_NAME</b> — имя базы данных</li>
            <li><b>FILE_NAME_TO_SAVE</b> — куда сохранять дамп</li>
        </ul>
        <pre>
            <code>
            Создаём структуру базы без данных
            mysqldump --no-data - u USER -pPASSWORD DATABASE > /path/to/file/schema.sql

            Если нужно сделать дамп только одной или нескольких таблиц
            mysqldump -u USER -pPASSWORD DATABASE TABLE1 TABLE2 TABLE3 > /path/to/file/dump_table.sql

            Создаём бекап и сразу его архивируем
            mysqldump -u USER -pPASSWORD DATABASE | gzip > /path/to/outputfile.sql.gz

            Создание бекапа с указанием его даты
            mysqldump -u USER -pPASSWORD DATABASE | gzip > `date +/path/to/outputfile.sql.%Y%m%d.%H%M%S.gz`

            Заливаем бекап в базу данных
            mysql -u USER -pPASSWORD DATABASE < /path/to/dump.sql

            Заливаем архив бекапа в базу
            gunzip < /path/to/outputfile.sql.gz | mysql -u USER -pPASSWORD DATABASE
            или так
            zcat /path/to/outputfile.sql.gz | mysql -u USER -pPASSWORD DATABASE

            Создаём новую базу данных
            mysqladmin -u USER -pPASSWORD create NEWDATABASE
            </code>
        </pre>

        <a target="_blank" class="btn btn-secondary" href="https://habr.com/ru/post/105954/">
            https://habr.com/ru/post/105954/
        </a>
    </div>
</div>
<a href="#mysql_admin2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Если у нас есть подозрение, что в БД что-то тормозит, как нам найти тормозной запрос средствами БД?
</a>
<div class="collapse multi-collapse" id="mysql_admin2">
    <div class="card card-body">
        Show full proccess list
    </div>
</div>

<hr>
Модульное тестирование (Unit)
<hr>
<a href="#unit_test1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое PHPUnit?
</a>
<div class="collapse multi-collapse" id="unit_test1">
    <div class="card card-body">
        <p>
            PHPUnit – это система для юнит-тестирования приложений, написанных на языке PHP.
            <br>
            Идея юнит-тестирования состоит в том, чтобы проверять на корректность небольшие участки больших программ –
            прогонять на некоторых «хитрых» тестовых наборах данных.
        </p>
    </div>
</div>
<a href="#unit_test2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое TDD?
</a>
<div class="collapse multi-collapse" id="unit_test2">
    <div class="card card-body">
        Test drive development сначало тесты потом код(разработка через тестирование)
    </div>
</div>
<a href="#unit_test3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Mock, Fixture, Stub, Fake - в чем разница?
</a>
<div class="collapse multi-collapse" id="unit_test3">
    <div class="card card-body">
        моки - Тестовые двойники,имитируют поведение
        <br>
        стабы - заглушки,имитируют данные
        <br>
        <pre>
            <code>
                class StubTest extends TestCase
                {
                    public function testStub()
                    {
                        // Создать подставной объект для класса Observer, имитируя
                        // метод reportError()
                        $observer = $this->getMockBuilder(Observer::class)
                                         ->setMethods(['reportError'])
                                         ->getMock();

                        // Создать заглушку для класса SomeClass.
                        $stub = $this->createMock(SomeClass::class);

                        // Настроить заглушку.
                        $stub->method('doSomething')
                             ->willReturn('foo');
                                ||
                                returnValue

                        // Вызов $stub->doSomething() теперь вернёт 'foo'.
                        $this->assertSame('foo', $stub->doSomething());
                    }
                }
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary" href="https://phpunit.readthedocs.io/ru/latest/test-doubles.html">
            https://phpunit.readthedocs.io/ru/latest/test-doubles.html
        </a>
        Fake - фейковые данные
        <br>
        Фикстуры - написание кода для настройки тестового окружения в известное состояние, а затем возврат его в
        исходное состояние, когда тест будет завершён
        <br>
        Но в phpunit моки могут и то и другое
        <a target="_blank" class="btn btn-secondary" href="https://phpunit.readthedocs.io/ru/latest/fixtures.html">
            https://phpunit.readthedocs.io/ru/latest/fixtures.html
        </a>
    </div>
</div>
<a href="#unit_test4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужен Data Provider в PHPUnit?
</a>
<div class="collapse multi-collapse" id="unit_test4">
    <div class="card card-body">
        Набор входных данных для тестирования
        <pre>
            <code>
                /**
                 * @dataProvider additionProvider
                 */
                public function testAdd($a, $b, $expected)
                {
                    $this->assertSame($expected, $a + $b);
                }

                public function additionProvider()
                {
                    return [
                        [0, 0, 0],
                        [0, 1, 1],
                        [1, 0, 1],
                        [1, 1, 3]
                    ];
                }
            </code>
        </pre>
        <a target="_blank" class="btn btn-secondary"
           href="https://phpunit.readthedocs.io/ru/latest/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers">
            https://phpunit.readthedocs.io/ru/latest/writing-tests-for-phpunit.html#writing-tests-for-phpunit-data-providers
        </a>
    </div>
</div>
<a href="#unit_test5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое покрытие и как его считать? Процент покрытого кода покрытого тестами
</a>
<div class="collapse multi-collapse" id="unit_test5">
    <div class="card card-body">
        Процент покрытого кода тестами
        <a target="_blank" class="btn btn-secondary"
           href="https://phpunit.readthedocs.io/ru/latest/code-coverage-analysis.html">
            https://phpunit.readthedocs.io/ru/latest/code-coverage-analysis.html
        </a>
    </div>
</div>

<hr>
Функциональное тестирование
<hr>
<a href="#func_test1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое Codeception?
</a>
<div class="collapse multi-collapse" id="func_test1">
    <div class="card card-body">
        Либа для тестов
    </div>
</div>
<a href="#func_test2" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем отличие Unit-тестов от функциональных тестов
</a>
<div class="collapse multi-collapse" id="func_test2">
    <div class="card card-body">
        unit - определенный модуль(небольшие участки), функциональный - взаимосвязь модулей
    </div>
</div>
<a href="#func_test3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое BDD?
</a>
<div class="collapse multi-collapse" id="func_test3">
    <div class="card card-body">
        Behavior-driven development
        <br>
        BDD методология является расширением TDD в том смысле, что перед тем как написать какой-либо тест необходимо
        сначала описать желаемый результат от добавляемой функциональности на предметно-ориентированном языке. После
        того как это будет проделано, конструкции этого языка переводятся специалистами или специальным программным
        обеспечением в описание теста.
        <a target="_blank" class="btn btn-secondary" href="https://dou.ua/forums/topic/8897/">
            https://phpunit.readthedocs.io/ru/latest/code-coverage-analysis.html
        </a>
    </div>
</div>

<a href="#func_test4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое Selenium WebDriver?
</a>
<div class="collapse multi-collapse" id="func_test4">
    <div class="card card-body">
        Емиляция всего веб браузера
    </div>
</div>
<a href="#integration_test1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужно интеграционное тестирование?
</a>
<div class="collapse multi-collapse" id="integration_test1">
    <div class="card card-body">
        Интеграция со стронними сервисами
    </div>
</div>

<a href="#load_test2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое нагрузочное тестирование, и для чего оно нужно?
</a>
<div class="collapse multi-collapse" id="load_test2">
    <div class="card card-body">
        тестирования производительности, сбор показателей и определение производительности и времени отклика
    </div>
</div>
<a href="#load_test3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какими единицами можно расчитывать нагрузку?
</a>
<div class="collapse multi-collapse" id="load_test3">
    <div class="card card-body">
        Время выполнения запроса
        <br>
        Потребление оперативной памяти
        <br>
        Работа с дисковой подсистемой
        <a target="_blank" class="btn btn-secondary"
           href="https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BE%D1%87%D0%BD%D0%BE%D0%B5_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5">
            https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%B3%D1%80%D1%83%D0%B7%D0%BE%D1%87%D0%BD%D0%BE%D0%B5_%D1%82%D0%B5%D1%81%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5
        </a>
    </div>
</div>

<a href="#load_test4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие средства для проведения нагрузочного тестирования вы знаете
</a>
<div class="collapse multi-collapse" id="load_test4">
    <div class="card card-body">
        JMeter ,HP LoadRunner
    </div>
</div>
<a href="#load_test5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как провести нагрузочное тестирование таким образом, чтобы не уронить сервис, работающий в продакшене?
</a>
<div class="collapse multi-collapse" id="load_test5">
    <div class="card card-body">
        Сделать копию и погонять, увеличивать нагрузку и наблюдать за ресурсами сервера
    </div>
</div>

<hr>
Technologies
<hr>
<a href="#git0" data-toggle="collapse" class="list-group-item list-group-item-action">
    Git
</a>
<div class="collapse multi-collapse" id="git0">
    <div class="card card-body">
        Есть 3 зоны:
        <ul>
            <li>1. рабочая директория</li>
            <li>2. проиндексированная</li>
            <li>3. репозиторий</li>
        </ul>
        <p>
            1.рабочая директория - untracked
            <br>
            2. git add file
            <br>
            3. индекс - список файлов отслеживаемый системой гит
            4.git commit
            <br>
            5.репозиторий
        </p>
        <a target="_blank" class="btn btn-secondary"
           href="https://learn.javascript.ru/screencast/git#basics-first-commit">
            https://learn.javascript.ru/screencast/git#basics-first-commit
        </a>
    </div>
</div>
<a href="#git1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Чем отличается branch от pull request
</a>
<div class="collapse multi-collapse" id="git1">
    <div class="card card-body">
        Branch - ветка, pull request -запрос на применения изменение
    </div>
</div>

<a href="#git2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какими способами можно отменить предыдущий коммит?
</a>
<div class="collapse multi-collapse" id="git2">
    <div class="card card-body">
        git --amend, git reset , git revert commit
    </div>
</div>
<a href="#git3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужны команды pull и fetch? В чем разница между ними?
</a>
<div class="collapse multi-collapse" id="git3">
    <div class="card card-body">
        При использовании fetch, git собирает все коммиты из целевой ветки, которых нет в текущей ветке, и сохраняет их
        в локальном репозитории. Однако он не сливает их в текущую ветку.
        <br>
        Pull обновить и применить fetch-обновить.
        <br>
        Грубо говоря, по дефолту git pull — это шоткод для последовательности двух команд: git fetch (получение
        изменений с сервера) и git merge (сливание в локальную копию).
    </div>
</div>
<a href="#git4" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем разница между commit и push?
</a>
<div class="collapse multi-collapse" id="git4">
    <div class="card card-body">
        commit - Запись изменений в репозиторий
        <br>
        push - отправить коммиты на удаленный репозитоий
    </div>
</div>
<a href="#git5" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие типы reset ты знаешь
</a>
<div class="collapse multi-collapse" id="git5">
    <div class="card card-body">
        reset --hard LOG_HASH|HEAD - отктываеться до рабочей директории коммита, хеда
        <br>
        reset --soft LOG_HASH|HEAD - отктываеться до коммита, не трогая рабочую директорию и проидексированные файлы
        <br>
        reset --mixed LOG_HASH|HEAD - отктываеться до коммита, не трогая рабочую директорию (без git add.)
    </div>
    <a target="_blank" class="btn btn-secondary"
       href="https://learn.javascript.ru/screencast/git#reset-mixed">
        https://learn.javascript.ru/screencast/git#reset-mixed
    </a>
</div>
<a href="#git6" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое cherry-pick, и как его использовать?
</a>
<div class="collapse multi-collapse" id="git6">
    <div class="card card-body">
        Копирование коммитов<br>
        <b>git cherry-pick COMMIT_HASH</b>
        <a target="_blank" class="btn btn-secondary"
           href="https://learn.javascript.ru/screencast/git#copy-cherry-pick">
            https://learn.javascript.ru/screencast/git#copy-cherry-pick
        </a>
    </div>
</div>
<a href="#git7" data-toggle="collapse" class="list-group-item list-group-item-action">
    git reset, git revert, git rebase
</a>
<div class="collapse multi-collapse" id="git7">
    <div class="card card-body">
        git reset - отмена коммита<br>
        git rebase - отредактирование историю разработки<br>
        git revert - коммит с противополжными изменениями коммита(смотрит изменения в указаном коммите и отменяет
        изменения еще одним коммитом)<br>
    </div>
    <a target="_blank" class="btn btn-secondary"
       href="https://learn.javascript.ru/screencast/git#revert-starting-video">
        https://learn.javascript.ru/screencast/git#revert-starting-video
    </a>
</div>
<a href="#git8" data-toggle="collapse" class="list-group-item list-group-item-action">
    Когда мне стоит использовать git stash
</a>
<div class="collapse multi-collapse" id="git8">
    <div class="card card-body">
        stash - как корзина на винде удаляем и затем можно восстановить
    </div>
</div>
<a href="#git9" data-toggle="collapse" class="list-group-item list-group-item-action">
    Когда мне стоит использовать git stash
</a>
<div class="collapse multi-collapse" id="git9">
    <div class="card card-body">
        В чем разница между командами merge и rebase? Что лучше использовать?
    </div>
    <a target="_blank" class="btn btn-secondary" href="/git/rebase">
        /git/rebase
    </a>
    <a target="_blank" class="btn btn-secondary" href="https://learn.javascript.ru/screencast/git#move-rebase">
        https://learn.javascript.ru/screencast/git#move-rebase
    </a>
</div>
<a href="#git10" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем разница между командами merge и rebase? Что лучше использовать?
</a>
<div class="collapse multi-collapse" id="git10">
    merge- слияние с сохраненной историей
</div>
<hr>
Composer
<hr>
<a href="#composer1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что делает команда Install, и какие файлики ей нужны для работы?
    Что делает команда Update, и какие файлики ей нужны для работы?
</a>
<div class="collapse multi-collapse" id="composer1">
    <div class="card card-body">
        Install смотрить сначало в composer.lock затем composer.json
        <br>
        Update в composer.json
    </div>
</div>
<a href="#composer2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужен файлик composer.lock?
</a>
<div class="collapse multi-collapse" id="composer2">
    <div class="card card-body">
        Запысываються текущие версии жестко! Версии мы можем жестко указать прям в composer.json.
    </div>
</div>
<a href="#composer3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое semver (семантическое версионирование)?
</a>
<div class="collapse multi-collapse" id="composer3">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="https://semver.org/lang/ru/">
            https://semver.org/lang/ru/
        </a>
    </div>
</div>

<hr>
API: REST, oauth, HTTP-methods
<hr>
<a href="#api0" data-toggle="collapse" class="list-group-item list-group-item-action">
    HTTP методы?
</a>
<div class="collapse multi-collapse" id="api0">
    <div class="card card-body">
        <ul>
            <li><b>GET</b> запрашивает представление ресурса. Запросы с использованием этого метода могут
                только извлекать данные.
            </li>
            <li><b>HEAD</b> запрашивает ресурс так же, как и метод GET, но без тела ответа. обычно применяется для
                извлечения метаданных, проверки наличия ресурса (валидация URL) и чтобы узнать, не изменился ли он с
                момента последнего обращения.
            </li>
            <li><b>POST</b> Применяется для передачи пользовательских данных заданному ресурсу. Например, в блогах
                посетители обычно могут вводить свои комментарии к записям в HTML-форму, после чего они передаются
                серверу методом POST и он помещает их на страницу. При этом передаваемые данные (в примере с блогами —
                текст комментария) включаются в тело запроса. Аналогично с помощью метода POST обычно загружаются файлы
                на сервер.
            </li>
            <li><b>PUT</b> Применяется для загрузки содержимого запроса на указанный в запросе URI.<br>
                Фундаментальное различие методов POST и PUT заключается в понимании предназначений URI ресурсов. Метод
                POST предполагает, что по указанному URI будет производиться обработка передаваемого клиентом
                содержимого. Используя PUT, клиент предполагает, что загружаемое содержимое соответствует находящемуся
                по данному URI ресурсу.<br>
                Сообщения ответов сервера на метод PUT не кэшируются.
            </li>
            <li><b>PATCH</b> Применяется для загрузки содержимого запроса на указанный в запросе URI.</li>
            <li><b>DELETE</b> Удаляет указанный ресурс.</li>
            <li><b>OPTIONS</b> используется для описания параметров соединения с ресурсом.</li>
        </ul>
        <a target="_blank" class="btn btn-secondary" href="https://developer.mozilla.org/ru/docs/Web/HTTP/Methods">
            https://developer.mozilla.org/ru/docs/Web/HTTP/Methods
        </a>
        <a target="_blank" class="btn btn-secondary" href="https://ru.wikipedia.org/wiki/HTTP">
            https://ru.wikipedia.org/wiki/HTTP
        </a>

    </div>
</div>

<a href="#api01" data-toggle="collapse" class="list-group-item list-group-item-action">
    Коды состояния
</a>
<div class="collapse multi-collapse" id="api01">
    <div class="card card-body">
        <ul>
            <li>1xx Информирование о процессе передачи.</li>
            <li>2xx Информирование о случаях успешного принятия и обработки запроса клиента.</li>
            <li>3xx Сообщает клиенту, что для успешного выполнения операции необходимо сделать другой запрос</li>
            <li>4xx Указание ошибок со стороны клиента.</li>
            <li>5xx ошибка сервера</li>
        </ul>
        <a target="_blank" class="btn btn-secondary" href="https://developer.mozilla.org/ru/docs/Web/HTTP/Methods">
            https://developer.mozilla.org/ru/docs/Web/HTTP/Methods
        </a>
        <a target="_blank" class="btn btn-secondary" href="https://ru.wikipedia.org/wiki/HTTP">
            https://ru.wikipedia.org/wiki/HTTP
        </a>

    </div>
</div>
<a href="#api1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Принципы и соглашения в REST?
</a>
<div class="collapse multi-collapse" id="api1">
    <div class="card card-body">
        <p>
            REST — передача/изменения состояния через представления,-это архитектурный стиль, некоторое множество
            ограничений, для построения распределенных приложений.
        </p>
        <ul>
            <li><b>Конечные точки в URL имя существительное, не глагол</b>
                <ul>
                    <li>/farmers not getFarmers</li>
                    <li>/crops not getCrops</li>
                </ul>
            </li>
            <li><b>Множественное число</b>
                <ul>
                    <li>/farmers not farmer</li>
                    <li>/crops not crop</li>
                </ul>
            </li>
            <li><b>Документация</b> это документация с перечисленными в ней конечными точками, и описывающая список
                операций для каждой из них.
            </li>
            <li><b>Версия вашего приложения</b>
                <ul>
                    <li>URI версии -host/v2/farmers,host/v1/farmers</li>
                    <li>Мультимедиа версии -информации в заголовке Content-Type: application/vnd.farmers.v1+json ||
                        Accept: application/vnd.farmers.v1+json
                    </li>
                </ul>
            </li>
            <li><b>Пагинация</b>Отправка большого объема данных через HTTP не очень хорошая идея. Безусловно, возникнут
                проблемы с производительностью, поскольку сериализация больших объектов JSON станет дорогостоящей. Best
                practice является разбиение результатов на части, а не отправка всех записей сразу.
            </li>
            <li><b>Использование SSL</b> - SSL должен быть! Вы всегда должны применять SSL для своего REST приложения.
                Доступ к вашему приложения будет осуществляется из любой точки мира, и нет никакой гарантии, что к нему
                будет обеспечен безопасный доступ. С ростом числа инцидентов с киберпреступностью мы обязательно должны
                обеспечить безопасность своему приложению.
            </li>
            <li><b>Эффективное использование кодов ответов HTTP</b>
                <ul>
                    <li><b>GET</b> - Обычно используется для извлечения информации</li>
                    <li><b>POST</b> -метод наиболее широко используется для создания ресурсов</li>
                    <li><b>PUT</b> -обновление наиболее широко используется для создания ресурсов</li>
                    <li><b>DELETE</b> -обновление наиболее широко используется для удаление ресурса</li>
                    <li><b>HEAD</b> этот метод используется для запроса ресурса c сервера.</li>
                </ul>
            </li>

            <li><b>HTTP методы</b></li>
            <li>что содержится в теле самого запроса</li>
        </ul>
        <a target="_blank" class="btn btn-secondary" href="https://habr.com/ru/post/351890/">
            https://habr.com/ru/post/351890/
        </a>
    </div>
</div>

<a href="#api2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие существуют способы авторизации для API
</a>
<div class="collapse multi-collapse" id="api2">
    <div class="card card-body">
        Oauth,tokens
    </div>
</div>
<a href="#api3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужен access token в oauth? Есть ли у него время жизни?
</a>
<div class="collapse multi-collapse" id="api3">
    <div class="card card-body">
        access token - ключ (обычно просто набор символов), предъявление которого является пропуском к защищенным
        ресурсам. Обращение к ним в самом простом случае происходит по HTTPS с указанием в заголовках или в качестве
        одного из параметров полученного access token'а.
        <a target="_blank" class="btn btn-secondary" href="https://habr.com/ru/company/mailru/blog/115163/">
            https://habr.com/ru/company/mailru/blog/115163/
        </a>
    </div>
</div>
<a href="#api4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Для чего нужен refresh token в oauth? В чем его смысл? Есть ли у него время жизни?
</a>
<div class="collapse multi-collapse" id="api4">
    <div class="card card-body">
        Обычно, access token имеет ограниченный срок годности. Это может быть полезно, например, если он передается по
        открытым каналам. Чтобы не заставлять пользователя проходить авторизацию после истечения срока действия access
        token'а, во всех перечисленных выше вариантах, в дополнение к access token'у может возвращаться еще refresh
        token. По нему можно получить access token с помощью HTTP-запроса, аналогично авторизации по логину и паролю.
        Неограничено
    </div>
</div>

<hr>
Web servers (apache, nginx, phpfpm, virtual hosts)
<hr>
<a href="#web_servers_1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужны virtual hosts?
</a>
<div class="collapse multi-collapse" id="web_servers_1">
    <div class="card card-body">
        добавление локальных хостов
    </div>
</div>
<a href="#web_servers_2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Какие принципиальные отличия между apache и nginx?
</a>
<div class="collapse multi-collapse" id="web_servers_2">
    <div class="card card-body">
        <a target="_blank" class="btn btn-secondary" href="https://ekaterinagoltsova.github.io/posts/apache-vs-nginx/">
            https://ekaterinagoltsova.github.io/posts/apache-vs-nginx/
        </a>
        <a target="_blank" class="btn btn-secondary" href="https://habr.com/ru/post/267721/">
            https://habr.com/ru/post/267721/
        </a>
    </div>
</div>
<a href="#web_servers_3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Зачем нужен phpfpm?
</a>
<div class="collapse multi-collapse" id="web_servers_3">
    <div class="card card-body">
        процес,который позволяеться выполнять пхп скрипты
        <a target="_blank" class="btn btn-secondary"
           href="https://perfect-inc.com/blog/nginx-php-fpm-i-chto-eto-voobshche/">
            https://perfect-inc.com/blog/nginx-php-fpm-i-chto-eto-voobshche/
        </a>
    </div>
</div>
<a href="#web_servers_4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Использовал ли встроенный в PHP вебсервер (php -S). Для чего он нужен?
</a>
<div class="collapse multi-collapse" id="web_servers_4">
    <div class="card card-body">
        встроенный сервер, созданный специально для разработки и тестирования. Теперь вы можете писать и тестировать
        свой код не имея полноценного веб-сервера
        <pre>
            <code>
                 $ cd ~/public_html
                 $ php -S localhost:8000

                 Кроме того,. вы может указать имя конкретного файла-роутера. Например:
                 php -S >localhost or your public IP>:8080 -t /home/ec2-user/public public/index.php
            </code>
        </pre>
    </div>
</div>

<hr>
Networks (TCP vs UDP, HTTP vs HTTPS, DNS, NAT)
<hr>
<a href="#network1" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем отличие между HTTPS и HTTP? Где лучше использовать HTTP, а где HTTPS? Стоит ли вообще использовать HTTP в наше
    время?
</a>
<div class="collapse multi-collapse" id="network1">
    <div class="card card-body">
        <p>
            HTTP — это протокол, в котором описаны правила передачи данных в интернете. Он помогает браузеру загружать
            веб-страницы, а серверу — получить информацию, которую пользователь ввёл на сайте.
            <br>
            HTTPS — это тот же протокол, но с надстройкой безопасности.
            По HTTP информация передаётся в обычном виде, а по HTTPS — в зашифрованном. Шифровать данные нужно, чтобы
            хакеры не смогли ничего прочитать, если перехватят их.
            <br>
            Допустим, вы проходите опрос на сайте, который работает по HTTP-протоколу. Вот вы заполнили пустые поля и
            нажали кнопку «Отправить». Браузер отправляет ваши ответы серверу. В этот момент хакер может перехватить
            информацию и прочитать, что вы там наотвечали. Вы этого даже не заметите.
            <br>
            Скорее всего, хакеров не интересуют ваши ответы на опрос. Но перехватить можно любую информацию. Например,
            ваши пароли или номер банковской карты.
            <br>
            Чтобы этого не произошло, HTTP-протокол решили усовершенствовать. К существующей технологии добавили
            шифрование и получился HTTPS — безопасный протокол передачи данных.
            <br>
            Когда вы вводите что-то на сайте, который работает по HTTPS, перед отправкой данных на сервер браузер
            зашифровывает информацию. Чтобы расшифровать и прочитать её, нужен специальный ключ, который хранится только
            на сервере. Такое шифрование называется криптографическим
        </p>
    </div>
</div>
<a href="#network2" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем отличие между TCP и UDP пакетами? Где можно использовать UDP?
</a>
<div class="collapse multi-collapse" id="network2">
    <div class="card card-body">
        Протоколы транспортного уровня.<br>
        отличие в так называемой “гарантии доставки”. TCP считается надежным,исключает потери данных, дублирование и
        перемешивание пакетов, задержки.<br>
        UDP не надо ждать ответа
        <a target="_blank" class="btn btn-secondary"
           href="https://thedifference.ru/chem-otlichaetsya-protokol-tcp-ot-udp/">
            https://thedifference.ru/chem-otlichaetsya-protokol-tcp-ot-udp/
        </a>
    </div>
</div>

<hr>
Security (XSS, CSRF, Brute-force)
<hr>
<a href="#security1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое уязвимость XSS? Как бороться?
</a>
<div class="collapse multi-collapse" id="security1">
    <div class="card card-body">
        Cross Site Sсriрting - Яваскрипты атака. В генерируемые сервером страницы внедряется непредусмотренный код
        Javascript, который будет выполнен в пользовательском браузере после открытия этой страницы.
        комменты
        <br>
        екранировать (htmlspecialchars)
    </div>
</div>
<a href="#security2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое SQL-инъекция? Как ее предотвратить?
</a>
<div class="collapse multi-collapse" id="security2">
    <div class="card card-body">
        внедрение в данные произвольного SQL кода
        екранировать (mysql_real_escape_string)
    </div>
</div>
<a href="#security3" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое CSRF? Как бороться?
</a>
<div class="collapse multi-collapse" id="security3">
    <div class="card card-body">
        Сross Site Request Forgery — «межсайтовая подделка запроса»,Если жертва заходит на сайт, созданный
        злоумышленником, от её лица тайно отправляется запрос на другой сервер/<br>
        Каждый раз обновляться токен CSRF
    </div>
</div>
<a href="#security4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как правильно хранить пароли? Чем плох md5?
</a>
<div class="collapse multi-collapse" id="security4">
    <div class="card card-body">
        md5(md5($pass).md5($salt))
        мдп5-перебер
        <pre>
            <code>
                $hash = crypt('password'); // crypt генерирует соль и хэширует, используя алгоритм по умолчанию
                // crypt извлекает соль из существующего хэша и хэширует входящий пароль с её использованием
                if (crypt($password, $hash) == $hash) {
                   // Пароль верен
                }

                || hash_hmac ( string $algo , string $data , string $key [, bool $raw_output = FALSE ] ) : string
                //algo - Имя выбранного алгоритма хеширования (например, "md5", "sha256", "haval160,4" и т.д.)
                //key - Общий секретный ключ, используемый для генерации HMAC хеш-кода.
            </code>
        </pre>
    </div>
</div>
<a href="#security4" data-toggle="collapse" class="list-group-item list-group-item-action">
    Что такое Brute-force, и как с ним бороться
</a>
<div class="collapse multi-collapse" id="security4">
    <div class="card card-body">
        Перебор, количество считать
    </div>
</div>

<hr>
Redis and Memcached
<hr>
<a href="#cache1" data-toggle="collapse" class="list-group-item list-group-item-action">
    Стоит ли в кеш ложить данные размером в 2 МБ?
</a>
<div class="collapse multi-collapse" id="cache1">
    <div class="card card-body">
        нет,не поддерживает
    </div>
</div>
<a href="#cache2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Стоит ли в кеш ложить данные размером в 2 МБ?
</a>
<div class="collapse multi-collapse" id="cache2">
    <div class="card card-body">
        нет,не поддерживает,макс 1 мб
    </div>
</div>

<a href="#cache3" data-toggle="collapse" class="list-group-item list-group-item-action">
    В чем принципиальное отличие между Redis и Memcached? Где нам лучше использовать Redis, а где Memcached?
</a>
<div class="collapse multi-collapse" id="cache3">
    <div class="card card-body">
        мемкеш- сет,гет,делить,и только стр ложить.Если память полная -вытисняет
        Редис — типы данных разные ложить,ложить на диск если много значей
    </div>
</div>
