<?php
/* Smarty version 3.1.30, created on 2019-08-20 22:54:12
  from "C:\Users\Jorge01\WebPrograms\PHP[Smarty]\20SmartyLogin\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5c5df45cebb3_70594215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd860376cf87fef4162f109833be1cf460f9f521a' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP[Smarty]\\20SmartyLogin\\estilos\\templates\\public\\index.tpl',
      1 => 1566334446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5c5df45cebb3_70594215 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
	<title>Proyecto</title>
</head>

<body>
	<style type="text/css">
	
		input[type=text], select {
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
	
	</style>

	<!--Vista-->
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> <!-- isset() retorna True si la variable esta definida. -->
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <!-- Muestra el mensaje de error. -->
	<?php }?> <!-- end etiqueta if-->
	<div>
	<h1>Login</h1>
		<form action="index.php?modo=login" method="POST">
			<label>User: </label><input type="text" name="user"/><br>
			<label>Pass: </label><input type="password" name="pass"/><br>
			<input type="hidden" name="login" value="1">
			<input type="submit" value="Iniciar sesion">
		</form>
	</div>
</body>

</html>
<?php }
}
