<?php

class Postagem{
    public static function selecionaTodos() {
        $conn = Connection::getConn();

        $sql = 'SELECT * FROM postagem ORDER BY id DESC';
        $resultado = $conn->prepare($sql);
        $resultado->execute();

        $consulta = [];

        while($row = $resultado->fetchObject('Postagem')){
            $consulta[] = $row;
        }

        if(!$consulta) {
            throw new Exception("Não foi encontrado nenhum resultado na consulta!");
        }
        return $consulta;
        
    }

    public static function selectId($idpost) {
        $conn = Connection::getConn();

        $sql = "SELECT * FROM postagem WHERE id = :id";
		$sql = $conn->prepare($sql);
		$sql->bindValue(':id', $idpost, PDO::PARAM_INT);
		$sql->execute();
        $consulta = [];

        $consulta = $sql->fetchObject('Postagem');

        if(!$consulta) {
            throw new Exception("Não foi encontrado nenhum resultado na consulta!");
        }
        return $consulta;
    }
}