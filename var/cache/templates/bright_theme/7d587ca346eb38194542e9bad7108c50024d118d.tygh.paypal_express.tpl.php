<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 15:40:04
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\paypal\views\orders\components\payments\paypal_express.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16767837525b1f86e4d3e819-19677270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d587ca346eb38194542e9bad7108c50024d118d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\paypal\\views\\orders\\components\\payments\\paypal_express.tpl',
      1 => 1528699876,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16767837525b1f86e4d3e819-19677270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'payment_method' => 0,
    'tab_id' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f86e4e00be7_30898155',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f86e4e00be7_30898155')) {function content_5b1f86e4e00be7_30898155($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['payment_method']->value['processor_params']['in_context']=='Y'&&!$_SESSION['pp_express_details']) {?>
    <input type="hidden"
           data-ca-paypal-in-context-checkout="true"
           data-ca-paypal-merchant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['processor_params']['merchant_id'], ENT_QUOTES, 'UTF-8');?>
"
           data-ca-paypal-environment="<?php if ($_smarty_tpl->tpl_vars['payment_method']->value['processor_params']['mode']=="live") {?>production<?php } else { ?>sandbox<?php }?>"
           data-ca-paypal-button="place_order_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/paypal/views/orders/components/payments/paypal_express.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/paypal/views/orders/components/payments/paypal_express.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['payment_method']->value['processor_params']['in_context']=='Y'&&!$_SESSION['pp_express_details']) {?>
    <input type="hidden"
           data-ca-paypal-in-context-checkout="true"
           data-ca-paypal-merchant-id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['payment_method']->value['processor_params']['merchant_id'], ENT_QUOTES, 'UTF-8');?>
"
           data-ca-paypal-environment="<?php if ($_smarty_tpl->tpl_vars['payment_method']->value['processor_params']['mode']=="live") {?>production<?php } else { ?>sandbox<?php }?>"
           data-ca-paypal-button="place_order_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    />
<?php }
}?><?php }} ?>
