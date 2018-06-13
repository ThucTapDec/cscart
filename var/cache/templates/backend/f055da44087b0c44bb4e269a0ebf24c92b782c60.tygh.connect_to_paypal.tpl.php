<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 15:32:43
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\paypal\common\connect_to_paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12026564585b1f852b7da3e4-20263721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f055da44087b0c44bb4e269a0ebf24c92b782c60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\paypal\\common\\connect_to_paypal.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '12026564585b1f852b7da3e4-20263721',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f852b834248_77389191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f852b834248_77389191')) {function content_5b1f852b834248_77389191($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('addons.paypal.connect_to_paypal','addons.paypal.use_buttons_to_signup','addons.paypal.configure_live','addons.paypal.configure_test'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.paypal.connect_to_paypal")), 0);?>

<div class="control-group">
    <label class="control-label"><?php echo $_smarty_tpl->__("addons.paypal.use_buttons_to_signup");?>
:</label>
    <div class="controls">
        <button
                type="submit"
                name="dispatch[payments.update.paypal_signup_live]"
                class="btn btn-connect-to-paypal cm-skip-validation"
                formtarget="PPFrame"
        ><?php echo $_smarty_tpl->__("addons.paypal.configure_live");?>
</button>

        <button
                type="submit"
                name="dispatch[payments.update.paypal_signup_test]"
                class="btn btn-connect-to-paypal cm-skip-validation"
                formtarget="PPFrame"
        ><?php echo $_smarty_tpl->__("addons.paypal.configure_test");?>
</button>
    </div>
</div><?php }} ?>
