<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
if (!isset($_SESSION['id'])){
    header("Location: index.php?erro=1");
    exit;
 }
 $hoje = date('Y/m/d');
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CADASTRO</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/navbar.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
  <body class="main-layout bg-light">
      <header>
            <?php  include ('menu.php'); ?>
      </header>
    <br /><br /><br /><br />
     
  <div class="container">
                             
    <font class="text-warning" face="Verdana" size="10px">Cadastro de Clientes</font>
                  
    <form name="form1" method="post" action="clienteCadOK.php">
    <!-- ********************************************************************************************************************** -->          
          <div class="form-group row mt-2 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="datacadA">Data do Cadastro:</label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="datacad" id="datacad" tabindex="-1" value="<?php echo date('Y-m-d',strtotime($hoje));?>">
            </div>
          </div>
    <!-- ********************************************************************************************************************** -->           
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="nome">Nome:</label>
            <div class="col-md-6">
              <input type="text" class="form-control" autofocus name="nome" id="nome" size="80" tabindex="1" onBlur="ajaxGet('clienteConsulta.php?nome='+this.value,document.getElementById('Matric'),true);"  style="text-transform:uppercase;" titleplaceholder="Informe o nome">
              <input type="text" class="form-control" name="Matric" id="Matric" size="30" hidden="true">
            </div>
          </div>
    <!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="nascimento">Data de Nascimento:</label>
            <div class="col-md-3">
              <input type="date" class="form-control" name="nascimento" id="nascimento" tabindex="2" placeholder="Data do Nascimento">
            </div>
          </div>
    <!-- ********************************************************************************************************************** -->          
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="cep">CEP:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="cep" id="cep" maxlength="9" onKeyPress="MascaraCep(form1.cep)" onblur="pesquisacep(this.value);" tabindex="3" placeholder="Informe o CEP">
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="endereco">Endereço:</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="endereco" id="endereco" tabindex="-1" size="80">
            </div>
            <label class="col-form-label" for="numero">Número:</label>
            <div class="col-md-1">
              <input type="text" class="form-control" name="numero" id="numero" tabindex="4" >
            </div>
          </div>
         
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="bairro">Complemento:</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="complemento" id="complemento" size="50" tabindex="5">
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="bairro">Bairro:</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="bairro" id="bairro" size="50" tabindex="-1">
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="cidade">Cidade:</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="cidade" id="cidade" size="50" tabindex="-1">
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="estado">Estado:</label>
            <div class="col-md-1">
              <input type="text" class="form-control" name="estado" id="estado" tabindex="-1">
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="telefone">Telefone:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="telefone" id="telefone" maxlength="14" onKeyPress="MascaraTelefone(form1.telefone)" tabindex="5" placeholder="Telefone Residencial" >
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="celular">Celular:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" name="celular" id="celular" tabindex="6" maxlength="15" onKeyPress="MascaraCelular(form1.celular)" placeholder="Informe o celular" >
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="email">E-mail:</label>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" tabindex="7" id="email" placeholder="Informe o E-mail" >
            </div>
          </div>
    <!-- ********************************************************************************************************************** --> 
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="cpf">CPF:</label>
            <div class="col-md-3">
              <input type="cpf" class="form-control" name="cpf" id="cpf" size="80"  onBlur="ValidarCPF(form1.cpf)" tabindex="8"  maxlength="14" onKeyPress="MascaraCPF(form1.cpf)" placeholder="Informe o CPF">
            </div>
          </div>

    <!-- ********************************************************************************************************************** -->           <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="rg">RG:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" tabindex="9" name="rg" id="rg"  maxlength="15" placeholder="Informe o RG">
            </div>
          </div>
   
    <!-- ********************************************************************************************************************** -->           <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="rg">Estado Civil:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" tabindex="11" name="civil" id="civil"  maxlength="15" placeholder="Informe o Estado Civil">
            </div>
          </div>

    <!-- ********************************************************************************************************************** -->      <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="rg">Sexo:</label>
            <div class="col-md-6">
              <INPUT TYPE="RADIO" NAME="sexo" VALUE="Masculino" tabindex="12"> Masculino
              <INPUT TYPE="RADIO" NAME="sexo" VALUE="Feminino"> Feminino
            </div>
          </div>
    <!-- ********************************************************************************************************************** -->           <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="rg">Profissão:</label>
            <div class="col-md-3">
              <input type="text" class="form-control" tabindex="13" name="profissao" id="profissao"  maxlength="15" placeholder="Informe a profissão">
            </div>
          </div>

    <!-- ********************************************************************************************************************** -->
          <div class="form-group row mt-1 mb-1">
            <label class="col-sm-2 col-form-label text-success" for="observacoes">Outras informações:</label>
            <div class="col-md-6">
              <input type="text" class="form-control" name="observacoes" id="observacoes" tabindex="14" placeholder="Outras informações">
            </div>
          </div>
    <!-- ********************************************************************************************************************** -->
          <div class="form-group mt-2">
            <div class="form-row">
              <button class="btn btn-primary btn-block">S A L V A R</button>
            </div>
          </div>

    <!-- ********************************************************************************************************************** --> 
    </form>
      <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>© 2020-<? echo date("Y"); ?> Todos os Direitos Reservados. <a href="https://idbras.com.br/">IDBRAS</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>    <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/micoxAjax.js"></script>
      <script src="js/navbar.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
        (function($){
          $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.dropdown-submenu .show').removeClass("show");
            });

            return false;
          });
        })(jQuery)

        
          $("#cep").focusout(function(){
          //Início do Comando AJAX
          $.ajax({
          //O campo URL diz o caminho de onde virá os dados
          //É importante concatenar o valor digitado no CEP
          url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
          //Aqui você deve preencher o tipo de dados que será lido,
          //no caso, estamos lendo JSON.
          dataType: 'json',
          //SUCESS é referente a função que será executada caso
          //ele consiga ler a fonte de dados com sucesso.
          //O parâmetro dentro da função se refere ao nome da variável
          //que você vai dar para ler esse objeto.
          success: function(resposta){
            //Agora basta definir os valores que você deseja preencher
            //automaticamente nos campos acima.
            $("#endereco").val(resposta.logradouro);
            //$("#complemento").val(resposta.complemento);
            $("#bairro").val(resposta.bairro);
            $("#cidade").val(resposta.localidade);
            $("#estado").val(resposta.uf);
            //Vamos incluir para que o Número seja focado automaticamente
            //melhorando a experiência do usuário
            $("#numero").focus();
            }
          });
        });
                

       
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('endereco').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
            
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('endereco').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('estado').value=(conteudo.uf);
           
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('endereco').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('estado').value="...";
               

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };                
      </script>
   
   </body>
</html>

