<h2>Нормализация базы данных</h2>
<p>Источники&raquo;
    <a class="btn btn-secondary" target="_blank"
       href="https://devionity.com/ru/courses/mysql-fundamentals/creating-a-db" role="button">
        devionity
    </a>
</p>
<p>
    это процесс приведения способа хранения информации к наиболее оптимальному, безопасному и гибкому. Проще говоря,
    существуют несколько простых правил, которым следует следовать при моделировании базы данных. Эти правила образуют
    т.н. нормальные формы. Перечислим основные правила нормализация.
</p>
<ul>
    <li>
        В каждой таблице должен быть <b>первичный ключ.</b>
    </li>
    <li>Записи каждой таблицы не должны повторяться (это следствие предыдущего пункта).
    </li>
    <li>В одной таблице не должно быть одинаковых полей.
    </li>
    <li>НАтомарность: таблица не может содержать другую таблицу, она может содержать только конкретное значение из
        другой таблицы.
    </li>
    <li>Наличие внешнего ключа для связывания разных таблиц.</li>
</ul>

<h2>Типы данных:</h2>
<p>
    В MySQL числовые типы данных - это целые числа и числа с плавающей точкой..
</p>
<p>
    Целые числа в MySQL определяются ключевыми словами TINYINT, SMALLINT, MEDIUMINT, INT, BIGINT
</p>
<p>
    Числа с плавающей точкой в MySQL определены ключевыми словами FLOAT и DOUBLE
</p>
<p>
    Тип TINYINT определяет целые числа в диапазоне от -128 до 127 (включительно). При использовании атрибута
    UNSIGNED(без
    знака) этот диапазон будет включать числа от 0 до 255. Таким образом этот тип вмещает 28 чисел.<br>
    Остальные целочисленные типы отличаются диапазоном,Рассмотрим целочисленные типы данных
</p>
<ul>
    <li>
        SMALLINT: 216 чисел, [ -32 768 ... 32 767 ]
    </li>
    <li>
        SMALLINT UNSIGNED : [ 0 ... 65 535 ]
    </li>
    <li>
        MEDIUMINT : 224 чисел, [ -8 388 608 ... 8 388 607 ]
    </li>
    <li>
        MEDIUMINT UNSIGNED : [ 0 ... 16 777 215 ]
    </li>
    <li>
        INT : 232 чисел, [ -2 147 483 648 ... 2 147 483 647 ]
    </li>
    <li>
        INT UNSIGNED : [ 0 ... 4 294 967 295 ]
    </li>
    <li>
        BIGINT : 264 чисел, [ -9 223 372 036 854 775 808 ... 9 223 372 036 854 775 807 ]
    </li>
    <li>
        BIGINT UNSIGNED : [ 0 ... 18 446 744 073 709 551 615 ]
    </li>
</ul>

<p>
    Атрибут UNSIGNED означает неотрицательные числа. Фактически этот атрибут сдвигает диапазон так, чтобы он начинался с
    нуля
</p>
<p>
    После указания одного из этих типов допускается указание максимального количество символов для отображения этого
    числа. Этот параметр не влияет на диапазон. Например INT(3) означает что отображение этого числа будет рассчитано на
    трехзначные числа
</p>

<h2>Управление учетными записями</h2>
<p>
    Для создания пользователя используется оператор <b>CREATE USER</b>. В этом предложении необходимо также указать
    сервер и
    пароль. Базовая конструкция такого запроса выглядит так:
</p>
<pre>
    <code>
    CREATE USER 'имя_пользователя'@'сервер' IDENTIFIED BY 'пароль'
    </code>
</pre>
<p>
    Для того, чтобы просмотреть список пользователей и убедится, что мы действительно добавили нового, необходимо
    исполнить запрос
</p>
<pre>
    <code>
    SELECT user FROM mysql.user;
    </code>
</pre>
<p>
    Далее необходимо задать права доступа этому пользователю. Для этого необходимо использовать предложение GRANT, в
    котором указать к каким БД, таблицам он может обращаться и какие права доступа у него к этим БД и таблицам
    (просмотр, редактирование, удаление и т.п.):
</p>
<pre>
    <code>
    GRANT указать_права ON база_данных.таблица TO 'имя_пользователя'@'сервер'
    </code>
