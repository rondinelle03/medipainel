<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Listar Agendamento</h3>
            </div>
<!--
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Procure...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ir!</button>
                    </span>
                  </div>
                </div>
              </div>-->
          </div>
          <div class="clearfix"></div>
         
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agendamentos solicitados</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                  
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                         
                          <th>Número</th>
                          <th>Cliente</th>
                          <th>Data de Agendamento</th>
                          <th>Clínica</th>
                          <th>Exame</th>
                          <th>Status</th>                      
                          <th class="right-icons">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>001</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>002</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>003</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>004</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>005</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>006</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>007</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>008</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>009</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>010</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>011</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>012</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>013</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>014</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 10:20</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
                </div>
              </div>
          </div> <!--.row-->
        

        

         

          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>