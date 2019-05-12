<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
        error_reporting(E_ALL);
?>



<?php
require 'db.php';
$message = '';
if (isset ($_POST['nome'])  && isset($_POST['email']) && isset($_POST['nomeCurso']) && isset($_POST['cpf']) ) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $nomeCurso = $_POST['nomeCurso'];
  $cpf = $_POST['cpf'];
  $sql = 'INSERT INTO curso(nome, email, nomeCurso, cpf) VALUES(:nome, :email, :nomeCurso, :cpf)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':nome' => $nome, ':email' => $email , ':nomeCurso' => $nomeCurso, ':cpf' => $cpf])) {
    $message = 'Aluno cadastrado com sucesso';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Cadastrando Aluno</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="nomeCurso">Curso</label>
          <input type="text" name="nomeCurso" id="nomeCurso" class="form-control">
        </div>
        <div class="form-group">
          <label for="cpf">CPF</label>
          <input type="text" name="cpf" id="cpf" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Cadastrar Aluno</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
