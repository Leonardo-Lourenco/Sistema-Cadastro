<!DOCTYPE html>
<html>
<head>
	<title>Comprovar Login</title>
</head>
<body>
<?php

   
	try
	{
         
      $base=new PDO("mysql:host=localhost;dbname=TrabalhoAlexandre","root","senha");
       $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       $sql="SELECT * FROM login WHERE nome= :nome AND senha= :senha";

       $resultado=$base->prepare($sql);

       $nome=($_POST["nome"]);
       $senha=($_POST["senha"]);

       $resultado->bindValue(":nome", $nome);
       $resultado->bindValue(":senha", $senha);

       $resultado->execute();

       $numero_registro=$resultado->rowCount();

       if($numero_registro!=0)
       {
         echo "<h1>GOOOOOOOOOOOOOOOO conectado com sucesso</h1>";

         session_start();

         $_SESSION["usuario"] = $_POST["nome"];

         header("Location:../Paginas/painel.php");


       }else
       {     
             
             header("Location:../index.php");

       }

	} catch(Exception $e)
	{
       die("Error:" . $e->getMessage());
	}


?>
</body>
</html>