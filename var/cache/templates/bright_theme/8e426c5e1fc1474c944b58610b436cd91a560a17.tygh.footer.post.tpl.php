<?php /* Smarty version Smarty-3.1.21, created on 2018-06-11 11:42:23
         compiled from "C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\reve_chat\hooks\index\footer.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15441266685b1e35efde7781-14388801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e426c5e1fc1474c944b58610b436cd91a560a17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\reve_chat\\hooks\\index\\footer.post.tpl',
      1 => 1528704263,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '15441266685b1e35efde7781-14388801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'reve_chat' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1e35efe69960_29082106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1e35efe69960_29082106')) {function content_5b1e35efe69960_29082106($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if (($_smarty_tpl->tpl_vars['reve_chat']->value['is_reve_chat_active'])) {?>
    <!-- Start of REVE Chat Script-->
    <?php echo '<script'; ?>
 type='text/javascript'>
	
    
 window.$_REVECHAT_API || (function(d, w) { var r = $_REVECHAT_API = function(c) {r._.push(c);}; w.__revechat_account='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reve_chat']->value['reve_chat_aid'], ENT_QUOTES, 'UTF-8');?>
';w.__revechat_version=2;
   r._= []; var rc = d.createElement('script'); rc.type = 'text/javascript'; rc.async = true; rc.setAttribute('charset', 'utf-8');
   rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?'+new Date().getTime();
   var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(rc, s);
 })(document, window);


    <?php echo '</script'; ?>
>
    <!-- End of REVE Chat Script -->

<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/reve_chat/hooks/index/footer.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/reve_chat/hooks/index/footer.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if (($_smarty_tpl->tpl_vars['reve_chat']->value['is_reve_chat_active'])) {?>
    <!-- Start of REVE Chat Script-->
    <?php echo '<script'; ?>
 type='text/javascript'>
	
    
 window.$_REVECHAT_API || (function(d, w) { var r = $_REVECHAT_API = function(c) {r._.push(c);}; w.__revechat_account='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reve_chat']->value['reve_chat_aid'], ENT_QUOTES, 'UTF-8');?>
';w.__revechat_version=2;
   r._= []; var rc = d.createElement('script'); rc.type = 'text/javascript'; rc.async = true; rc.setAttribute('charset', 'utf-8');
   rc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.revechat.com/widget/scripts/new-livechat.js?'+new Date().getTime();
   var s = d.getElementsByTagName('script')[0]; s.parentNode.insertBefore(rc, s);
 })(document, window);


    <?php echo '</script'; ?>
>
    <!-- End of REVE Chat Script -->

<?php }
}?><?php }} ?>
