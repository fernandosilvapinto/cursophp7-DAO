<?php

require_once("config.php");
/*____________________________________________
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
______________________________________________*/

/*__________________________
//carrega um usuario;
$root = new Usuario();
$root->loadById(4);
echo $root;
_________________________*/

/*_______________________
//carrega uma lista de usuarios;
$lista = Usuario::getList();
echo json_encode($lista);
__________________*/

/*______________________
//carrega usuario pelo login
$search = Usuario::search("jo");
echo json_encode($search);
________________________*/

/*______________________
//realiza validação dos campos usuario e senha
$usuario = new Usuario();
$usuario->login("jose", "123456");
echo $usuario;
____________________*/

/*______________________
//inserindo usuarios
$aluno = new Usuario("bolinha", "ninguem");
//$aluno->setDeslogin("bananada");
//$aluno->setDessenha("abobrinha");
$aluno->insert();
echo $aluno;
_______________________*/

/*____________________
//atualiza usuario
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "QWERTY");
echo $usuario;
____________________*/

$usuario = new Usuario();

$usuario->loadById(16);
$usuario->delete();
echo $usuario;




?>

