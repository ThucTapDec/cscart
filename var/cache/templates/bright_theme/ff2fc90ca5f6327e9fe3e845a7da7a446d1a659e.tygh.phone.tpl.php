<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 15:43:19
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\views\orders\components\payments\phone.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4329027185b1f87a7ae4176-12480727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2fc90ca5f6327e9fe3e845a7da7a446d1a659e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\views\\orders\\components\\payments\\phone.tpl',
      1 => 1528699868,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4329027185b1f87a7ae4176-12480727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'settings' => 0,
    'phone' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f87a7cbd530_29215286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f87a7cbd530_29215286')) {function content_5b1f87a7cbd530_29215286($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php
fn_preload_lang_vars(array('phone','phone'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-control-group">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {?>
        <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone'], null, 0);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&!$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position']=="billing_first") {?>
                <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable('', null, 0);?>
        <?php }?>
    <?php }?>
    <label for="customer_phone" class="ty-control-group__title"><?php echo $_smarty_tpl->__("phone");?>
</label>
    <input id="customer_phone" size="35" type="text" name="payment_info[customer_phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-autocomplete-off" />
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/phone.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/phone.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-control-group">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone']) {?>
        <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['phone'], null, 0);?>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&!$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
        <?php } elseif ($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone']&&$_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone']) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['address_position']=="billing_first") {?>
                <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['b_phone'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['user_data']['s_phone'], null, 0);?>
            <?php }?>
        <?php } else { ?>
            <?php $_smarty_tpl->tpl_vars["phone"] = new Smarty_variable('', null, 0);?>
        <?php }?>
    <?php }?>
    <label for="customer_phone" class="ty-control-group__title"><?php echo $_smarty_tpl->__("phone");?>
</label>
    <input id="customer_phone" size="35" type="text" name="payment_info[customer_phone]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text cm-autocomplete-off" />
</div>
<?php }?><?php }} ?>
