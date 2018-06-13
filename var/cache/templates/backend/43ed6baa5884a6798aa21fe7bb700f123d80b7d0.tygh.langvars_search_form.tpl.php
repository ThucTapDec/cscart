<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 14:19:22
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\languages\components\langvars_search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16070927885b1f73fa5e21b5-65967670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ed6baa5884a6798aa21fe7bb700f123d80b7d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\languages\\components\\langvars_search_form.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16070927885b1f73fa5e21b5-65967670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f73fa5f0e97_04336624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f73fa5f0e97_04336624')) {function content_5b1f73fa5f0e97_04336624($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','search_for_pattern'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="langvars_search_form" method="get">

<div class="sidebar-field">
	<label><?php echo $_smarty_tpl->__("search_for_pattern");?>
</label>
	<input type="text" name="q" size="20" value="<?php echo htmlspecialchars($_REQUEST['q'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[languages.translations]"), 0);?>

</form>

</div><?php }} ?>
