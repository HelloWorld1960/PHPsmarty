<?php
/* Smarty version 3.1.30, created on 2019-07-05 04:57:59
  from "C:\Users\Jorge01\WebPrograms\PHP\23SmartyMejorasDeCodigo\estilos\templates\public\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1ebcb7770952_90903274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad945ee27acbed3e8ee4d27464d5cbf925676dc0' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP\\23SmartyMejorasDeCodigo\\estilos\\templates\\public\\registro.tpl',
      1 => 1562295474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1ebcb7770952_90903274 (Smarty_Internal_Template $_smarty_tpl) {
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
	
	</style>
	<div>
		<h1>Registro</h1>
		<form action="index.php?modo=registro" method="POST">
			<label>User: </label><input type="text" name="user"/><br/><br/>
			<label>Email: </label><input type="email" name="email"/><br/><br/>
			<label>Pass: </label><input type="password" name="pass"/><br/><br/>
			<input type="hidden" name="registro" value="1">
			<input type="submit" value="Registrarme"><br/><br/>
		</form>
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> <!-- isset() retorna True si la variable esta definida. -->
			<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 <!-- Muestra el mensaje de error. -->
		<?php }?> <!-- end etiqueta if-->
	</div>

</body>
</html>
<?php }
}
