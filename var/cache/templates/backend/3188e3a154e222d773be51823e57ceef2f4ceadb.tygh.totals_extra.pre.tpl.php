<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 13:08:08
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\reward_points\hooks\order_management\totals_extra.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6268138125b1f63487edf45-54172773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3188e3a154e222d773be51823e57ceef2f4ceadb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\order_management\\totals_extra.pre.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '6268138125b1f63487edf45-54172773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'user_points' => 0,
    'user_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f63488039c0_24952636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f63488039c0_24952636')) {function content_5b1f63488039c0_24952636($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points_to_use','available','maximum'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price']&&$_smarty_tpl->tpl_vars['user_points']->value) {?>
<div class="control-group">
    <label for="points_to_use" class="control-label"><?php echo $_smarty_tpl->__("points_to_use");?>
:</label>
    <div class="controls">
        <input type="text" name="points_to_use" id="points_to_use" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points'], ENT_QUOTES, 'UTF-8');?>
" />
        <p class="help-block">(<?php echo $_smarty_tpl->__("available");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['points'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['user_points']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
&nbsp;/&nbsp;<?php echo $_smarty_tpl->__("maximum");?>
:&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['total_price'], ENT_QUOTES, 'UTF-8');?>
)</p>
    </div>
</div>
<?php }?><?php }} ?>
