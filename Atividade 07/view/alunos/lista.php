<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista de alunos(as)</title>
    <script src="./js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="./bootstrap3/css/bootstrap.css">
  </head>
  <body>

    <table class="table table-stripped">

      <tr>
        <th>Matrícula</th>
        <th>Nome</th>
      </tr>

      <?php foreach( $lista as $linha ): ?>
      <tr>
        <td><?= $linha['id'] ?></td>
        <td><?= $linha['nome'] ?></td>
      </tr>
    <?php endforeach ?>

    </table>
    <center>
    <a href="/index.php"><button name="voltar" value="Voltar" class="btn btn-success">Voltar</a>








  </body>
</html>
