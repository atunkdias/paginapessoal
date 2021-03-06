<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <?php
    require 'links.php';
    ?>
</head>

<body>
    <!-- Header Section -->
    <section class="banner" role="banner">
       
        <?php 
            require 'navbar.php';
?>
        
        <div class="container">
            <div class="col-md-7 banner-inner-wrapper">
                <div class="banner-text"><B>
                    <h1>Eu sou Arthur... Em resumo ECLÉTICO!!!</h1>
                    <p>Gosto de muita coisa, mas tem muitas coisas que não gosto.</p></B>   
                    </div>
                <!-- banner text -->
            </div>
        </div>
        <!-- Banner Section -->
    </section>
    <!-- Header Section -->
    <!-- Intro Section -->
    <section id="introduction" class="section introduction">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="intro-content">
                        <h1>Tudo que eu faço, faço porque amo!</h1>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="intro-content">
                        <ul>
                            <li> * Amo Futebol, Corinthiano desde sempre;</li>
                            <li> * Multi-instrumentista, guitarra, piano, violão, cavaquinho, ukulele, entre outros;</li>
                            <li> * Trabalho com Programação... Java, PHP, Web;</li>
                            <li> * Viajar fará parte do meu futuro...;</li>
                            <li> * Super-heróis, Animes e Cartoons;</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="intro-content">
                        <h4>Minha Experiência</h4>
                        <ul>
                            <li> - Desenvolvimento em Web</li>
                            <li> - Java</li>
                            <li> - Técnico em Informática</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Section -->

    <!-- work section -->
    <section id="works" class="works section no-padding">
        <div class="container-fluid" style="height:231px">
            <div class="row no-gutter">
                <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/eng.png" class="work-box"> <img src="images/eng.png" alt="" style="height:231px">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"> SysMain- Sistema de Manutenção</i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
                <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/roleta.jpg" class="work-box"> <img src="images/roleta.jpg" alt="" style="height:231px">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"> Roleta em Java </i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
                <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/piano.png" class="work-box"> <img src="images/piano.png" alt="" style="height:231px">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"> Aulas de Piano </i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
                <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/guit.jpg" class="work-box"> <img src="images/guit.jpg" alt="" style="height:231px">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"> Aulas de Guitarra </i></p>
          </div> 
        </div>
        <!-- overlay --> 
        </a> </div>
                <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/viol.jpg" class="work-box"> <img src="images/viol.jpg" alt="" style="height:231px">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x"> Aulas de Violão </i></p>
          </div>
        </div>
        <!-- overlay --> 
        </a> </div>
                <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/cav.jpg" class="work-box"> <img src="images/cav.jpg" alt="" style="height:231px">
        <div class="overlay">
          <div class="overlay-caption">
            <p><i class="fa fa-search-plus fa-2x">Aulas de Cavaquinho e Ukulele</i></p>
          </div>
        </div>
        </a> </div>
            </div>
        </div>
    </section>
    <section id="signup" style="background-color:whitesmoke"><br>
        
        <div class="container" style="width:350px;margin-left:700px">
            <h2 style="text-align:center">Cadastre-se</h2>
            <form name="aderir" action="cadastrar.php" method="post">
            <div>
                <label><b>Nome:</b></label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome...">
            </div>
            <div>
                <label><b>Email:</b></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email...">
            </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-default">Limpar</button>
                </form>
            
        </div>
    </section><br>
    <!-- work section -->
    <!-- footer section -->
    <footer id="contact" class="footer">
        <div class="container">
            <div class="col-md-4">
                <h4>Contatos</h4>
                <p> Rua Aldo Castro, nº57<br> Nº: 54 992204999 <br> Email : <a href="mailto:atunkdias@gmail.com"> atunkdias@gmail.com </a></p>
            </div>
            <div class="col-md-3">
                <h4>Redes Sociais</h4>
                <ul class="footer-share">
                    <li><a href="https://www.facebook.com/arthur.borges.754"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://plus.google.com/101141216855023655997"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>

        </div>
    </footer>
    <!-- footer section -->

    <!-- JS FILES -->
 
</body>
</html>
