<?php

class DefaultController
{
    public function run($action="default")
    {
        if (!method_exists($this, $action)) {
            $action = "default";
        }

        return $this->$action();
    }

    public function default()
    {
        include 'views/unknown-view.php';
    }
}
