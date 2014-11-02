<!DOCTYPE html>
<html>
<head>
	<title>UFBA - Convida</title>
<!-- CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Tema padrao-->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">

<!-- JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

 <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UFBA - ConVida</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="starter-template">
        <h1>UFBA - ConVida</h1>
        <p class="lead">Pagina incial do projeto</p>
        <h1><?php echo $welcome; ?></h1>
        <form action="?rt=evento/nome" method="post">
           <input type="text" name="nome"id="nome"/>
           <input type="submit" value="Enviar">
        </form>
      </div>
 	</div><!-- /.container -->
</body>
</html>

