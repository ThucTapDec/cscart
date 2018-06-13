<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 14:19:03
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\common\colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15428551115b1f73e74ac735-11644359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ac8ec33a4addcf0a0c368391c233ab11a9c130b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\colorpicker.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15428551115b1f73e74ac735-11644359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f73e74b0627_29884758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f73e74b0627_29884758')) {function content_5b1f73e74b0627_29884758($_smarty_tpl) {?><div class="colorpicker">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-view="palette" class="cm-colorpicker">
</div><?php }} ?>
