<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
        error_reporting(E_ALL);
?>


<?php
    require 'db.php';
    $sql = 'SELECT * FROM curso';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>

<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Todas as Pessoas</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Curso</th>
          <th>CPF</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->nome; ?></td>
            <td><?= $person->email; ?></td>
            <td><?= $person->nomeCurso; ?></td>
            <td><?= $person->cpf; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Editar</a>
              <a onclick="return confirm('Tem certeza que deseja deletar este aluno?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Deletar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
