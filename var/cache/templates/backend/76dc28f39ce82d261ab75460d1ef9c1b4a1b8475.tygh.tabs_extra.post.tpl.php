<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 05:14:38
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\discussion\hooks\companies\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3172147775b1f2c8e298997-64194329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76dc28f39ce82d261ab75460d1ef9c1b4a1b8475' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\discussion\\hooks\\companies\\tabs_extra.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3172147775b1f2c8e298997-64194329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f2c8e2a0572_68106419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f2c8e2a0572_68106419')) {function content_5b1f2c8e2a0572_68106419($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id']), 0);?>

<?php }?><?php }} ?>
