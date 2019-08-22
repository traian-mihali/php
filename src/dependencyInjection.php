<?php

include_once 'pdoClassWrapper.php';

class User
{
    protected $db;
    protected $data;

    public function __construct(MyPDO $db)
    {
        $this->db = $db;
    }

    public function find($id)
    {
        $this->data = $this->db->run("SELECT * FROM users WHERE id = ?", [$id])->fetch();
    }
}


$mypdo = new MyPDO('mysql:host=localhost;dbname=test;charset=utf8');
$user = new User($mypdo);
$user->find($id);
