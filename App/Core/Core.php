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

        if (isset($urlGet['id']) && $urlGet['id'] != null) {
            $id = $urlGet['id'];
        } else {
            $id = null;
        }

        call_user_func_array(array(new $controller, $acao), []);
        
    }

}