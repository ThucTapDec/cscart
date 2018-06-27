<?php /* Smarty version Smarty-3.1.21, created on 2018-06-15 13:28:18
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\store_locator\views\store_locator\components\maps\google.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4112406465b235c8256eba8-89621724%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9373f8f2429be57caed287542f7f1093fb0fc4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\store_locator\\views\\store_locator\\components\\maps\\google.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '4112406465b235c8256eba8-89621724',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map_provider_api' => 0,
    'sl_settings' => 0,
    'map_container' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b235c8259ab97_97303389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b235c8259ab97_97303389')) {function content_5b235c8259ab97_97303389($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.inline_script.php';
if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php if (!Smarty::$_smarty_vars['capture'][$_smarty_tpl->tpl_vars['map_provider_api']->value]) {?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 src="//www.google.com/jsapi"><?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 src="//maps.googleapis.com/maps/api/js?v=3&amp;language=<?php echo htmlspecialchars(fn_store_locator_google_langs(@constant('CART_LANGUAGE')), ENT_QUOTES, 'UTF-8');?>
&amp;<?php if ($_smarty_tpl->tpl_vars['sl_settings']->value['google_key']) {?>key=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sl_settings']->value['google_key'], ENT_QUOTES, 'UTF-8');
}?>" type="text/javascript"><?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo smarty_function_script(array('src'=>"js/addons/store_locator/google.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array(((string)$_smarty_tpl->tpl_vars['map_provider_api']->value), null, null); ob_start(); ?>Y<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    
    (function(_, $) {

        options = {
            
            'latitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LATITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'longitude': <?php echo htmlspecialchars(doubleval(@constant('STORE_LOCATOR_DEFAULT_LONGITUDE')), ENT_QUOTES, 'UTF-8');?>
,
            'map_container': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
'
            
        };

        $.ceMap('init', options);
    }(Tygh, Tygh.$));
    
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
