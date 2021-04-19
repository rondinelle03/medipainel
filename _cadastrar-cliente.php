<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Cadastrar Pacientes</h3>
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
                  <h2>Dados Pessoais </h2>
                 <!-- <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>-->
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form>
                  <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                             Informações Pessoais
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Informações de Contato
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                             Localização do Paciente
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                             Convênio do Paciente
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <div class="row">
                            <div class="col-md-6 col-sm-12  form-group">
                              <input type="text" placeholder="Nome Completo (*)" class="form-control">
                            </div>
                            <div class="col-md-6 col-sm-12  form-group">
                              <input type="text" placeholder="Como gostaria de ser chamado(a)?" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="Data de Nascimento" class="form-control">
                            </div>
                             <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="RG" class="form-control">
                            </div>
                             <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="CPF" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="Nome Cônjuge" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="Nome Pai" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <input type="text" placeholder="Nome Mãe" class="form-control">
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <select class="form-control" >
                                <option value="">Selecione o gênero</option>
                                <option value="press">Masculino</option>
                                <option value="net">Feminino</option>
                              </select>
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <select name="estado_civil" id="estado_civil" class="form-control">
                                <option value="">Selecione Estado Cívil</option>
                                <option value="Solteiro(a)">Solteiro(a)</option><option value="Casado(a)">Casado(a)</option><option value="Divorciado(a)">Divorciado(a)</option><option value="Separado(a)">Separado(a)</option><option value="Viúvo(a)">Viúvo(a)</option><option value="União Estável">União Estável</option></select>
                            </div>
                            <div class="col-md-4 col-sm-12  form-group">
                              <select name="tipo_sanguineo" id="tipo_sanguineo" class="form-control"><option value="">Selecione o tipo sanguineo</option><option value="O+">O+</option><option value="A+">A+</option><option value="B+">B+</option><option value="AB+">AB+</option><option value="O-">O-</option><option value="A-">A-</option><option value="B-">B-</option><option value="AB-">AB-</option></select>
                            </div>
                             <div class="col-md-4 col-sm-12  form-group">
                             <div class="radio">
                                <label>
                                  <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Têm filhos?
                                </label>
                              </div>
                            </div>
                             <div class="col-md-4 col-sm-12  form-group">
                              <div class="radio">
                                  <label>
                                    <input type="radio" checked="" value="option2" id="optionsRadios2" name="optionsRadios"> Informar Óbito
                                  </label>
                                </div>
                             <!-- <input type="text" placeholder="__/__/____ " class="form-control">-->
                            </div>
                             <div class="col-md-4 col-sm-12  form-group">
                               <select name="estado_civil" id="estado_civil" class="form-control">
                                <option value="">OCUPAÇÃO</option>
                                <option value="Solteiro(a)">Solteiro(a)</option><option value="Casado(a)">Casado(a)</option><option value="Divorciado(a)">Divorciado(a)</option><option value="Separado(a)">Separado(a)</option><option value="Viúvo(a)">Viúvo(a)</option><option value="União Estável">União Estável</option></select>
                            </div>

                            <div class="col-md-6 col-sm-12  form-group">
                                <textarea class="resizable_textarea form-control" placeholder="Observações adicionais..."></textarea>
                            </div>

                             <div class="col-md-6 col-sm-12  form-group">
                                 <label for="formFile" class="form-label">Selecionar foto</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div><!--.row-->


                         
                      </div>



                      <div id="step-2">
                        
                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Celular" class="form-control">
                          </div>
                           <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Telefone fixo" class="form-control">
                          </div>
                           <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="e-mail" class="form-control">
                          </div>
                          <div class="col-md-6 col-sm-12  form-group">
                            <input type="text" placeholder="Responsável" class="form-control">
                          </div>
                           <div class="col-md-6 col-sm-12  form-group">
                            <input type="text" placeholder="Telefone Responsável" class="form-control">
                          </div>
                          <div class="col-sm-12  form-group">
                            <input type="text" placeholder="Indicação" class="form-control">
                          </div>

                          <h2 class="StepTitle">Redes Sociais</h2>

                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Facebook" class="form-control">
                          </div>
                           <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Instagram" class="form-control">
                          </div>
                           <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Twitter" class="form-control">
                          </div>
                      </div>




                      <div id="step-3">
                        
                       <div class="row">
                         <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="CEP" class="form-control">
                          </div>
                       </div>

                       <div class="row">
                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Cidade" class="form-control">
                          </div>
                           <div class="col-md-2 col-sm-12  form-group">
                            <input type="text" placeholder="UF" class="form-control">
                          </div>
                          <div class="col-md-6 col-sm-12  form-group">
                            <input type="text" placeholder="Endereço" class="form-control">
                          </div>

                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Complemento" class="form-control">
                          </div>
                           <div class="col-md-2 col-sm-12  form-group">
                            <input type="text" placeholder="Número" class="form-control">
                          </div>
                          <div class="col-md-6 col-sm-12  form-group">
                            <input type="text" placeholder="Bairro" class="form-control">
                          </div>
                           
                       </div>

                      </div>
                      <div id="step-4">
                        <div class="row">
                            <div class="col-sm-12  form-group">
                            <input type="text" placeholder="Convênio" class="form-control">
                          </div>
                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Número Cartão" class="form-control">
                          </div>
                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Data Nacional Validade" class="form-control">
                          </div>
                          <div class="col-md-4 col-sm-12  form-group">
                            <input type="text" placeholder="Cartão Nacional de Saúde" class="form-control">
                          </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-12  form-group">
                             <button type="submit" class="btn btn-success" style="margin: 30px;">Cadastrar</button>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                    </form>



              
                </div>
              </div>
            </div>
          </div> <!--.row-->
        

        


         

          </div>
        </div>
        <!-- /page content -->


<?php include '_footer.php' ?>