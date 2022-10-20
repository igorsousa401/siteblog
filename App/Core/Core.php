<?php

class Core{

    public function start($urlget) {
        
        $acao = 'index';

        if(isset($urlget['pagina'])){
            $controller = ucfirst($urlget['pagina']."Controller");
        } else{
            $controller = "HomeController";
        }
        
        

        if(!class_exists($controller)){
            $controller = 'ErroController';
        }

        call_user_func_array(array(new $controller, $acao), array());
        
    }

}