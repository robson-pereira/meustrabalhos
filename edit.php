<?php
require('../libs/Smarty.class.php');
include'config.php';
include'funcoes.php'; 
$smarty->assign('mid','edit.tpl');
$smarty->display('layout.tpl');


if(isset($_POST['submit'])){

	adicionar($_POST['nome'],$_POST['sobrenome'],$_POST['email'],$_POST['telefone'],$_POST['celular']);
	
	$smarty->assign('sucesso',1);
	
}






?>
