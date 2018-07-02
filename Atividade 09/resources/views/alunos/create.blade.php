<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Inserir Aluno</title>
		<script src="./js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="./bootstrap3/css/bootstrap.css">
	</head>
	<body>
		<br><br>
		<center>
		<h3> Cadastro de Alunos </h3>
		<br><br><br>
		<form action="{{ route('alunos.store') }}" method="post" class="form-group">
			@csrf

			<label for="nome">Nome*:</label>
			<input type="text" name="nome" required>

			<br><br>
			<label for="rua">Rua:</label>
			<input type="text" name="rua">

			<label for="numero">Nº:</label>
			<input type="number" name="numero">

			<br><br>
			<label for="bairro">Bairro:</label>
			<input type="text" name="bairro">

			<br><br>
			<label for="cidade_id">Cidade*:</label>
			<select name="cidade_id" required>
			<option value="">SELECIONE</option>
			@foreach ($cidades as $e):
				<option value="{{ $e->id }}"> {{ $e->nome }} </option>
			@endforeach
			<option value=""></option>
			</select>

			<br><br>
			<label for="cep">CEP:</label>
			<input type="text" name="cep">

			<br><br>
			<label for="bairro">Email:</label>
			<input type="email" name="email">

			<br><br>
			<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-info">

		</form>
	</body>
</html>
