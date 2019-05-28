<?php

/**
 * Такой подход нарушает принцип открытости-закрытости. Как видно, здесь, если нам надо дать некоей группе клиентов
 * особую скидку, приходится добавлять в класс новый код.
 */
class DiscountWRONG
{
    private $price;

    private $userRole;

    public function giveDiscount()
    {
        if ($this->userRole == 'default') {
            return $this->price * 0.2;
        }
        if ($this->userRole == 'vip') {
            return $this->price * 0.4;
        }
    }
}

/**
 * Для того чтобы переработать этот код в соответствии с принципом открытости-закрытости, добавим в проект новый класс,
 * расширяющий класс Discount
 * Тут используется расширение возможностей классов, а не их модификация.
 */
abstract class discount
{
    protected $price;

    /**
     * discount constructor.
     * @param $price
     */
    public function __construct($price)
    {
        $this->price = $price;
    }

    abstract function getDiscount();
}

class Vip extends discount
{
    function getDiscount()
    {
        return $this->price * 0.4;
    }
}

class Defaul extends discount
{
    function getDiscount()
    {
        return $this->price * 0.2;
    }
}