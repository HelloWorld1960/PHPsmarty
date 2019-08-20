<html>

<head>
	<title>Proyecto</title>
</head>

<body>
	<!--Vista-->
	<h1>Login</h1>

	{if isset($error)}<!-- isset() retorna True si la variable esta definida. -->
		{$error}<!-- Muestra el mensaje de error. -->
	{/if}<!-- end etiqueta if-->
	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user" /><br /><br />
		<label>Pass: </label><input type="password" name="pass" /><br /><br />
		<input type="hidden" name="login" value="1">
		<a href="index.php?modo=registro">Registrarme</a><br /><br />
		<input type="submit" value="Iniciar sesion"><br /><br />
	</form>
</body>

</html>
