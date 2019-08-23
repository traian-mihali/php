<?php

class GoodbyeController
{
    public function run($action="goodbye")
    {
        if (!method_exists($this, $action)) {
            $action = "goodbye";
        }

        return $this->$action();
    }

    public function goodbye()
    {
        include 'views/goodbye-view.php';
    }
}
