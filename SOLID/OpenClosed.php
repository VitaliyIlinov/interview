<?php
/**
 * Created by PhpStorm.
 * User: ilinovvitalii
 * Date: 3/5/19
 * Time: 5:55 PM
 */

namespace SOLID;

/**
 * Принцип открытости/закрытости (Open-closed)
 * программные сущности должны быть открыты для расширения, но закрыты для модификации
 *
 *
 * Такой подход нарушает принцип открытости-закрытости. Как видно, здесь, если нам надо дать некоей группе клиентов
 * особую скидку, приходится добавлять в класс новый код.
 * https://medium.com/webbdev/solid-4ffc018077da
 */
class DiscountWRONG
{
    private $price;

    private $userRole;

    public function giveDiscount()
    {
        if ($this->userRole == 'defaul') {
            return $this->price * 0.2;
        }
        if ($this->userRole == 'vip') {
            return $this->price * 0.4;
        }
    }
}

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