<?php
/* Smarty version 3.1.30, created on 2019-06-28 00:03:26
  from "C:\Users\Jorge01\WebPrograms\PHP\21SmartyRegistro\estilos\templates\public\registro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d153d2eebe141_74033403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab9b64c45773b59e979c4b1a53e8b4bd564c0a74' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP\\21SmartyRegistro\\estilos\\templates\\public\\registro.tpl',
      1 => 1561672931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d153d2eebe141_74033403 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>

<head>
	<title>Proyecto</title>
</head>

<body>
	<!--vista-->
	<h1>Registro</h1>

	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><!-- isset() retorna True si la variable esta definida. -->
		<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<!-- Muestra el mensaje de error. -->
	<?php }?><!-- end etiqueta if-->
	<form action="index.php?modo=registro" method="POST">
		<label>User: </label><input type="text" name="user" /><br /><br />
		<label>Email: </label><input type="email" name="email" /><br /><br />
		<label>Pass: </label><input type="password" name="pass" /><br /><br />
		<input type="hidden" name="registro" value="1">
		<input type="submit" value="Registrarme"><br /><br />
	</form>
</body>

</html>
<?php }
}
