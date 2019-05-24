<?php
/**
 * Created by PhpStorm.
 * User: ilinovvitalii
 * Date: 3/26/19
 * Time: 11:31 AM
 */

/**
 * Высокоуровневые модули не должны зависеть от низкоуровневых. Оба вида модулей должны зависеть от абстракций.
 * Абстракции не должны зависеть от подробностей. Подробности должны зависеть от абстракций.
 * Проще говоря: зависьте от абстракций, а не от чего-то конкретного.
 * Применяя этот принцип, одни модули можно легко заменять другими, всего лишь меняя модуль зависимости, и тогда
 * никакие перемены в низкоуровневом модуле не повлияют на высокоуровневый.
 * https://sohabr.net/habr/post/412699/?version=286493
 *
 */
class MySQLConnectionWrong
{
    /**
     * db connection
     */
    public function connect()
    {
        var_dump('MYSQL Connection');
    }
}

class PasswordReminderWrong
{
    /**
     * @var MySQLConnectionWrong
     */
    private $dbConnection;

    public function __construct(MySQLConnectionWrong $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}

/**
 * В приведённом коде, невзирая на то, что класс MySQLConnection был внедрён в класс PasswordReminder, последний
 * зависит от MySQLConnection. Более высокуровневый PasswordReminder не должен зависеть от более низкуровневого модуля
 * MySQLConnection.
 *
 * Если нам нужно изменить подключение с MySQLConnection на MongoDBConnection, то придётся менять прописанное в коде
 * внедрение конструктора в класс PasswordReminder.
 * Класс PasswordReminder должен зависеть от абстракций, а не от чего-то конкретного.
 */
interface ConnectionInterface
{
    public function connect();
}

class DbConnection implements ConnectionInterface
{
    /**
     * db connection
     */
    public function connect()
    {
        var_dump('MYSQL Connection');
    }
}

class PasswordReminder
{
    /**
     * @var ConnectionInterface
     */

    private $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}

/**
 * Здесь нам нужно изменить подключение с MySQLConnection на MongoDBConnection. Нам не нужно менять внедрение
 * конструктора в класс PasswordReminder, потому что в данном случае класс PasswordReminder зависит только от
 * абстракции.
 */