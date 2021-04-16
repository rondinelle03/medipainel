<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Relatório de Requesições</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <select class="select2_single form-control" tabindex="-1">
                          <option>Selecione o Ano:</option>
                          <option value="recepcao">2020</option>
                          <option value="recepcao">2021</option>
                          <option value="recepcao">2022</option>
                          <option value="recepcao">2023</option>
                        </select>
                  </div>
                </div>
              </div>
          </div>
          <div class="clearfix"></div>
         
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="text-center">
                      <button type="button" class="btn btn-success btn-sm">Confirmadas</button> 
                      <button type="button" class="btn btn-warning btn-sm">Aguardando</button>
                      <button type="button" class="btn btn-danger btn-sm">Cancelados</button>
                    </h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="relatorioAgendamento"></canvas>   
                  </div>
                </div>
              </div>
          </div> <!--.row-->
        

        

         

          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>