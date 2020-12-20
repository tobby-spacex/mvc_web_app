<?php

class Continent extends Controller{
    public function __construct(){
        parent::__construct();

        // $this->view->render(strtolower(get_class($this)));


    }


    public function land($contry = ''){
        echo "Lang<br/>";

        if($contry !=''){
            echo 'Selected contry is '. $contry;
        }
    }
}