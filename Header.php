<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="/imagens/icone-ouvidoria.png">
    <title>Cadastro de Telefones</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <link href="assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <!--
              Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
          -->
            <div class="logo">
                <a  href="index.php" class="simple-text logo-mini">
                    BD
                </a>
                <a  href="index.php"  class="simple-text logo-normal">
                    Ouvidoria
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <!-- <li class="active"> -->
                    <li <?php echo GetPagina("/dbouvidoria/dashboard.php"); ?>>
                        <a href="dashboard.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Relatório</p>
                        </a>
                    </li>
                    <li <?php echo GetPagina("/dbouvidoria/index.php"); ?>>
                        <a href="index.php">
                            <i class="now-ui-icons tech_mobile"></i>
                            <p>Cadastrar Números</p>
                        </a>
                    </li>
                    <li <?php echo GetPagina("/dbouvidoria/Banco.php"); ?>>
                        <a href="Banco.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Números Cadastrados</p>
                        </a>
                    </li>
					<li <?php echo GetPagina("pavancada"); ?>>
                        <a href="pesquisa.php">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                            <p>Pesquisa Avançada</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="index.php">INICIO</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
			
			<?php 				
				function GetPagina($Pagina){
					
					$PaginaAtual = $_SERVER['PHP_SELF'];
							
					if ($PaginaAtual == $Pagina){
						return 'class ="active"';
						echo $PaginaAtual;
					}
					if(($PaginaAtual == "/dbouvidoria/pesquisa.php" or $PaginaAtual == "/dbouvidoria/pfiltro.php" or $PaginaAtual == "/dbouvidoria/pavancada.php") and ($Pagina == "pavancada")){
						return 'class ="active"';
					}
				}	
			?>