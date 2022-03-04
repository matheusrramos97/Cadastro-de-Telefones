<?php include 'connect.php' ?>
<?php include 'Header.php' ?>
<?php
	$sqltransporte = "select count(TServico) as NRegistroTransporte from tbl_telefone where TServico = 'Transporte Intermunicipal';";
	$result = $conn->query($sqltransporte);
	$data=mysqli_fetch_assoc($result);
	$NRegistroTransporte = $data["NRegistroTransporte"];
	
	$sqlSaneamento = "select count(TServico) as NRegistroSaneamento from tbl_telefone where TServico = 'Saneamento';";
	$result = $conn->query($sqlSaneamento);
	$dataSaneamento=mysqli_fetch_assoc($result);
	$NRegistroSaneamento = $dataSaneamento["NRegistroSaneamento"];
	
	$sqlEnergia = "select count(TServico) as NRegistroEnergia from tbl_telefone where TServico = 'Energia Eletrica';";
	$result = $conn->query($sqlEnergia);
	$dataEnergia=mysqli_fetch_assoc($result);
	$NRegistroEnergia = $dataEnergia["NRegistroEnergia"];
	
	$sqlRodovia = "select count(TServico) as NRegistroRodovia from tbl_telefone where TServico = 'Rodovias';";
	$result = $conn->query($sqlRodovia);
	$dataRodovia=mysqli_fetch_assoc($result);
	$NRegistroRodovia = $dataRodovia["NRegistroRodovia"];
	
	$sqlGas = "select count(TServico) as NRegistroGas from tbl_telefone where TServico = 'Gas Natural';";
	$result = $conn->query($sqlGas);
	$dataGas=mysqli_fetch_assoc($result);
	$NRegistroGas = $dataGas["NRegistroGas"];
	
	$sqlPortos = "select count(TServico) as NRegistroPortos from tbl_telefone where TServico = 'Portos E Hidrovias';";
	$result = $conn->query($sqlPortos);
	$dataPortos=mysqli_fetch_assoc($result);
	$NRegistroPortos = $dataPortos["NRegistroPortos"];
	
	$sqlTerminal = "select count(TServico) as NRegistroTerminal from tbl_telefone where TServico = 'Terminal Rodoviario';";
	$result = $conn->query($sqlTerminal);
	$dataTerminal=mysqli_fetch_assoc($result);
	$NRegistroTerminal = $dataTerminal["NRegistroTerminal"];
	
	$sqlOutros = "select count(TServico) as NRegistroOutros from tbl_telefone where TServico = 'Outros';";
	$result = $conn->query($sqlOutros);
	$dataOutros=mysqli_fetch_assoc($result);
	$NRegistroOutros = $dataOutros["NRegistroOutros"];
	
	$sqlEnviadosProtocolo = "select count(TStatus) as EnviadosProtocolo from tbl_telefone where TStatus = 'Sim';";
	$result = $conn->query($sqlEnviadosProtocolo);
	$dataEnviadosProtocolo=mysqli_fetch_assoc($result);
	$EnviadosProtocolo = $dataEnviadosProtocolo["EnviadosProtocolo"];
	
	$sqlPendentesProtocolo = "select count(TStatus) as PendentesProtocolo from tbl_telefone where TStatus = 'Nao';";
	$result = $conn->query($sqlPendentesProtocolo);
	$dataPendentesProtocolo=mysqli_fetch_assoc($result);
	$PendentesProtocolo = $dataPendentesProtocolo["PendentesProtocolo"];
	
	$sqlEnviadosPesquisa = "select count(PStatus) as EnviadosPesquisa from tbl_telefone where PStatus = 'Sim';";
	$result = $conn->query($sqlEnviadosPesquisa);
	$dataEnviadosPesquisa=mysqli_fetch_assoc($result);
	$EnviadosPesquisa = $dataEnviadosPesquisa["EnviadosPesquisa"];
	
	$sqlPendentesPesquisa = "select count(PStatus) as PendentesPesquisa from tbl_telefone where PStatus = 'Nao';";
	$result = $conn->query($sqlPendentesPesquisa);
	$dataPendentesPesquisa=mysqli_fetch_assoc($result);
	$PendentesPesquisa = $dataPendentesPesquisa["PendentesPesquisa"];
	
	
 ?>
 
 <script language="JavaScript"> 
function perguntaPStatus(){ 
   if (confirm('Deseja mudar todos os numeros que estão com Nao no envio de protocolo para sim?')){ 
      window.location.replace("/pStatusChange.php");
   } 
} 

