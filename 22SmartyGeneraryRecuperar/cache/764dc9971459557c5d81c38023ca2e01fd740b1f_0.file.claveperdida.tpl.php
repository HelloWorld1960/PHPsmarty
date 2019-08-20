<?php
/* Smarty version 3.1.30, created on 2017-10-05 01:16:55
  from "C:\xampp\htdocs\Programas[xampp]\PHP\22_Smarty-GeneraryRecuperar\estilos\templates\public\claveperdida.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d56be73913f9_49583785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '764dc9971459557c5d81c38023ca2e01fd740b1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programas[xampp]\\PHP\\22_Smarty-GeneraryRecuperar\\estilos\\templates\\public\\claveperdida.tpl',
      1 => 1507158915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d56be73913f9_49583785 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Recuperar contraseña</title>
</head>
<body>
<h1>Recuperar contraseña</h1>

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	<?php }?>
	<form action="index.php?modo=claveperdida" method="POST">
		<label>Email: </label><input type="email" name="email"/><br/><br/>
		<input type="submit" value="Recuperar contraseña"><br/><br/>
	</form>
</body>
</html><?php }
}
