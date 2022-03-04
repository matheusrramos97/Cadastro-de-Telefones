<?php include 'Header.php' ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Pesquisa Avançada</h5>
            </div>
            <div class="card-body">
              <form action="/pfiltro.php" method="post">
                  <div class="row">
                      <div class="col-md-5 pr-1">
						<label>Exibição de Campos</label>
                          <div class="form-group">
                            <div class="checkbox">
							  <label><input type="checkbox" name="id" checked>ID</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" name="telefone" checked>Telefone</label>
							</div>
							<div class="checkbox disabled">
							  <label><input type="checkbox" name="protocolo" checked>Protocolo</label>
							</div>
							<div class="checkbox disabled">
							  <label><input type="checkbox" name="sprotocolo" checked>STATUS Protocolo</label>
							</div>
							<div class="checkbox disabled">
							  <label><input type="checkbox" name="spesquisa" checked>STATUS Pesquisa</label>
							</div>
							<div class="checkbox disabled">
							  <label><input type="checkbox" name="tservico" checked>Tipo de Serviço</label>
							</div>
                          </div>
                      </div>
                  </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
        </div>
    </div>
</div>
