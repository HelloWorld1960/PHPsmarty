<html>

<head>
	<title>Proyecto</title>
</head>

<body>
	<!--vista-->
	<h1>Registro</h1>

	{if isset($error)}<!-- isset() retorna True si la variable esta definida. -->
		{$error}<!-- Muestra el mensaje de error. -->
	{/if}<!-- end etiqueta if-->
	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user" /><br /><br />
		<label>Email: </label><input type="email" name="email" /><br /><br />
		<label>Pass: </label><input type="password" name="pass" /><br /><br />
		<input type="hidden" name="registro" value="1">
		<input type="submit" value="Registrarme"><br /><br />
	</form>
</body>

</html>
