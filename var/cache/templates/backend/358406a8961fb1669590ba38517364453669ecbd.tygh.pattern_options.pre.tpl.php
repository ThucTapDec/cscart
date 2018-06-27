<?php /* Smarty version Smarty-3.1.21, created on 2018-06-15 13:27:51
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_variations\hooks\data_feeds\pattern_options.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1566132615b235c678e3890-18698877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358406a8961fb1669590ba38517364453669ecbd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\data_feeds\\pattern_options.pre.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1566132615b235c678e3890-18698877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_types' => 0,
    'datafeed_data' => 0,
    'product_type_id' => 0,
    'product_type_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b235c6791ee82_83085296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b235c6791ee82_83085296')) {function content_5b235c6791ee82_83085296($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_type'));
?>
<div class="control-group">
    <label for="elm_datafeed_product_types" class="control-label"><?php echo $_smarty_tpl->__("product_type");?>
:</label>
    <div class="controls">
        <input type="hidden" name="datafeed_data[export_options][product_types]">
        <select name="datafeed_data[export_options][product_types][]" multiple="multiple" id="elm_datafeed_product_types">
            <?php  $_smarty_tpl->tpl_vars["product_type_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product_type_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_type_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product_type_name"]->key => $_smarty_tpl->tpl_vars["product_type_name"]->value) {
$_smarty_tpl->tpl_vars["product_type_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_type_id"]->value = $_smarty_tpl->tpl_vars["product_type_name"]->key;
?>
                <option <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_options']['product_types']&&in_array($_smarty_tpl->tpl_vars['product_type_id']->value,$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options']['product_types'])) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_type_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
