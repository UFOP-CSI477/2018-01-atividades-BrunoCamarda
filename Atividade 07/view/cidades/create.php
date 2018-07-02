<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Cidades</title>
	</head>
	<body>
		<form action="router.php?op=3" method="post">
			<label for="nome">Nome:</label>
			<input type="text" name="nome">

			<label for="estado_id">Estado:</label>
			<select name="estado_id">
			<option value="">SELECIONE</option>
			<?php foreach ($lista as $e): ?>
				<option value="<?= $e['id']?>"><?=$e['nome']?> </option>
			<?php endforeach ?>
			<option value=""></option>
			</select>

			<input type="submit" name="cadastrar" value="Cadastrar">
			<input type="reset" name="limpar" value="Limpar">

		</form>
	</body>
</html>
