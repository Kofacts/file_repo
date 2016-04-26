<?php
/* Smarty version 3.1.29, created on 2016-04-26 14:20:39
  from "/opt/lampp/htdocs/file_repo/libs/smarty/libs/templates/users/signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571f5d17305db2_79976282',
  'file_dependency' => 
  array (
    '8a383d9f68e8897142e07d5e8581cf37ca372659' => 
    array (
      0 => '/opt/lampp/htdocs/file_repo/libs/smarty/libs/templates/users/signup.tpl',
      1 => 1461672813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/main.tpl' => 1,
  ),
),false)) {
function content_571f5d17305db2_79976282 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_1081265984571f5d17166fd3_14768460',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1221022287571f5d171c2826_95333398',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:users/signup.tpl */
function block_1081265984571f5d17166fd3_14768460($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['website_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['section_title']->value;
}
/* {/block 'title'} */
/* {block 'body'}  file:users/signup.tpl */
function block_1221022287571f5d171c2826_95333398($_smarty_tpl, $_blockParentStack) {
?>
<div class="container-fluid"> <div class="row"> <div class="modal-dialog"> <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['website_url']->value;?>
/users/signup.php" method="post"> <div class="modal-content"> <div class="modal-header"> <h1 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1> </div> <div class="modal-body"> <div class="form-group"> <b class="col-sm-offset-2 col-sm-10 text-right text-danger" data-error><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['username'])) {
echo $_smarty_tpl->tpl_vars['errors']->value['username'];
}?></b> <label class="col-sm-2 control-label" for="username">Username</label> <div class="col-sm-10"> <input name="username" id="username" class="form-control" type="text" value="<?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['username'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['inputs']->value['username'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder="Enter your username here" data-check> <span class="help-block">[3-20 characters]</span> </div> </div> <div class="form-group"> <b class="col-sm-offset-2 col-sm-10 text-right text-danger" data-error><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['password'])) {
echo $_smarty_tpl->tpl_vars['errors']->value['password'];
}?></b> <label class="col-sm-2 control-label" for="password">Password</label> <div class="col-sm-10"> <input name="password" id="password" class="form-control" type="password" value="<?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['password'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['inputs']->value['password'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder="Enter your password here" data-check> <p class="pull-left help-block">[6-50 characters]</p> <label class="pull-right"><input type="checkbox"> Show</label> </div> </div> <div class="form-group"> <b class="col-sm-offset-2 col-sm-10 text-right text-danger" data-error><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['email_address'])) {
echo $_smarty_tpl->tpl_vars['errors']->value['email_address'];
}?></b> <label class="col-sm-2 control-label" for="email_address">Email Address</label> <div class="col-sm-10"> <input name="email_address" id="email_address" class="form-control" type="email" value="<?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['email_address'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['inputs']->value['email_address'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder="Enter your email address here" data-check> <p class="help-block">[5-50 characters]</p> </div> </div> <div class="form-group"> <b class="col-sm-offset-2 col-sm-10 text-right text-danger" data-error><?php if (isset($_smarty_tpl->tpl_vars['errors']->value['phone_number'])) {
echo $_smarty_tpl->tpl_vars['errors']->value['phone_number'];
}?></b> <label class="col-sm-2 control-label" for="phone_number">Phone Number</label> <div class="col-sm-10"> <input name="phone_number" id="phone_number" class="form-control" type="tel" value="<?php if (isset($_smarty_tpl->tpl_vars['inputs']->value['phone_number'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['inputs']->value['phone_number'], ENT_QUOTES, 'UTF-8', true);
}?>" placeholder="Enter your phone number here" data-check> <p class="help-block">[5-20 characters]</p> </div> </div> </div> <div class="modal-footer"> <div class="col-sm-offset-2 col-sm-10"> <button class="btn btn-primary" type="submit">Submit</button> </div> </div> </div> </form> </div> </div> </div><?php
}
/* {/block 'body'} */
}
