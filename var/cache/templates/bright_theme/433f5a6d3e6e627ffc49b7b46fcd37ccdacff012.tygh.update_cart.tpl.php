<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 05:07:00
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\buttons\update_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3270627795b1f2ac425d5f5-31143745%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433f5a6d3e6e627ffc49b7b46fcd37ccdacff012' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\buttons\\update_cart.tpl',
      1 => 1528699868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3270627795b1f2ac425d5f5-31143745',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'but_id' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'but_role' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f2ac42a1e81_92770144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f2ac42a1e81_92770144')) {function content_5b1f2ac42a1e81_92770144($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('recalculate','recalculate'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("recalculate"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__secondary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/update_cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/update_cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>$_smarty_tpl->tpl_vars['but_id']->value,'but_text'=>$_smarty_tpl->__("recalculate"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_meta'=>"ty-btn__secondary ".((string)$_smarty_tpl->tpl_vars['but_meta']->value),'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);
}?><?php }} ?>
