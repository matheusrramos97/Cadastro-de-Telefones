<?php

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $ID = $_POST["ID"];
  $Telefone = $_POST["NTelefone"];
  $Protocolo = $_POST["NProtocolo"];
  $TStatus = $_POST["TStatus"];
  $PStatus = $_POST["PStatus"];
  $Servico = $_POST["TServico"];
}

 $test = $ID;
 $test .= " ".$Telefone;
 $test .= " ".$Protocolo;
 $test .= " ".$Status;
 $test .= " ".$Servico;
 
 echo $test;

	$sql = "UPDATE tbl_telefone SET NTelefone='$Telefone', NProtocolo = '$Protocolo', TStatus = '$TStatus', PStatus = '$PStatus', TServico = '$Servico' WHERE id='$ID';";

	if ($conn->query($sql) === TRUE) {
		echo "Dados Atualizados com sucesso!.";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();


?>
<body onload='window.history.go(-2);'>