</pre>
Указать права можно ключевыми словами:
<ul>
    <li>
        <b>CREATE</b> - создание БД и таблиц
    </li>
    <li>
        <b>DROP</b> - удаление БД и таблиц.
    </li>
    <li>
        <b>DELETE</b> - удаление записей из таблиц.
    </li>
    <li>
        <b>INSERT</b> - добавление записей в таблицу.
    </li>
    <li>
        <b>SELECT</b> - выборки из таблиц.
    </li>
    <li>
        <b>ALL PRIVILEGES</b> - полный доступ
    </li>
    <li>
        <b>UPDATE</b> - обновление данных таблиц.
    </li>
    <li>
        <b>GRANT OPTION</b> - право назначения доступа другим пользователям
    </li>
</ul>
<p>
    Если требуется дать конкретные права для всех БД и таблиц, то можно вместо названий записать
</p>

<pre>
    <code>
GRANT SELECT ON *.* TO 'bobby'@'localhost';
    </code>
</pre>

<h2>Транзакция</h2>
<p>
    это совокупность действий системы над данными, которые либо будут исполнены в полном объеме, либо вообще не будут
    исполнены в случае сбоя в системе.
</p>
<p>
    Для старта транзакции необходимо исполнить запрос<br><br>
    <b>START TRANSACTION;</b><br>
    Далее необходимо выполнить запросы в рамках транзакции. Для окончания транзакции необходимо исполнить запрос<br>
    <b>COMMIT;</b>
</p>
<p>
    Это значит, что все что было исполнено в рамках транзакции вступит в силу. Например:
</p>
<pre>
    <code>
        START TRANSACTION;
        UPDATE teacher SET name='Hank' WHERE id = 2;
        COMMIT;
    </code>
</pre>

<h2>Конструкции IF, CASE-WHEN</h2>
<p>
    Оператор IF - это аналог тернарного оператора PHP:<br>
    IF (логическое выражение, значение-1, значение-2) вернет:<br>
    значение-1, если логическое выражение - истина,<br>
    иначе - будет возвращено значение-2.<br>
    Например,<br>
</p>
<pre>
    <code>
        SELECT IF (0 > 2, 'yes', 'nope') AS testing;
    </code>
</pre>

<p>Оператор <b>CASE</b> - это аналог оператора switch в PHP. Его конструкция выглядит следующим образом:</p>
<pre>
    <code>
        CASE val
        WHEN compare-1 THEN result-1
        [ WHEN compare-2 THEN result-2
        ...
        WHEN compare-N THEN result-N
        ELSE default-result ]
        END;
    </code>
</pre>
<pre>
    <code>
        SELECT name,
        CASE age
         WHEN 20 THEN 'is twenty'
         WHEN 21 THEN 'is tweny one'
         WHEN 22 THEN 'is twenty two'
         ELSE 'is older than 22'
        END
        AS age_test
        FROM student
        ORDER BY age;
    </code>
</pre>
<h2>Explain</h2>
<pre>
    <code>
        EXPLAIN SELECT * FROM student \G
*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: student
         type: ALL
possible_keys: NULL
          key: NULL
      key_len: NULL
          ref: NULL
         rows: 8
        Extra: NULL
1 row in set (0.00 sec)
    </code>
