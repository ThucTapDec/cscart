<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 13:08:08
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\order_management\components\discounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15039826055b1f6348432520-47943751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '922fd31fd4387be54a27fa620d103ba4f1217477' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\order_management\\components\\discounts.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15039826055b1f6348432520-47943751',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f6348436913_04956743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f6348436913_04956743')) {function content_5b1f6348436913_04956743($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discounts','discount_coupon_code'));
?>
<div class="orders-discounts">
	<h4><?php echo $_smarty_tpl->__("discounts");?>
</h4>
	<div class="orders-discount">
	    <input type="text" name="coupon_code" placeholder="<?php echo $_smarty_tpl->__("discount_coupon_code");?>
" id="coupon_code" class="input-text-large" size="30" value="" />
	</div>
</div><?php }} ?>
