<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UFBA ConVida</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- ufba home -->

        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/datepicker.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <!-- Tema padrao-->
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/slideShow.css">
        
        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- Tema padrao-->
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <script src="js/jquery.js"></script>
        <link rel="stylesheet" href="css/slideShow.css">
        
        <script src="js/formulario.js"></script>


    </head>

    <body id="page-top" class="index">

        <script src="js/bootstrap.min.js"></script>
        <script src="js/cadastroUsuario.js"></script>

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#page-top">UFBA ConVida</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">

                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>

                        <li class="page-scroll">
                            <a href="#destaque">Em Destaque</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#portfolio">Acontece Hoje</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#cadastroUser">Cadastre-se</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#about">Quem Somos</a>
                        </li>
                        <li class="page-scroll">
                            <a href="#contact">Contato</a>
                        </li>

                        <li class="active"><a type="button" class="btn "  data-toggle="modal" data-target="#myModal">Entrar  <span class="caret"></span></a></li>

                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Logon</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!--Entrar-->
                                        <ul>
                                            <form  class="form-vertical">
                                                <div class="control-group">
                                                    <label class="control-label" for="inputEmail">Login</label>
                                                    <div class="controls">
                                                        <input id="inputEmail" type="text" placeholder="Digite o seu e-mail..." autofocus />
                                                    </div>
                                                </div>
                                                <div class="control-group">
                                                    <label class="control-label" for="inputPassword">Senha</label>
                                                    <div class="controls">
                                                        <input id="inputPassword" type="password" placeholder="Digite a sua senha..." />
                                                    </div>
                                                </div>
                                                <div >
                                                    <label  for='buttonConta'>Conta</label>
                                                    <div class='controls'>
                                                        <select>
                                                            <option value='aluno'>Aluno</option>
                                                            <option value='aluno'>Professor</option>
                                                        </select>
                                                    </div>
                                                </div><br/>
                                                <input type="submit"  id="entrar_btn" value="Entrar"/>

                                            </form>
                                        </ul>
                                        <!---->
                                    </div>
                                </div>
                            </div>
                        </div>



                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">


                        <div class="btn-group-vertical" style="float:left; width:258px;">
                            <button type="button" class="btn btn-default btn-lg"> Busca Especializada</button>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <div class="input-append date" id="dpYears" data-date="" data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                        <input id="calendarioInput"class="span2" size="27" type="text"  readonly>
                                        <span class="add-on"><a class="glyphicon glyphicon-calendar"></a></span>
                                    </div>
                                </button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Campus <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Federação <input type="checkbox" id="campus" /></a>
                                  </li>
                              </ul>
                          </div>

                          <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Instalação <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">PAF-I
                                <input type="checkbox" id="instalacao" /></a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Departamento <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Matemática
                                <input type="checkbox" id="departamento " /></a></li>
                            </ul>
                        </div>


                        <div class="btn-group">
                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Busca Livre" name="buscaLivre">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div> 

                        <!--
                        <div class="btn-group" style="width:258px;">
                           <input type="date" class="form-control" id="dataNascimentoUser"/>
                       </div>-->

                   </div>




                   <div class="intro-text" align="center" >
                    <span class="name">UFBA CONVIDA</span>
                    <hr class="star-light">
                    <span class="skills">Descubra o que está acontecendo na UFBA <br/>OU<br/> Publique seu Evento</span>
                </div>


            </div>
        </div>
    </div>
</header>

<!-- Destaque Section -->
<section class="destaque" id="destaque">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Eventos em Destaque</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <!--Slide SHOW -->
            <div class="btn-group btn-group-horizontal" style="width:100%" align="center">
                <div class="container" align="center">
                    <div class="starter-template" align="center">
                        <div class="bs-example" align="center">
                            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                                <!-- Carousel indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>   
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item">
                                        <h2>Slide 1</h2>
                                        <div class="carousel-caption">
                                            <h3>First slide label</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h2>Slide 2</h2>
                                        <div class="carousel-caption">
                                            <h3>Second slide label</h3>
                                            <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <h2>Slide 3</h2>
                                        <div class="carousel-caption">
                                            <h3>Third slide label</h3>
                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>  Acontece Hoje</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/game.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                </a>
            </div>
            <div class="col-sm-4 portfolio-item">
                <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                    <div class="caption">
                        <div class="caption-content">
                            <i class="fa fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Cadastro de User -->
<section id="cadastroUser">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Cadastre-se</h2>
                <hr class="star-primary">
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->



                <div id="form_novo_usuario">
                    <form method="post" action="?rt=academico/add" >

                        <div class="form-group col-xs-6">
                                    
                                     <div class="row control-group">
                                            <fieldset>
                                            <label>Tipo do usuário</label>
                                            <select name="tipo_usuario"
                                            id="tipo_usuario" onchange="alteraTipoId()">
                                            <option value="aluno">Aluno</option>
                                            <option value="professor">Professor</option>
                                             </select>
                                         </fieldset>
                                     </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label id="id_tipo_usuario">Matricula</label> <input class="form-control" type="text" name="identificador" />
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Departamento</label>
                                            <select name="departamento">
                                                <option value="0">Departamento</option>
                                                <?php foreach($departamentos as $departamento) { ?>
                                                <option value="<?php echo $departamento[0]; ?>"><?php echo utf8_encode($departamento[1]); ?></option>
                                                <?php } ?>
                                            </select>
                                        </fieldset>
                                    </div>
                    
                                    <div class="row control-group">
                                        <fieldset id="curso_aluno">
                                            <label>Curso</label>
                                            <input type="text" class="form-control" placeholder="Digite o nome seu curso" name="curso">
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">

                                        <fieldset>
                                            <label>Nome completo</label> <input class="form-control" type="text" placeholder="Digite o nome completo" name="nome_completo" />
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Endereço</label> <input class="form-control" type="text" placeholder="Digite o endereço" name="endereco" />
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Data de nascimento</label> <input class="form-control" type="date" name="data_nascimento" />
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Telefone</label> <input class="form-control" type="text" placeholder="Digite o telefone" name="telefone" />
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Email</label> <input class="form-control" type="text" name="email" placeholder="Digite o email"/>
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Senha</label> <input class="form-control" type="password" name="senha" />
                                        </fieldset>
                                    </div>

                                    <div class="row control-group">
                                        <fieldset>
                                            <label>Confirme a senha</label> <input class="form-control" type="password" name="confirmacao_senha" />
                                        </fieldset>
                                    </div>

                                    <p></p>
                                    <div class="row control-group">
                                        <fieldset>
                                            <input  class="btn btn-success btn-lg" type="submit" name="cadastrar_novo_usuario" value="Cadastrar" />
                                        </fieldset>
                                    </div>
                       </div>
                     </form>
                </div> <!--fim div id= formulario novo user-->
            </div>
        </div>
    </div>
</section>


<!-- About Section -->
<section class="success" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Quem Somos</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-2">
                <p>Objetivo de Centralizar as informações sobre eventos que ocorrem na UFBA - Salvador.</p>
            </div>
            <div class="col-lg-4">
                <p>Amanda, Ive, Denis, Euler e Glauber.</p>
            </div>
            
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Contato</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Telefone</label>
                            <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Mensagem</label>
                            <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Around the Web</h3>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>About Freelancer</h3>
                    <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visble-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2>Project Title</h2>
                        <hr class="star-primary">
                        <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                        <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><a href="http://startbootstrap.com">April 2014</a>
                                </strong>
                            </li>
                            <li>Service:
                                <strong><a href="http://startbootstrap.com">Web Development</a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/datepicker-source.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/freelancer.js"></script>

</body>

</html>
