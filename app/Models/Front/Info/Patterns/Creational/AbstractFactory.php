<?php

interface Door
{
    public function getDescription();
}

class WoodenDoor implements Door
{
    public function getDescription()
    {
        echo 'Я деревянная дверь';
    }
}

class IronDoor implements Door
{
    public function getDescription()
    {
        echo 'Я железная дверь';
    }
}

interface DoorExpert
{
    public function getDescription();
}

class Welder implements DoorExpert
{
    public function getDescription()
    {
        echo 'Я работаю только с железными дверьми';
    }
}

class Carpenter implements DoorExpert
{
    public function getDescription()
    {
        echo 'Я работаю только с деревянными дверьми';
    }
}

/**
 * Теперь у нас есть Абстрактная фабрика которая позволит нам создать фабрику
 */
abstract class DoorFactory
{
    public static $config = 1;

    /**
     * Возвращает фабрику
     *
     * @return DoorFactory - дочерний объект
     */
    public static function getFactory()
    {
        switch (self::$config) {
            case 1:
                return new WoodenDoorFactory();
            case 2:
                return new IronDoorFactory();
        }
    }

    abstract public function makeDoor(): Door;

    abstract public function makeExpert(): DoorExpert;
}

// Деревянная фабрика вернет деревянную дверь
class WoodenDoorFactory extends DoorFactory
{
    public function makeDoor(): Door
    {
        return new WoodenDoor();
    }

    public function makeExpert(): DoorExpert
    {
        return new Carpenter();
    }
}

// Железная фабрика вернет железную дверь
class IronDoorFactory extends DoorFactory
{
    public function makeDoor(): Door
    {
        return new IronDoor();
    }

    public function makeExpert(): DoorExpert
    {
        return new Welder();
    }
}

$woodenFactory = DoorFactory::getFactory();
$woodenFactory->makeDoor()->getDescription(); //Вывод: Я деревянная дверь
$woodenFactory->makeExpert()->getDescription(); //Вывод: Я работаю только с деревянными дверьми

DoorFactory::$config = 2;

// Аналогично для железной двери
$ironFactory = DoorFactory::getFactory();
$ironFactory->makeDoor()->getDescription(); //Вывод: Я железная дверь
$ironFactory->makeExpert()->getDescription(); //Вывод: Я работаю только с железными дверьми

interface IResponseFactory
{
    public const JSON_RESPONSE = 'json';

    public const HTML_RESPONSE = 'html';

    public function makeResponse(string $class): IResponse;

    public function redirectTo();

    public function file();

    public function json();

    public function html();
}

interface IResponse
{
    public function response();
}

class JsonResponse implements IResponse
{
    public function response()
    {
        echo json_encode([34]);
    }
}

class HtmlResponse implements IResponse
{
    public function response()
    {
      echo 'html';
    }
}

class ResponseFactory implements IResponseFactory
{
    public function makeResponse(string $class): IResponse
    {
        switch ($class) {
            case self::HTML_RESPONSE:
                return $this->html();
                break;
            case self::JSON_RESPONSE:
                return $this->json();
                break;
        }
    }

    public function file()
    {
        return new JsonResponse();
    }

    public function redirectTo()
    {
        return $location??'';
    }

    public function json()
    {
        return new JsonResponse();
    }

    public function html()
    {
        return new HtmlResponse();
    }
}

$response = new ResponseFactory();
$response->makeResponse(ResponseFactory::JSON_RESPONSE)->response();
$response->json()->response();
$response->file()->response();
$response->html()->response();
$response->redirectTo();
