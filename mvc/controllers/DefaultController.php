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

    public function execute($action)
    {
        if ($action) {
            $this->run($action);
        } else {
            $this->default();
        }
    }
}
