<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Listar Agendamento</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Selecione um Médico</option>
                        <option value="1">Médico 01</option>
                        <option value="2">Médico 02</option>
                        <option value="3">Médico 03</option>
                      </select>
                  </div>
                </div>
              </div>
          </div>
          <div class="clearfix"></div>


         
            <div class="row">
               <div class="col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                          <h2>Médico 01 <small>(Médico Selecionado)</small></h2>
                           <ul class="nav navbar-right panel_toolbox">
                              
                              <li><a class="btn btn-outline-secondary btn-sm">AGENDAR <i class="fa fa-plus"></i></a>
                              </li>
                            </ul>
                          <div class="clearfix"></div>
                        </div>

                       <div class="alert alert-warning alert-dismissible " role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                        </button>
                       Sem agendamentos para o dia de hoje.
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
                          <td>0</td> 
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          
                        </tr>
                       
                       
                      </tbody>
                    </table>
                      </div>
              </div>


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
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>002</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>003</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>004</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>005</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>006</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>007</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>008</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>009</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>010</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>011</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>012</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-warning btn-sm">Aguardando</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                         <tr>
                          <td>013</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
                          <td>Clínica 01</td>
                          <td>Densitometria Óssea</td>
                          <td><button type="button" class="btn btn-success btn-sm">Confirmado</button></td>                        
                          <td class="right-icons"><a href="_visualizar-agendamento.php" title="Visualizar"><i class="fa fa-file-text-o"></i></a> <a href="" title="Editar"><i class="fa fa-pencil-square-o"></i></a> <a href="" title="Deletar"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>014</td> 
                          <td>Lucas Fonseca da Luz</td>
                          <td>31.01.2021 | 16hs</td>
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