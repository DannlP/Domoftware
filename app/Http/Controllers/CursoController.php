<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller {

    public function suma(){

        $num1=10;

        if (($num1 % 2) == 0){
            echo $num1 ,"  es par" ;
                           }

        else{
        echo $num1,"  Es impar" ;

            }
    }

    function esPrimo($numero=15) {
        if ($numero < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    
    
    

    if (esPrimo($numero)) {
        echo $numero . " es un número primo.";
    } else {
        echo $numero . " no es un número primo.";
    }
    
}


public function hola(){

    

}

}