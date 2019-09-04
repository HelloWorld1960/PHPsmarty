<html>
<head>
	<title>Recuperar contraseña</title>
</head>
<body>
<h1>Recuperar contraseña</h1>

	{if isset($error)}
		{$error}
	{/if}
	<form action="index.php?modo=claveperdida" method="POST">
		<label>Email: </label><input type="email" name="email"/><br/><br/>
		<input type="submit" value="Recuperar contraseña"><br/><br/>
	</form>
</body>
</html>