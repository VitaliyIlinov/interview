<?php
echo 404;

foreach($_GET as $key => $value)
{
    echo 'Получено:<br />';
    echo 'Переменная: ' . $key . '<br />';
    echo 'Значение: ' . $value;
    echo '<hr />';
}