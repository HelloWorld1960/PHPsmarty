<html>
<head>
	<title>Proyecto</title>
</head>
<body>
	<style type="text/css">
	{literal}
		input[type=text], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=email], select {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		}

		input[type=password], select {
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
			font-size: 18px;
		}

		input[type=submit]:hover {
		  background-color: #45a049;
		}

		body{
		}

		div {
			margin: auto;
		  width: 30%;
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}
	{/literal}
	</style>

	<!--vista-->
	{if isset($error)}<!-- isset() retorna True si la variable esta definida. -->
		{$error}<!-- Muestra el mensaje de error. -->
	{/if}<!-- end etiqueta if-->
	<div>
		<h1>Registro</h1>
		<form action="index.php?modo=registro" method="POST">
			<label>User: </label><input type="text" name="user"/><br/><br/>
			<label>Email: </label><input type="email" name="email"/><br/><br/>
			<label>Pass: </label><input type="password" name="pass"/><br/><br/>
			<input type="hidden" name="registro" value="1">
			<input type="submit" value="Registrarme"><br/><br/>
		</form>
	</div>

</body>
</html>
