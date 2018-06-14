<?php /* Smarty version Smarty-3.1.21, created on 2018-06-14 09:04:53
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\buttons\clone_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807854295b21cd45d2f9c5-71069535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e4133a378b79e606026cd77d203ea02181cbfcb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\buttons\\clone_delete.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1807854295b21cd45d2f9c5-71069535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href_clone' => 0,
    'no_confirm' => 0,
    'microformats' => 0,
    'href_delete' => 0,
    'delete_target_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b21cd45d9ca06_23274163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b21cd45d9ca06_23274163')) {function content_5b21cd45d9ca06_23274163($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['href_clone']->value) {?>
<a class="clone-item cm-tooltip" title="<?php echo $_smarty_tpl->__("remove");?>
" href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_clone']->value), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-remove"></i></a>
<?php }?>
<a class="delete-item cm-tooltip <?php if (!$_smarty_tpl->tpl_vars['no_confirm']->value) {?>cm-confirm<?php }
if ($_smarty_tpl->tpl_vars['microformats']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['microformats']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo $_smarty_tpl->__("remove");?>
" <?php if ($_smarty_tpl->tpl_vars['href_delete']->value) {?>href="<?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['href_delete']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['delete_target_id']->value) {?>data-ca-target-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delete_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><i class="icon-remove"></i></a><?php }} ?>
