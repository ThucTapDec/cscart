<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 07:21:54
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\hybrid_auth\views\hybrid_auth\provider_keys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20395847265b1f4a62c0fcd5-17829516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a0ab8a477faaaf693bf990741f4cabdc7a4452' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\hybrid_auth\\views\\hybrid_auth\\provider_keys.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20395847265b1f4a62c0fcd5-17829516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'provider' => 0,
    'providers_schema' => 0,
    'key_id' => 0,
    'key' => 0,
    'provider_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f4a62c22d59_90257384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f4a62c22d59_90257384')) {function content_5b1f4a62c22d59_90257384($_smarty_tpl) {?><div id="content_keys_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    
    <?php if ($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['instruction']) {?>
    <div class="control-group">
        <div class="controls">
            <div class="alert alert-block hybrid-auth-instruction">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['instruction']);?>

            </div>
        </div>
    </div>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["key"]->_loop = false;
 $_smarty_tpl->tpl_vars["key_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['keys']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["key"]->key => $_smarty_tpl->tpl_vars["key"]->value) {
$_smarty_tpl->tpl_vars["key"]->_loop = true;
 $_smarty_tpl->tpl_vars["key_id"]->value = $_smarty_tpl->tpl_vars["key"]->key;
?>
        <div class="control-group">
            <label for="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['key']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['key']->value['label']);?>
:</label>
            <div class="controls">
                <input type="text" name="provider_data[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value['db_field'], ENT_QUOTES, 'UTF-8');?>
]" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['provider_data']->value[$_smarty_tpl->tpl_vars['key']->value['db_field']], ENT_QUOTES, 'UTF-8');?>
" id="section_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>
    <?php } ?>
<!--content_keys_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
