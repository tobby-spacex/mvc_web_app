<?php

class App
{
    public function __construct(){

       if(isset($_GET['url'])){
        $url = explode( '/', rtrim($_GET['url'], '/'));
       } else{
        $url[0] = 'index';
       }


       $file_name = 'controllers/'.$url[0]. '.php';


       if(file_exists($file_name)){

        require_once $file_name;

        $continent = new $url[0];

        if(isset($url[1])){
            if(method_exists($continent, $url[1])) {
                if(isset($url[2])){
                    $continent->{$url[1]} ($url[2]);

                }else{
                    $continent->{$url[1]}();
                }

            }else{
                echo "The method does not exist!";
            }
        }else{
            $continent->index();
        }

       }else{

           echo "Error, the file does not exist!";
       }



    }
}
