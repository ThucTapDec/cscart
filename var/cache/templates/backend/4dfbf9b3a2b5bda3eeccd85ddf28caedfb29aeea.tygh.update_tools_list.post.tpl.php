<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 04:18:15
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_variations\hooks\products\update_tools_list.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16743542785b1f1f578707c4-40268776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dfbf9b3a2b5bda3eeccd85ddf28caedfb29aeea' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_tools_list.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16743542785b1f1f578707c4-40268776',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f1f578e2838_77891041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f1f578e2838_77891041')) {function content_5b1f1f578e2838_77891041($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.confirm_convert_to_configurable_product','product_variations.convert_to_configurable_product','product_variations.variations'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_SIMPLE")) {?>
    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'data'=>array("data-ca-confirm-text"=>$_smarty_tpl->__("product_variations.confirm_convert_to_configurable_product")),'text'=>$_smarty_tpl->__("product_variations.convert_to_configurable_product"),'href'=>"product_variations.convert?product_id=".((string)$_smarty_tpl->tpl_vars['id']->value),'class'=>"cm-confirm",'method'=>"POST"));?>
</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <li><?php ob_start();
echo htmlspecialchars(constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION"), ENT_QUOTES, 'UTF-8');
$_tmp1=ob_get_clean();?><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("product_variations.variations"),'href'=>"products.manage?parent_product_id=".((string)$_smarty_tpl->tpl_vars['id']->value)."&product_type=".$_tmp1));?>
</li>
<?php }?>
<?php }} ?>
