<?php

include_once 'DefaultController.php';

class GreetingsController extends DefaultController
{
    protected $model = null;

    public function __construct()
    {
        $this->model = new GreetingsgModel();
    }

    public function hello()
    {
        $message = $this->model->hello();
        include_once 'views/custom.php';
    }

    public function goodbye()
    {
        $message = $this->model->goodbye();
        include_once 'views/custom.php';
    }

    public function unknown()
    {
        $message = $this->model->unknown();
        include_once 'views/custom.php';
    }
}
