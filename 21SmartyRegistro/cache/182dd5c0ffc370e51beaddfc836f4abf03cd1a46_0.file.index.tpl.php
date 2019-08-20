<?php
/* Smarty version 3.1.30, created on 2019-08-20 22:18:24
  from "C:\Users\Jorge01\WebPrograms\PHP[Smarty]\21SmartyRegistro\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5c559020b2d0_57826118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '182dd5c0ffc370e51beaddfc836f4abf03cd1a46' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP[Smarty]\\21SmartyRegistro\\estilos\\templates\\public\\index.tpl',
      1 => 1561672999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5c559020b2d0_57826118 (Smarty_Internal_Template $_smarty_tpl) {
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
