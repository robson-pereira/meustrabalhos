<?php
require('../libs/Smarty.class.php');
include'config.php';
include'funcoes.php'; 
$smarty->assign('mid','index.tpl');
$smarty->display('layout.tpl');


?>

