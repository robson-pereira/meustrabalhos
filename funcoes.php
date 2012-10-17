<?php

function adicionar($nome,$sobrenome,$email,$telefone,$celular){

	$sql = "insert INTO agenda(nome,sobrenome,email,telefone,celular)Values('$nome','$sobrenome','$email','$telefone','$celular')";
	
	mysql_query($sql);
}

function alterar($id,$nome,$sobrenome,$email,$telefone,$celular){

	$sql = "Update 'agenda' set nome='$nome',sobrenome='$sobrenome',email='$email',telefone='$telefone',celular='$celular' where id='$id'";
	mysql_query($sql);

}

function remover($id){


	$sql = "Delete from 'agenda' from id='$id'";

	mysql_query($sql);


}

function listar(){

	$sql = "Select * from agenda order by nome";
	
	$res = mysql_query($sql);
	
	$ret = array();
	
	if(mysql_num_rows($res)>0){
	
		for($i=0;$i<mysql_num_rows($ret);$i++){
		
				$ret = mysql_fetch_array($res);
		
		
		
		}
		
		
		
	}
	
	return $ret;
	
}
function get($id){

	$sql = "select * from agenda where id=$id"; 
	
	$res = mysql_query($sql);
	$ret = array();
	
	if(mysql_num_rows($res)>0)
	
		for($i=0;$i<mysql_num_rows($ret);$i++){
		
				$ret = mysql_fetch_row($res);
		
		
			
		}
	}