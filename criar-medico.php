<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> MEDIPAINEL </title>
    <link rel="shortcut icon" href="favicon.ico"/>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

     <link href="build/css/login.css" rel="stylesheet">
  </head>

  <body>
   <section class="container-fluid">
          <div class="row group-form">

              <div class="col-sm-12 col-md-5" id="bloco-busca">
                
                <main class="form-signin">
                  <form>
                   
                    <h1 class="mb-3 fw-normal">Cadastro Médico <span> Crie uma conta para utilizar o Portal e acompanhar seus exames.</h1>
                    <label for="inputNome" >SEU NOME COMPLETO</label>
                    <input type="text" id="inputNome" class="form-control form-control-lg" required="" autofocus="">
                    <label for="inputEmail" >SEU E-MAIL</label>
                    <input type="email" id="inputEmail" class="form-control form-control-lg no-mg-bottom" required="" autofocus="">
                    <label for="inputEmail" >CONFIRMAR E-MAIL</label>
                    <input type="email" id="inputEmail" class="form-control form-control-lg no-mg-bottom" required="" autofocus="">
                    <label for="inputEmail" >ESTADO CONSELHO</label>
                    <select class="form-control form-select" aria-label="Default select example">
                      <option selected>SELECIONE</option>
                      <option value="">-- Selecione o Estado --</option> 
                      <option value="AC">Acre</option> 
                      <option value="AL">Alagoas</option> 
                      <option value="AM">Amazonas</option> 
                      <option value="AP">Amapá</option> 
                      <option value="BA">Bahia</option> 
                      <option value="CE">Ceará</option> 
                      <option value="DF">Distrito Federal</option> 
                      <option value="ES">Espírito Santo</option> 
                      <option value="GO">Goiás</option> 
                      <option value="MA">Maranhão</option> 
                      <option value="MG">Minas Gerais</option> 
                      <option value="MS">Mato Grosso do Sul</option> 
                      <option value="MT">Mato Grosso</option> 
                      <option value="PA">Pará</option> 
                      <option value="PB">Paraíba</option> 
                      <option value="PE">Pernambuco</option> 
                      <option value="PI">Piauí</option> 
                      <option value="PR">Paraná</option> 
                      <option value="RJ">Rio de Janeiro</option> 
                      <option value="RN">Rio Grande do Norte</option> 
                      <option value="RR">Roraima</option> 
                      <option value="RO">Rondônia</option> 
                      <option value="RS">Rio Grande do Sul</option> 
                      <option value="SC">Santa Catarina</option> 
                      <option value="SE">Sergipe</option> 
                      <option value="SP">São Paulo</option> 
                      <option value="TO">Tocantins</option>
                    </select>
                    <label for="inputEmail" >CONSELHO PROFISSIONAL</label>
                     <select class="form-control form-select" aria-label="Default select example">
                      <option selected>ESTADO CONSELHO</option>
                      <option value="CRM">Conselho Regional de Medicina (CRM)</option>
                      <option value="CRO">Conselho Regional de Odontologia (CRO)</option>
                      <option value="CRF">Conselho Regional de Famácia (CRF)</option>
                    </select>
                    <label for="inputPassword" id="blc-senha" >SENHA <span></span></label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg"  required="">
                     <label for="inputPassword" id="blc-senha" >CONFIRMAR SENHA <span></span></label>
                    <input type="password" id="inputPassword" class="form-control form-control-lg"  required="">
                    
                    <a href="index.php" class=" btn btn-lg btn-greem" type="submit">Voltar</a>
                    <button class=" btn btn-lg btn-dark" type="submit">Cadastrar</button>
                    <p class="marca-rodape">©2021 Desenvovido pela Medimagem</p>
                  </form>
                </main>


              </div>

              <div class="col-sm-12 col-md-7" id="login-bg">
                
                <h1 class="txt-login">Saúde na palma da mão</h1>
                
              </div>

          </div>
      </section>
  </body>
</html>
