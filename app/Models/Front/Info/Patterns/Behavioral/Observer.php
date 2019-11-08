<?php

class Newspaper implements SplSubject
{
    /**
     * @var array SplObserver
     */
    private $observers = [];

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        unset($this->observers[$key]);
    }

    public function notify()
    {
        foreach ($this->observers as $value) {
            $value->update($this);
        }
    }
}

class Reader implements SplObserver
{
    private $name;

    /**
     * Reader constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(SplSubject $subject)
    {
        echo $this->name . ' is reading breakout news';
    }
}

$newspaper = new Newspaper('New York Times');

$allen = new Reader('Allen');
$jim = new Reader('Jim');
$linda = new Reader('Linda');

$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);
$newspaper->notify();
