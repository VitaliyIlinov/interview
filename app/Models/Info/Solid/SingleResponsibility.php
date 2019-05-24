<?php
/**
 * Created by PhpStorm.
 * User: ilinovvitalii
 * Date: 3/5/19
 * Time: 5:39 PM
 */

/**
 * Принцип единственной ответственности (Single responsibility)
 * «На каждый объект должна быть возложена одна единственная обязанность»
 * Каждый класс должен решать лишь одну задачу.
 * «Одно поручение. Всего одно»
 *
 * разделение логики класа Ордер:
 *      Работа с хранилищем
 *      печать
 *      получение инфы
 * https://habr.com/ru/post/208442/
 * https://medium.com/webbdev/solid-4ffc018077da
 */
class OrderWrong
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