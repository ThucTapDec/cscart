<?php /* Smarty version Smarty-3.1.21, created on 2018-06-13 11:18:47
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\email_templates\preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21087622695b209b2706b6b2-53578855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18b7fc61e0dc756bcaa852cf3c3551b5a00a5631' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\email_templates\\preview.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '21087622695b209b2706b6b2-53578855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'preview' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b209b27075ae2_05728039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b209b27075ae2_05728039')) {function content_5b209b27075ae2_05728039($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('preview','subject','body'));
?>
<div title="<?php echo $_smarty_tpl->__("preview");?>
" id="preview_dialog">

<?php if ($_smarty_tpl->tpl_vars['preview']->value) {?>
    <h4><?php echo $_smarty_tpl->__("subject");?>
:</h4>
    <div>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview']->value->getSubject(), ENT_QUOTES, 'UTF-8');?>

    </div>
    <h4><?php echo $_smarty_tpl->__("body");?>
:</h4>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['preview']->value->getBody();?>

    </div>
<?php }?>

<!--preview_dialog--></div>
<?php }} ?>
