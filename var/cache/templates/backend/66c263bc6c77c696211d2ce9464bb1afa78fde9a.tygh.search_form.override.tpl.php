<?php /* Smarty version Smarty-3.1.21, created on 2018-06-14 08:32:35
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\wishlist\hooks\cart\search_form.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8010534785b21c5b3bac9f8-53712420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c263bc6c77c696211d2ce9464bb1afa78fde9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\wishlist\\hooks\\cart\\search_form.override.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '8010534785b21c5b3bac9f8-53712420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'check_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b21c5b3bc46e1_49138365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b21c5b3bc46e1_49138365')) {function content_5b21c5b3bc46e1_49138365($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('cart','wishlist'));
?>
<label for="cb_product_type_c"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_c']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_c" id="cb_product_type_c" onclick="if (!this.checked) document.getElementById('cb_product_type_w').checked = true;"/>
<?php echo $_smarty_tpl->__("cart");?>
</label>

<label for="cb_product_type_w"><input type="checkbox" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_type_w']=="Y"||$_smarty_tpl->tpl_vars['check_all']->value) {?>checked="checked"<?php }?> name="product_type_w" id="cb_product_type_w" onclick="if (!this.checked) document.getElementById('cb_product_type_c').checked = true;"  />
<?php echo $_smarty_tpl->__("wishlist");?>
</label><?php }} ?>
