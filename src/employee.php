<?php

class Employee
{
    protected $connection = null;

    private $dbname;
    private $username;
    private $password;
    private $host;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->$dbname   = $dbname;
        $this->$username = $username;
        $this->$password = $password;
        $this->$host = $host;

        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false
        ];

        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $options);
    }

    public function load($id)
    {
        $sql = 'SELECT * FROM employees WHERE employee_id = 1';
        $result = $connection->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);

        foreach ($row as $column => $value) {
            $this->$column = $value;
        }
    }
}
