<?php
/* Smarty version 3.1.30, created on 2017-10-01 00:58:50
  from "C:\xampp\htdocs\Programas[xampp]\PHP\21_Smarty-Registro\estilos\templates\public\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d021aac7d312_17771010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '498105278188c1c7a5a4c2a0c959b0588f8a68d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programas[xampp]\\PHP\\21_Smarty-Registro\\estilos\\templates\\public\\registro.tpl',
      1 => 1506812127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d021aac7d312_17771010 (Smarty_Internal_Template $_smarty_tpl) {
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
