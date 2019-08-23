<?php

class DefaultController
{
    public function run($action)
    {
        if (!method_exists($this, $action)) {
            $action = "unknown";
        }

        return $this->$action();
    }

    public function default()
    {
        include 'views/default.php';
    }
}
