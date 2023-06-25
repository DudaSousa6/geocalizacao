


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact - Sistema</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/impact_favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

   <!-- CSS folheto Mapa -->
   <link rel="stylesheet" 
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin=""
  />

   <!-- css for geocode -->
   <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

   <!-- JavaScript Mapa -->
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
          integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
          crossorigin="">
  </script>
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:grupoimpact@gmail.com">grupoimpact@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0800-742-2036</span></i>
      </div>
     
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Impact<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Início</a></li>
		  <li><a href="#about">Sobre</a></li>
          <li><a href="#contact">Denúncia</a></li>
          <li><a href="#team">Team</a></li>
          
          
          <li class="dropdown"><a href="#"><span>Usuário</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="./login-form/cadastro.php">Cadastro</a></li>
              </li>
		  
              <li><a href="./login-form/login.php">Login</a></li>

              <li><a href="./login-form/sair.php">Sair</a></li>
            </ul>
          
          <li><a href="contato.html">Contato</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        
        </div>
        
      
    </div>

    
         


    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= maps Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>ecoMaps</h2>
          <p>Continue sua denúncia</p>
        </div>
	     
             <?php
	            
             ?>						 
		  

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container" >
              <img src="assets/img/EcoMaps.png" alt="" class="img-fluid">
            </div>

          </div>

            <div class="col-lg-8">
              <form name="f1" action="salvardenuncia.php" method="GET" id="denuncia">              
                <div class="row">
                  <div class="col-sm">
                      <label for="nome">Nome</label>
                      <input value="<?php if(issets($_GET['nome'])){ echo $_GET['nome'];} ?>" class="form-control" name="nome" id="nome"  Required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm">
                      <label for="email">Email</label>
                      <input value="<?php if(issets($_GET['email'])){ echo $_GET['email'];} ?>" class="form-control" type="email" name="email" id="email"  Required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm">
                        <label for="nome">CPF</label>
                        <input value="<?php if(issets($_GET['cpf'])){ echo $_GET['cpf'];} ?>" class="form-control" name="cpf" id="cpf"  Required>
                    
                  </div>

                  <div class="col-sm">
                        <label for="nome">CEP</label>
                        <input value="<?php if(issets($_GET['cep'])){ echo $_GET['cep'];} ?>" class="form-control" name="cep" id="cep"  Required>
                  </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                            <label for="estado">Estado</label>
                            <input value="<?php if(issets($_GET['estado'])){ echo $_GET['estado'];} ?>" class="form-control" name="estado" id="estado"  Required>
                    </div>

                    <div clas="col-sm">
                            <label for="cidade">Cidade</label>
                            <input value="<?php if(issets($_GET['cidade'])){ echo $_GET['cidade'];} ?>" class="form-control" name="cidade" id="cidade"  Required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                            <label for="rua">Rua</label>
                            <input value="<?php if(issets($_GET['rua'])){ echo $_GET['rua'];} ?>" class="form-control" name="rua" id="rua"  Required>
                    </div>

                    <div class="col-sm">
                          <label for="bairro">Bairro</label>
                          <input value="<?php if(issets($_GET['bairro'])){ echo $_GET['bairro'];} ?>" class="form-control" name="bairro" id="bairro"  Required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm">
                            <label for="data">Data</label>
                            <input value="<?php if(issets($_GET['data'])){ echo $_GET['data'];} ?>" class="form-control" name="data" id="data"  Required>
                    </div>

                    <div class="col-sm">
                          <label for="hora">Hora</label>
                          <input value="<?php if(issets($_GET['hora'])){ echo $_GET['hora'];} ?>" class="form-control" name="hora" id="hora"  Required>
                    </div>
                </div>

                <div class="row">
                  <div>
                    <label for="msg">Descrição</label><br>
                    <textarea value="<?php if(issets($_GET['descricao'])){echo $_GET['descricao'];} ?> class="form-control" id="msg" name="msg" rows="4" cols="50" ></textarea>
                  </div>
                </div>

                
                <a href="mapadenuncia.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Denúnciar</a>
              </form>
          
            </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End maps Section -->
	
	
	
	
	
	
	<!-- ======= Frequently Asked Questions Section ======= -->

	
	
	
	
	
	
	
	
	
	
	
	

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Impact</span>
          </a>
          <p>Impact é uma rede de organizações independentes, que usa confrontação pacífica,criativa e tecnológica para expor problemas ambientais e desenvolver soluções para um futuro verde e pacífico.</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Principais Links</h4>
          <ul>
            <li><a href="#hero">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#contact">ecoMaps</a></li>
            <li><a href="tds.php">Termos de serviço</a></li>
            <li><a href="contato.html">Contato</a></li>
          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contate-nos</h4>
          <p>
            Avenida Idelfonso Cavalcante <br>
            Sobral, CE 62040-070<br>
            Brasil <br><br>
            <strong>Telefone:</strong> 0800-742-2036<br>
            <strong>Email:</strong> grupoimpact@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Impact</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- JS Mapa -->
  <script src="main.js"></script>

  <script>
      $(document).ready(function(){

      
        $("#denuncia").submit(function(event){
          event.preventDefault();

          var nome = $("input[name='nome']").val();
          var cpf = $("input[cpf='cpf']").val();
          var senha = $("input[name='senha1']").val();


          $.post("salvacad.php", { codusu: idUsuario, nome: nome, email: email, senha: senha }, function(data) {
            if (data.trim() === '1') {
              /*Swal.fire('Sucesso!', 'Cadastro efetuado com êxito!', 'success');*/

              Swal.fire({
                title: 'Sucesso!',
                text: 'Cadastro efetuado com êxito!',
                icon: 'success',
                timer: 3000, // Tempo em milissegundos (3 segundos)
                showConfirmButton: false
              }).then(function() {
                window.location.href = 'login.php'; // Redirecionar para a página desejada após o tempo definido
              });// fim do then
            } else {
              Swal.fire('Erro!', 'Erro ao cadastrar os dados!', 'error');
            }
          });
        });

      }); // fim do jquery
    </script>
    <script>
      const mascara = document.querySelector('#cpf')

      cpf.addEventListener('keypress', () =>{
        let cpflength = cpf.value.length

        if (cpflength === 3 || cpflength === 7) {
          cpf.value += '.'
        }else if (cpflength === 11) {
          cpf.value += '-'
        }
      })

      const mascaracep = document.querySelector('#cep')

      cep.addEventListener('keypress', () =>{
        let ceplength = cep.value.length

        if (ceplength === 5) {
          cep.value += '-'
        }
      })
    </script>

</body>

</html>