function perguntaTStatus(){ 
   if (confirm('Deseja mudar todos os numeros que estão com Nao no envio de protocolo para sim?')){ 
      window.location.replace("/TStatusChange.php");
   } 
}
</script>
 
<div class="row">
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-bus" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Transporte Intermunicipal</p><?=$NRegistroTransporte?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="/Banco.php?param=Transporte%20Intermunicipal"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="/exportar.php?param=Transporte%20Intermunicipal"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-bath" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Saneamento</p><?=$NRegistroSaneamento?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="/Banco.php?param=Saneamento"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="/exportar.php?param=Saneamento"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-bolt" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Energia Eletrica</p><?=$NRegistroEnergia?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="/Banco.php?param=Energia%20Eletrica"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="/exportar.php?param=Energia%20Eletrica"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-road" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Rodovias Pedagiadas</p><?=$NRegistroRodovia?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="#"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="#"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-cloud" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Gás Natural Condizado</p><?=$NRegistroGas?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="#"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="#"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-ship" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Portos e Hidrovias</p><?=$NRegistroPortos?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="/Banco.php?param=Portos%20E%20Hidrovias"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="/exportar.php?param=Portos%20E%20Hidrovias"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-bus" style="font-size:48px;color:orange"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Terminal Rodoviário</p><?=$NRegistroTerminal?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="/Banco.php?param=Terminal%20Rodoviario"><i class="fa fa-eye" style="font-size:25px;color:blue"></i></a> &emsp;
					<a href="/exportar.php?param=Terminal%20Rodoviario"><i class="fa fa-download" style="font-size:25px;color:blue"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card"><!----><!---->
			<div class="card-body">
				<div>
					<div class="row">
						<div class="col-3">
							<div>
								<i class="fa fa-asterisk" style="font-size:48px;color:blue"></i>
							</div>
						</div>
						<div class="col-8">
							<div class="numbers"><p>Outros</p><?=$NRegistroOutros?> Registros.</div>
						</div>
					</div>
				<div>
					<hr><a href="/Banco.php?param=Outros"><i class="fa fa-eye" style="font-size:25px;color:orange"></i></a> &emsp;
					<a href="/exportar.php?param=Outros"><i class="fa fa-download" style="font-size:25px;color:orange"></i></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-xl-3"></div>
	<div class="col-md-6 col-xl-3">
		<div class="card">
			<div class="card-body">
				<p class="text-center">Envios de Protocolos</p>
				<hr>
				<div class="stats">
					Enviados: <?=$EnviadosProtocolo?> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
					Pendentes: <?=$PendentesProtocolo?>
					<br><br>
					<a href="/Banco.php?param=TSim"><i class="fa fa-eye" style="font-size:25px;color:green"></i></a>
					&emsp;
					<a href="/exportar.php?param=TSim"><i class="fa fa-download" style="font-size:25px;color:green"></i></a>
					&emsp; &emsp; &emsp; &emsp; 
					<a onclick="perguntaTStatus()"><i class="fa fa-angle-double-left" style="font-size:25px;color:orange"></i></a>
					&emsp; &emsp; &emsp; &emsp;
					<a href="/Banco.php?param=TNao"><i class="fa fa-eye" style="font-size:25px;color:red"></i></a>
					&emsp;
					<a href="/exportar.php?param=TNao"><i class="fa fa-download" style="font-size:25px;color:red"></i></a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-md-6 col-xl-3">
		<div class="card">
			<div class="card-body">
				<p class="text-center">Envios de Pesquisa</p>
				<hr>
				<div class="stats">
					Enviados: <?=$EnviadosPesquisa?> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
					Pendentes: <?=$PendentesPesquisa?>
					<br><br>
					<a href="/Banco.php?param=PSim"><i class="fa fa-eye" style="font-size:25px;color:green"></i></a>
					&emsp;
					<a href="/exportar.php?param=PSim"><i class="fa fa-download" style="font-size:25px;color:green"></i></a>
					&emsp; &emsp; &emsp; &emsp; 
					<a onclick="perguntaPStatus()"><i class="fa fa-angle-double-left" style="font-size:25px;color:orange"></i></a>
					&emsp; &emsp; &emsp; &emsp;
					<a href="/Banco.php?param=PNao"><i class="fa fa-eye" style="font-size:25px;color:red"></i></a>
					&emsp;
					<a href="/exportar.php?param=PNao"><i class="fa fa-download" style="font-size:25px;color:red"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>