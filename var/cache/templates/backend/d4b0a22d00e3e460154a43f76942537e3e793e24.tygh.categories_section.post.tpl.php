<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 04:11:04
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\product_variations\hooks\products\categories_section.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17993105715b1f1da8426941-90469493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4b0a22d00e3e460154a43f76942537e3e793e24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\categories_section.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '17993105715b1f1da8426941-90469493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'combinations' => 0,
    'variation_code' => 0,
    'combination' => 0,
    'parent_product_data' => 0,
    'request_category_id' => 0,
    'c_id' => 0,
    'multiple_categoires' => 0,
    'category_data' => 0,
    'path_id' => 0,
    'path_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f1da84d73a9_68244146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f1da84d73a9_68244146')) {function content_5b1f1da84d73a9_68244146($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('product_variations.variation','product_variations.variation_of_product','categories','tt_addons_product_variations_hooks_products_categories_section_post_categories'));
?>
<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_type']===constant("\Tygh\Addons\ProductVariations\Product\Manager::PRODUCT_TYPE_VARIATION")) {?>
    <div class="control-group">
        <label for="variation_code" class="control-label cm-required"><?php echo $_smarty_tpl->__("product_variations.variation");?>
</label>
        <div class="controls">
            <select id="variation_code" name="product_data[variation_code]">
                <?php  $_smarty_tpl->tpl_vars["combination"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["combination"]->_loop = false;
 $_smarty_tpl->tpl_vars["variation_code"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['combinations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["combination"]->key => $_smarty_tpl->tpl_vars["combination"]->value) {
$_smarty_tpl->tpl_vars["combination"]->_loop = true;
 $_smarty_tpl->tpl_vars["variation_code"]->value = $_smarty_tpl->tpl_vars["combination"]->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variation_code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['variation_code']->value==$_smarty_tpl->tpl_vars['product_data']->value['variation_code']) {?> selected<?php } elseif ($_smarty_tpl->tpl_vars['combination']->value['exists']) {?> disabled<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['combination']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php } ?>
            </select>
            <p>
                <?php echo $_smarty_tpl->__("product_variations.variation_of_product",array("[url]"=>fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['product_data']->value['parent_product_id'])),"[product]"=>$_smarty_tpl->tpl_vars['parent_product_data']->value['product']));?>

            </p>
        </div>
    </div>

    <?php $_smarty_tpl->tpl_vars['multiple_categoires'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['product_data']->value['category_ids'])>1, null, 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("variation_categories", null, null); ob_start(); ?>
        <?php  $_smarty_tpl->tpl_vars["c_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["c_id"]->_loop = false;
 $_from = (($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['category_ids'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['request_category_id']->value : $tmp); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["c_id"]->key => $_smarty_tpl->tpl_vars["c_id"]->value) {
$_smarty_tpl->tpl_vars["c_id"]->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars["category_data"] = new Smarty_variable(fn_get_category_data($_smarty_tpl->tpl_vars['c_id']->value,@constant('CART_LANGUAGE'),'',false,true,false,true), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['multiple_categoires']->value) {?>
                <p class="cm-js-item">
            <?php }?>
            <?php  $_smarty_tpl->tpl_vars["path_name"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["path_name"]->_loop = false;
 $_smarty_tpl->tpl_vars["path_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['category_data']->value['path_names']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["path_name"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["path_name"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["path_name"]->key => $_smarty_tpl->tpl_vars["path_name"]->value) {
$_smarty_tpl->tpl_vars["path_name"]->_loop = true;
 $_smarty_tpl->tpl_vars["path_id"]->value = $_smarty_tpl->tpl_vars["path_name"]->key;
 $_smarty_tpl->tpl_vars["path_name"]->iteration++;
 $_smarty_tpl->tpl_vars["path_name"]->last = $_smarty_tpl->tpl_vars["path_name"]->iteration === $_smarty_tpl->tpl_vars["path_name"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["path_names"]['last'] = $_smarty_tpl->tpl_vars["path_name"]->last;
?>
                <a target="_blank" class="<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['path_names']['last']) {?>ty-breadcrumbs__a<?php } else { ?>ty-breadcrumbs__current<?php }?>" href="<?php echo htmlspecialchars(fn_url("categories.update&category_id=".((string)$_smarty_tpl->tpl_vars['path_id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path_name']->value, ENT_QUOTES, 'UTF-8');?>
</a><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['path_names']['last']) {?> / <?php }?>
            <?php } ?>
            <?php if ($_smarty_tpl->tpl_vars['multiple_categoires']->value) {?>
                </p>
            <?php }?>
        <?php } ?>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("categories");
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__("tt_addons_product_variations_hooks_products_categories_section_post_categories")), 0);?>
</label>
        <div class="controls">
            <p>
                <?php echo Smarty::$_smarty_vars['capture']['variation_categories'];?>

            </p>
        </div>
    </div>
<?php }?>
<?php }} ?>
