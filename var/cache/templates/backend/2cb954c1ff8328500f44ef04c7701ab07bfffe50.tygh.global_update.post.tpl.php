<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 05:41:46
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\reward_points\hooks\products\global_update.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7247337005b1f32ea73fcc7-65110743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cb954c1ff8328500f44ef04c7701ab07bfffe50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\reward_points\\hooks\\products\\global_update.post.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '7247337005b1f32ea73fcc7-65110743',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f32ea74ba80_68608345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f32ea74ba80_68608345')) {function content_5b1f32ea74ba80_68608345($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('price_in_points','points_lower'));
?>
<div class="control-group">
    <label for="gu_points" class="control-label"><?php echo $_smarty_tpl->__("price_in_points");?>
:</label>
    <div class="controls">
    	<input type="text" id="gu_points" name="update_data[price_in_points]" size="6" value="">
    	<select name="update_data[price_in_points_type]">
    	    <option value="A" ><?php echo $_smarty_tpl->__("points_lower");?>
</option>
    	    <option value="P" >%</option>
    	</select>
    </div>
</div><?php }} ?>
