<?php

class Employee
{
    protected $connection = null;

    public function __construct($dbname, $username, $password)
    {
        $this->$dbname   = $dbname;
        $this->$username = $username;
        $this->$password = $password;

        $this->connection = new \PDO("mysql:host=127.0.0.1;dbname=$dbname", $username, $password);
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
