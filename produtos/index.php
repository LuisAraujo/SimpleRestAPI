<?php
include "../conn/connection.php";
include "produto.php";

//atualizar http://localhost/Simple_Rest/put/produtos/id=1,nome=Teste,descricao=Teste,categoria=1
//adicionar http://localhost/Simple_Rest/put/produtos/id=1,nome=Teste,descricao=Teste,categoria=1
//deletar http://localhost/Simple_Rest/delete/produtos/1 
//listar http://localhost/Simple_Rest/get/produtos/all ou /1

$urlrequest = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$request = explode("/", $urlrequest);
$moderequest = $request[ count($request) - 3 ];  
$datarequest = $request[ count($request) -1 ];  

if($moderequest == "get"){
	if( ($datarequest == "all") || empty($datarequest)) {
		echo getAllProdutos($conn);
	}else if( is_numeric($datarequest)? true: false) {
		$intresquest = intval($datarequest);
		echo getProduto($intresquest, $conn);
	}else{
		echo "{}";
	}
}else if($moderequest == "post"){
	$datarequest = explode(",", $datarequest);
	 
	 $nome = "";
	 $descricao = "";
	 $categoria = "";
	 
     for($i = 0; $i < count($datarequest); $i++)	{
		 $datarequest_i = explode("=", $datarequest[$i]); 
	 
		 if($datarequest_i[0] == "nome"){
			$nome = $datarequest_i[1];
		 }else if($datarequest_i[0] == "descricao"){
			$descricao = $datarequest_i[1];
		 }else if($datarequest_i[0] == "categoria"){
			$categoria = $datarequest_i[1];
		 }
	 }
	 
	 echo insertProduto($nome, $descricao, $categoria, $conn);
	 
}else if($moderequest == "put"){
	 $datarequest = explode(",", $datarequest);
	 
	 $id = 0;
	 $nome = "";
	 $descricao = "";
	 $categoria = "";
	 
     for($i = 0; $i < count($datarequest); $i++)	{
		 $datarequest_i = explode("=", $datarequest[$i]); 
	
		 if($datarequest_i[0] == "nome"){
			$nome = $datarequest_i[1];
		 }else if($datarequest_i[0] == "descricao"){
			$descricao = $datarequest_i[1];
		 }else if($datarequest_i[0] == "categoria"){
			$categoria = $datarequest_i[1];
		 }else if($datarequest_i[0] == "id"){
			$id = $datarequest_i[1];
		 }
	 }
	 
	 echo updateProduto($id, $nome, $descricao, $categoria,$conn);

}else if($moderequest == "delete"){
	if( ( is_numeric($datarequest)? true: false) && (ctype_digit($datarequest) ) ) {
		$intresquest = intval($datarequest);
		echo deleteProduto($intresquest, $conn);
	}else{
		echo "{'status': 'error'}";
	}
	
}
?>