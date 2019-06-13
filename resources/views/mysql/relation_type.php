<h1>Типы связей</h1>
<p>Источники&raquo;
    <a class="btn btn-secondary" target="_blank" href="https://devionity.com/ru/courses/mysql-fundamentals/1-1-relation" role="button">
        devionity
    </a>
</p>
<p>Связи таблиц могут быть трех типов: </p>
<ul>
    <li>
        один к одному
    </li>
    <li>один ко многим</li>
    <li>многие ко многим</li>
</ul>

<h2>Один к одному</h2>
<p>
    Этот тип связи означает, что одной записи из таблицы А может соответствовать 0 или 1 запись из таблицы B.
</p>
<p>
    Рассмотрим пример. Пусть необходимо составить распределение водителей по машинам - какой водитель будет водить какую
    машину (за время одной смены). Ясно, что водитель может либо быть выходным (без машины), либо получить в свое
    распоряжение лишь одну. Он не может водить две машины одновременно.
</p>
<pre>
    <code>
        drivers
        +----+--------+
        | id | driver |
        +----+--------+
        |  1 | Mike   |
        |  2 | Bob    |
        |  3 | Tod    |
        |  4 | Johnny |
        |  5 | Steve  |
        +----+--------+

        cars
        +----+------------+-----------+
        | id | car        | driver_id |
        +----+------------+-----------+
        |  1 | Ford Focus |         5 |
        |  2 | Kia Ceed   |         3 |
        |  3 | BMW 7      |         4 |
        |  4 | Smart      |         1 |
        +----+------------+-----------+
    </code>
</pre>
<h2>Один ко многим</h2>
<p>
    Связь один ко многим означает, что отдельной записи в таблице А может соответствовать 0 или более записей в таблице
    В.
</p>
<p>
    Рассмотрим пример. В таблице brands мы сохраним список брендов, а в таблице cars_stock мы сохраним
    список машин, которые в данным момент есть в наличии для продажи. Наполненные таблицы будут иметь следующий вид
</p>
<pre>
    <code>
        brands
        +----+----------+
        | id | brand    |
        +----+----------+
        |  1 | BMW      |
        |  2 | Audi     |
        |  3 | Kia      |
        |  4 | Mercedes |
        +----+----------+

        cars_stock
        +----+---------+----------+
        | id | model   | brand_id |
        +----+---------+----------+
        |  1 | Ceed    |        3 |
        |  2 | A6      |        2 |
        |  3 | B class |        4 |
        |  4 | A class |        4 |
        |  5 | Q7      |        2 |
        +----+---------+----------+
    </code>
</pre>
<p>
    Как видно из этого примера, каждому бренду может соответствовать несколько моделей. Это и есть связь один ко многим.
</p>
<h2>Многие ко многим</h2>
<p>
    Связь многие ко многим означает, что одной записи в таблице А может соответствовать 0 или более записей из таблицы
    В, и наоборот - одной записи в таблице B может соответствовать 0 или более записей из таблицы А. Сразу необходимо
    отметить, чтодля моделирования связи многие ко многим необходимо использовать три таблицы, а не две (как для 1-1 и
    1-многим).
</p>
<p>
    Рассмотрим пример. Пусть нам необходимо смоделировать учет студентов, которые посещают курсы языков
    программирования. Каждый студент может посещать любое количество курсов. Это значит, что нам необходимо сохранить
    все возможные комбинации: какие курсы посещает каждый студент.
</p>
<pre>
    <code>
        student
        +----+-------+
        | id | name  |
        +----+-------+
        |  1 | Andy  |
        |  2 | John  |
        |  3 | Bob   |
        |  4 | Marie |
        +----+-------+

        Создадим таблицу с курсами:

        course
        +----+--------+
        | id | name   |
        +----+--------+
        |  1 | Python |
        |  2 | PHP    |
        |  3 | Ruby   |
        |  4 | C++    |
        +----+--------+

        Для учета того, какой студент куда ходит, создадим таблицу с комбинациями:

        student_course
        +----+------------+-----------+
        | id | student_id | course_id |
        +----+------------+-----------+
        |  1 |          1 |         2 |
        |  2 |          1 |         1 |
        |  3 |          2 |         4 |
        |  4 |          4 |         2 |
        |  5 |          4 |         4 |
        +----+------------+-----------+
    </code>
</pre>