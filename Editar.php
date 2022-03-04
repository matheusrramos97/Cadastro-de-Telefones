<?php
	include "Header.php";
	include "connect.php";
	
	$sql = "select * from tbl_telefone where id = ".$_GET["id"].";";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		
		$form = '<table class="table">';
		$form .= '<thead class="text-primary">';
		$form .= '<tr>';
		$form .= '<th>ID</th>';
		$form .= '<th>Telefone</th>';
		$form .= '<th>Protocolo</th>';
		$form .= '<th>Status Protocolo</th>';
		$form .= '<th>Status Pesquisa</th>';
		$form .= '<th>Tipo de Serviço</th>';
		$form .= '<th>Actions</th>';
		$form .= '</tr>';
		$form .= '</thead>';
		$form .= '<tbody>';
		$form .= '<tr>';
		$form .= '<form class="w3-container" action="/editardb.php" method ="post">';
		$form .= '<td><input type="text" class="form-control" name ="ID" value="'.$_GET["id"].'" readonly></td>';
		$form .= '<td><input name ="NTelefone" class="form-control" class="w3-input" type="text" value="'.$row["NTelefone"].'"></td>';
		$form .= '<td><input class="form-control" name ="NProtocolo" class="w3-input" type="text" value="'.$row["NProtocolo"].'"></td>';
		$form .= '<td><select class="form-control" name="TStatus">';
		$form .= '<option value="'.$row["TStatus"].'" selected> Manter: '.$row["TStatus"].'</option>';
		$form .= '<option value="Sim">Sim</option>';
		$form .= '<option value="Nao">Não</option>';
		$form .= '</select>';
		$form .= '</td>';
		$form .= '<td><select class="form-control" name="PStatus">';
		$form .= '<option value="'.$row["PStatus"].'" selected> Manter: '.$row["PStatus"].'</option>';
		$form .= '<option value="Sim">Sim</option>';
		$form .= '<option value="Nao">Não</option>';
		$form .= '</select>';
		$form .= '</td>';
		$form .= '<td><select class="form-control" name="TServico">';
		$form .= '<option value="'.$row["TServico"].'" selected> Manter: '.$row["TServico"].'</option>';
		$form .= '<option value="Transporte Intermunicipal">Transporte Intermunicipal</option>';
		$form .= '<option value="Saneamento">Saneamento</option>';
		$form .= '<option value="Rodovias Pedagiadas">Rodovias</option>';
		$form .= '<option value="Energia Eletrica">Energia Eletrica</option>';
		$form .= '<option value="Gas Natural">Gas Natural</option>';
		$form .= '<option value="Portos e Hidrovias">Portos E Hidrovias</option>';
		$form .= '<option value="Terminal Rodoviário">Terminal Rodoviario</option>';
		$form .= '<option value="Outros">Outros</option>';
		$form .= '</select>';
		$form .= '<td><button class="btn btn-primary">Atualizar</button></p></td>';
		$form .= '</td>';
		$form .= '</form>';
		$form .= '</tbody>';
		$form .= '</table>';
		}
	}

?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Cadastro de Telefones</h5>
            </div>
            <div class="card-body">
				<?=$form?>
            </div>
        </div>
    </div>
</div>