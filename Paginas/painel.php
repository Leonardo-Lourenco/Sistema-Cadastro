<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Sistema Escolar | Dashboard </title>
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>

  <body>
     
     <!--/ INICIANDO A SESSÃO -->
     <?php
         
         session_start();
         if(!isset($_SESSION["usuario"]))
         {
            header("Location:index.php");
         }


    ?>


    <div>
     <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Painel Admin | Escola </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="site/home.php">Ver Site</a></li>
            <li><a href="Cadastro-Alunos/index.php">Cadastrar Aluno </a></li>
            <li><a href="#contact">Usuários</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="#about">Bem vindo <?php echo $_SESSION["usuario"];?> </a></li>

            <!--/ FINALIZANDO A SESSÃO -->
            <li><a href="sair-sistema.php">Sair</a></li>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!--header.. -->

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hodden="tru"></span>  Dashboard</h1>
          </div>
         
        </div>
      </div>
    </header>
    
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>          
        </ol>
      </div>     
    </section>

    <!-- Painel left -->       
      <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="#" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="site/home.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Ver Site <span class="badge">12</span></a>
              <a href="Cadastro-Alunos/index.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Cadastrar Alunos <span class="badge">33</span></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios <span class="badge">1</span></a>
            </div>

            
            <div class="well">
              <h4>Espaço Disco</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                  60%
                </div>
              </div>
               
              <h4>Usuários</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                  40%
                </div>
              </div>
              
              <h4>Trafego</h4>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                  20%
                </div>
              </div>
            </div>
          </div>
          
           <!-- Painel right -
           <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
            </div>
             
           </div> -->






          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg" style="background:#337ab7;color: #fff;">
                <h3 class="panel-title">Estastitiscas</h3>
              </div>
              <div class="panel-body">

                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #DEB427;color: #fff;">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 1</h2>
                    <h4>Usuários</h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: red; color: #fff;">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                    <h4>Páginas</h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #40BFA9;color: #fff;">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                    <h4>Alunos</h4>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #63DE27;color: #fff;">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                    <h4>Visitantes</h4>
                  </div>
                </div>

              </div>
              </div>  




          



        </div>
      </div>      
    </section>
     
  </div>
  
    
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

 </body>
 </html>   