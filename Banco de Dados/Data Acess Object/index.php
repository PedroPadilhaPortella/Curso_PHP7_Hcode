<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("pedro");
//echo json_encode($search);

//carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("pedro", "phpp.2001");
//echo $usuario;


//Criando um novo usuário
$aluno = new Usuario("marcos", "@lun0");
$aluno->insert();
echo $aluno;


//Alterar um usuário
//$usuario = new Usuario();
//$usuario->loadById(1);
//$usuario->update("jose", "!@#$%¨&*");
//echo $usuario;


/*
//deleta um usuario
$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;
*/

?>