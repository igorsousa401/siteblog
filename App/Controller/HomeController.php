<?php


class HomeController {

    public function index(){
        try{
            $colectPost = Postagem::selecionaTodos();
            var_dump($colectPost);
        } catch(Exception $e){
            echo $e->getMessage();
        }

    }
}