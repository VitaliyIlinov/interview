<h1>Типы связей</h1>
<p>Источники&raquo;
    <a class="btn btn-secondary" target="_blank" href="devionity" role="button">
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
<div class="row">
    <div class="col-xl-2">
        Drivers
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">driver</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-xl-2">
        Cars
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">car</th>
                <th scope="col">driver_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ford</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>BMW</td>
                <td>3</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Smart</td>
                <td>2</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<h2>Один ко многим</h2>
<p>
    Связь один ко многим означает, что отдельной записи в таблице А может соответствовать 0 или более записей в таблице
    В.
</p>
<p>
    Рассмотрим пример. В таблице brands мы сохраним список брендов, а в таблице cars_stock мы сохраним
    список машин, которые в данным момент есть в наличии для продажи. Наполненные таблицы будут иметь следующий вид
</p>
<div class="row">
    <div class="col-xl-2">
        Brand
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">brand</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>BMW</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Audi</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mercedes</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-xl-2">
        Model
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">model</th>
                <th scope="col">brand_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Ceed</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>A6</td>
                <td>3</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Q7</td>
                <td>2</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Q7</td>
                <td>2</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Q7</td>
                <td>2</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

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
<div class="row">
    <div class="col-xl-2">
        student
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">student</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="col-xl-2">
        Course
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>php</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>css</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>java</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>C++</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xl-2">
        student_course
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">student_id</th>
                <th scope="col">course_id</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>2</td>
                <td>3</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>2</td>
                <td>4</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>3</td>
                <td>4</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>