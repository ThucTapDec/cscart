<?php /* Smarty version Smarty-3.1.21, created on 2018-06-14 09:15:25
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\seo\views\seo_rules\components\search_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20166053945b21cfbdc7d4e3-02575738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50c8c1be9a5e886d1b35b9ec2302e6f85f4b16ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\seo\\views\\seo_rules\\components\\search_form.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20166053945b21cfbdc7d4e3-02575738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'dispatch' => 0,
    'in_popup' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b21cfbdc92be7_86301686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b21cfbdc92be7_86301686')) {function content_5b21cfbdc92be7_86301686($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search','seo_name','dispatch_value'));
?>
<div class="sidebar-row">
<h6><?php echo $_smarty_tpl->__("search");?>
</h6>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" name="seo_rules_search_form" method="get">
<?php $_smarty_tpl->_capture_stack[0][] = array("simple_search", null, null); ob_start(); ?>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("seo_name");?>
</label>
    <input type="text" name="name" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="search-input-text" />
</div>
<div class="sidebar-field">
    <label><?php echo $_smarty_tpl->__("dispatch_value");?>
</label>
    <input type="text" name="rule_params" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['rule_params'], ENT_QUOTES, 'UTF-8');?>
" class="input-text" />
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/advanced_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('simple_search'=>Smarty::$_smarty_vars['capture']['simple_search'],'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value,'view_type'=>"seo_rules",'in_popup'=>$_smarty_tpl->tpl_vars['in_popup']->value), 0);?>


</form>
</div><?php }} ?>
