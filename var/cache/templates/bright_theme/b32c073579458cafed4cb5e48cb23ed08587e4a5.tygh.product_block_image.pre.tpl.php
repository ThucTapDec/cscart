<?php /* Smarty version Smarty-3.1.21, created on 2018-06-13 10:52:52
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\product_variations\hooks\products\product_block_image.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3724669445b20951424f583-24046240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b32c073579458cafed4cb5e48cb23ed08587e4a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\products\\product_block_image.pre.tpl',
      1 => 1528699880,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '3724669445b20951424f583-24046240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'hide_links' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b209514271e67_84446537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b209514271e67_84446537')) {function content_5b209514271e67_84446537($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (!$_smarty_tpl->tpl_vars['hide_links']->value&&$_smarty_tpl->tpl_vars['product']->value['options_changed']&&$_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php $_smarty_tpl->tpl_vars['product_link'] = new Smarty_variable(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&combination=".((string)$_smarty_tpl->tpl_vars['product']->value['options_combination'])), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_link'] = clone $_smarty_tpl->tpl_vars['product_link'];?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/products/product_block_image.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/products/product_block_image.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (!$_smarty_tpl->tpl_vars['hide_links']->value&&$_smarty_tpl->tpl_vars['product']->value['options_changed']&&$_smarty_tpl->tpl_vars['product']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <?php $_smarty_tpl->tpl_vars['product_link'] = new Smarty_variable(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&combination=".((string)$_smarty_tpl->tpl_vars['product']->value['options_combination'])), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['product_link'] = clone $_smarty_tpl->tpl_vars['product_link'];?>
<?php }?>
<?php }?><?php }} ?>
