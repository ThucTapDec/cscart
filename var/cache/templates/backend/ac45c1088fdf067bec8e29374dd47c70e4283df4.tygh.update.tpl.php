<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 11:30:59
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\usergroups\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20787490985b1f4c83c9a611-65764695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac45c1088fdf067bec8e29374dd47c70e4283df4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\usergroups\\update.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '20787490985b1f4c83c9a611-65764695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usergroup' => 0,
    'id' => 0,
    'privileges' => 0,
    'privilege' => 0,
    'splitted_privilege' => 0,
    'sprivilege' => 0,
    'p' => 0,
    'pr_id' => 0,
    'usergroup_privileges' => 0,
    'cell_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f4c83ceec11_35355240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f4c83ceec11_35355240')) {function content_5b1f4c83ceec11_35355240($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
if (!is_callable('smarty_function_split')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.split.php';
if (!is_callable('smarty_function_math')) include 'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php';
?><?php
fn_preload_lang_vars(array('usergroup','type','customer','customer','administrator','privilege'));
?>
<?php if ($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['usergroup']->value['usergroup_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data" name="update_usergroups_form_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="form-horizontal form-edit ">
<input type="hidden" name="usergroup_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
    <div id="content_general_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:general_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:general_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <div class="control-group">
            <label class="control-label cm-required" for="elm_usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("usergroup");?>
</label>
            <div class="controls">
                <input type="text" id="elm_usergroup_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="usergroup_data[usergroup]" size="35" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
" class="input-medium" />
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="elm_usergroup_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("type");?>
</label>
            <div class="controls">
                <?php if (@constant('RESTRICTED_ADMIN')==1) {?>
                <input type="hidden" name="usergroup_data[type]" value="C" />
                <?php echo $_smarty_tpl->__("customer");?>

                <?php } else { ?>
                <select id="elm_usergroup_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="usergroup_data[type]">
                    <option value="C"<?php if ($_smarty_tpl->tpl_vars['usergroup']->value['type']=="C") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("customer");?>
</option>
                    <option value="A"<?php if ($_smarty_tpl->tpl_vars['usergroup']->value['type']=="A") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("administrator");?>
</option>
                </select>
                <?php }?>
            </div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"usergroup_data[status]",'id'=>"usergroup_data_".((string)$_smarty_tpl->tpl_vars['id']->value),'obj'=>$_smarty_tpl->tpl_vars['usergroup']->value,'hidden'=>true), 0);?>

    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:general_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['usergroup']->value['type']=="A") {?>
        <div id="content_privilege_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="usergroup_data[privileges]" value="" />
            <table width="100%" class="table table-middle table-group">
            <thead>
            <tr>
                <th width="1%" class="table-group-checkbox">
                    <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</th>
                <th width="100%" colspan="5"><?php echo $_smarty_tpl->__("privilege");?>
</th>
            </tr>
            </thead>
            <?php  $_smarty_tpl->tpl_vars['privilege'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['privilege']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['privileges']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['privilege']->key => $_smarty_tpl->tpl_vars['privilege']->value) {
$_smarty_tpl->tpl_vars['privilege']->_loop = true;
?>
            <tr class="table-group-header">
                <td colspan="6"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['privilege']->value[0]['section'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>

            <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['privilege']->value,'size'=>3,'assign'=>"splitted_privilege"),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"floor(100/x)",'x'=>3,'assign'=>"cell_width"),$_smarty_tpl);?>

            <?php  $_smarty_tpl->tpl_vars['sprivilege'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sprivilege']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_privilege']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sprivilege']->key => $_smarty_tpl->tpl_vars['sprivilege']->value) {
$_smarty_tpl->tpl_vars['sprivilege']->_loop = true;
?>
            <tr class="object-group-elements">
                <?php  $_smarty_tpl->tpl_vars["p"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sprivilege']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p"]->key => $_smarty_tpl->tpl_vars["p"]->value) {
$_smarty_tpl->tpl_vars["p"]->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['p']->value&&$_smarty_tpl->tpl_vars['p']->value['description']) {?>
                        <?php $_smarty_tpl->tpl_vars["pr_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value['privilege'], null, 0);?>
                        <td width="1%" class="table-group-checkbox">
                            <input type="checkbox" name="usergroup_data[privileges][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['usergroup_privileges']->value[$_smarty_tpl->tpl_vars['pr_id']->value]) {?>checked="checked"<?php }?> class="checkbox cm-item" id="set_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
" /></td>
                        <td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cell_width']->value, ENT_QUOTES, 'UTF-8');?>
%"><label for="set_privileges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pr_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label></td>
                    <?php } else { ?>
                        <td colspan="2">&nbsp;</td>
                    <?php }?>
                <?php } ?>
            </tr>
            <?php } ?>
            <?php } ?>
            </table>
        </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"usergroups:tabs_content")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"usergroups:tabs_content"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();
$_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"usergroups:tabs_content"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox']), 0);?>


<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[usergroups.update]",'cancel_action'=>"close",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>

</form>
<!--content_group<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
