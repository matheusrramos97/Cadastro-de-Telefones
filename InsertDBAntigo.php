<?php
include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Telefone = $_POST["NTelefone"];
  $Protocolo = $_POST["NProtocolo"];
  $Status = $_POST["TStatus"];
  $Servico = $_POST["TServico"];
}

	if (Verifica($Telefone, $Servico)){
		
		$sql = "insert into tbl_telefone(NTelefone, NProtocolo, TStatus, TServico, PStatus) values ('$Telefone', '$Protocolo', '$Status', '$Servico', 'Nao');";
		
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully<br>";
			header('Location: /Banco.php');
		}else {
			echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	}else {echo "Esse cadastro ja foi inserido anteriormente!";}

function Verifica($Telefone, $TServico){
	include "connect.php";
	$sql = "SELECT NTelefone, TServico FROM tbl_telefone where NTelefone = $Telefone";
	$result = $conn->query($sql);
	$check = true;
	while($row = $result->fetch_assoc()) {
		if ($row["TServico"] == $TServico){
			$check = false;
		}
	}
	return $check;	
}

?>