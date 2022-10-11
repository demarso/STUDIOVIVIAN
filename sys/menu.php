
   <div class="container">
      <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-lg navbar-dark ">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="nav nav-tabs">
                      <li class="nav-item dropdown active">
                       <a class="nav-link  dropdown-toggle" id="navclientes" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLIENTES<span class="sr-only">(current)</span></a>
                       <ul class="dropdown-menu" aria-labelledby="navclientes">
                         <li class="dropdown-item dropdown"><a href="clienteCad.php" target="_black">Cadastrar</a></li>
                         <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="navclientes-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anaminese</a>
                            <ul class="dropdown-menu" aria-labelledby="navclientes-1">
                              <li class="dropdown-item"><a href="clienteAnamineseCad.php">Registrar</a></li>
                              <li class="dropdown-item"><a href="#">Consultar</a></li>
                            </ul>
                          </li>
                         <li class="dropdown-item"><a href="clienteCadLista.php"target="_black" >Lista</a></li>
                       </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" id="navServicos" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVIÇOS<span class="sr-only">(current)</span></a>
                       <ul class="dropdown-menu" aria-labelledby="navServicos">
                         <li class="dropdown-item"><a href="servicosCad.php" target="_black">Cadastrar</a></li>
                         <li class="dropdown-item"><a href="servicosAgendaCad.php" target="_black">Agendar</a></li>
                         <li class="dropdown-item"><a href="servicoLista.php" target="_black">Listar Serviços</a></li>
                         <li class="dropdown-item"><a href="clienteAgendaLista.php" target="_black">Listar Agenda</a></li>
                       </ul>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link  dropdown-toggle" id="navPacotes" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PACOTES<span class="sr-only">(current)</span></a>
                            <ul class="dropdown-menu" aria-labelledby="navPacotes">
                              <li class="dropdown-item"><a href="servicosPacoteCad.php" target="_black">Cadastrar</a></li>
                              <li class="dropdown-item"><a href="pacoteAgendaCad.php" target="_black">Agendar</a></li>
                              <li class="dropdown-item"><a href="#" target="_black">Lista</a></li>
                            </ul>
                      </li>
                     <li class="nav-item dropdown">
                       <a class="nav-link  dropdown-toggle" id="navFinanceiro" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FINANCEIRO<span class="sr-only">(current)</span></a>
                       <ul class="dropdown-menu" aria-labelledby="navFinanceiro">
                          <li class="dropdown-item"><a href="entrada.php" target="_black">Entradas</a></li>
                          <li class="dropdown-item"><a href="#" target="_black">Saídas</a></li>
                          <li class="dropdown-item dropdown">
                            <a class="dropdown-toggle" id="navFinanceiro-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gráficos</a>
                            <ul class="dropdown-menu" aria-labelledby="navFinanceiro-1">
                              <li class="dropdown-item"><a href="#">Por Valor</a></li>
                              <li class="dropdown-item"><a href="#">Por %</a></li>
                            </ul>
                          </li>
                        <li class="dropdown-item"><a href="entradaLista.php" target="_black">Lista</a></li>
                       </ul>
                     </li> 
                      <li class="nav-item">
                          <a class="nav-link" href="sair.php">SAIR</a>
                      </li>
                  </ul>
               </div>
            </nav>
         </div>
            
         <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
            <ul class="email">
              <a href="index.html"><img src="images/logo.png" alt="#" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
              <li><H2>SISTEMA DE GESTÃO</a></H2></li>
              <li><? echo "Usuário: ".$_SESSION['nome']; ?></li>
            </ul>

         </div> 

      </div>
   </div>