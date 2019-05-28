<h2>Принцип открытости/закрытости (Open-closed)</h2>
<p> Программные сущности должны быть открыты для расширения, но закрыты для модификации.Каждый класс должен решать лишь
    одну задачу.На более простых словах это можно описать так — все классы, функции и т.д. должны проектироваться так,
    чтобы для изменения их поведения, нам не нужно было изменять их исходный код.
</p>
<p>
    Класс должен быть ответственен лишь за что-то одно. Если класс отвечает за решение нескольких задач, его подсистемы,
    реализующие решение этих задач, оказываются связанными друг с другом. Изменения в одной такой подсистеме ведут к
    изменениям в другой.
</p>
<p>
    Рассмотрим пример:
    <a class="btn btn-secondary" target="_blank" href="https://medium.com/webbdev/solid-4ffc018077da" role="button">
        Источник&raquo;
    </a>
</p>
<pre>
    <code class="php">
<?= $content; ?>
    </code>
</pre>