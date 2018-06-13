<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 04:11:12
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_variations\hooks\products\tabs_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20060395935b1f1db09013a0-97185990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '698c334803aee09293a5e1a66243b9cdb2f8a9d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\tabs_extra.pre.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20060395935b1f1db09013a0-97185990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f1db090b066_48559922',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f1db090b066_48559922')) {function content_5b1f1db090b066_48559922($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_CONFIGURABLE")) {?>
    <div class="cm-hide-save-button hidden" id="content_variations"></div>
<?php }?>
<?php }} ?>
