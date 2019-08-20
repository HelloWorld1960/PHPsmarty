<?php
/* Smarty version 3.1.30, created on 2019-06-28 00:03:32
  from "C:\Users\Jorge01\WebPrograms\PHP\21SmartyRegistro\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d153d34b15701_79965406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ce1ac8ad84d5be8423f75d4f12189bb99d1f79d' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP\\21SmartyRegistro\\estilos\\templates\\public\\index.tpl',
      1 => 1561672999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d153d34b15701_79965406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
	<title>Proyecto</title>
</head>

<body>
	<!--Vista-->
	<h1>Login</h1>

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><!-- isset() retorna True si la variable esta definida. -->
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<!-- Muestra el mensaje de error. -->
	<?php }?><!-- end etiqueta if-->
	<form action="index.php?modo=login" method="POST">
		<label>User: </label><input type="text" name="user" /><br /><br />
		<label>Pass: </label><input type="password" name="pass" /><br /><br />
		<input type="hidden" name="login" value="1">
		<a href="index.php?modo=registro">Registrarme</a><br /><br />
		<input type="submit" value="Iniciar sesion"><br /><br />
	</form>
</body>

</html>
<?php }
}
