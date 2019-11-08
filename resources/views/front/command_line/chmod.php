<div>
    <a class="btn btn-secondary" target="_blank"
       href="https://ru.wikipedia.org/wiki/Chmod" role="button">
        https://ru.wikipedia.org/wiki/Chmod
    </a>
    <h2>Chmod</h2>
    <pre>
        <code>
     chmod [options] [permissions] [file]
        </code>
    </pre>
    Опции:
    <ul>
        <li>
            <b>-R</b> рекурсивное изменение прав доступа для каталогов и их содержимого
        </li>
        <li>
            <b>-f</b> не выдавать сообщения об ошибке для файлов, чьи права не могут быть изменены.
        </li>
        <li>
            <b>-v</b> подробно описывать действие или отсутствие действия для каждого файла.
        </li>
    </ul>
</div>
<div>
    <h2>Использование команды в числовом виде</h2>
    <pre>
        <code>
     chmod 755 [permissions] [file]
        </code>
    </pre>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">владелец</th>
            <th scope="col">группа</th>
            <th scope="col">остальные</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">восьмеричное значение</th>
            <td>7</td>
            <td>5</td>
            <td>5</td>
        </tr>
        <tr>
            <th>символьная запись</th>
            <td>rwx</td>
            <td>r-x</td>
            <td>r-x</td>
        </tr>
        <tr>
            <th>обозначение типа пользователя</th>
            <td>u</td>
            <td>g</td>
            <td>o</td>
        </tr>
        </tbody>
    </table>
    <table class="table table-bordered" style="text-align:center">
        <caption>Три варианта записи прав пользователя
        </caption>
        <thead>
        <tr>
            <th>двоичная</th>
            <th>восьмеричная</th>
            <th>символьная</th>
            <th>права на файл</th>
            <th>права на каталог
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>000</td>
            <td>0</td>
            <td><tt>---</tt></td>
            <td>нет</td>
            <td>нет
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>1</td>
            <td><tt>--x</tt></td>
            <td>выполнение</td>
            <td>чтение файлов и их свойств
            </td>
        </tr>
        <tr>
            <td>010</td>
            <td>2</td>
            <td><tt>-w-</tt></td>
            <td>запись</td>
            <td>нет
            </td>
        </tr>
        <tr>
            <td>011</td>
            <td>3</td>
            <td><tt>-wx</tt></td>
            <td>запись и выполнение</td>
            <td>всё, кроме чтения списка файлов
            </td>
        </tr>
        <tr>
            <td>100</td>
            <td>4</td>
            <td><tt>r--</tt></td>
            <td>чтение</td>
            <td>чтение имён файлов
            </td>
        </tr>
        <tr>
            <td>101</td>
            <td>5</td>
            <td><tt>r-x</tt></td>
            <td>чтение и выполнение</td>
            <td>доступ на чтение
            </td>
        </tr>
        <tr>
            <td>110</td>
            <td>6</td>
            <td><tt>rw-</tt></td>
            <td>чтение и запись</td>
            <td>чтение имён файлов
            </td>
        </tr>
        <tr>
            <td>111</td>
            <td>7</td>
            <td><tt>rwx</tt></td>
            <td>все права</td>
            <td>все права
            </td>
        </tr>
        </tbody>
    </table>
    <h2>Популярные значения</h2>
    <pre>
        <code>
    400 (-r--------)
    Владелец имеет право чтения; никто другой не имеет права выполнять никакие действия
    644 (-rw-r--r--)
    Все пользователи имеют право чтения; владелец может редактировать
    660 (-rw-rw----)
    Владелец и группа могут читать и редактировать; остальные не имеют права выполнять никаких действий
    664 (-rw-rw-r--)
    Все пользователи имеют право чтения; владелец и группа могут редактировать
    666 (-rw-rw-rw-)
    Все пользователи могут читать и редактировать
    700 (-rwx------)
    Владелец может читать, записывать и запускать на выполнение; никто другой не имеет права выполнять никакие действия
    744 (-rwxr--r--)
    Каждый пользователь может читать, владелец имеет право редактировать и запускать на выполнение
    755 (-rwxr-xr-x)
    Каждый пользователь имеет право читать и запускать на выполнение; владелец может редактировать
    777 (-rwxrwxrwx)
    Каждый пользователь может читать, редактировать и запускать на выполнение
    1555 (-r-xr-xr-t)
    Каждый пользователь имеет право читать и запускать на выполнение; удалить файл может только владелец этого файла
    2555 (-r-xr-sr-x)
    Каждый пользователь имеет право читать и запускать на выполнение с правами группы (user group) владельца файла
    0440 (-r--r-----)
    Владелец и группа имеет право чтения никто другой не имеет права выполнять никакие действия
    4555 (-r-sr-xr-x)
    Каждый пользователь имеет право читать и запускать на выполнение с правами владельца файла
        </code>
    </pre>
</div>
<div>
    <h2>Использование команды в символьном виде</h2>
    <pre>
        <code>
            $ chmod [references][operator][permission] file ...
        </code>
    </pre>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Class</th>
                    <th scope="col">Описание</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">u</th>
                    <td>7</td>
                    <td>5</td>
                </tr>
                <tr>
                    <th>символьная запись</th>
                    <td>user</td>
                    <td>Владелец файла</td>
                </tr>
                <tr>
                    <th>g</th>
                    <td>group</td>
                    <td>Пользователи, входящие в группу владельца файла</td>
                </tr>
                <tr>
                    <th>o</th>
                    <td>others</td>
                    <td>Остальные пользователи</td>
                </tr>
                <tr>
                    <th>a</th>
                    <td>all</td>
                    <td>Все пользователи (или ugo)</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Operator</th>
                    <th scope="col">Описание</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">+</th>
                    <td>добавить определенные права</td>
                </tr>
                <tr>
                    <th>-</th>
                    <td>удалить определенные права</td>
                </tr>
                <tr>
                    <th>=</th>
                    <td>установить определенные права</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Mode</th>
                    <th scope="col">Name</th>
                    <th scope="col">Описание</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">r</th>
                    <td>read</td>
                    <td>чтение файла или содержимого каталога</td>
                </tr>
                <tr>
                    <th scope="row">w</th>
                    <td>write</td>
                    <td>запись в файл или в каталог</td>
                </tr>
                <tr>
                    <th scope="row">x</th>
                    <td>execute</td>
                    <td>выполнение файла или чтение содержимого каталога</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h2>Примеры использования команды в символьном виде</h2>
    <pre>
        <code>
    Установить права «rwxr-xr-x» (0755) для файла:
    chmod u=rwx,g=rx,o=rx filename

    Установить права на выполнение для владельца файла, удалить права на выполнение у группы, удалить права на запись и выполнение у остальных пользователей:
    chmod u+x,g-x,o-wx filename

    Установить рекурсивно права на чтение для всех пользователей:
    chmod -R a+r directory

    Рекурсивно удалить атрибуты SUID и SGID:
    chmod -R u-s,g-s directory

    рекурсивное применение правил для всех файлов в каталоге «/home/test»
    # find /home/test -type f -exec chmod 644 {} \;
        </code>
    </pre>
</div>