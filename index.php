<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title> Web Design | Login </title>
	
	 <link rel="stylesheet" type="text/css" href="css/form.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
  
   <div class="login">
    <form action="BD/comprovar-login.php" method="post">
     	<h1>Tela de Acesso</h1>

     	<div class="textbox">
     		<i class="fas fa-user"></i>
     		<input type="text" placeholder="Nome" name="nome" id="nome" >
     	</div>

     	<div class="textbox">
     		<i class="fas fa-unlock-alt"></i>
     		<input type="password" placeholder="Senha" name="senha" id="senha" >
      </div>
      
      <button type="submit" class="btn">Acessar</button>
     

    </form>
   </div>

</body>
</html>