
<?php include "Header.php" ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Números Cadastrados </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php include "Exibir.php"; ?>
					<?php echo "<a href='/exportar.php?param=$param' class='btn btn-primary'>Exportar</a>"; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "Rodape.php" ?>