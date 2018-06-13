<?php /* Smarty version Smarty-3.1.21, created on 2018-06-11 11:11:47
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\reve_chat\views\reve_chat\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13894651505b1e2ec322d9a3-24967327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a21409515220d5601003db70149531aaa8a7d02d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\reve_chat\\views\\reve_chat\\manage.tpl',
      1 => 1528704263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13894651505b1e2ec322d9a3-24967327',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reve_chat' => 0,
    'link_to' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1e2ec32c7173_97410837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1e2ec32c7173_97410837')) {function content_5b1e2ec32c7173_97410837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
fn_preload_lang_vars(array('already_have_a_reve_chat_account','yes_already_have_reve_chat_account','no_reve_chat_account','reve_chat_email','create_new_reve_chat_account','firstname','firstname','lastname','lastname','email','email','create_password','create_password','retype_password','retype_password','reve_chat_installed','reve_chat_start_chatting_with_your_customer','reve_chat_go_to_dashboard','reve_chat'));
?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>
        <div id="content">
            <div id="sh_dev_info">
                <h3 class="panel-title">Developer Info</h3>
                <table class="table table-striped">
                    <tr>
                        <th>Name</th>
                        <td>REVE Chat</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>product@revechat.com</td>
                    </tr>
                </table>
            </div>
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="revechat-admin-settings-form"
                  id="revechat-admin-settings-form"
                  class="form-edit form-horizontal cm-processed-form cm-check-changes">
                <?php if ($_smarty_tpl->tpl_vars['reve_chat']->value['aid']==0) {?>
                    <input type="hidden" name="dispatch" value="reve_chat.manage">
                    <input type="hidden" name="type" value="reve_chat_install">
                    <div class="revechat_choose_form">
                        <h4><?php echo $_smarty_tpl->__("already_have_a_reve_chat_account");?>
</h4>
                        <div class="radio">
                            <label>
                                <input type="radio" name="revechat_choose_form" id="has_revechat_account"
                                       checked="checked"><?php echo $_smarty_tpl->__("yes_already_have_reve_chat_account");?>

                            </label>
                        </div><!-- radio -->
                        <div class="radio">
                            <label>
                                <input type="radio" name="revechat_choose_form"
                                       id="new_revechat_account"><?php echo $_smarty_tpl->__("no_reve_chat_account");?>

                            </label>
                        </div><!--radio-->

                    </div>

                    <div id="edit-ajax-message" class="form-item form-type-item">
                        <p class="ajax_message"></p>
                    </div>

                    <div class="reve_chat_fields">
                        <div id="revechat_already_have">
                            <h4 style="margin-left: 20px;"><?php echo $_smarty_tpl->__('reve_chat_account_details');?>
</h4>
                            <div class="control-group">
                                <label class="control-label"
                                       for="edit-revechat-account-email"><?php echo $_smarty_tpl->__("reve_chat_email");?>
 :</label>
                                <div class="controls">
                                    <input type="email" value="" name="email"
                                           id="edit-revechat-account-email" placeholder="Enter your email address">
                                    <input type="hidden" name="revechat_aid" value="0">
                                </div>
                            </div>
                        </div> <!--reve_chat_already_have -->

                        <div id="revechat_new_account">
                            <h4><?php echo $_smarty_tpl->__("create_new_reve_chat_account");?>
</h4>
                            <div class="control-group">

                                <label for="edit-firstname" class="control-label"><?php echo $_smarty_tpl->__("firstname");?>
 <span
                                            class="required">*</span></label>

                                <div class="controls">
                                    <input type="text" id="edit-firstname" name="edit-firstname"
                                           placeholder="<?php echo $_smarty_tpl->__("firstname");?>
">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-lastname" class="control-label"><?php echo $_smarty_tpl->__("lastname");?>
 <span
                                            class="required">*</span></label>

                                <div class="controls">
                                    <input type="text" id="edit-lastname" name="edit-lastname"
                                           placeholder="<?php echo $_smarty_tpl->__("lastname");?>
">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-email" class="control-label"><?php echo $_smarty_tpl->__("email");?>
 <span
                                            class="required">*</span></label>

                                <div class="controls">
                                    <input type="text" id="edit-email" name="email"
                                           placeholder="<?php echo $_smarty_tpl->__("email");?>
">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-accountpassword" class="control-label"><?php echo $_smarty_tpl->__("create_password");?>
 <span
                                            class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" id="edit-accountpassword"
                                           name="edit-accountpassword" placeholder="<?php echo $_smarty_tpl->__("create_password");?>
">
                                </div>
                            </div>

                            <div class="control-group">

                                <label for="edit-retypepassword" class="control-label"><?php echo $_smarty_tpl->__("retype_password");?>
 <span
                                            class="required">*</span></label>
                                <div class="controls">
                                    <input type="password" id="edit-retypepassword"
                                           name="edit-retypepassword" placeholder="<?php echo $_smarty_tpl->__("retype_password");?>
">
                                </div>
                            </div>

                        </div>
                        <div class="control-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </div>
                <?php } else { ?>
                    <div style="border:1px solid #e5e5e5; box-shadow:0 0 3px rgba(0,0,0,.2); padding: 20px;">

                        <h3><?php echo $_smarty_tpl->__("reve_chat_installed");?>
</h3>
                        <p><?php echo $_smarty_tpl->__("reve_chat_start_chatting_with_your_customer");?>
</p>
                        <p><a href="https://dashboard.revechat.com" class="btn btn-warning" target="_blank"><?php echo $_smarty_tpl->__("reve_chat_go_to_dashboard");?>
</a></p>
                        <input type="hidden" name="dispatch" value="reve_chat.manage">
                        <input type="hidden" name="type" value="reve_chat_remove">

                        <p><small>Something went wrong? <input type="submit" value="Disconnect" style="background: transparent; border: 0; text-decoration: underline;text-transform: lowercase; font-size: 10px; cursor: pointer; box-shadow:none;"></small></p>
                    </div>
                <?php }?>
            </form>
            <!--content-->
        </div>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'active_tab'=>$_smarty_tpl->tpl_vars['link_to']->value), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php ob_start();
echo $_smarty_tpl->__("reve_chat");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1,'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php echo smarty_function_script(array('src'=>"js/addons/reve_chat/reve_chat_admin.js"),$_smarty_tpl);?>

<?php }} ?>
