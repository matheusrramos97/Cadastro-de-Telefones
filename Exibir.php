
<?php
		include "connect.php";
		
		$param = @$_GET["param"];
		
		if (empty($_GET)){$param = "";}
		
		if (($param == "id") or ($param == "NTelefone") or ($param == "TStatus")){
			$sql = "select * from tbl_telefone order by $param;";
			$importsql = "select NTelefone, NProtocolo from tbl_telefone order by $param;";
		}else if (($param == "Saneamento") or ($param == "Transporte Intermunicipal") or ($param == "Energia Eletrica") or ($param == "Portos E Hidrovias") or ($param == "Terminal Rodoviario") or ($param == "Outros")){
			$sql = "select * from tbl_telefone where TServico = '$param';";
			$importsql = "select NTelefone, NProtocolo from tbl_telefone where TServico = '$param';";
		}else if (($param == "TSim") or ($param == "TNao")){
			if ($param == "TSim"){
				$sql = "select * from tbl_telefone where TStatus = 'Sim';";
			}else {
				$sql = "select * from tbl_telefone where TStatus = 'Nao';";
			}
		}else if (($param == "PSim") or ($param == "PNao")){
			if ($param == "PSim"){
				$sql = "select * from tbl_telefone where PStatus = 'Sim';";
			}else {
				$sql = "select * from tbl_telefone where PStatus = 'Nao';";
			}
		}else if ($param == "NProtocolo"){
			$sql = "select * from tbl_telefone where NProtocolo != 'Indisponivel';";
		}else{
			$sql = "select * from tbl_telefone;";
			$importsql = "select NTelefone, NProtocolo from tbl_telefone;";
		}
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			// output data of each row
			echo "<table class='table'>
					<thead class='text-primary'>
						<tr>
							<th rowspan='2' class='text-center'><a class='w3-button w3-white w3-tiny w3-padding-small' href='?param=id'>ID</a></th>
							<th rowspan='2' class='text-center'><a class='w3-button w3-white w3-tiny w3-padding-small' href='?param=NTelefone'>TELEFONE</a></th>
							<th rowspan='2' class='text-center'><a class='w3-button w3-white w3-tiny w3-padding-small' href='?param=NProtocolo'>PROTOCOLO</a></th>
							<th colspan='2' class='text-center' style='font-size: 15px'>STATUS</th>
							<th rowspan='2' class='text-center'>
								 <li style='list-style: none' class='nav-item dropdown'>
									<a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									    Tipo de Serviço
									</a>
									<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>
										<a href='?param=Saneamento' class='dropdown-item'>Saneamento</a>
										<a href='?param=Transporte Intermunicipal' class='dropdown-item'>Transporte Intermunicipal</a>
										<a href='?param=Energia Eletrica' class='dropdown-item'>Energia Eletrica</a>
										<a href='?param=Portos E Hidrovias' class='dropdown-item'>Portos E Hidrovias</a>
										<a href='?param=Terminal Rodoviario' class='dropdown-item'>Terminal Rodoviario</a>
										<a href='?param=Outros' class='dropdown-item'>Outros</a>
									</div>
								 </li>
							</th>
							<th rowspan='2' class='text-center'>
							  <a>ACTIONS</a>
							</th>
						</tr>
						
						<tr>							
                            <th class='text-center'>
                                <li style='list-style: none' class='nav-item dropdown'>
									<a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									    PROTOCOLO
									</a>
									<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>
										<a href='?param=TSim'  class='dropdown-item'>Sim</a>
										<a href='?param=TNao'  class='dropdown-item'>Não</a>
									</div>
								</li>
							</th>
							
							<th class='text-center'>
								<li style='list-style: none' class='nav-item dropdown'>
									<a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
									  PESQUISA
									</a>
									<div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>
										<a href='?param=PSim' class='dropdown-item'>Sim</a>
										<a href='?param=PNao' class='dropdown-item'>Não</a>
									</div>
								</li>
							</th>
						</tr>
					</thead>
					<tbody>
					<div class='pre-scrollable'>
					";
			while($row = $result->fetch_assoc()) {
				echo "
						<tr ".TStatus($row["TStatus"], $row["PStatus"]).">
							<td class='text-center'>".$row["id"]."</td>
							<td class='text-center'>".$row["NTelefone"]."</td>
							<td class='text-center'>".$row["NProtocolo"]."</td>
							<td class='text-center'>".$row["TStatus"]."</td>
							<td class='text-center'>".$row["PStatus"]."</td>
							<td class='text-center'>".$row["TServico"]."</td>
							<td class='text-center'><a href='/editar.php?id=".$row["id"]."' class='btn btn-warning'>Editar</a></td>
						</tr>
				";
			}
				echo "
						</div>
						</tbody>
					  </table>";
		} else {
			echo "<table class='table'>
					<thead>
						<tr>
							<th><a href='?param=id'>ID</a></th>
							<th><a href='?param=NTelefone'>TELEFONE</a></th>
							<th><a href='?param=NProtocolo'>PROTOCOLO</a></th>
							
							<th>
							<div class='w3-dropdown-hover'>
								<button class='w3-button w3-white w3-border w3-tiny w3-padding-small'>STATUS PROCOTOLO</button>
								<div class='w3-dropdown-content w3-bar-block w3-border'>
									<a href='?param=TSim' class='w3-bar-item w3-button'>Sim</a>
									<a href='?param=TNao' class='w3-bar-item w3-button'>Não</a>
								</div>
							</div>
							</th>
							
							<th>
							<div class='w3-dropdown-hover'>
								<button class='w3-button w3-white w3-border w3-tiny w3-padding-small'>STATUS PESQUISA</button>
								<div class='w3-dropdown-content w3-bar-block w3-border'>
									<a href='?param=PSim' class='w3-bar-item w3-button'>Sim</a>
									<a href='?param=PNao' class='w3-bar-item w3-button'>Não</a>
								</div>
							</div>
							</th>
							
							<th>
							<div class='w3-dropdown-hover'>
								<button class='w3-button w3-white w3-border w3-tiny w3-padding-small'>Tipo de Serviço</button>
								<div class='w3-dropdown-content w3-bar-block w3-border'>
									<a href='?param=Saneamento' class='w3-bar-item w3-button'>Saneamento</a>
									<a href='?param=Transporte Intermunicipal' class='w3-bar-item w3-button'>Transporte Intermunicipal</a>
									<a href='?param=Energia Eletrica' class='w3-bar-item w3-button'>Energia Eletrica</a>
									<a href='?param=Portos E Hidrovias' class='w3-bar-item w3-button'>Portos E Hidrovias</a>
									<a href='?param=Terminal Rodoviario' class='w3-bar-item w3-button'>Terminal Rodoviario</a>
									<a href='?param=Outros' class='w3-bar-item w3-button'>Outros</a>
								</div>
							</div>
							</th>	
							<th>ACTION</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					</table>";
		}
		$conn->close();
		
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
