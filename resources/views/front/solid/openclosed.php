<div class="header p-3 m-2">
    <h2>Принцип открытости/закрытости (Open-closed)</h2>
</div>
<div class="content shadow-lg p-5 m-2 bg-white rounded">
    <p class="alert alert-primary">
        Программные сущности (классы, модули, функции) должны быть открыты для расширения, но закрыты для модификации.На
        более простых словах это
        можно описать так — все классы, функции и т.д. должны проектироваться так,
        чтобы для изменения их поведения, нам не нужно было изменять их исходный код.
    </p>
    <p>
        Рассмотрим пример:
        <a class="btn btn-secondary" target="_blank" href="https://medium.com/webbdev/solid-4ffc018077da" role="button">
            medium&raquo;
        </a>
    </p>
    <p>
        Представим, что у нас есть магазин. Мы даём клиентам скидку в 20%, используя такой класс :
    </p>
    <pre>
        <code class="php">
            <?= $content; ?>
        </code>
    </pre>
    <p>
        Рассмотрим еще один пример:
        <a class="btn btn-secondary" target="_blank" href="https://habr.com/ru/post/208442/" role="button">
            Habr&raquo;
        </a>
    </p>

    <pre>
        <code class="php">
            <?= $content2; ?>
        </code>
    </pre>
</div>
