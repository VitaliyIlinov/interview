Источники&raquo;
<a class="btn btn-secondary" target="_blank" href="https://devionity.com/ru/courses/mysql-fundamentals" role="button">
    devionity
</a>
<a class="btn btn-secondary" target="_blank" href="https://metanit.com/sql/mysql/2.5.php" role="button">
    metanit
</a>
<h2> Создание БД</h2>

<p><code>CREATE DATABASE my_db CHARACTER SET utf8 COLLATE utf8_general_ci ; </code></p>

<h2> Создание таблицы</h2>
<p>
<pre>
    <code>
        CREATE TABLE student (
        id INT AUTO_INCREMENT,
        name VARCHAR(30),
        age TINYINT,
        phone VARCHAR(15),
        PRIMARY KEY (id)
        );
    </code>
    </pre>
Для получения информации от созданной таблице используется оператор DESCRIBE:
<pre>
    <code>
        DESCRIBE student ;
    </code>
</pre>
</p>

<h2> Удаление БД</h2>
<pre>
    <code>
       DROP DATABASE my_db ; - удаление базы данных my_db
       DROP TABLE my_table ; - удаление таблицы my_table
    </code>
</pre>

<h2> Вставка данных: оператор INSERT</h2>
<pre>
    <code>
      INSERT INTO <таблица>  [ ( <названия полей> ) ]  VALUES ( <значения> ) ;
      INSERT INTO student VALUES ( NULL, 'Mike', 25, '345-65-78' ) ;
    </code>
</pre>
При включении названий полей в запрос, можно ограничится теми, для которых необходимо задавать значения, например:
<pre>
    <code>
      INSERT INTO student (name, age, phone) VALUES ( 'Mike', 25, '345-65-78' ) ;
    </code>
</pre>
Для вставки нескольких записей, можно указать несколько наборов значений:
<pre>
    <code>
      INSERT INTO student (name, age, phone)
      VALUES ( 'John', 27, '123-65-12' ), ( 'Bob', 23, '456-12-55' ) ;
    </code>
</pre>

<h2>Агрегатные функции</h2>
<ul>
    <li>
        <b><em>MIN(), MAX()</em></b> - минимальное максимальное значение
    </li>
    <li>
        <b><em>SUM()</em></b> - сумма значений
    </li>
    <li>
        <b><em>AVG()</em></b> - среднее значение
    </li>
    <li>
        <b><em>COUNT()</em></b> - количество значений
    </li>
</ul>
<p>
    Оператор <b>HAVING</b> - это аналог WHERE, но для групп. Предложение HAVING записывается после определения группы
    GROUP BY.
</p>

<h2>Оператор LIMIT</h2>
<p>
    Для управления количеством записей в результирующей таблице используется оператор LIMIT. Этот оператор записывается
    в самом конце запроса и имеет следующую конструкцию:
</p>
<pre>
    <code>
      SELECT ... ... ... LIMIT [offset, ] count
    </code>
</pre>
<p>
    Тут используются два параметра:
</p>
<ul>
    <li>
        <b><em>offset</em></b> - это номер строки в результирующей таблицы (от 0), от которой необходимо отсчитывать
        записи
    </li>
    <li>
        <b><em>count</em></b> - это число, которое означает то, сколько записей из результирующей таблицы необходимо
        отобрать, начиная от offset.
    </li>
</ul>
<p>
    Параметр offset не является обязательным, если его не записывать, то отсчет записей в таблице будет стартовать с
    нуля.
</p>

<h2>Общая конструкция SELECT</h2>
<pre>
    <code>
      SELECT <поля>
        FROM <таблица (или таблицы)>
        WHERE <критерий>
        GROUP BY <поля для группировки>
        HAVING <условия для групп>
        ORDER BY <поля для сортировки>
        LIMIT <параметры отбора записей>
    </code>
</pre>

<h2>Обновление данных: оператор UPDATE</h2>
<pre>
    <code>
     UPDATE таблица SET поле-1 = значение-1, поле-2 = значение-2, ... , поле-N = значение-N WHERE критерий
    </code>
</pre>

<h2>Удаление данных: оператор DELETE</h2>
<pre>
    <code>
     DELETE FROM таблица WHERE критерий
    </code>
</pre>

