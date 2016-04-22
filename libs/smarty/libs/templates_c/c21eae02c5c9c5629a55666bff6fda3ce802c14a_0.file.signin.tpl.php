<?php
/* Smarty version 3.1.29, created on 2016-04-22 11:13:14
  from "/opt/lampp/htdocs/file_repo2/libs/smarty/libs/templates/users/signin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5719eb2b002094_54656755',
  'file_dependency' => 
  array (
    'c21eae02c5c9c5629a55666bff6fda3ce802c14a' => 
    array (
      0 => '/opt/lampp/htdocs/file_repo2/libs/smarty/libs/templates/users/signin.tpl',
      1 => 1461281490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/main.tpl' => 1,
  ),
),false)) {
function content_5719eb2b002094_54656755 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_3758546805719eb2af39048_43562586',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_12354666125719eb2af40495_52561603',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:users/signin.tpl */
function block_3758546805719eb2af39048_43562586($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['website_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['section_title']->value;
}
/* {/block 'title'} */
/* {block 'body'}  file:users/signin.tpl */
function block_12354666125719eb2af40495_52561603($_smarty_tpl, $_blockParentStack) {
?>
<div class="container-fluid"> <div class="row"> <div class="modal-dialog"> <form class="form-horizontal"> <div class="modal-content"> <div class="modal-header"> <h1 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1> </div> <div class="modal-body"> <div class="form-group"> <label class="col-sm-4 control-label" for="username"> <select> <option value="username">Username</option> <option value="email-address">Email Address</option> <option value="phone-number">Phone Number</option> </select> </label> <div class="col-sm-8"> <input name="username" id="username" class="form-control" type="text" placeholder="Enter your username here"> </div> </div> <div class="form-group"> <label class="col-sm-4 control-label" for="password">Password</label> <div class="col-sm-8"> <input name="password" id="password" class="form-control" type="password" placeholder="Enter your password here"> </div> </div> </div> <div class="modal-footer"> <div class="col-sm-offset-2 col-sm-10"> <button class="btn btn-primary" type="submit">Submit</button> </div> </div> </div> </form> </div> </div> </div><?php
}
/* {/block 'body'} */
}
