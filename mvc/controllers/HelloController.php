<?php

class HelloController
{
    public function run($action="hello")
    {
        if (!method_exists($this, $action)) {
            $action = "hello";
        }

        return $this->$action();
    }

    public function hello()
    {
        include 'views/hello-view.php';
    }
}
