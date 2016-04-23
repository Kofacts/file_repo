<?php
/* Smarty version 3.1.29, created on 2016-04-22 20:57:55
  from "/opt/lampp/htdocs/file_repo/libs/smarty/libs/templates/users/signin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571a74330c8822_58344841',
  'file_dependency' => 
  array (
    'a1a6e692f009eb6ac9ad06397299b9dd4425ac1c' => 
    array (
      0 => '/opt/lampp/htdocs/file_repo/libs/smarty/libs/templates/users/signin.tpl',
      1 => 1461351448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/main.tpl' => 1,
  ),
),false)) {
function content_571a74330c8822_58344841 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_877623985571a74330a8dc9_73971735',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1487476725571a74330af967_50367963',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:users/signin.tpl */
function block_877623985571a74330a8dc9_73971735($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['website_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['section_title']->value;
}
/* {/block 'title'} */
/* {block 'body'}  file:users/signin.tpl */
function block_1487476725571a74330af967_50367963($_smarty_tpl, $_blockParentStack) {
?>
<div class="container-fluid"> <div class="row"> <div class="modal-dialog"> <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['website_url']->value;?>
/users/signin.php" method="post"> <div class="modal-content"> <div class="modal-content"> <div class="modal-header"> <h1 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1> </div> <div class="modal-body"><?php if (isset($_GET['msg'])) {?><div class="alert alert-info text-center" role="alert"><?php echo htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?><div class="form-group"> <b class="col-sm-offset-2 col-sm-10 text-right text-danger"><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['username'])) {
echo $_smarty_tpl->tpl_vars['errors']->value['username'];
}?></b> <label class="col-sm-4 control-label" for="username"> <select> <option value="username">Username</option> <option value="email-address">Email Address</option> <option value="phone-number">Phone Number</option> </select> </label> <div class="col-sm-8"> <input name="username" id="username" class="form-control" type="text" placeholder="Enter your username here"> </div> </div> <div class="form-group"> <b class="col-sm-offset-2 col-sm-10 text-right text-danger"><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {
echo $_smarty_tpl->tpl_vars['errors']->value['password'];
}?></b> <label class="col-sm-4 control-label" for="password">Password</label> <div class="col-sm-8"> <input name="password" id="password" class="form-control" type="password" placeholder="Enter your password here"> </div> </div> </div> <div class="modal-footer"> <div class="col-sm-offset-2 col-sm-10"> <button class="btn btn-primary" type="submit">Submit</button> </div> </div> </div> </form> </div> </div> </div><?php
}
/* {/block 'body'} */
}
