<?php
/* Smarty version 3.1.30, created on 2018-05-03 23:59:12
  from "C:\Users\Jorge01\WebPrograms\PHP\20_Smarty-Login\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aeba25075f0b5_59344671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36787ece07000a93e83839437b7413eae3175c91' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP\\20_Smarty-Login\\estilos\\templates\\public\\index.tpl',
      1 => 1506809524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aeba25075f0b5_59344671 (Smarty_Internal_Template $_smarty_tpl) {
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
