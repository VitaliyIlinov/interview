<?php
/**
 * «Объекты в программе могут быть заменены их наследниками без изменения свойств программы». Своими словами я бы это
 * сказал так — при использовании наследника класса результат выполнения кода должен быть предсказуем и не изменять
 * свойств метод.
 *https://habr.com/ru/post/208442/
 *
 * L - принцип подстановки Барбары Лисков Liskov substitution principle, LSP Наследующий класс должен
 * дополнять, а не замещать поведение базового класса. и не должно противоречить поведению, заданному базовым классом
 * http://simple-training.com/solid-in-php/solid-3-liskovs-substitution-principle/
 */
class Bird
{
    public function fly()
    {
        $flySpeed = 10;
        return $flySpeed;
    }
}

/**
 * Дочерний класс от Bird.
 * Не изменяет поведение, но дополняет.
 * Не нарушает принцип LSP
 */
class Duck extends Bird
{
    public function fly()
    {
        $flySpeed = 8;
        return $flySpeed;
    }

    public function swim()
    {
        $swimSpeed = 2;
        return $swimSpeed;
    }
}

/**
 * Дочерний класс от Bird.
 * Изменяет поведение.
 * Нарушает принцип LSP
 */
class Penguin extends Bird
{
    public function fly()
    {
        //die('i can`t fly (((');  // не типичное поведение - die или exception
        return 'i can`t fly ((('; // не типичное поведение - возвращаем string, а не integer
    }

    public function swim()
    {
        $swimSpeed = 4;
        return $swimSpeed;
    }
}

class BirdRun
{
    private $bird;

    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    public function run()
    {
        $flySpeed = $this->bird->fly();
        // ...
    }
}

$bird = new Bird();
//$bird = new Duck();
//$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();