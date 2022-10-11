<? date_default_timezone_set('America/Sao_Paulo'); ?>
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
      <title>Vivian Martins</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.css">
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
      <script>
      $('#meuModal').on('shown.bs.modal', function () {
          $('#meuInput').trigger('focus')
      })
   </script>
   </head>
   
   <!-- body -->
   <body class="main-layout">

      <!-- loader  
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
      <?php
        include ('menu.php');
      ?>
      </header>
      <!-- Início Modal-->
   
            <div class="modal" id="meuModal" tabindex="-1" role="dialog">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <h5 class="modal-title">EM BREVE!!</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               <div class="modal-body">
                 <img src="images/cilios-posticos.jpg">
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
               </div>
             </div>
           </div>
         </div>
      
      <!-- Fim Modal-->
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section id="banner" class="banner_main">
        <?php  include ('banner.php'); ?> 
      </section>
      <!-- end banner -->
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Nossos Serviços</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr.png" alt="#"/></i>
                     <h3>Design de Sobrancelha</h3>
                     <p>uma sobrancelha moderna, linha e perfeita!</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <h3>Limpeza de Pele</h3>
                     <p>sua pele como a de uma criança!</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <h3>Massagens</h3>
                     <p>massagem relaxante, drenagem linfática.</p>
                  </div>
               </div>
               <div class="col-md-3">
                  <div id="hover_chang" class="service_box">
                     <i><img src="images/extensão_de_cílios.png" width="250" alt="#"/></i><br />
                     <h3>Extensão de Cílios</h3>
                     <p>Cílios maravilhosos.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service -->
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage">
                     <h2>Nosso Studio</h2><br />
                     <img src="images/Logo_gold.png" width="500"/><br />
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- customer -->
      <div id="customer" class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/>Testemunhos</h2>
                  </div>
               </div>
            </div>
            <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                <!--   <li data-target="#myCarousel" data-slide-to="2"></li> -->
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Bruna Lourenço</h4>
                            <!--  <span>Bruna Lourenço</span> -->
                              <p>Amando meu resultando, amando o cuidado, carinho e profissionalismo dessa pessoa incrível. Faço minha sobrancelha com a Vivian a 3 anos, e cada ida ao studio ela me surpreende cada vez mais. Esforçada, dedicada, perfeccionista e dona de uma paciência incrível. Nao mede esforços para ver o cliente satisfeito (vive me salvando, abre exceção e me atende até aos domingos,rs). Parabéns pelo trabalho incrível que vem exercendo com excelência, peço a Deus que continue te capacitando cada vez mais, e que todos os seus sonhos se concretizem!
Obrigado por me deixar maravilhosaaaaa, estou super satisfeita com minha micro!</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes1.png" alt="#"/></i>
                              <h4>Catlin Sampaio</h4>
                              <!--  <span>Bruna Lourenço</span> -->
                              <p>Uma profissional extremamente qualificada, e de confiança, além do seu empenho profissional o ambiente é relaxante é muito aconchegante, todos os tratamentos que fiz obtive resultados consideráveis e rápidos. Sucesso vivi ❤️</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
            <!--  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Nome</h4>
                              <span>cliente 3</span>
                              <p>* * *</p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div> -->
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- end customer -->
      </div>
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.h.png" alt="#"/>Contato <span class="white"> e Localização</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form  class="main_form" action="enviaEmail.php" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nome" type="text" name="nome" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="text" name="email" required> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Menssagem" type="text" name="menssagem" required></textarea>
                        </div>
                        <div id="alert"></div>
                        <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                        <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                       <
                     </div>
                  </form>
               
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3679.4872535772583!2d-43.4485389!3d-22.7472919!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9967b261267215%3A0x990ca43c72c02a97!2sR.%20Onze%20de%20Dezembro%2C%2056%20-%20Santa%20Catarina%2C%20Nova%20Igua%C3%A7u%20-%20RJ%2C%2026285-360!5e0!3m2!1spt-BR!2sbr!4v1589308069963!5m2!1spt-BR!2sbr" width="600" height="432" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
                     </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  social -->
      <div id="social"  class="social">
       
      <div class="card-group row marcador">

      <div class="card text-black  mb-3" style="max-width: 18rem;">
        <div class="card-header">Facebook</div>
        <div class="card-body">
         <a href="https://www.facebook.com/vivi.martins.75"><img class="card-img" src="images/face_icon.png" alt="Card image"></a>
        </div>
      </div>
      <div class="card text-black  mb-3" style="max-width: 18rem;">
        <div class="card-header">Instagram</div>
        <div class="card-body">
         <a href="https://www.instagram.com/studiovivianmartins?igshid=qn9qf9gdc6vp"><img class="card-img" src="images/instagram_icon.png" alt="Card image"></a>
        </div>
      </div>        
      <div class="card text-black  mb-3" style="max-width: 18rem;">
        <div class="card-header">WhatsApp</div>
        <div class="card-body">
         <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5521983814594"><img class="card-img" src="images/whatsapp_icon.png" alt="Card image"></a>
        </div>
      </div>  
       
   </div>
      </div>   
      <!-- end social -->
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
           <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2020-<? echo date("Y"); ?> Todos os Direitos Reservados. <a href="https://idbras.com.br/" target="_blank">IDBRAS</a></p>
                        <div style="text-align:left"><a href="https://studiovivianmartins.com.br/sys" target="_blank">Sistema</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <style>

div.box {
   width: 150px;
   display: inline-block;
}
 .card-header{
   margin: 0 auto;
 } 
 .card-body{
  
  background: #fe9d9d;
 }

 .card{
  margin: 0 auto;
  background: #fe9d9d;
 }

img {
   position:relative;
   max-width: 50%;
  display: block;
  margin: 0 auto;
}

h4{
   position:relative;
 margin-top: 0;
 margin-bottom: 0;  
 margin: 0 auto;
}

.marcador {
    background: #fe9d9d;
    border: 1px solid #f94646;
    height: auto;
  }
  .marcador-container {
    background: #4bf946;
    border: 1px solid #46ae46;
  }
  .borda{
    border: 1px solid blue;
  }
  
.align-items-center{
min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script async src="https://www.google.com/recaptcha/api.js?render=6LekEXMgAAAAADh07IqXrr1OG7s0cXFYBAmQ4_R8"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
       
             $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
   display: flex;
   align-items: center;
}

</style>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   <?
    include("class.ipdetails.php");
    $ip = $_SERVER['REMOTE_ADDR'];  
    #$ip = "189.73.71.160";
    $ipdetails = new ipdetails($ip); 
    $ipdetails->scan();
    include("conexao.php");
    $Data = date("Y-m-d");
    $Hora = date('H:i:s');
    $IP = $ip;
    $Pais = $ipdetails->get_country();
    $Estado = $ipdetails->get_region();
    $Cidade = $ipdetails->get_city();
    $Latitude = $ipdetails->get_latitude();
    $Longitude = $ipdetails->get_longitude();

    $sql = "INSERT INTO localizacao(
                        IP,
                        Data,
                        Hora,
                        Pais,
                        Estado,
                        Cidade,
                        Latitude,
                        Longitude
                        )
                        VALUES
                        ('$IP',
                        '$Data',
                        '$Hora',
                        '$Pais',
                        '$Estado',
                        '$Cidade',
                        '$Latitude',
                        '$Longitude'
                        )";
   $result = mysqli_query($conn,$sql) or die ("Cadastro da Localizaçao não realizado.");
  ?> 
   </body>
</html>

