<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Cadastrar Ordem de Pagamento</h3>
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
                  <h2>Preencha os campos abaixo:</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group row">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Ordem nº </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" disabled="disabled" placeholder="002">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Data </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" disabled="disabled" placeholder="01.02.2021">
                      </div>
                    </div>


                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Prestador:<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                        <select class="select2_single form-control" tabindex="-1">
                          <option></option>
                          <option value="recepcao">Lucas Fonseca Torres</option>
                          <option value="recepcao">Aguinaldo timoteo</option>
                          <option value="recepcao">João Antonio freitas</option>
                          <option value="recepcao">Francisco Alencar</option>
                        </select>
                      </div>
                    </div>

                  
                    <div class="form-group row">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Valor (R$)<span class="required">*</span> </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" class="form-control" required="required" >
                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Data de pagamento: <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                        <script>
                          function timeFunctionLong(input) {
                            setTimeout(function() {
                              input.type = 'text';
                            }, 60000);
                          }
                        </script>
                      </div>
                    </div>

                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Comprovante:</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input class="form-control" type="file" id="formFile">
                      </div>
                    </div>



                       <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Realizado?</label>
                      <div class="col-md-6 col-sm-6 ">
                        <div class="radio">
                          <label>
                            <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Sim
                          </label>
                        </div>
                        <div class="radio">
                          <label>
                            <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Não
                          </label>
                        </div>
                      </div>
                    </div>
                  
                  
                  <div class="form-group row">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Observação 
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <textarea class="form-control" rows="3" ></textarea>
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