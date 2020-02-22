<?php

require_once("config.php");

/*
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

//Carrega um usuario
//$user = new Usuario();
//$user->loadById(5);
//echo $user;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma list de usuarios buscando por login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e senha
$usuario = new Usuario();
$usuario->login("user", 12345);

echo $usuario;

?>