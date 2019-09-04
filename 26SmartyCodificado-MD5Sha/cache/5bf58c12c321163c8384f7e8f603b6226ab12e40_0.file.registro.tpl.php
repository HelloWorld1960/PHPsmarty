<?php
/* Smarty version 3.1.30, created on 2017-10-05 03:42:10
  from "C:\xampp\htdocs\Programas[xampp]\PHP\23_Smarty-MejorasDeCodigo\estilos\templates\public\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d58df2d0c611_91197564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf58c12c321163c8384f7e8f603b6226ab12e40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programas[xampp]\\PHP\\23_Smarty-MejorasDeCodigo\\estilos\\templates\\public\\registro.tpl',
      1 => 1506812127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d58df2d0c611_91197564 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Proyecto</title>
</head>
<body>
<h1>Registro</h1>

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>
	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user"/><br/><br/>
		<label>Email: </label><input type="email" name="email"/><br/><br/>
		<label>Pass: </label><input type="password" name="pass"/><br/><br/>
		<input type="hidden" name="registro" value="1">
		<input type="submit" value="Registrarme"><br/><br/>
	</form>
</body>
</html><?php }
}
