<?php

class Controller
{
    public function __construct(){


        $this->view = new View();
    }

    public function index(){
        $this->view->render(strtolower(get_class($this)));
    }


}