<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 13:08:08
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\gift_certificates\hooks\order_management\totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7287319625b1f63487c0712-98007685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bf853ec7a0d364b1c329d57bad9ce25e6b153ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\order_management\\totals_extra.pre.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7287319625b1f63487c0712-98007685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gift_certificates' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f63487c6d67_05156480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f63487c6d67_05156480')) {function content_5b1f63487c6d67_05156480($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_cert_code'));
?>
<div class="control-group">
    <div class="controls">
        <select name="gift_cert_code" id="gift_cert_code">
            <option value="" disabled selected hidden><?php echo $_smarty_tpl->__("gift_cert_code");?>
</option>
            <option value=""> -- </option>
            <?php  $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["code"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gift_certificates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["code"]->key => $_smarty_tpl->tpl_vars["code"]->value) {
$_smarty_tpl->tpl_vars["code"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
