<?php /* Smarty version Smarty-3.1.21, created on 2018-06-13 11:21:47
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\pickers\users\js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12651407515b209bdbe98f29-60092731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b443941fae0754088e8bdac1412c712670c9001a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\pickers\\users\\js.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12651407515b209bdbe98f29-60092731',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_mode' => 0,
    'clone' => 0,
    'holder' => 0,
    'user_id' => 0,
    'user_name' => 0,
    'email' => 0,
    'view_only' => 0,
    'single_line' => 0,
    'first_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b209bdbf0a445_61610694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b209bdbf0a445_61610694')) {function content_5b209bdbf0a445_61610694($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('edit','remove','remove'));
?>
<?php if ($_smarty_tpl->tpl_vars['view_mode']->value=="list"||$_smarty_tpl->tpl_vars['view_mode']->value=="mixed") {?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
        <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');?>
 (<a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="user-email"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>)</td>
        <td class="nowrap">
            <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("edit"),'href'=>"profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)));?>
</li>
                    <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['user_id']->value)."', 'u'); return false;"));?>
</li>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <div class="hidden-tools">
                    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

                </div>
            <?php }?>
        </td>
    </tr>
<?php } else { ?>
    <<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?> <?php if (!$_smarty_tpl->tpl_vars['clone']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['holder']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php }?>class="cm-js-item<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> cm-clone hidden<?php }?>">
    <?php if (!$_smarty_tpl->tpl_vars['first_item']->value&&$_smarty_tpl->tpl_vars['single_line']->value) {?>
        <span class="cm-comma<?php if ($_smarty_tpl->tpl_vars['clone']->value) {?> hidden<?php }?>">,&nbsp;&nbsp;</span>
    <?php }?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8');?>
(<a href="<?php echo htmlspecialchars(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['user_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="underlined user-email"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8');?>
</span></a>)
    <?php if (!$_smarty_tpl->tpl_vars['view_only']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'text'=>$_smarty_tpl->__("remove"),'onclick'=>"Tygh."."$".".cePicker('delete_js_item', '".((string)$_smarty_tpl->tpl_vars['holder']->value)."', '".((string)$_smarty_tpl->tpl_vars['user_id']->value)."', 'u'); return false;"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    </<?php if ($_smarty_tpl->tpl_vars['single_line']->value) {?>span<?php } else { ?>p<?php }?>>
<?php }?><?php }} ?>
