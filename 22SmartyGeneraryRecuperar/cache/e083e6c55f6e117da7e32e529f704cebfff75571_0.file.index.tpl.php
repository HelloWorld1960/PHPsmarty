<?php
/* Smarty version 3.1.30, created on 2017-10-01 00:12:06
  from "C:\xampp\htdocs\Programas[xampp]\PHP\20_Smarty-Login\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d016b6cc35b3_77178123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e083e6c55f6e117da7e32e529f704cebfff75571' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programas[xampp]\\PHP\\20_Smarty-Login\\estilos\\templates\\public\\index.tpl',
      1 => 1506809522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d016b6cc35b3_77178123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Proyecto</title>
</head>
<body>
<h1>Login</h1>

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>
	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user"/>
		<label>Pass: </label><input type="password" name="pass"/>
		<input type="hidden" name="login" value="1">
		<input type="submit" value="Iniciar sesion">
	</form>
</body>
</html><?php }
}
