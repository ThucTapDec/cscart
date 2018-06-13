<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 15:33:11
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\payments\components\cc_processors\amazon_checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11295137085b1f85470ae081-02450589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1a1c2a8a98bea913afe238054c8e84ac41a9e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\payments\\components\\cc_processors\\amazon_checkout.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '11295137085b1f85470ae081-02450589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'callback_url' => 0,
    'processor_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f854721ece5_15031368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f854721ece5_15031368')) {function content_5b1f854721ece5_15031368($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_amazon_callback_url','text_amazon_link_message','text_amazon_surcharge','merchant_id','lbl_amazon_aws_access_public_key','lbl_amazon_aws_access_secret_key','currency','currency_code_eur','currency_code_gbp','currency_code_usd','lbl_amazon_process_order_on_failure','no','yes','test_live_mode','live','test','lbl_amazon_button_style','lbl_amazon_background_color','lbl_amazon_color_white','lbl_amazon_color_light','lbl_amazon_color_dark','lbl_amazon_button_color','lbl_amazon_color_orange','lbl_amazon_color_tan','lbl_amazon_button_size','lbl_amazon_size_xlarge','lbl_amazon_size_large','lbl_amazon_size_medium'));
?>

<?php $_smarty_tpl->tpl_vars["callback_url"] = new Smarty_variable(fn_payment_url("https","amazon_checkout.php"), null, 0);?>
<p><?php echo $_smarty_tpl->__("text_amazon_callback_url",array("[callback_url]"=>$_smarty_tpl->tpl_vars['callback_url']->value));?>
</p>
<p><?php echo $_smarty_tpl->__("text_amazon_link_message");?>
</p>
<p><?php echo $_smarty_tpl->__("text_amazon_surcharge");?>
</p>
<hr>

<fieldset>
    <div class="control-group">
        <label class="control-label" for="merchant_id"><?php echo $_smarty_tpl->__("merchant_id");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][merchant_id]" id="merchant_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['merchant_id'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="aws_access_public_key"><?php echo $_smarty_tpl->__("lbl_amazon_aws_access_public_key");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][aws_access_public_key]" id="aws_access_public_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['aws_access_public_key'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="aws_secret_access_key"><?php echo $_smarty_tpl->__("lbl_amazon_aws_access_secret_key");?>
:</label>
        <div class="controls">
            <input type="text" name="payment_data[processor_params][aws_secret_access_key]" id="aws_secret_access_key" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['processor_params']->value['aws_secret_access_key'], ENT_QUOTES, 'UTF-8');?>
"  size="60">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="test"><?php echo $_smarty_tpl->__("currency");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][currency]" id="currency">
                <option value="EUR" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="EUR") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_eur");?>
</option>
                <option value="GBP" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="GBP") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_gbp");?>
</option>
                <option value="USD" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['currency']=="USD") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("currency_code_usd");?>
</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="test"><?php echo $_smarty_tpl->__("lbl_amazon_process_order_on_failure");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][process_on_failure]" id="test">
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['process_on_failure']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("no");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['process_on_failure']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("yes");?>
</option>
            </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="test"><?php echo $_smarty_tpl->__("test_live_mode");?>
:</label>
        <div class="controls">
            <select name="payment_data[processor_params][test]" id="test">
                <option value="N" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['test']=="N") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("live");?>
</option>
                <option value="Y" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['test']=="Y") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("test");?>
</option>
            </select>
        </div>
    </div>
</fieldset>



<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("lbl_amazon_button_style"),'target'=>"#amazon_button_style"), 0);?>

<div id="amazon_button_style" class="in collapse">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="background_color"><?php echo $_smarty_tpl->__("lbl_amazon_background_color");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][button_background]" id="background_color">
                    <option value="white" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_background']=="white") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_color_white");?>
</option>
                    <option value="light" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_background']=="light") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_color_light");?>
</option>
                    <option value="dark" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_background']=="dark") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_color_dark");?>
</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="button_color"><?php echo $_smarty_tpl->__("lbl_amazon_button_color");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][button_color]" id="button_color">
                    <option value="orange" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_color']=="orange") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_color_orange");?>
</option>
                    <option value="tan" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_color']=="tan") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_color_tan");?>
</option>
                </select>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="button_size"><?php echo $_smarty_tpl->__("lbl_amazon_button_size");?>
:</label>
            <div class="controls">
                <select name="payment_data[processor_params][button_size]" id="button_size">
                    <option value="x-large" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_size']=="x-large") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_size_xlarge");?>
</option>
                    <option value="large" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_size']=="large") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_size_large");?>
</option>
                    <option value="medium" <?php if ($_smarty_tpl->tpl_vars['processor_params']->value['button_size']=="medium") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("lbl_amazon_size_medium");?>
</option>
                </select>
            </div>
        </div>
    </fieldset>
</div>
<?php }} ?>
