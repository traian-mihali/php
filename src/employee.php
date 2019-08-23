<?php

class Employee
{
    protected $connection = null;

    private $dbname;
    private $username;
    private $password;
    private $host;

    private $options = [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => false
    ];

    public function __construct($host, $dbname, $username, $password)
    {
        $this->connection = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, $this->options);
    }
    
    public function load($id)
    {
        $sql = 'SELECT * FROM clients WHERE client_id = '. $id;
        $result = $this->connection->query($sql);
        $row = $result->fetch();

        foreach ($row as $column => $value) {
            $this->$column = $value;
        }
    }
}
