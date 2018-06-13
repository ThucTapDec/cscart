<?php /* Smarty version Smarty-3.1.21, created on 2018-06-12 14:19:32
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\views\languages\components\install_languages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13558478305b1f7404427061-93878923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c7ba994d0dd11549395b688d963cd3dbb863055' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\languages\\components\\install_languages.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '13558478305b1f7404427061-93878923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'langs_meta' => 0,
    'runtime' => 0,
    'language' => 0,
    'countries' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b1f74044c3a47_48151168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b1f74044c3a47_48151168')) {function content_5b1f74044c3a47_48151168($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.count.php';
?><?php
fn_preload_lang_vars(array('language_code','name','country','install','no_items'));
?>
<div class="hidden" id="content_available_languages">
    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['langs_meta']->value)>0) {?>
        
        <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="languages_install_form" class="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>cm-hide-inputs<?php }?>">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />

            <table class="table table-middle">
            <thead>
                <tr class="cm-first-sibling">
                    <th><?php echo $_smarty_tpl->__("language_code");?>
</th>
                    <th><?php echo $_smarty_tpl->__("name");?>
</th>
                    <th><?php echo $_smarty_tpl->__("country");?>
</th>
                    <th class="right">&nbsp;</th>
                </tr>
            </thead>
            
            <tbody>
            <?php  $_smarty_tpl->tpl_vars["language"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["language"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs_meta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["language"]->key => $_smarty_tpl->tpl_vars["language"]->value) {
$_smarty_tpl->tpl_vars["language"]->_loop = true;
?>
                <tr class="cm-row-status-<?php echo htmlspecialchars(mb_strtolower($_smarty_tpl->tpl_vars['language']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['lang_code'], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td>
                        <i class="flag flag-<?php echo htmlspecialchars(strtolower($_smarty_tpl->tpl_vars['language']->value['country_code']), ENT_QUOTES, 'UTF-8');?>
"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['language']->value['country_code']], ENT_QUOTES, 'UTF-8');?>

                    </td>
                    <td class="right">
                        <a class="btn lowercase cm-post" href="<?php echo htmlspecialchars(fn_url("languages.install?pack=".((string)$_smarty_tpl->tpl_vars['language']->value['lang_code'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("install");?>
</a>
                    </td>

                </tr>
            <?php } ?>
            </tbody>
            </table>

        </form>
    <?php } else { ?>
        <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
    <?php }?>
<!--content_available_languages--></div><?php }} ?>
