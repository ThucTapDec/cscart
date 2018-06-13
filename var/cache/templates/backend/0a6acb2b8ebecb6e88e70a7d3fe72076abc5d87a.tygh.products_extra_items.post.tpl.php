<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 13:08:08
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\gift_certificates\hooks\order_management\products_extra_items.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1941811085b1f634840f324-52313455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a6acb2b8ebecb6e88e70a7d3fe72076abc5d87a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\gift_certificates\\hooks\\order_management\\products_extra_items.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1941811085b1f634840f324-52313455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'certificate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f6348419cf3_47663817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f6348419cf3_47663817')) {function content_5b1f6348419cf3_47663817($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('gift_certificate'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['gift_certificates']) {?>
    <?php  $_smarty_tpl->tpl_vars["certificate"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["certificate"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['gift_certificates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["certificate"]->key => $_smarty_tpl->tpl_vars["certificate"]->value) {
$_smarty_tpl->tpl_vars["certificate"]->_loop = true;
?>
        <tr>
            <td>&nbsp;</td>
            <td>
                <?php echo $_smarty_tpl->__("gift_certificate");?>
: <a href="<?php echo htmlspecialchars(fn_url("gift_certificates.update?gift_cert_id=".((string)$_smarty_tpl->tpl_vars['certificate']->value['gift_cert_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['certificate']->value['gift_cert_code'], ENT_QUOTES, 'UTF-8');?>
</a>
            </td>
            <td>&nbsp;</td>
            <td colspan="3">&nbsp;
                <?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['certificate']->value['display_subtotal']), 0);?>

            </td>
        </tr>
    <?php } ?>
<?php }?><?php }} ?>
