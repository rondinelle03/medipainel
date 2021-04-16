<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Cadastrar Clínicas</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5  form-group pull-right top_search">
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
         
         
        

          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Dados da Clínica </h2>
                  <!--<ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                   
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>-->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="nomeclinica">Nome da Clínica <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nomeclinica" required="required" class="form-control ">
                      </div>
                    </div>
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="cnpjclinica">CNPJ da Clínica <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="cnpjclinica" required="required" class="form-control ">
                      </div>
                    </div>
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="nomeresponsavel">Nome do responsável <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="nomeresponsavel" required="required" class="form-control ">
                      </div>
                    </div>
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="cpfresponsavel">CPF do Responsável <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="cpfresponsavel" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="cep">CEP: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="cep" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="endereco">Rua/Avenida: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="endereco" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="complemento">Complemento: 
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="complemento"  class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="numero">Número: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="numero" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="bairro">Bairro: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="bairro" name="bairro" required="required" class="form-control">
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="cidade">Cidade: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="cidade" name="cidade" required="required" class="form-control">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="Estado">Estado: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="Estado" name="Estado" required="required" class="form-control">
                      </div>
                    </div>
                  
                  <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                       
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                      </div>
                    </div>
                  

                  </form>
                </div>
              </div>
            </div>
          </div> <!--.row-->


        

          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>