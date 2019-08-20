<html>
<head>
	<title>Recuperar contraseña</title>
</head>
<body>
	<style type="text/css">
	{literal}
		input[type=email], select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		div {
			width: 500px;
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 10px;
		}
	{/literal}
	</style>

	<div>
		<h1>Recuperar contraseña</h1>
		<form action="index.php?modo=claveperdida" method="POST">
			<label>Email: </label><input type="email" name="email"/><br/><br/>
			<input type="submit" value="Recuperar contraseña"><br/><br/>
		</form>
		{if isset($error)} <!-- isset() retorna True si la variable esta definida. -->
			{$error} <!-- Muestra el mensaje de error. -->
		{/if} <!-- end etiqueta if-->
	</div>
</body>
</html>
