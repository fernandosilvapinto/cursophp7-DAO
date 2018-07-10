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
?>
________________________*/

$usuario = new Usuario();

$usuario->login("jose", "123456");

echo $usuario;