<?php
class CustomerWrong
{
    private $currentOrder = null;

    public function buyItems()
    {
        if (is_null($this->currentOrder)) {
            return false;
        }

        $processor = new OrderProcessorWrong();
        return $processor->checkout($this->currentOrder);
    }

    public function addItem($item)
    {
        if (is_null($this->currentOrder)) {
            $this->currentOrder = new Order();
        }
        return $this->currentOrder->addItem($item);
    }

    public function deleteItem($item)
    {
        if (is_null($this->currentOrder)) {
            return false;
        }
        return $this->currentOrder->deleteItem($item);
    }
}

class OrderProcessorWrong
{
    public function checkout($order)
    {/*...*/
    }
}

/**
 * Всё кажется вполне логичным и закономерным. Но есть одна проблема — класс Customer зависит от класса OrderProcessor
 * (мало того, не выполняется и принцип открытости/закрытости). Для того, чтобы избавится от зависимости от конкретного
 * класса, надо сделать так чтобы Customer зависел от абстракции, т.е. от интерфейса IOrderProcessor. Данную
 * зависимость можно внедрить через сеттеры, параметры метода, или Dependency Injection контейнера. Я решил остановится
 * на 2 методе и получил следующий код.
 */

interface IOrderProcessor
{
    public function checkout($order);
}

class OrderProcessor implements IOrderProcessor
{
    public function checkout($order)
    {/*...*/
    }
}

class Customer
{
    private $currentOrder = null;

    public function buyItems(IOrderProcessor $processor)
    {
        if (is_null($this->currentOrder)) {
            return false;
        }

        return $processor->checkout($this->currentOrder);
    }

    public function addItem($item)
    {
        if (is_null($this->currentOrder)) {
            $this->currentOrder = new Order();
        }
        return $this->currentOrder->addItem($item);
    }

    public function deleteItem($item)
    {
        if (is_null($this->currentOrder)) {
            return false;
        }
        return $this->currentOrder->deleteItem($item);
    }
}
/**
 * Таким образом, класс Customer теперь зависит только от абстракции, а конкретную реализацию, т.е. детали, ему не так
 * важны.
 */