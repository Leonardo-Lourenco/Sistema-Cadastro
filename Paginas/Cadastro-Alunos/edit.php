<?php
    require 'db.php';

    $id = $_GET['id'];
    $sql = 'SELECT * FROM curso WHERE id=:id';
    $statement = $connection->prepare($sql);
    $statement->execute([':id' => $id ]);
    $person = $statement->fetch(PDO::FETCH_OBJ);
    if (isset ($_POST['nome'])  && isset($_POST['email']) && isset($_POST['nomeCurso']) && isset($_POST['cpf']) ) 
    {

      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $nomeCurso = $_POST['nomeCurso'];
      $cpf = $_POST['cpf'];
      $sql = 'UPDATE curso SET nome=:nome, email=:email, nomeCurso=:nomeCurso, cpf=:cpf WHERE id=:id';
      $statement = $connection->prepare($sql);
      if ($statement->execute([':nome' => $nome, ':email' => $email, ':nomeCurso' => $nomeCurso, ':cpf' => $cpf, ':id' => $id])) {
        header("Location: index.php");
      }



    }


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Atualizar Cadastro</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="nome">Name</label>
          <input value="<?= $person->nome; ?>" type="text" name="nome" id="nome" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" value="<?= $person->email; ?>" name="email" id="email" class="form-control">
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
          <button type="submit" class="btn btn-info">Atualizar Cadastro</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
