<?php include '_header.php' ?>
<?php include '_sidebar.php' ?>
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
           <div class="page-title">
            <div class="title_left">
              <h3>Listar Pacientes</h3>
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

             <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Gênero</h2>
                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie" style="height:350px;"></div>

                  </div>
                </div>
              </div>

               <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Faixa Etária</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_bar_horizontal" style="height:370px;"></div>

                  </div>
                </div>
              </div>
            
          </div>
         
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pacientes cadastrados</h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                  
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nome</th> 
                          <th>CPF</th> 
                          <th>Telefone</th> 
                          <th>E-mail</th> 
                          <th>Nascimento</th>                         
                          <th class="right-icons">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>                       
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Garrett</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Ashton</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Cedric</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Airi</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Brielle</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        <tr>
                          <td>Herrod</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Rhona</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Colleen</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Sonya</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Jena</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Quinn</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        <tr>
                          <td>Charde</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Haley</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Tatyana</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Michael</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Paul</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Gloria</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Bradley</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Dai</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Jenette</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Yuri</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Caesar</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Doris</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Angelica</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Gavin</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Jennifer</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Brenden</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Fiona</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Shou</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Michelle</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Suki</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Prescott</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Gavin</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Martena</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Unity</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Howard</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Hope</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Vivian</td>
                        <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                       <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Timothy</td>
                         <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                        <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Jackson</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Olivia</td>
                         <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                        <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Bruno</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Sakura</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Thor</td>
                         <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                        <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Finn</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Serge</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Zenaida</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Zorita</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Jennifer</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Cara</td>
                         <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                        <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Hermione</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Lael</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Jonas</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Shad</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Michael</td>
                          <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                         <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <tr>
                          <td>Donna</td>
                           <td>000.000.000-02</td>
                          <td>(84) 00000.0000</td>  
                          <td>email@email.com</td>
                          <td>01 de Janeiro 2020</td>   
                          <td class="right-icons"><a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash"></i></a></td>
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