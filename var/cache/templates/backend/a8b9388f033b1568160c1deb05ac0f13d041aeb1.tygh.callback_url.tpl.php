<?php /* Smarty version Smarty-3.1.21, created on 2018-06-14 09:15:06
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\hybrid_auth\components\callback_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12278387465b21cfaa6de842-17898727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8b9388f033b1568160c1deb05ac0f13d041aeb1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\hybrid_auth\\components\\callback_url.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12278387465b21cfaa6de842-17898727',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'provider' => 0,
    'providers_schema' => 0,
    'label' => 0,
    'provider_name' => 0,
    'protocol' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b21cfaa754b45_95929315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b21cfaa754b45_95929315')) {function content_5b21cfaa754b45_95929315($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['protocol'] = new Smarty_variable($_smarty_tpl->tpl_vars['settings']->value['Security']['secure_storefront']=="none" ? "http" : "https", null, 0);?>
<?php $_smarty_tpl->tpl_vars['provider_name'] = new Smarty_variable($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['provider'], null, 0);?>
<div class="control-group">
	<label class="control-label"><?php ob_start();?><?php echo $_smarty_tpl->__('hybrid_auth.callback_url');?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['label']->value)===null||$tmp==='' ? $_tmp1 : $tmp), ENT_QUOTES, 'UTF-8');?>
: </label>
	<div class="controls">
		<input type="text" class="span8" readonly="readonly" value="<?php echo htmlspecialchars(fn_url("auth.process&hauth_done=".((string)$_smarty_tpl->tpl_vars['provider_name']->value),"C",$_smarty_tpl->tpl_vars['protocol']->value), ENT_QUOTES, 'UTF-8');?>
" onclick="this.select()">
	</div>
</div><?php }} ?>
