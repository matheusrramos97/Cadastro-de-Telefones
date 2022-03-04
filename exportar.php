<?php	

	$param = @$_GET["param"];
		
	if (empty($_GET)){$param = "";}
		
	if (($param == "NProtocolo") or ($param == "id") or ($param == "NTelefone") or ($param == "TStatus")){
		$sql = "select NTelefone as Telefone, NProtocolo as Protocolo from, TStatus tbl_telefone order by $param;";
	}else if (($param == "Saneamento") or ($param == "Transporte Intermunicipal") or ($param == "Energia Eletrica") or ($param == "Portos E Hidrovias") or ($param == "Terminal Rodoviario") or ($param == "Outros")){
		$sql = "select NTelefone as Telefone, NProtocolo as Protocolo, TStatus from tbl_telefone where TServico = '$param';";
	}else if (($param == "TSim") or ($param == "TNao")){
		if ($param == "TNao"){
			$sql = "select NTelefone as Telefone, NProtocolo as Protocolo, TStatus from tbl_telefone where TStatus = 'Nao';";
		}else {
			$sql = "select NTelefone as Telefone, NProtocolo as Protocolo, TStatus from tbl_telefone where TStatus = 'Sim';";
		}
	}else if (($param == "PSim") or ($param == "PNao")){
		if ($param == "PNao"){
			$sql = "select NTelefone as Telefone, NProtocolo as Protocolo, TStatus from tbl_telefone where PStatus = 'Nao';";
		}else {
			$sql = "select NTelefone as Telefone, NProtocolo as Protocolo, TStatus from tbl_telefone where PStatus = 'Sim';";
		}
	}else{
		$sql = "select NTelefone as Telefone, NProtocolo as Protocolo, TStatus from tbl_telefone;";
	}
	
	exportCSV($sql);

	function exportCSV($sql){
		include "connect.php";
		$result = $conn->query($sql);
		
		if (!$result) die('Couldn\'t fetch records');
		$num_fields = mysqli_num_fields($result);
		$headers = array();
		for ($i = 0; $i < $num_fields; $i++) {
			$headers[] = mysqli_fetch_field_direct($result, $i)->name;
		}
		$fp = fopen('php://output', 'w');
		if ($fp && $result) {
			header('Content-Type: text/csv');
			header('Content-Disposition: attachment; filename="export.csv"');
			header('Pragma: no-cache');
			header('Expires: 0');
			fputcsv($fp, $headers);
			while ($row = $result->fetch_array(MYSQLI_NUM)) {
				fputcsv($fp, array_values($row));
			}
			die;
		}
	}
	
	?>