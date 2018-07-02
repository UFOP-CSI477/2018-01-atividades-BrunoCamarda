<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Cidades</title>
		<script src="./js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="./bootstrap3/css/bootstrap.css">
	</head>
	<body>
		<br><br>
		<center>
		<h3> Cadastro de Cidades </h3>
		<br><br><br>
		<form action="router.php?op=9" method="post" class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" required>

			<br>
			<label for="estado_id">Estado:</label>
			<select name="estado_id" required>
			<option value="">SELECIONE</option>
			<?php foreach ($lista as $e): ?>
				<option value="<?= $e['id']?>"><?=$e['nome']?> </option>
			<?php endforeach ?>
			<option value=""></option>
			</select>

			<br><br>
			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-info">
			<input type="reset" name="limpar" value="Limpar" class="btn btn-warning">

		</form>
	</body>
</html>
