<?php
/* Smarty version 3.1.30, created on 2019-09-04 03:05:45
  from "C:\Users\Jorge01\WebPrograms\PHP[Smarty]\26SmartyCodificado\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6f0de95d8074_46524363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947766ab48f96148ea04366c27b92d5bb13b9fce' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP[Smarty]\\26SmartyCodificado\\estilos\\templates\\public\\index.tpl',
      1 => 1507164190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6f0de95d8074_46524363 (Smarty_Internal_Template $_smarty_tpl) {
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
		<a href="index.php?modo=claveperdida">Recuperar contraseña</a><br/><br/>
		<input type="submit" value="Iniciar sesion"><br/><br/>
	</form>
</body>
</html><?php }
}
