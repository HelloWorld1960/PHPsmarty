<?php
/* Smarty version 3.1.30, created on 2019-08-20 21:32:33
  from "C:\Users\Jorge01\WebPrograms\PHP[Smarty]\19SmartyConexionSQL\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d5c4ad17a4954_30666029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30b5426a809b1303916f1187ef94fc68c57c4573' => 
    array (
      0 => 'C:\\Users\\Jorge01\\WebPrograms\\PHP[Smarty]\\19SmartyConexionSQL\\estilos\\templates\\public\\index.tpl',
      1 => 1566329551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5c4ad17a4954_30666029 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Proyecto</title>
</head>
<body>
<h1>Esto es index.tpl</h1>
	<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?> <!--  -->
		<?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['variable2']->value;?>
<br />
	<?php }
}
?>
 <!-- end etiqueta for -->
</body>
</html>
<?php }
}
