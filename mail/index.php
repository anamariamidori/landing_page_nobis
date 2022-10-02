<?php
//db
require '../_inc/db_conn_na.php';
require '../_inc/get_catevt.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NOBIS & BASF - Conectar para transformar</title>
        <meta name="description" content="A Nobis é uma plataforma de impacto 4.0, essa é uma landign page do projeto com a Basf em guaratinguetá" />
        <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
        <meta name="author" content="ThemeForces.com">
        
        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
    
        <!-- Slider
        ================================================== -->
        <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
        <link href="css/owl.theme.css" rel="stylesheet" media="screen">
    
        <!-- Stylesheet
        ================================================== -->
        <link rel="stylesheet" type="text/css"  href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
    
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
    
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/SmoothScroll.js"></script>
        <script type="text/javascript" src="js/jquery.isotope.js"></script>
    
        <script src="js/owl.carousel.js"></script>
        <script src="js/contact_me.js"></script>
        <script src="js/jqBootstrapValidation.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
            <style>.noblue {
	color: #4c3779 !important;
}

.noblue-2x {
	color: #4c3779 !important;
	font-size: 1.5em !important;
	font-weight: 400 !important;
}

.noblue-light {
	color: #9084ac !important;
}
</style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142380498-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-142380498-2');
	</script>
      </head>
      <body>
        <!-- Navigation
        ==========================================-->
        <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top" style="background: #431E57;" >
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" >NOBIS & BASF</a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#tf-about" class="navbar-brand">Tudo começa com Propósito e Investimentos</a></li>
                <!--<li><a href="#tf-about" class="page-scroll">Empresas</a></li>
                <li><a href="#tf-team" class="page-scroll">Conectividade em Serviços</a></li>
                <li><a href="#tf-services" class="page-scroll">Parceiros Digitais</a></li>
                <li><a href="#tf-works" class="page-scroll">Learning</a></li>
                <li><a href="#tf-testimonials" class="page-scroll">A Nobis</a></li>
                <li><a href="#tf-contact" class="page-scroll">Projetos</a></li>-->
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    
        <!-- Home Page
        ==========================================-->
        <div id="tf-home" class="text-center">
            <div class="overlay">
                <div class="content">
                    <h1 style="color: #fff;">PROJETO CONECTAR PARA <strong><span class="color">TRANSFORMAR</span></strong></h1>
                    <p class="lead" style="color: #fff;">Qualificação e Geração de Renda com <strong>Impacto 4.0</strong> <br>Veja como fazemos isso:</p>
                    <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
                </div>
            </div>
        </div>
    
        <!-- About Us Page
        ==========================================-->
        <div id="tf-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/xYmTTYmKpVQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="about-text">
                            <div class="section-title">
                                <h2  style="color:#000000">Sobre o <strong>Projeto</strong></h2>
                                <hr>
                                <div class="clearfix"></div>
                            </div>
                            <p class="intro">A Plataforma Nobis integrou digitalmente os investimentos da BASF, o apoio institucional da Prefeitura de Guaratinguetá - Secretaria da Educação e Assessoria da Mulher, para transformar comunidades a partir de 40 mulheres.</p>
                            <ul class="about-list">
                                <li>
                                <strong> Para tirar seus sonhos do papel e estruturar seus negócios, as mulheres passaram por uma jornada de transformação:</strong>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <em> Formação Multidisciplinar</em>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <em> Design de Negócios relacionados à Economia Criativa e Circular.</em>
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <em> Ativação Empreendedora pela presença digital</em>
                                </li>
                            </ul>
                            <p class="intro"> 11 projetos foram premiados com capital semente, e 40 mulheres têm atividade econômica sustentável.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Clients Section
        ==========================================-->
        <div id="tf-clients" class="text-center">
            <div class="overlay">
                <div class="container">
    
                    <div class="section-title center">
                        <h2><strong style="color:#fff">Impacto se faz em rede</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
                    <div id="clients" class="owl-carousel owl-theme">
                        <div class="item">
                            <img style="margin-top:-10px;" src="img/4.png">
                        </div>
                        <div class="item">
                            <img style="margin-top:-10px;" src="img/5.png">
                        </div>
                        <div class="item">
                            <img style="margin-top:-10px;" src="img/3.png">
                        </div>
                        <div class="item">
                            <img  style="margin-top:-5px;" src="img/1.png">
                        </div>
                        <div class="item">
                            <img style="margin-top:-5px" src="img/2.png">
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    
       
        <!-- Services Section
        ==========================================-->
        <div id="tf-services" class="text-center">
            <div class="container">
                <div class="section-title center">
                    <h2 style="color:#000000">Conheça os principais <strong>Fluxos</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                <div class="space"></div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <h4><strong>Seleção</strong></h4>
                        <p> Mais de 300 inscrições para participar do projeto. Foram selecionadas 40 mulheres.</p>
                    </div>
    
                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        <h4><strong>Qualificação</strong></h4>
                        <p>Qualificação interdiciplinar com 8 parceiros digitais. Design de projetos sustentáveis.</p>
                    </div>
    
                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-pagelines" aria-hidden="true"></i>
                        <h4><strong>Capital Semente</strong></h4>
                        <p> 11 projetos premiados no valor de R$ 1.000,00. Para que pudessem investir em seus negócios. </p>
                    </div>
    
                    <div class="col-md-3 col-sm-6 service">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <h4><strong>Ativação Econômica</strong></h4>
                        <p>Nesta etapa os negócios passam por formalização e presença digital para geração de renda.</p>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
                    <em>Todos os indicadores de Impacto são monitorados em tempo real pela Plataforma Nobis e estão relacionados a 11 Objetidos de Desenvolvimento Sustentável e Reports de ESG. </em>
                </div>
        </div>
     <!-- Team Page
        ==========================================-->
        <div id="tf-team" class="text-center">
            <div class="overlay">
                <div class="container">
                    <div class="section-title center">
                        <h2><strong style="color:#fff">Parceiros Digitais</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
    
                    <div id="team" class="owl-carousel owl-theme row">
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/Vanessa Brolo.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Vanessa Brolo</h3>
                                    <p style="padding-bottom:10px ;">Empreendedorismo</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/partiuplanob/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/Karoline Almeida.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Karolina Almeira</h3>
                                    <p style="padding-bottom:10px ;">Gestão Financeira</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/almeida.consultoria/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/jessica_brendel.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Jessica Brendel</h3>
                                    <p style="padding-bottom:10px ;">Valorização Pessoal</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/apodera.se/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/Debora-Munhoz.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Debora Munhoz</h3>
                                    <p style="padding-bottom:10px ;">Parcerias</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.linkedin.com/in/deborahmunhozea/' " >Linkedin</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/grupo batom.jpg" alt="Grupo Batom" class="img-circle team-img">
                                <div class="caption">
                                    <h3>Grupo Batom</h3>
                                    <p style="padding-bottom:10px ;">Liderança</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/grupobatom/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/Pipa Social.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Pipa Social</h3>
                                    <p style="padding-bottom:10px ;">Econômia Criativa</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/pipasocial/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/Conectafro.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Conectafro</h3>
                                    <p style="padding-bottom:10px ;">Presença Digital</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/conectafro/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
    
                        <div class="item">
                            <div class="thumbnail">
                                <img src="img/team/Coletivo Meninas Mahin.jpg" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3>Coletivo Meninas Mahin</h3>
                                    <p style="padding-bottom:10px ;">Parcerias</p>
                                    <a class="personal" onclick="window.location.href ='https:/www.instagram.com/coletivomeninasmahin/'" >Instagram</a>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                    
                </div>
            </div>
        </div>
    
        
        <!-- Portfolio Section
        ==========================================-->
        <?php include 'catalog.php'; ?>
        
        <!-- Maps Section
        ==========================================-->
        
        <script>var mid = <?=$aff_id?>;</script>
        <div id="map_affs" style="height: 770px !important; width: 100%"></div>
        
        <!-- Testimonials Section
        ==========================================-->
        <?php //include 'testimonials.php'; ?>
   
    
        <!-- Testimonials Section
        ==========================================-->
        <div id="tf-testimonials" class="text-center">
            <div class="overlay">
                <div class="container">
                    <div class="section-title center">
                        <h2><strong style="color:#fff"> Inspire-se com as histórias <br><br> de transformação</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testimonial" class="owl-carousel owl-theme">
                                <div class="item">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLGUiEiyT-j64Fd-3oAXavx9D0kyBmQ7LN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
    
                                <div class="item">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vRrl8AHUY70" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
    
                                <div class="item">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DjHIJHIXDwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    	<!-- Timeline / Trajectory Section
        ==========================================-->
        <?php include 'about.php'; ?>
        
        <!--Videos Section
        ==========================================-->
        <?php include 'videos.php'; ?>
        
        
        <!-- Contact Section
        ==========================================-->
        <?php include 'contact.php'; ?>
        
        <nav id="footer">
            <div class="container">
                <div class="pull-left fnav">
                    <p>Criado pela Plataforma Nobis 2022.</p>
                    <a href="https://www.instagram.com/nobis_services/" style="padding: 5px;"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/company/plataformanobis" style="padding: 5px;"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://nobisapp.com.br/site/lp/index.php" style="padding: 5px;"><i class="fa fa-building" aria-hidden="true"></i>
                </div>
            </div>
        </nav>
        
        <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
	
    <script src="maps_affs.js"></script> 
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7ygZd14X3jlYYd5jsjw9Wpd3igI6ikCo&callback=initMap" async defer>
		</script> 
           
      </body>
</html>