<?php
/* Smarty version 3.1.30, created on 2019-06-28 22:48:42
  from "C:\Users\Jorge01\WebPrograms\PHP\26SmartyCodificado\estilos\templates\public\claveperdida.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d167d2a3b0754_90197220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd34cab31f0ebedfdee2cd4130deca03a5ba62b2' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP\\26SmartyCodificado\\estilos\\templates\\public\\claveperdida.tpl',
      1 => 1507158916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d167d2a3b0754_90197220 (Smarty_Internal_Template $_smarty_tpl) {
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
