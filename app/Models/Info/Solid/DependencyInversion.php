<?php
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