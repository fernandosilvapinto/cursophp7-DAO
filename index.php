<?php

require_once("config.php");
/*____________________________________________
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);
______________________________________________*/

$root = new Usuario();

$root->loadById(4);

echo $root;


?>