<?php /* Smarty version Smarty-3.1.21, created on 2018-06-11 09:55:01
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\product_variations\hooks\options\options_content.override.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2651416075b1e1cc54f0de6-30829645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '718f9e58b6b25268dac0fc473b25e854f42da013' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\product_variations\\hooks\\options\\options_content.override.tpl',
      1 => 1528699880,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2651416075b1e1cc54f0de6-30829645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1e1cc55143f3_95531786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1e1cc55143f3_95531786')) {function content_5b1e1cc55143f3_95531786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (isset($_smarty_tpl->tpl_vars['block']->value['content']['items']['filling'])&&$_smarty_tpl->tpl_vars['block']->value['content']['items']['filling']=="product_variations.variations_filling") {?>
    <td class="ty-variations-content__product-elem ty-variations-content__product-elem-options">
        <bdi>
            <span class="ty-product-options">
                <span class="ty-product-options-content">
                    <?php echo Smarty::$_smarty_vars['capture']['options_content'];?>

                </span>
            </span>
        </bdi>
    </td>
<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_variations/hooks/options/options_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_variations/hooks/options/options_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (isset($_smarty_tpl->tpl_vars['block']->value['content']['items']['filling'])&&$_smarty_tpl->tpl_vars['block']->value['content']['items']['filling']=="product_variations.variations_filling") {?>
    <td class="ty-variations-content__product-elem ty-variations-content__product-elem-options">
        <bdi>
            <span class="ty-product-options">
                <span class="ty-product-options-content">
                    <?php echo Smarty::$_smarty_vars['capture']['options_content'];?>

                </span>
            </span>
        </bdi>
    </td>
<?php }
}?><?php }} ?>
