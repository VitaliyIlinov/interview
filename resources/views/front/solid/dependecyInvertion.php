<div class="header p-3 m-2">
    <h2>Принцип инверсии зависимостей (Dependency Invertion)</h2>
</div>
<div class="content shadow-lg p-5 m-2 bg-white rounded">
    <p class="alert alert-primary">
        Высокоуровневые модули не должны зависеть от низкоуровневых. Оба вида модулей должны зависеть от абстракций.
    </p>
    <p class="alert alert-primary">
        Абстракции не должны зависеть от подробностей. Подробности должны зависеть от абстракций.
    </p>
    <p>
        Проще говоря: зависьте от абстракций, а не от чего-то конкретного.
    </p>
    <p>
        Применяя этот принцип, одни модули можно легко заменять другими, всего лишь меняя модуль зависимости, и тогда
        никакие перемены в низкоуровневом модуле не повлияют на высокоуровневый.
    </p>
    <p>Источники&raquo;
        <a class="btn btn-secondary" target="_blank" href="https://habr.com/ru/company/mailru/blog/412699/"
           role="button">
            https://habr.com/ru/company/mailru/blog/412699/
        </a>
        <a class="btn btn-secondary" target="_blank" href="https://habr.com/ru/post/208442/" role="button">
            https://habr.com/ru/post/208442/
        </a>
        Рассмотрим пример:
    </p>
    <pre>
    <code class="php">
<?= $content; ?>
    </code>
</pre>
</div>