<h2>Редактирование структуры таблицы </h2>
<p>
    Для того, чтобы управлять структурой таблицы необходимо использовать предложение <b>ALTER TABLE</b>, которое дает
    возможность добавлять, удалять или редактировать столбцы таблицы.<br>
    Для создания новых столбцов в предложении <b>ALTER TABLE</b> используется оператор ADD после которого необходимо
    указать
    название столбца, его тип и дополнительные атрибуты, например значение поля по умолчанию.
</p>
<pre>
    <code>
    ALTER TABLE student CHANGE COLUMN test_row tr TEXT;
    ALTER TABLE student DROP COLUMN tr;
    ALTER TABLE student DROP COLUMN test_row_2;
    </code>
</pre>

<h2> Таблица по выборке</h2>
<p>
    Иногда бывает необходимо сохранить результирующую таблицу как отдельную таблицу с конкретным названием. Для этого,
    фактически, необходимо совместить операторы CREATE TABLE и SELECT - первый создаст таблицу, а второй предоставит
    результирующую таблицу как основу
</p>
<pre>
    <code>
     CREATE TABLE my_new_table AS (SELECT ... )
     CREATE TABLE test_table_2 AS (
     SELECT c.id client_id, c.name as client, GROUP_CONCAT(DISTINCT pl.name)
     FROM customers c
     JOIN orders o ON c.id = o.customer_id
     JOIN order_details od ON od.order_id = o.id
     JOIN products p ON p.id = od.product_id
     JOIN product_lines pl ON pl.id = p.product_line_id GROUP BY c.id
     )
    </code>
</pre>
<p>
    Таким образом получим таблицу под названием test_table_2 в которой будут сохранены клиенты и линейки товаров,
    которые они заказывали
</p>

<h2>Добавляем запись по выборке</h2>
<pre>
    <code>
    INSERT INTO таблица [(поле-1, поле-2, ...)] SELECT ...
    INSERT INTO test_table_2 (client_id, client) SELECT 634, 'Some guy'
    </code>
</pre>

<h2> Работа с представлениями</h2>
<p>
    Представления (Views) - это объект базы данных, который часто называют "виртуальной таблицей". В одном из предыдущих
    уроков мы рассматривали вопрос создания таблицы на основе выборки. Представление - это почти как отдельная таблица с
    результатом выборки, но она на самом деле не содержит данных. При обращении к представлению, данные извлекаются из
    обычных таблиц, но работа с представлениями происходит как с обычными таблицами.<br>
    Это удобно, если, к примеру, необходимо часто работать с определенными записями таблицы или же работать с
    соединенными таблицами, не записывая каждый раз само соединение в запросе выборки.
</p>
<pre>
    <code>
    CREATE VIEW customer_product_lines AS
    SELECT c.id client_id, c.name as client, GROUP_CONCAT(DISTINCT pl.name)
    FROM customers c
    JOIN orders o ON c.id = o.customer_id
    JOIN order_details od ON od.order_id = o.id
    JOIN products p ON p.id = od.product_id
    JOIN product_lines pl ON pl.id = p.product_line_id
    GROUP BY c.id
    </code>
</pre>
<p>
    Удобство заключается в том, что теперь для получения данных про заказчиков и их продуктовых линий мы можем написать запрос:
</p>
<pre>
    <code>
    SELECT * FROM customer_product_lines
    </code>
</pre>


<h2>Использование JOIN</h2>
<p>
    Оператор <b>JOIN</b> позволяет объединять две и более таблиц в одну (временную) таблицу для извлечения данных одним
    запросом. Для избегания избыточности и дублирования данные в базе хранятся в разных таблицах. Получить их одним
    запросом без объединения таблиц невозможно. А использование нескольких запросов — не вариант — значительно
    увеличивает время загрузки страницы. Кроме того, усложняет процесс обработки полученных данных.
</p>

<h2>INNER JOIN</h2>
<p>
    <b>INNER JOIN</b> тоже самое что и <b>JOIN</b><br>Ключевое слово <b>>INNER JOIN</b> возвращает строки, если есть
    хотя бы одно совпадение в двух таблицах
</p>
<p>Синтаксис<br>
<pre>
    <code>
        SELECT column_names [,....n]
        FROM table1
        INNER JOIN table2
        ON table1.column_name = table2.column_name
    </code>
</pre>
</p>
<p>Мы хотим получить список всех лиц,имеющих любые заказы. Пример:</p>

