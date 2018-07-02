<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Estado</title>
		<script src="./js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="./bootstrap3/css/bootstrap.css">
	</head>
	<body>
		<br><br>
		<center>
		<h3> Cadastro de Estado </h3>
		<br><br><br>
		<form action="router.php?op=8" method="post" class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" required>

			<label for="sigla">Sigla:</label>
			<input type="text" name="sigla" required>

			<br><br>
			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-info">
			<input type="reset" name="limpar" value="Limpar" class="btn btn-warning">

		</form>
	</body>
</html>
