<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 04:11:12
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\attachments\hooks\products\tabs_extra.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11077166855b1f1db09224e2-71314329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99bc7ee1bdf2b48c14f653024ef0ae4829b9ee99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\attachments\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11077166855b1f1db09224e2-71314329',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f1db09266c0_07062435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f1db09266c0_07062435')) {function content_5b1f1db09266c0_07062435($_smarty_tpl) {?><div id="content_attachments" class="cm-hide-save-button hidden">

<?php echo $_smarty_tpl->getSubTemplate ("addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0);?>


<!--content_attachments--></div><?php }} ?>
