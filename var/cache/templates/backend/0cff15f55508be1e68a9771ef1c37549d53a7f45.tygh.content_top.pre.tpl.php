<?php /* Smarty version Smarty-3.1.21, created on 2018-06-11 09:51:55
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\help_tutorial\hooks\index\content_top.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1630656485b1e1c0b5a6112-84765666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cff15f55508be1e68a9771ef1c37549d53a7f45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_tutorial\\hooks\\index\\content_top.pre.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1630656485b1e1c0b5a6112-84765666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1e1c0b5c93c0_38206646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1e1c0b5c93c0_38206646')) {function content_5b1e1c0b5c93c0_38206646($_smarty_tpl) {?><?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="block_manager"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("Tv7AZhmLwkw","RseUfuFdctg"),'open'=>false), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="themes"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("BVOLfcROTyg"),'open'=>false), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="store_import"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("cCJOoAZnCqk"),'open'=>false), 0);?>

<?php } elseif ((fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']=="companies")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("eUam0Puui3M"),'open'=>fn_allowed_for("ULTIMATE:FREE")&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=='manage'), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="index"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="index")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("5STIqzsPU9c"),'open'=>false), 0);?>

<?php } elseif (($_smarty_tpl->tpl_vars['runtime']->value['controller']=="seo_rules"&&$_smarty_tpl->tpl_vars['runtime']->value['mode']=="manage")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/help_tutorial/components/video.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('items'=>array("JUFXyew6lig"),'open'=>false), 0);?>

<?php }?><?php }} ?>
