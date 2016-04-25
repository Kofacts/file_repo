<?php
/* Smarty version 3.1.29, created on 2016-04-24 22:11:11
  from "/opt/lampp/htdocs/file_repo/libs/smarty/libs/templates/users/main.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571d285f8e5d01_10600529',
  'file_dependency' => 
  array (
    '733e396003d5e3b059c5dd102e8890dfb93686c1' => 
    array (
      0 => '/opt/lampp/htdocs/file_repo/libs/smarty/libs/templates/users/main.tpl',
      1 => 1461528625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_571d285f8e5d01_10600529 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'head', array (
  0 => 'block_1254418703571d285f8e2f00_33517490',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'}  file:users/main.tpl */
function block_1254418703571d285f8e2f00_33517490($_smarty_tpl, $_blockParentStack) {
?>
<style>body {background-image: url("<?php echo $_smarty_tpl->tpl_vars['website_url']->value;?>
/public/background_image.jpg");background-size: cover;background-repeat: no-repeat;}</style><?php
}
/* {/block 'head'} */
}
