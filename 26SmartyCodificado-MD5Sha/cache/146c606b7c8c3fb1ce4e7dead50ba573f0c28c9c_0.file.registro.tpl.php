<?php
/* Smarty version 3.1.30, created on 2019-09-04 03:41:38
  from "C:\Users\Jorge01\WebPrograms\PHP[Smarty]\26SmartyCodificado-MD5Sha\estilos\templates\public\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d6f1652977e48_95345527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '146c606b7c8c3fb1ce4e7dead50ba573f0c28c9c' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP[Smarty]\\26SmartyCodificado-MD5Sha\\estilos\\templates\\public\\registro.tpl',
      1 => 1506812128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d6f1652977e48_95345527 (Smarty_Internal_Template $_smarty_tpl) {
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
