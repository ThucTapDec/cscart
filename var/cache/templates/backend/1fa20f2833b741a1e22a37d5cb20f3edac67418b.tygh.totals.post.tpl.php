<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 13:08:08
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\reward_points\hooks\order_management\totals.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5005433575b1f6348d2c895-98874597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fa20f2833b741a1e22a37d5cb20f3edac67418b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\order_management\\totals.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '5005433575b1f6348d2c895-98874597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f6348d5f2c7_29246973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f6348d5f2c7_29246973')) {function content_5b1f6348d5f2c7_29246973($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('points','points_in_use','points_lowercase','delete'));
?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward']) {?>
    <tr>
        <td><?php echo $_smarty_tpl->__("points");?>
:</td>
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['points_info']['reward'], ENT_QUOTES, 'UTF-8');?>
</td>
    </tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']) {?>
    <tr>
        <td class="nowrap"><?php echo $_smarty_tpl->__("points_in_use");?>
&nbsp;(<?php echo $_smarty_tpl->__("points_lowercase",array($_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['points']));?>
)&nbsp;<a class="cm-post" href="<?php echo htmlspecialchars(fn_url("order_management.delete_points_in_use"), ENT_QUOTES, 'UTF-8');?>
"><i class="icon-trash" title="<?php echo $_smarty_tpl->__("delete");?>
"></i></a>:</td>
        <td><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['cart']->value['points_info']['in_use']['cost']), 0);?>
</td>
    </tr>
<?php }?><?php }} ?>
