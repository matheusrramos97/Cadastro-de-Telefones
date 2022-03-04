<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Cadastro de Telefones</h5>
            </div>
            <div class="card-body">
              <form action="/InsertDB.php" method="post">
                  <div class="row">
                      <div class="col-xs-2 pr-1 pl-1">
                          <div class="form-group">
									<input type="text" class="form-control"  name ="NTelefone" placeholder="Número de Telefone">
                          </div>
                      </div>
                      <div class="col-xs-2 pr-1">
                          <div class="form-group">
                              <input type="text" class="form-control" placeholder="Número de Protocolo" name ="NProtocolo" >
                          </div>
                      </div>
                      <div class="col-xs-2 pr-1">
                          <div class="form-group">
                              <select class="form-control" name="TStatus">
                                  <option value="Nao"> Já foi enviado o SMS? </option>
                                  <option value="Sim"> Sim </option>
                                  <option value="Nao"> Não </option>
                              </select>
                          </div>
                      </div>
                                   
                      <div class="col-xs-2 pr-1">
                          <div class="form-group">
                              <select class="form-control" name="TServico">
                                  <option>Tipo de Serviço</option>
                                  <option value="Transporte Intermunicipal"> Transporte Intermunicipal</option>
                                  <option value="Saneamento"> Saneamento (Confresa e Diamantino)</option>
                                  <option value="Rodovias"> Rodovias Pedagiadas</option>
                                  <option value="Energia Eletrica"> Energia Elétrica</option>
                                  <option value="Gas Natural"> Gás Natural Condizado</option>
                                  <option value="Portos E Hidrovias"> Portos e Hidrovias</option>
                                  <option value="Terminal Rodoviario"> Terminal Rodoviário</option>
                                  <option value="Outros"> Outros</option>
                              </select>
                          </div>
                      </div> 
				</div>
				<div class="row pl-1">
					<button type="submit" class="btn btn-primary">Enviar</button>
				</div>
              </form>
            </div>
        </div>
    </div>
</div>
