<?php
/**
 * Created by PhpStorm.
 * User: ilinovvitalii
 * Date: 3/5/19
 * Time: 5:55 PM
 */

use PDO;

/**
 * Принцип открытости/закрытости (Open-closed)
 * программные сущности должны быть открыты для расширения, но закрыты для модификации
 *
 * В данном случае хранилищем у нас является база данных. например, MySQL. Но вдруг мы захотели подгружать наши данные
 * о заказах, например, через API стороннего сервера, который, допустим, берёт данные из 1С.
 * Есть несколько вариантов, например, непосредственно изменить методы класса OrderRepository, но этот не соответствует
 * принципу открытости/закрытости, так как класс закрыт для модификации, да и внесение изменений в уже хорошо
 * работающий класс нежелательно. Значит, можно наследоваться от класса OrderRepository и переопределить все методы, но
 * это решение не самое лучше, так как при добавлении метода в OrderRepository нам придётся добавить аналогичные методы
 * во все его наследники. Поэтому для выполнения принципа открытости/закрытости лучше применить следующее решение —
 * создать интерфейc IOrderSource, который будет реализовываться соответствующими классами MySQLOrderSource,
 * ApiOrderSource и так далее. https://habr.com/ru/post/208442/
 */
class OrderRepositoryWRONG
{
    public function load($orderID)
    {
        $pdo = new PDO($this->config->getDsn(), $this->config->getDBUser(), $this->config->getDBPassword());
        $statement = $pdo->prepare('SELECT * FROM `orders` WHERE id=:id');
        $statement->execute(array(':id' => $orderID));
        return $query->fetchObject('Order');
    }

    public function save($order)
    {/*...*/
    }

    public function update($order)
    {/*...*/
    }

    public function delete($order)
    {/*...*/
    }
}

//-----------------------------------------------------------------------------
interface IOrderSource
{
    public function load($orderID);
    public function save($order);
    public function update($order);
    public function delete($order);
}

class MySQLOrderSource implements IOrderSource
{
    public function load($orderID){}
    public function save($order){/*...*/}
    public function update($order){/*...*/}
    public function delete($order){/*...*/}
}

class OrderRepository
{
    /**
     * @var IOrderSource
     */
    private $source;

    public function setSource(IOrderSource $source)
    {
        $this->source = $source;
    }

    public function load($orderID)
    {
        return $this->source->load($orderID);
    }
    public function save($order){/*...*/}
    public function update($order){/*...*/}
}
