<?php /* Smarty version Smarty-3.1.21, created on 2018-06-14 13:48:45
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\common\template_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7822668945b220fcdd2bd87-71667239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c90068c84d6e95fe957b672839be1c919017c3ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\template_editor.tpl',
      1 => 1525668008,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '7822668945b220fcdd2bd87-71667239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b220fce118325_71098448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b220fce118325_71098448')) {function content_5b220fce118325_71098448($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\function.script.php';
?><?php
fn_preload_lang_vars(array('file_editor','templates_tree','save','restore_from_repository','text_page_changed','text_restore_question','text_template_changed'));
?>
<div id="template_list_menu" class="ty-template-list-menu"><div></div><ul class="ty-float-left"><li></li></ul></div>

<div id="template_editor_content" title="<?php echo $_smarty_tpl->__("file_editor");?>
" class="hidden">

    <div class="ty-templates clearfix">
            <div class="ty-templates__tree">
                <h4 class="ty-templates__tree-title"><?php echo $_smarty_tpl->__("templates_tree");?>
</h4>
                <div class="ty-templates__tree-wrapper">
                    <ul id="template_list" class="ty-templates__list">
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="ty-templates__content">
                <div id="template_text" class="ty-templates__text"></div>
            </div>
    </div>

    <div class="ty-templates__buttons buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('is_js'=>true,'but_close_text'=>$_smarty_tpl->__("save"),'but_close_onclick'=>"fn_save_template();",'but_onclick'=>"fn_restore_template();",'but_text'=>$_smarty_tpl->__("restore_from_repository")), 0);?>

    </div>

</div>

<?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/design_mode.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
var current_url = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
';
Tygh.tr('text_page_changed', '<?php echo strtr($_smarty_tpl->__("text_page_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
Tygh.tr('text_restore_question', '<?php echo strtr($_smarty_tpl->__("text_restore_question"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
Tygh.tr('text_template_changed', '<?php echo strtr($_smarty_tpl->__("text_template_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');
<?php echo '</script'; ?>
>
<?php }} ?>
