	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
	
	include "connect.php";
	include "Header.php";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sid = @$_POST["sid"];
  $iid = @$_POST["iid"];
  $stelefone = @$_POST["stelefone"];
  $itelefone = @$_POST["itelefone"];
  $sprotocolo = @$_POST["sprotocolo"];
  $iprotocolo = @$_POST["iprotocolo"];
  $ssprotocolo = @$_POST["ssprotocolo"];
  $isprotocolo = @$_POST["isprotocolo"];
  $sspesquisa = @$_POST["sspesquisa"];
  $ispesquisa = @$_POST["ispesquisa"];
  $stservico = @$_POST["stservico"];
  $itservico = @$_POST["itservico"];
	}
	
	$sql = "select ";
	$where = "where";

		$form = '<table class="table">';
		$form .= '<thead class="text-primary">';
		$form .= '<tr>';
	
	if (!empty($sid)){
		$sql .= "id, ";
		$form .= '<th>ID</th>';
		if (@$sid == "Contendo"){
			$where .= " id like '%".@$iid."%' and";
		}else if (@$sid == "Iniciando com"){
			$where .= " id like '%".@$iid."' and";
		}else if (@$sid == "Terminando com"){
			$where .= " id like '".@$iid."%' and";
		}else if (@$sid == "Igual"){
			$where .= " id = '".@$iid."' and";
		}
	}
	if (!empty($stelefone)){
		$sql .= "NTelefone as Telefone,";
		$form .= '<th>Telefone</th>';
		if (@$stelefone == "Contendo"){
			$where .= " NTelefone like '%".@$itelefone."%' and";
		}else if (@$stelefone == "Iniciando com"){
			$where .= " NTelefone like '%".@$itelefone."' and";
		}else if (@$stelefone == "Terminando com"){
			$where .= " NTelefone like '".@$itelefone."%' and";
		}else if (@$stelefone == "Igual"){
			$where .= " NTelefone = '".@$itelefone."' and";
		}
	}
	if (!empty($sprotocolo)){
		$sql .= "NProtocolo as Protocolo,";
		$form .= '<th>Protocolo</th>';
		if (@$sprotocolo == "Contendo"){
			$where .= " NProtocolo like '%".@$iprotocolo."%' and";
		}else if (@$sprotocolo == "Iniciando com"){
			$where .= " NProtocolo like '%".@$iprotocolo."' and";
		}else if (@$sprotocolo == "Terminando com"){
			$where .= " NProtocolo like '".@$iprotocolo."%' and";
		}else if (@$sprotocolo == "Igual"){
			$where .= " NProtocolo = '".@$iprotocolo."' and";
		}
	}
	if (!empty($ssprotocolo)){
		$sql .= "TStatus,";
		$form .= '<th>Status Protocolo</th>';
		if (@$ssprotocolo == "Contendo"){
			$where .= " TStatus like '%".@$isprotocolo."%' and";
		}else if (@$ssprotocolo == "Iniciando com"){
			$where .= " TStatus like '%".@$isprotocolo."' and";
		}else if (@$ssprotocolo == "Terminando com"){
			$where .= " TStatus like '".@$isprotocolo."%' and";
		}else if (@$ssprotocolo == "Igual"){
			$where .= " TStatus = '".@$isprotocolo."' and";
		}
	}
	if (!empty(@$sspesquisa)){
		$sql .= "PStatus,";
		$form .= '<th>Status Pesquisa</th>';
		if (@$sspesquisa == "Contendo"){
			$where .= " PStatus like '%".@$ispesquisa."%' and";
		}else if (@$sspesquisa == "Iniciando com"){
			$where .= " PStatus like '%".@$ispesquisa."' and";
		}else if (@$sspesquisa == "Terminando com"){
			$where .= " PStatus like '".@$ispesquisa."%' and";
		}else if (@$sspesquisa == "Igual"){
			$where .= " PStatus = '".@$ispesquisa."' and";
		}
	}
	if (!empty(@$stservico)){
		$sql .= "TServico ";
		$form .= '<th>Tipo de Serviço</th>';
		if (@$stservico == "Igual"){
			$where .= " TServico = '".$itservico."' and";
		}
	}
	
	$size = strlen($sql);
	$sql = substr($sql,0, $size-1);
	
	$size2 = strlen($where);
	$where = substr($where,0, $size2-3);
	
	$sql .= " from tbl_telefone ".$where.";";	

		$form .= '</tr>';
		$form .= '</thead>';
		$form .= '<tbody>';
		$form .= '<tr>';
			
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
						$form .= '<tr ".TStatus($row["TStatus"], $row["PStatus"]).">';
					if (!empty($sid)){
						$form .=	'<td class="text-center">'.$row["id"].'</td>';
					}	
					if (!empty($stelefone)){
						$form .=	'<td class="text-center">'.$row["Telefone"].'</td>';
					}
					if (!empty($sprotocolo)){
						$form .=	'<td class="text-center">'.$row["Protocolo"].'</td>';
					}
					if (!empty($ssprotocolo)){
						$form .=	'<td class="text-center">'.$row["TStatus"].'</td>';
					}
					if (!empty(@$sspesquisa)){
						$form .=	'<td class="text-center">'.$row["PStatus"].'</td>';
					}
					if (!empty(@$stservico)){
						$form .=	'<td class="text-center">'.$row["TServico"].'</td>';
					}
						$form .='</tr>';
			}
	
	}else {
			$form .= '<tr ".TStatus($row["TStatus"], $row["PStatus"]).">';
			$form .=	'<td class="text-center">Não Encontrado</td>';
			$form .=	'<td class="text-center">Não Encontrado</td>';
			$form .=	'<td class="text-center">Não Encontrado</td>';
			$form .=	'<td class="text-center">Não Encontrado</td>';
			$form .=	'<td class="text-center">Não Encontrado</td>';
			$form .=	'<td class="text-center">Não Encontrado</td>';
			$form .='</tr>';
	}
	$form .='</div>';
	$form .='</tbody>';
	$form .='</table>';
	
	function exportCSV(){
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
	
	function TStatus($tstatus, $pstatus){
			if ($tstatus ==  "Sim" and $pstatus == "Sim"){
				return "class='success'";
			}if (($tstatus ==  "Sim" and $pstatus == "Nao") or $tstatus ==  "Nao" and $pstatus == "Sim"){
				return "class='warning'";
			}else{
				return "class='danger'";
			}
		}	
	
 ?>
 <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Pesquisa Avançada</h5>
					<form action="paexportar.php" method="POST">
						<input type="hidden" name="sql" value="<?php echo $sql; ?>">
						<button type="submit" class="btn btn-link"><i class='now-ui-icons arrows-1_cloud-download-93'></i></button>
					</form>
            </div>
            <div class="card-body">
				<?=$form?>
            </div>
        </div>
    </div>
</div>