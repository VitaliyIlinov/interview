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
        <a href=" https://habr.com/ru/company/mailru/blog/301004/" class="btn btn-secondary">
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
        <h2>В процессе</h2>
    </div>
</div>
<a href="#workers2" data-toggle="collapse" class="list-group-item list-group-item-action">
    Как перезапускать воркера? В каких случаях это нужно делать?
</a>
<div class="collapse multi-collapse" id="workers2">
    <div class="card card-body">
        <h2>В процессе</h2>
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
