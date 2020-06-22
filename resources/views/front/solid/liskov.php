<div class="header p-3 m-2">
    <h2>Принцип подстановки Барбары Лисков (Liskov substitution)</h2>
</div>
<div class="content shadow-lg p-5 m-2 bg-white rounded">
    <p>
        Объекты в программе могут быть заменены их наследниками без изменения свойств программы». Своими словами я бы
        это
        сказал так
    </p>

    <p class="alert alert-primary">
        Поведение наследуемых классов не должно противоречить поведению, заданному базовым классом, то есть результат
        выполнения кода должен быть предсказуем и не изменять свойств метод.
    </p>

    <p>Источники&raquo;
        <a class="btn btn-secondary" target="_blank" href="https://habr.com/ru/post/208442/" role="button">
            Habr
        </a>
        <a class="btn btn-secondary" target="_blank"
           href="http://simple-training.com/solid-in-php/solid-3-liskovs-substitution-principle/" role="button">
            simple-training
        </a>
        Рассмотрим пример:
    </p>
    <pre>
    <code class="php">
<?= $content; ?>
    </code>
</pre>
</div>