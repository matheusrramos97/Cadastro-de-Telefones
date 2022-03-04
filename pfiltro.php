<?php
include "Header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = @$_POST["id"];
  $telefone = @$_POST["telefone"];
  $protocolo = @$_POST["protocolo"];
  $sprotocolo = @$_POST["sprotocolo"];
  $spesquisa = @$_POST["spesquisa"];
  $tservico = @$_POST["tservico"];
}

$form = '<div class="container-fluid">';
$form .= '<form action="/pavancada.php" method="post">';
$form .= '<div class="row">';
$form .= '<div class="col-md-8 pr-1">';
$form .= '<label>Filtro de Valores</label>';
if ($id == "on"){
	$form .= '<div class="row">';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<label>ID</label>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "sid">';
	$form .= '			<option>Não filtrar</option>';
	$form .= '			<option>Contendo</option>';
	$form .= '			<option>Iniciando com</option>';
	$form .= '			<option>Terminando com</option>';
	$form .= '			<option>Igual</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<input type="text" name="iid">';
	$form .= '	</div>';
	$form .= '</div>';
}
if ($telefone == "on"){
	$form .= '<div class="row">';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<label>Telefone</label>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "stelefone">';
	$form .= '			<option>Não filtrar</option>';
	$form .= '			<option>Contendo</option>';
	$form .= '			<option>Iniciando com</option>';
	$form .= '			<option>Terminando com</option>';
	$form .= '			<option>Igual</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<input type="text" name="itelefone">';
	$form .= '	</div>';
	$form .= '</div>';
}
if ($protocolo == "on"){
	$form .= '<div class="row">';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<label>Protocolo</label>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "sprotocolo">';
	$form .= '			<option>Não filtrar</option>';
	$form .= '			<option>Contendo</option>';
	$form .= '			<option>Iniciando com</option>';
	$form .= '			<option>Terminando com</option>';
	$form .= '			<option>Igual</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<input type="text" name="iprotocolo">';
	$form .= '	</div>';
	$form .= '</div>';
}
if ($sprotocolo == "on"){
	$form .= '<div class="row">';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<label>STATUS Protocolo</label>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "ssprotocolo">';
	$form .= '			<option>Não filtrar</option>';
	$form .= '			<option>Igual</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "isprotocolo">';
	$form .= '			<option>Sim</option>';
	$form .= '			<option>Nao</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '</div>';
}
if ($spesquisa == "on"){
	$form .= '<div class="row">';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<label>STATUS Pesquisa</label>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "sspesquisa">';
	$form .= '			<option>Não filtrar</option>';
	$form .= '			<option>Igual</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "ispesquisa">';
	$form .= '			<option>Sim</option>';
	$form .= '			<option>Nao</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '</div>';
}
if ($tservico == "on"){
	$form .= '<div class="row">';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<label>Tipo de Serviço</label>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "stservico">';
	$form .= '			<option>Não filtrar</option>';
	$form .= '			<option>Igual</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '	<div class="col-sm-4">';
	$form .= '		<select name= "itservico">';
	$form .= '			<option>Saneamento</option>';
	$form .= '			<option>Transporte Intermunicipal</option>';
	$form .= '			<option>Energia Eletrica</option>';
	$form .= '			<option>Portos E Hidrovias</option>';
	$form .= '			<option>Terminal Rodoviario</option>';
	$form .= '			<option>Outros</option>';
	$form .= '		</select>';
	$form .= '	</div>';
	$form .= '</div>';
}
	$form .= '<button type="submit" class="btn btn-primary">Enviar</button>';
	$form.= '</div>';
	$form.= '</div>';
	$form.= '</form>';
	$form.= '</div>';
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Pesquisa Avançada</h5>
            </div>
            <div class="card-body">
				<?=$form?>
            </div>
        </div>
    </div>
</div>