<div class="row">
    <div class="col-xl-2">
        Persons
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">LastName</th>
                <th scope="col">FirstName</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Jameson</td>
                <td>John</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Smith</td>
                <td>Kate</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Kristen</td>
                <td>Olya</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-xl-2">
        Orders
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">order</th>
                <th scope="col">person_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>77895</td>
                <td>3</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>44678</td>
                <td>3</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>22456</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>24562</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>34764</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xl-5">
        Запрос
        <pre>
            <code>
            SELECT Persons.LastName, Persons.FirstName, Orders.Order
            FROM Persons
            INNER JOIN Orders ON Persons.id=Orders.persons_id
            ORDER BY Persons.LastName
            </code>
        </pre>
    </div>
    <div class="col-xl-3">
        Результат
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">LastName</th>
                <th scope="col">FirstName</th>
                <th scope="col">Order</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Jameson</th>
                <td>John</td>
                <td>22456</td>
            </tr>
            <tr>
                <th>Jameson</th>
                <td>John</td>
                <td>24562</td>
            </tr>
            <tr>
                <th>Kristen</th>
                <td>Olya</td>
                <td>77895</td>
            </tr>
            <tr>
                <th>Kristen</th>
                <td>Olya</td>
                <td>44678</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<h2>LEFT JOIN</h2>
<p>
    Ключевое слово <b>LEFT JOIN</b> возвращает все строки из левой таблицы (table1), даже если нет совпадаений из
    справой таблицы(table2)
</p>
<pre>
    <code>
        SELECT column_names [,... n]
        FROM table1
        LEFT JOIN table2 ON table1.column_name = table2.column_name
    </code>
</pre>

<p>Мы хотим получить список всех персон и их заказов -если таковы имеються. Пример на предудщих таблицах orders i
    persons:</p>

<div class="row">
    <div class="col-xl-5">
        Запрос
        <pre>
            <code>
            SELECT Persons.LastName, Persons.FirstName, Orders.Order
            FROM Persons
            LEFT JOIN Orders ON Persons.id=Orders.persons_id
            ORDER BY Persons.LastName
            </code>
        </pre>
    </div>
    <div class="col-xl-3">
        Результат
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">LastName</th>
                <th scope="col">FirstName</th>
                <th scope="col">Order</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Jameson</th>
                <td>John</td>
                <td>22456</td>
            </tr>
            <tr>
                <th>Jameson</th>
                <td>John</td>
                <td>24562</td>
            </tr>
            <tr>
                <th>Kristen</th>
                <td>Olya</td>
                <td>77895</td>
            </tr>
            <tr>
                <th>Kristen</th>
                <td>Olya</td>
                <td>44678</td>
            </tr>
            <tr>
                <th>Smith</th>
                <td>kate</td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<h2>RIGHT JOIN</h2>
<p>
    Ключевое слово <b>RIGHT JOIN</b> возвращает все строки из правой таблицы (table2), даже если нет совпадаений из
    левой таблицы(table1)
</p>
<pre>
    <code>
        SELECT column_names [,... n]
        FROM table1
        RIGHT JOIN table2 ON table1.column_name = table2.column_name
    </code>
</pre>

<p>Мы хотим получить список всех заказов и персон, сделавших эти заказы,- если таковы имеются.
    Пример на предудщих таблицах orders i persons:</p>

<div class="row">
    <div class="col-xl-5">
        Запрос
        <pre>
            <code>
            SELECT Persons.LastName, Persons.FirstName, Orders.Order
            FROM Persons
            RIGHT JOIN Orders ON Persons.id=Orders.persons_id
            ORDER BY Persons.LastName
            </code>
        </pre>
    </div>
    <div class="col-xl-3">
        Результат
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">LastName</th>
                <th scope="col">FirstName</th>
                <th scope="col">Order</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>Jameson</th>
                <td>John</td>
                <td>22456</td>
            </tr>
            <tr>
                <th>Jameson</th>
                <td>John</td>
                <td>24562</td>
            </tr>
            <tr>
                <th>Kristen</th>
                <td>Olya</td>
                <td>77895</td>
            </tr>
            <tr>
                <th>Kristen</th>
                <td>Olya</td>
                <td>44678</td>
            </tr>
            <tr>
                <th></th>
                <td></td>
                <td>34764</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<h2>Обьединение таблиц UNION</h2>
<p>
    Оператор <b>UNION</b> служит для объединения таблиц, а именно для того, чтобы "дорисовать" одну результирующую
    таблицу под
    другой. Фактически это объединение двух запросов в один.
</p>
<pre>
    <code>
    SELECT name FROM student
    UNION
    SELECT name FROM teacher;
    </code>
</pre>