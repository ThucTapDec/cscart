<?php /* Smarty version Smarty-3.1.21, created on 2018-06-11 11:02:23
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\store_locator\views\store_locator\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4900960135b1e2c8f3c8147-29580928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3521fe3ce0ea77b59b7f69b56722c19a885815b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\store_locator\\views\\store_locator\\manage.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4900960135b1e2c8f3c8147-29580928',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locations' => 0,
    'loc' => 0,
    'allow_save' => 0,
    'no_hide_input' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1e2c8f47ea10_02683997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1e2c8f47ea10_02683997')) {function content_5b1e2c8f47ea10_02683997($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('store_locator','city','status','edit','delete','no_data','add_store_location','store_locator'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="store_locator_form" class="cm-hide-inputs">
<input type="hidden" name="fake" value="1" />

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>



<div class="items-container" id="store_locations">
    <?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
    <table class="table table-middle">

    <thead>
    <tr>
        <th width="1%">
            <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>"cm-no-hide-input"), 0);?>

        </th>
        <th width="40%" class="shift-left"><?php echo $_smarty_tpl->__("store_locator");?>
</th>
        <th width="20%" class="shift-left"><?php echo $_smarty_tpl->__("city");?>
</th>
        <th width="5%">&nbsp;</th>
        <th class="right" width="10%"><?php echo $_smarty_tpl->__("status");?>
</th>
    </tr>
    </thead>

        <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
?>
        <tbody>
        <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['loc']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
" valign="top" >

            <?php $_smarty_tpl->tpl_vars["allow_save"] = new Smarty_variable(fn_allow_save_object($_smarty_tpl->tpl_vars['loc']->value,"store_locations"), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable("cm-no-hide-input", null, 0);?>
                <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable('', null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["no_hide_input"] = new Smarty_variable('', null, 0);?>
                <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("text", null, 0);?>
            <?php }?>

            <td class="left <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="checkbox" name="store_locator_ids[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" /></td>

            <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                <a class="row-status" href="<?php echo htmlspecialchars(fn_url("store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['loc']->value), 0);?>

            </td>

            <td class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['no_hide_input']->value, ENT_QUOTES, 'UTF-8');?>
">
                <a class="row-status" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'UTF-8');?>
</a>
            </td>

            <td class="center nowrap">
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <?php if ($_smarty_tpl->tpl_vars['allow_save']->value) {?>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"store_locator.update?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id'])));?>
</li>
                        <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-confirm",'text'=>$_smarty_tpl->__("delete"),'href'=>"store_locator.delete?store_location_id=".((string)$_smarty_tpl->tpl_vars['loc']->value['store_location_id']),'method'=>"POST"));?>
</li>
                    <?php }?>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <div class="hidden-tools right">
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                </div>
            </td>
            <td class="right nowrap">
                <?php echo $_smarty_tpl->getSubTemplate ("common/select_popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['loc']->value['store_location_id'],'status'=>$_smarty_tpl->tpl_vars['loc']->value['status'],'hidden'=>'','object_id_name'=>"store_location_id",'table'=>"store_locations",'popup_additional_class'=>((string)$_smarty_tpl->tpl_vars['no_hide_input']->value),'display'=>$_smarty_tpl->tpl_vars['display']->value), 0);?>

            </td>

        </tr>
        </tbody>
        <?php } ?>
    </table>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
    <?php }?>
<!--store_locations--></div>


    <?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('save_current_page'=>true), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tool_href'=>"store_locator.add",'prefix'=>"top",'title'=>$_smarty_tpl->__("add_store_location"),'hide_tools'=>true), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("store_locator"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }} ?>
