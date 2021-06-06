<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

             <div class="page-title"> 
            <div class="title_left">
              <h3>Seja bem-vindo</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Procure por pacientes, prestadores...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ir!</button>
                    </span>
                  </div>
                </div>
              </div>
          </div>

          
          

         





            <div class="row">

               <div class="col-md-6">
                <div class="x_panel">
                  <div class="x_title">
                          <h2>Agendamentos</h2>
                           <ul class="nav navbar-right panel_toolbox">
                              
                              <li><a href="_cadastrar-requisicao.php" class="btn btn-outline-secondary btn-sm">AGENDAR <i class="fa fa-plus"></i></a>
                              </li>
                            </ul>
                          <div class="clearfix"></div>
                        </div>
                       <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr class="tit-hed">
                         
                          <th>Agendados</th>
                          <th>Finalizados</th>
                          <th>Retornos</th>
                          <th>Cancelados</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="capa-agendamento">
                          <td>8</td> 
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          
                        </tr>
                       
                       
                      </tbody>
                    </table>
                      </div>
              </div>

              <!-- col-md-6-->
              <div class="col-md-6">
                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Tempo médio</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">          
                                <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                     <tr class="tit-hed">
                                     
                                      <th>Sala de espera</th>
                                      <th>Atendimentos</th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr class="capa-agendamento">
                                      <td>00:08:45</td> 
                                      <td>00:21:05</td>
                                      
                                    </tr>
                                  </tbody>
                                </table>          
          
                           </div>
                </div>
              </div>
            </div>
                </div>
              </div><!--col-md-6-->

            </div><!--.row-->

            <div class="row">

               <div class="col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Linha do tempo atendimentos - 2021</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">2021</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2019</a>
                            <a class="dropdown-item" href="#">2018</a>
                          </div>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_line" style="height:350px;"></div>

                  </div>
                </div>
              </div><!-- col-sm-12-->

            </div><!--.row-->


            <div class="row">
               <div class="col-md-6 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Produtividade da agenda na semana</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_agenda_semana" style="height:500px;"></div>

                  </div>
                </div>
              </div><!-- col-md-6-->

                 <!-- col-md-6-->
              <div class="col-md-6">
                  <div class="x_panel">
                  <div class="x_title">
                    <h2>Contas a pagar e a receber - Abril</h2>
                    <ul class="nav navbar-right panel_toolbox">                              
                      <li><a class="btn btn-outline-secondary btn-sm">VER TODOS <i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                  
          
                    <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                         <tr>
                         
                          <th>R/D</th>
                          <th>Data</th>
                          <th>Descrição</th>
                          <th>Valor real</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><button type="button" class="btn btn-round btn-danger"></button></td> 
                          <td>17/04/2021</td>
                          <td>Orcamentos: Adelinda Villas Boas</td>
                          <td>R$ 1.1200</td>
                          
                        </tr>

                        <tr>
                          <td><button type="button" class="btn btn-round btn-success"></button></td> 
                          <td>20/04/2021</td>
                          <td>Compra Produto: Nota #18000</td>
                         <td>R$ 1.1200</td>
                          
                        </tr>
                        <tr>
                          <td><button type="button" class="btn btn-round btn-danger"></button></td> 
                          <td>17/04/2021</td>
                          <td>Orcamentos: Adelinda Villas Boas</td>
                          <td>R$ 1.1200</td>
                          
                        </tr>

                        <tr>
                          <td><button type="button" class="btn btn-round btn-success"></button></td> 
                          <td>20/04/2021</td>
                          <td>Compra Produto: Nota #18000</td>
                         <td>R$ 1.1200</td>
                          
                        </tr>
                        <tr>
                          <td><button type="button" class="btn btn-round btn-danger"></button></td> 
                          <td>17/04/2021</td>
                          <td>Orcamentos: Adelinda Villas Boas</td>
                          <td>R$ 1.1200</td>
                          
                        </tr>

                        <tr>
                          <td><button type="button" class="btn btn-round btn-success"></button></td> 
                          <td>20/04/2021</td>
                          <td>Compra Produto: Nota #18000</td>
                         <td>R$ 1.1200</td>
                          
                        </tr>
                      
                    
                      
                        
                      </tbody>
                    </table>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="btn btn-outline-success btn-lg btn-block">R$ 2.732,50 <br> A receber</div> 
                        </div>
                        <div class="col-sm-6">
                          <div class="btn btn-outline-danger btn-lg btn-block">R$ 450,00 <br> A pagar</div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div><!--col-md-6-->
            </div><!--.row-->       



             <div class="row">

               <div class="col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>FINANCEIRO - 2021</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">2021</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">2020</a>
                            <a class="dropdown-item" href="#">2019</a>
                            <a class="dropdown-item" href="#">2018</a>
                          </div>
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_financeiro" style="height:400px;"></div>

                  </div>
                </div>
              </div><!-- col-sm-12-->

            </div><!--.row-->   


            <div class="row">

                <div class="col-md-4 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agendamentos por secretário (a)</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li>
                        09/04 até 16/04
                      </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">          
                                <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                     <tr>
                                     
                                      <th>Nome</th>
                                      <th>Agendamentos</th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      
                                    </tr>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                      <td><strong>Total</strong></td> 
                                      <td><strong>140</strong></td>
                                      
                                    </tr>
                                  </tfoot>
                                </table>          
          
                           </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div><!-- col-md-4 col-sm-12-->


                <div class="col-md-4 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ranking indicações</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a class="btn btn-outline-secondary btn-sm">Ver todos <i class="fa fa-plus"></i></a>
                              </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">          
                                <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                     <tr>
                                     
                                      <th>Paciente</th>
                                      <th>Total consultas </th>
                                      <th>Total indicações</th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                  </tbody>
                                 
                                </table>          
          
                           </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div><!-- col-md-4 col-sm-12-->


              <div class="col-md-4 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ranking pacientes</h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li><a class="btn btn-outline-secondary btn-sm">Ver todos <i class="fa fa-plus"></i></a>
                              </li>
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                     <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">          
                                <table  class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                  <thead>
                                     <tr>
                                     
                                      <th>Paciente</th>
                                      <th>Total consultas </th>
                                      <th>Total pontos</th>
                                     
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                    <tr>
                                      <td>Pedro Luiz</td> 
                                      <td>20</td>
                                      <td>20</td>
                                    </tr>
                                  </tbody>
                                 
                                </table>          
          
                           </div>
                        </div>
                      </div>

                  </div>
                </div>
              </div><!-- col-md-4 col-sm-12-->

            </div> <!--row-->


            <div class="row">

                
            </div><!--.row-->


          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>