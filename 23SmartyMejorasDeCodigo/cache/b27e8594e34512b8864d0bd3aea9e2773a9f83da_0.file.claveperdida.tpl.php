<?php
/* Smarty version 3.1.30, created on 2019-07-05 04:59:37
  from "C:\Users\Jorge01\WebPrograms\PHP\23SmartyMejorasDeCodigo\estilos\templates\public\claveperdida.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d1ebd19bcdba8_52026129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b27e8594e34512b8864d0bd3aea9e2773a9f83da' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP\\23SmartyMejorasDeCodigo\\estilos\\templates\\public\\claveperdida.tpl',
      1 => 1562295575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d1ebd19bcdba8_52026129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Recuperar contraseña</title>
</head>
<body>
	<style type="text/css">
	
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
		<h1>Recuperar contraseña</h1>
		<form action="index.php?modo=claveperdida" method="POST">
			<label>Email: </label><input type="email" name="email"/><br/><br/>
			<input type="submit" value="Recuperar contraseña"><br/><br/>
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
