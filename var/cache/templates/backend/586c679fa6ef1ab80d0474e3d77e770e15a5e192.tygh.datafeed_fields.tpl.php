<?php /* Smarty version Smarty-3.1.21, created on 2018-06-15 13:27:52
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\data_feeds\views\data_feeds\components\datafeed_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12541266575b235c680c55d3-66403501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586c679fa6ef1ab80d0474e3d77e770e15a5e192' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\data_feeds\\views\\data_feeds\\components\\datafeed_fields.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12541266575b235c680c55d3-66403501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'datafeed_data' => 0,
    'key' => 0,
    'field' => 0,
    'export_fields' => 0,
    '_field' => 0,
    'feature_fields' => 0,
    'params' => 0,
    'export_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b235c681d3bd8_14380627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b235c681d3bd8_14380627')) {function content_5b235c681d3bd8_14380627($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
fn_preload_lang_vars(array('addons.google_export.text_info_setting_options','position_short','field_name','data_feeds.text_tooltip_field_name','field_type','data_feeds.text_tooltip_field_type','active','fields','features','options','fields','features','options'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
//<![CDATA[
    (function(_, $) {
        $(_.doc).on('change', '.cm-export-fields', function() {
            var elm_value = $(this).val();
            var elm_class = $("option[value='" + elm_value + "']").attr("class");
            if (elm_class == 'cm-google-option') {
                fn_alert($("#text_info_setting_options").val());
            }
        });
    })(Tygh, Tygh.$);
//]]>
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div id="field_list">
<?php $_smarty_tpl->tpl_vars["key"] = new Smarty_variable("0", null, 0);?>
<input type="hidden" id="text_info_setting_options" <?php if ($_smarty_tpl->tpl_vars['addons']->value['google_export']['status']=='A') {?>value='<?php echo $_smarty_tpl->__("addons.google_export.text_info_setting_options");?>
'}<?php } else { ?>value=""<?php }?> />

<table class="table">
<thead class="cm-first-sibling">
<tr>
    <th><?php echo $_smarty_tpl->__("position_short");?>
</th>
    <th><?php echo $_smarty_tpl->__("field_name");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("data_feeds.text_tooltip_field_name")), 0);?>
</th>
    <th><?php echo $_smarty_tpl->__("field_type");?>
 <?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("data_feeds.text_tooltip_field_type")), 0);?>
</th>
    <th class="center"><?php echo $_smarty_tpl->__("active");?>
</th>
    <th>&nbsp;</th>
</tr>
</thead>

<tbody>
<?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['fields']) {?>
<?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datafeed_data']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["field"]->key;
?>
<tr class="cm-row-item">
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['field']->value['position'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-mini">
    </td>
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][export_field_name]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['export_field_name'], ENT_QUOTES, 'UTF-8');?>
" size="60">
    </td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['export_fields']->value) {?>
            <select class="cm-export-fields " id="export_fields" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][field]">
                <optgroup label="<?php echo $_smarty_tpl->__("fields");?>
">
                <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['export_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['field']->value['field']==$_smarty_tpl->tpl_vars['_field']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </optgroup>

                <?php if ($_smarty_tpl->tpl_vars['feature_fields']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['field']->value['field']==$_smarty_tpl->tpl_vars['_field']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </optgroup>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['export_options']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("options");?>
">
                    <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['export_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                        <option class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['option_class'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field']==$_smarty_tpl->tpl_vars['_field']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </optgroup>
                <?php }?>
            </select>
        <?php } else { ?>
            <input type="text" value="" />
        <?php }?>
    </td>

    <td class="center">
        <input type="hidden" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="N" />
        <input type="checkbox" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="Y" <?php if ($_smarty_tpl->tpl_vars['field']->value['avail']=="Y") {?>checked="checked"<?php }?> /></td>

    <td><?php echo $_smarty_tpl->getSubTemplate ("buttons/clone_delete.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('microformats'=>"cm-delete-row",'no_confirm'=>true), 0);?>
</td>
</tr>
<?php } ?>
<?php }?>

<?php echo smarty_function_math(array('equation'=>"x + 1",'x'=>$_smarty_tpl->tpl_vars['key']->value,'assign'=>"key"),$_smarty_tpl);?>


<tr id="box_add_datafeed_fields">
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][position]" value="" class="input-mini">
    </td>
    <td>
        <input type="text" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][export_field_name]" value="" size="60"></td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['export_fields']->value) {?>
            <select class="cm-export-fields " id="export_fields" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][field]">
                <optgroup label="<?php echo $_smarty_tpl->__("fields");?>
">
                <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['export_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
                </optgroup>

                <?php if ($_smarty_tpl->tpl_vars['feature_fields']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("features");?>
">
                    <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feature_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </optgroup>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['export_options']->value) {?>
                    <optgroup label="<?php echo $_smarty_tpl->__("options");?>
">
                    <?php  $_smarty_tpl->tpl_vars["params"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["params"]->_loop = false;
 $_smarty_tpl->tpl_vars["_field"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['export_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["params"]->key => $_smarty_tpl->tpl_vars["params"]->value) {
$_smarty_tpl->tpl_vars["params"]->_loop = true;
 $_smarty_tpl->tpl_vars["_field"]->value = $_smarty_tpl->tpl_vars["params"]->key;
?>
                        <option class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['option_class'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['field']==$_smarty_tpl->tpl_vars['_field']->value) {?>selected="selected"<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_field']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                    </optgroup>
                <?php }?>
            </select>
        <?php }?>
    </td>

    <td class="center">
        <input type="hidden" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="N" />
        <input type="checkbox" name="datafeed_data[fields][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
][avail]" value="Y" checked="checked" />
    </td>

    <td>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/multiple_buttons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('item_id'=>"add_datafeed_fields"), 0);?>

    </td>
</tr>
</tbody>
</table>
<!--field_list--></div><?php }} ?>
