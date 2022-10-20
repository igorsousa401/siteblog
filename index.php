<?php
require_once 'vendor/autoload.php';
require_once 'App/Core/Core.php';
require_once 'App/Controller/HomeController.php';
require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/PostController.php';
require_once 'App/Model/Postagem.php';
require_once 'lib/Database/connection.php';

$template = file_get_contents('App/Template/estrutura.html');


ob_start();
    $core = new Core();
    $core->start($_GET);
$exit = ob_get_contents();
ob_end_clean();

$exectemplate = str_replace('{{conteudo_dinamico}}', $exit, $template);

echo $exectemplate;