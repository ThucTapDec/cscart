<?php /* Smarty version Smarty-3.1.21, created on 2018-06-14 09:09:07
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\gift_certificates\hooks\orders\search_form.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5225005555b21ce43e81419-11203870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34bb635bfc4b847ffad8d42a4884c5de05674e95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\orders\\search_form.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5225005555b21ce43e81419-11203870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b21ce43ea0f36_01874822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b21ce43ea0f36_01874822')) {function content_5b21ce43ea0f36_01874822($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_cert_code','purchased','used'));
?>
<div class="search-field">
    <label for="gift_cert_code"><?php echo $_smarty_tpl->__("gift_cert_code");?>
:</label>
    <input type="text" name="gift_cert_code" id="gift_cert_code" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
" size="30" class="input-text" />
    <select name="gift_cert_in">
        <option value="B|U">--</option>
        <option value="B" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="B") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("purchased");?>
</option>
        <option value="U" <?php if ($_smarty_tpl->tpl_vars['search']->value['gift_cert_in']=="U") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("used");?>
</option>
    </select>
</div><?php }} ?>
