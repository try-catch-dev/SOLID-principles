<?php

//abstractions
interface DBConnection{
    public function connect();
}

//low level module
class MySQLConnection implements DBConnection
{
    public function connect()
    {
        // handle the database connection
        return 'Database connection';
    }
}


//hight level module
class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}