</pre>
<ul>
    <li>
        <b>id</b> - номер строки в таблице EXPLAIN, строк будет столько, сколько операторов SELECT в запросе.
    </li>
    <li>
        <b>select_type</b> - это тип запроса. Он говорит о том, является ли запрос простым (как в нашем случае) или же,
        к примеру, вложенным - когда используются подзапросы (SUBQUERY). Среди возможных значений также могут быть:
        <ul>
            <li><b>PRIMARY</b> - внешний запрос при соединении JOIN</li>
            <li><b>DERIVED</b> - запрос является подзапросом в предложении FROM</li>
            <li><b>DEPENDENT SUBQUERY</b> - подзапрос SELECT, который зависит от подзапроса</li>
            <li><b>UNION</b> - запрос, который записан после оператора UNION</li>
            <li><b>DEPENDENT UNION</b> - запрос, который записан после оператора UNION и зависит от подсапроса</li>
            <li><b>UNION RESULT</b> - результирующий запрос SELECT, в котором есть UNION</li>
        </ul>
    </li>
    <li>
        <b>table</b> - таблица, которая использована для запроса. Значения могут совпадать с существующими таблицами,
        либо могут принимать специальные значения, например derived если был записан запрос в предложении FROM или
        union если был использован оператор UNION
    </li>
    <li>
        <b>type</b> - то как система осуществляет соединение таблиц. Иногда говорят, что это то, как осуществляется
        доступ к значениям в таблице. Например, производился поиск по всей таблице, либо же по определенному интервалу.
        Или же поиск производился исключительно по индексу. Перечислим некоторые значения (от лучших к худшим):
        <ul>
            <li><b>system</b> - таблица имеет не более 1 строки.</li>
            <li><b>const</b> - таблица содержит не более 1 совпадения по запросу. При этом критерий поиска был составлен
                из индексов и в нем использовались лишь постоянные величины.
            </li>
            <li><b>eq_ref</b> - при соединении таблицы были использованы индексы PRIMARY или UNIQUE NOT NULL</li>
            <li><b>ref</b> - при соединении таблицы были использованы индексы</li>
            <li><b>unique_subquery</b> - это аналог ref, когда подзапрос в IN возвращает один результат при помощи
                индекса
            </li>
            <li><b>index_subquery</b> - аналог unique_subquery, но результатов больше чем 1.</li>
            <li><b>range</b> - поиск проводился в индексе по определенному промежутку. Например, при использовании
                операторов сравнения.
            </li>
            <li><b>all</b> - была использована вся таблица для поиска записей. Это наиболее плохой результат.</li>
        </ul>
    </li>
    <li>
        <b>possible_keys</b> - допустимые индексы для поиска записей
    </li>
    <li>
        <b>keys</b> - индексы, которые были использованы для запроса
    </li>
    <li>
        <b>key_len</b> -количество байт, которое занимает индекс
    </li>
    <li>
        <b>ref</b> - столбцы которые сравнивались с индексами в key
    </li>
    <li>
        <b>rows</b> - количество строк таблицы, которые исследованы для результата. Очевидно, что чем меньше это число -
        тем лучше.
    </li>
    <li>
        <b>extra</b> - дополнительная информация про запрос.
    </li>
</ul>
<p>Примеры:</p>
<div class="row">
    <div class="col-xl-6">
       <pre>
           <code>
 EXPLAIN SELECT * FROM student WHERE id > 5 \G
*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: student
         type: range
possible_keys: PRIMARY
          key: PRIMARY
      key_len: 4
          ref: NULL
         rows: 5
        Extra: Using where
1 row in set (0.01 sec)
           </code>
       </pre>
    </div>
    <div class="col-xl-6">
       <pre>
           <code>
EXPLAIN SELECT * FROM student WHERE id = 5 \G
*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: student
         type: const
possible_keys: PRIMARY
          key: PRIMARY
      key_len: 4
          ref: const
         rows: 1
        Extra: NULL
1 row in set (0.00 sec)
           </code>
       </pre>
    </div>
    <div class="col-xl-6">
       <pre>
           <code>
EXPLAIN SELECT * FROM student s JOIN `group` g ON s.group_id = g.id  \G
*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: g
         type: ALL
possible_keys: PRIMARY
          key: NULL
      key_len: NULL
          ref: NULL
         rows: 3
        Extra: NULL
*************************** 2. row ***************************
           id: 1
  select_type: SIMPLE
        table: s
         type: ref
possible_keys: group_id
          key: group_id
      key_len: 2
          ref: my_db.g.id
         rows: 1
        Extra: NULL
2 rows in set (0.00 sec)
           </code>
       </pre>
    </div>
    <div class="col-xl-6">
       <pre>
           <code>
EXPLAIN SELECT * FROM student WHERE group_id IN (SELECT id FROM `group` WHERE id > 1 )  \G
*************************** 1. row ***************************
           id: 1
  select_type: SIMPLE
        table: group
         type: index
possible_keys: PRIMARY
          key: PRIMARY
      key_len: 1
          ref: NULL
         rows: 3
        Extra: Using where; Using index
*************************** 2. row ***************************
           id: 1
  select_type: SIMPLE
        table: student
         type: ref
possible_keys: group_id
          key: group_id
      key_len: 2
          ref: my_db.group.id
         rows: 1
        Extra: NULL
2 rows in set (0.01 sec)
           </code>
       </pre>
    </div>
</div>

<p>Источники&raquo;
    <a class="btn btn-secondary" target="_blank"
       href="https://devionity.com/ru/courses/mysql-pro/stored-procedures" role="button">
        Хранимые процедуры && тригеры
    </a>
</p>
