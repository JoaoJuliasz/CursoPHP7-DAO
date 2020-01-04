<?php

require_once("config.php");

// $sql = new Sql();

// $users = $sql->select("SELECT * FROM tb_usuarios");
// echo json_encode($users);

/*carrega um usuario
$root = new Usuario();
$root->loadById(5);
echo $root;
*/

// a vantagem de ser estatico, é q pode ser chamado direto
// $lista = Usuario::getList();

// echo json_encode($lista);


//carrega uma lista de usuarios pelo login

// $search = Usuario::search("jo");

// echo json_encode($search);

//carrega um usuario usando login e senha

$user = new Usuario();

$user->login("user", "12345");

echo $user;
