
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu Principal</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </span></a></li>
                  <li><a><i class="fa fa-users"></i> Usuários <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_cadastrar-usuario.php">Cadastrar usuários</a></li>
                      <li><a href="_listar-usuario.php">Listar usuários</a></li>
                      <li><a href="_cadastrar-setor.php">Adicionar setores</a></li>
                      <li><a href="_listar-setor.php">Listar setores</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i> Pacientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_cadastrar-cliente.php">Cadastrar Pacientes</a></li>
                      <li><a href="_listar-cliente.php">Listar Pacientes</a></li>
                     <li><a href="_listar-aniversariantes.php">Aniversariantes</a></li>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-hospital-o"></i> Clinicas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_cadastrar-clinicas.php">Cadastrar clínicas</a></li>
                      <li><a href="_listar-clinicas.php">Listar clínicas</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Requisições de exames <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_cadastrar-requisicao.php">Cadastrar requisições</a></li>
                      <li><a href="_listar-requisicao.php">Listar requisições</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Agendamentos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_listar-agendamento.php">Listar agendamentos</a></li>
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i> Prestadores <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     <li><a href="_cadastrar-prestador.php">Adicionar prestador</a></li>
                     <li><a href="_listar-prestadores.php">Listar prestadores</a></li>
                     
                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text-o"></i> Tipos de exames <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                     
                     <li><a href="_cadastrar-tipo-exame.php">Adicionar tipo de exame</a></li>
                    <li><a href="_listar-tipo-exame.php">Listar tipos de exames</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-file-text-o"></i> Tipos de consultas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      
                      <li><a href="_cadastrar-consulta.php">Adicionar tipo de consulta</a></li>
                     <li><a href="_listar-consulta.php">Listar consulta</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-usd"></i> Ordens de pagamento <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_listar-comprovante-pagamento.php">Listar ordens de pagamento</a></li>
                      <li><a href="_cadastrar-ordem-pagamento.php">Adicionar ordens de pagamento</a></li>
                     
                    </ul>
                  </li>
               <!--   <li><a ><i class="fa fa-bar-chart-o"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_relatorios-clientes.php">Clientes</a></li>
                      <li><a href="_relatorios-agendamento.php">Agendamento</a></li>
                      <li><a href="_relatorios-requesicoes.php">Requesições</a></li>
                    </ul>
                  </li>-->
                  <li><a><i class="fa fa-bar-chart-o"></i> Financeiro  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="_tela-inicial.php">Tela inicial</a></li>
                      <li><a href="_relatorio-pagamento.php">Ordens de pagamento</a></li>
                     
                    </ul>
                  </li>
                   
                
                </ul>
              </div>
         

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

      