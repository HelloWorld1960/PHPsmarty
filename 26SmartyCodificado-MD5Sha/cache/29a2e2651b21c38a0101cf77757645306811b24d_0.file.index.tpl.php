<?php
/* Smarty version 3.1.30, created on 2017-10-01 00:38:40
  from "C:\xampp\htdocs\Programas[xampp]\PHP\21_Smarty-Registro\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d01cf056f973_47210989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29a2e2651b21c38a0101cf77757645306811b24d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programas[xampp]\\PHP\\21_Smarty-Registro\\estilos\\templates\\public\\index.tpl',
      1 => 1506811116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d01cf056f973_47210989 (Smarty_Internal_Template $_smarty_tpl) {
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
		<label>User: </label><input type="text" name="user"/><br/><br/>
		<label>Pass: </label><input type="password" name="pass"/><br/><br/>
		<input type="hidden" name="login" value="1">
		<a href="index.php?modo=registro">Registrarme</a><br/><br/>
		<input type="submit" value="Iniciar sesion"><br/><br/>
	</form>
</body>
</html><?php }
}
