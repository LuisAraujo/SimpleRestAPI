<?php

function insertProduto($nome, $descricao, $categoria, $preco, $conn){
	$sql = "insert into produto (id, nome, descricao, preco, categoria) values (NULL, '$nome', '$descricao', '$preco','$categoria')";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		return '{"status": "inserted"}';
	}else{
		return '{"status": "error"}';
	}
}

function deleteProduto($id,$conn){
	$sql = "delete from produto WHERE id= '$id'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn)){
		return '{"status": "deleted"}';
	}else{
		return '{"status": "error"}';
	}
	
}

function updateProduto($id,$nome,$descricao, $categoria,$preco, $conn){
	$sql = "update produto set nome = '$nome', descricao = '$descricao', categoria= '$categoria', preco='$preco' where id = '$id'";
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		return '{"status": "updated"}';
	}else{
		return '{"status": "error"}';
	}
	
}


function getAllProdutos($conn){
	$sql = "select * from produto where 1";
	
	$result = mysqli_query($conn, $sql);
	
	$json ="[";
	$nr = mysqli_num_rows($result);
	
	for($i = 0; $i < $nr-1; $i++) {
		$r = mysqli_fetch_assoc($result);
		$json .=  '{"id":"'.$r["id"].'", "name": "'.$r["nome"].'", "descricao":"'.$r["descricao"].'", "preco":"'.$r["preco"].'", "categoria":"'.$r["categoria"].'"},';
	}
	
	$r = mysqli_fetch_assoc($result);
	
	$json .= '{"id":"'.$r["id"].'", "name": "'.$r["nome"].'", "descricao":"'.$r["descricao"].'", "preco":"'.$r["preco"].'","categoria":"'.$r["categoria"].'"}]';
	
	return $json;
	
	


}

function getProduto($id, $conn){
	$sql = "select * from produto where id = '$id'";
	$result = mysqli_query($conn, $sql);
		
	if (mysqli_num_rows($result)> 0) {
		$r = mysqli_fetch_assoc($result);
		$json = '{"id":"'.$id.'", "name": "'.$r["nome"].'", "descricao":"'.$r["descricao"].'", "preco":"'.$r["preco"].'","categoria":"'.$r["categoria"].'"}';
		return $json;
	}else{
		return "{}";
	}
	

}


?>