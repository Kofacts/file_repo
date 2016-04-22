<?php
/* Smarty version 3.1.29, created on 2016-04-22 11:56:13
  from "/opt/lampp/htdocs/file_repo2/libs/smarty/libs/templates/users/signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5719f53dd29919_71900781',
  'file_dependency' => 
  array (
    'c2bc190c47cfda4b9d0c472223cae85a40b145ba' => 
    array (
      0 => '/opt/lampp/htdocs/file_repo2/libs/smarty/libs/templates/users/signup.tpl',
      1 => 1461318965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:users/main.tpl' => 1,
  ),
),false)) {
function content_5719f53dd29919_71900781 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_2143451365719f53dd1e2f0_47687189',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_20510896845719f53dd25009_24737859',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:users/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:users/signup.tpl */
function block_2143451365719f53dd1e2f0_47687189($_smarty_tpl, $_blockParentStack) {
echo $_smarty_tpl->tpl_vars['page_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['website_title']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['section_title']->value;
}
/* {/block 'title'} */
/* {block 'body'}  file:users/signup.tpl */
function block_20510896845719f53dd25009_24737859($_smarty_tpl, $_blockParentStack) {
?>
<div class="container-fluid"> <div class="row"> <div class="modal-dialog"> <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['website_url']->value;?>
/users/signup.php" method="post"> <div class="modal-content"> <div class="modal-header"> <h1 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1> </div> <div class="modal-body"> <div class="form-group"> <p class="text-right text-danger">dddd</p> <label class="col-sm-2 control-label" for="username">Username</label> <div class="col-sm-10"> <input name="username" id="username" class="form-control" type="text" placeholder="Enter your username here"> <span class="help-block">[3-20 characters]</span> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label" for="password">Password</label> <div class="col-sm-10"> <input name="password" id="password" class="form-control" type="password" placeholder="Enter your password here"> <p class="help-block">[6-50 characters]</p> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label" for="email_address">Email Address</label> <div class="col-sm-10"> <input name="email_address" id="email_address" class="form-control" type="email" placeholder="Enter your email address here"> <p class="help-block">[5-50 characters]</p> </div> </div> <div class="form-group"> <label class="col-sm-2 control-label" for="phone_number">Phone Number</label> <div class="col-sm-10"> <input name="phone_number" id="phone_number" class="form-control" type="tel" placeholder="Enter your phone number here"> <p class="help-block">[5-20 characters]</p> </div> </div> </div> <div class="modal-footer"> <div class="col-sm-offset-2 col-sm-10"> <button class="btn btn-primary" type="submit">Submit</button> </div> </div> </div> </form> </div> </div> </div><?php
}
/* {/block 'body'} */
}
