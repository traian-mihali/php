<?php

class GreetingsgModel
{
    protected $message = null;

    public function __constructor($greeting)
    {
        $this->$message = $greeting;
    }
    public function greeting()
    {
        echo $this->$message;
    }
}
