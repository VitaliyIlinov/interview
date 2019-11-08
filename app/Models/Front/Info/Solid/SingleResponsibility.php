<?php
class OrderWrong
{
    public function calculateTotalSum(){/*...*/}
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}

    public function printOrder(){/*...*/}
    public function showOrder(){/*...*/}

    public function load(){/*...*/}
    public function save(){/*...*/}
    public function update(){/*...*/}
    public function delete(){/*...*/}
}

/**
 * Как можно увидеть, данный класс выполняет операций для 3 различный типов задач:
 *  - работа с самим заказом
 *  - отображение заказа
 *  - работа с хранилищем данных/
 * К чему это может привести?
 * Приводит это к тому, что в случае, если мы хотим внести изменения в методы печати или работы хранилища, мы изменяем
 * сам класс заказа, что может привести к его неработоспособности. Решить эту проблему стоит разделением данного класса
 * на 3 отдельных класса, каждый из которых будет заниматься своей задачей
 *     - Работа с хранилищем
 *     - печать
 *     - получение инфы
 */
class Order
{
    public function calculateTotalSum(){/*...*/}
    public function getItems(){/*...*/}
    public function getItemCount(){/*...*/}
    public function addItem($item){/*...*/}
    public function deleteItem($item){/*...*/}
}

class OrderRepository
{
    public function load($orderID){/*...*/}
    public function save($order){/*...*/}
    public function update($order){/*...*/}
    public function delete($order){/*...*/}
}

class OrderViewer
{
    public function printOrder($order){/*...*/}
    public function showOrder($order){/*...*/}
}
/**
 * Теперь каждый класс занимается своей конкретной задачей и для каждого класса есть только 1 причина для его изменения.
 */