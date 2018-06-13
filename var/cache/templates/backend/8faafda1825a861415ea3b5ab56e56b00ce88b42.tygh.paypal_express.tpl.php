<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 15:32:43
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\paypal\views\payments\components\cc_processors\paypal_express.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7960073215b1f852b6466d3-76142525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8faafda1825a861415ea3b5ab56e56b00ce88b42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\paypal\\views\\payments\\components\\cc_processors\\paypal_express.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7960073215b1f852b6466d3-76142525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'payment_id' => 0,
    'suffix' => 0,
    'paypal_currencies' => 0,
    'currency' => 0,
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f852b771545_59525163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f852b771545_59525163')) {function content_5b1f852b771545_59525163($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.inline_script.php';
?><?php
fn_preload_lang_vars(array('currency','order_prefix','addons.paypal.technical_details','paypal_use_in_context_checkout','ttc_paypal_use_in_context_checkout','merchant_id','paypal_express_notice','username','password','paypal_authentication_method','certificate','signature','certificate_filename','signature','send_shipping_address','test_live_mode','test','live'));
?>
<?php $_smarty_tpl->tpl_vars["paypal_currencies"] = new Smarty_variable(fn_paypal_get_currencies("express"), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/paypal/common/connect_to_paypal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php $_smarty_tpl->tpl_vars['suffix'] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['payment_id']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<hr>

<div class="control-group">
    <label class="control-label" for="currency<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("currency");?>
:</label>
    <div class="controls">
        <select name="payment_data[processor_params][currency]" id="currency<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paypal_currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['code'], ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['currency']->value['active']) {?> disabled="disabled"<?php }
if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']==$_smarty_tpl->tpl_vars['currency']->value['code']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="order_prefix<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("order_prefix");?>
:</label>
    <div class="controls">
        <input type="text" name="payment_data[processor_params][order_prefix]" id="order_prefix<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" size="36" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['order_prefix'], ENT_QUOTES, 'UTF-8');?>
" >
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("addons.paypal.technical_details"),'meta'=>"collapsed",'target'=>"#section_technical_details".((string)$_smarty_tpl->tpl_vars['suffix']->value)), 0);?>


<div id="section_technical_details<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="collapse out">

    <div class="control-group">
        <label class="control-label" for="elm_in_context<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("paypal_use_in_context_checkout");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("ttc_paypal_use_in_context_checkout")), 0);?>
:</label>
        <div class="controls">
            <input type="hidden" name="payment_data[processor_params][in_context]" value="N" />
            <input type="checkbox" name="payment_data[processor_params][in_context]" <?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['in_context'])===null||$tmp==='' ? "Y" : $tmp)=="Y") {?>checked="checked"<?php }?> id="elm_in_context<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" />
        </div>
    </div>

    <div class="control-group">
        <label class="control-label<?php if ((($tmp = @$_smarty_tpl->tpl_vars['processor_params']->value['in_context'])===null||$tmp==='' ? "Y" : $tmp)=="Y") {?> cm-required<?php }?>" for="elm_merchant_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" id="lbl_merchant_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("merchant_id");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][merchant_id]" id="elm_merchant_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" size="24" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_id'], ENT_QUOTES, 'UTF-8');?>
" >
            <div class="muted" id="elm_merchant_id_notice<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("paypal_express_notice");?>
</div>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="username<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("username");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][username]" id="username<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" size="24" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['username'], ENT_QUOTES, 'UTF-8');?>
" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="password<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("password");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][password]" id="password<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" size="24" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['password'], ENT_QUOTES, 'UTF-8');?>
" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("paypal_authentication_method");?>
:</label>
        <div class="controls">
            <label class="radio inline" for="elm_payment_auth_method_cert<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input id="elm_payment_auth_method_cert<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" type="radio" value="cert" name="payment_data[processor_params][authentication_method]" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['authentication_method']=="cert"||!$_smarty_tpl->tpl_vars['processor_params']->value['authentication_method']) {?> checked="checked"<?php }?>>
                <?php echo $_smarty_tpl->__("certificate");?>

            </label>

            <label class="radio inline" for="elm_payment_auth_method_signature<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input id="elm_payment_auth_method_signature<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" type="radio" value="signature" name="payment_data[processor_params][authentication_method]" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['authentication_method']=="signature") {?> checked="checked"<?php }?>>
                <?php echo $_smarty_tpl->__("signature");?>

            </label>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="certificate<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("certificate_filename");?>
:</label>
        <div class="controls" id="certificate_file<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename']) {?>
                <div class="text-type-value pull-left">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename'], ENT_QUOTES, 'UTF-8');?>

                    <a href="<?php echo htmlspecialchars(fn_url(('payments.delete_certificate?payment_id=').($_smarty_tpl->tpl_vars['payment_id']->value)), ENT_QUOTES, 'UTF-8');?>
" class="cm-ajax cm-post" data-ca-target-id="certificate_file<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                        <i class="icon-remove-sign cm-tooltip hand" title="<?php echo $_smarty_tpl->__('remove');?>
"></i>
                    </a>
                </div>
            <?php }?>

            <div <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['certificate_filename']) {?>class="clear"<?php }?>><?php echo $_smarty_tpl->getSubTemplate ("common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('var_name'=>"payment_certificate[]"), 0);?>
</div>
        <!--certificate_file<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    </div>

    <div class="control-group">
        <label class="control-label" for="signature<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("signature");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][signature]" id="signature<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['signature'], ENT_QUOTES, 'UTF-8');?>
" >
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="send_adress<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("send_shipping_address");?>
:</label>
        <div class="controls">
            <input type="checkbox" name="payment_data[processor_params][send_adress]" <?php if (!$_smarty_tpl->tpl_vars['payment_id']->value||$_smarty_tpl->tpl_vars['processor_params']->value['send_adress']=="Y") {?>checked="checked"<?php }?> id="send_adress<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y">
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="mode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][mode]" id="mode<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
                <option value="test" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="test") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
                <option value="live" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['mode']=="live") {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
            </select>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {
        $(document).on('change', '#elm_in_context<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
', function() {
            $('#lbl_merchant_id<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
').toggleClass('cm-required', $(this).is(':checked'));
        });
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
