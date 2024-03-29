<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Cadastrar Tipo de exame</h3>
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
                  <h2>Insira o nome do tipo de exame na caixa abaixo </h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="setor">Sigla <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <select class="select2_single form-control" tabindex="-1">
                          <option></option>
                          <option value="ct">CT</option>
                          <option value="do">DO</option>
                          <option value="mg">MG</option>
                          <option value="rx">RX</option>
                          <option value="us">US</option>
                          <option value="rm">RM</option>
                        </select>
                      </div>
                    </div>
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="setor">Procedimento <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="setor" required="required" class="form-control ">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="setor">Código <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="setor" required="required" class="form-control ">
                      </div>
                    </div>
                   
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="setor">Valor do Exame (R$) Popular<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="setor" required="required" class="form-control ">
                      </div>
                    </div>
                     <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="setor">Valor do Exame (R$) Particular<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="number" id="setor" required="required" class="form-control ">
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