<?php /* Smarty version Smarty-3.1.21, created on 2018-06-13 10:50:57
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\blog\hooks\block_manager\update_block_picker_extra_url.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20948658435b2094a1d096f6-12324643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62c5a351b499881be66b1db63ca32f83e0688ae6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\blog\\hooks\\block_manager\\update_block_picker_extra_url.override.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20948658435b2094a1d096f6-12324643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dynamic_object_scheme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b2094a1ed05b6_88185829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2094a1ed05b6_88185829')) {function content_5b2094a1ed05b6_88185829($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['customer_dispatch']=="pages.view?page_type=".((string)@constant('PAGE_TYPE_BLOG'))) {?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dynamic_object_scheme']->value['picker_params']['extra_url'], ENT_QUOTES, 'UTF-8');?>
&page_type=<?php echo htmlspecialchars(@constant('PAGE_TYPE_BLOG'), ENT_QUOTES, 'UTF-8');?>

<?php }?><?php }} ?>
