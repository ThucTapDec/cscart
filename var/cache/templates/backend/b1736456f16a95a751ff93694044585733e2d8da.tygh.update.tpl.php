<?php /* Smarty version Smarty-3.1.21, created on 2018-06-15 13:27:50
         compiled from "C:\xampp\htdocs\cscart\design\backend\templates\addons\data_feeds\views\data_feeds\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9257958285b235c66e532f8-47674354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1736456f16a95a751ff93694044585733e2d8da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\data_feeds\\views\\data_feeds\\update.tpl',
      1 => 1525668008,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '9257958285b235c66e532f8-47674354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datafeed_data' => 0,
    'id' => 0,
    'config' => 0,
    'url_data_feeds' => 0,
    'layouts' => 0,
    'l' => 0,
    'layout_id' => 0,
    'date' => 0,
    'pattern' => 0,
    'o' => 0,
    'p_id' => 0,
    'k' => 0,
    'k_default_value' => 0,
    'datafeed_langs' => 0,
    'k_lang' => 0,
    'default_lang' => 0,
    'lang' => 0,
    'vk' => 0,
    'vi' => 0,
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b235c673c2766_45802586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b235c673c2766_45802586')) {function content_5b235c673c2766_45802586($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\modifier.date_format.php';
if (!is_callable('smarty_block_hook')) include 'C:/xampp/htdocs/cscart/app/functions/smarty_plugins\\block.hook.php';
?><?php
fn_preload_lang_vars(array('general_settings','layouts','no_items','datafeed_name','filename','enclosure','csv_delimiter','exclude_disabled_products','data_feeds.exclude_shared_products','export_to_server','save_directory','text_file_editor_notice','export_to_ftp','ftp_url','ftp_url_hint','ftp_user','ftp_pass','cron_export','export_by_cron_to','server','ftp','export_cron_hint','datafeed.description','categories_in','any_category','products_in','any_product','local_export','export_to_server','upload_to_ftp','add_new_datafeed','update_datafeed'));
?>
<?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_id']) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tabsbox", null, null); ob_start(); ?>

<?php $_smarty_tpl->tpl_vars["date"] = new Smarty_variable(smarty_modifier_date_format(@constant('TIME'),"%m%d%Y"), null, 0);?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="feed_update_form" class="form-edit form-horizontal conditions-tree" enctype="multipart/form-data" data-ca-target-id="field_list,pattern_options"> 
<input type="hidden" name="fake" value="1" />
<input type="hidden" name="selected_section" id="selected_section" value="<?php echo htmlspecialchars($_REQUEST['selected_section'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="datafeed_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->tpl_vars["url_data_feeds"] = new Smarty_variable(fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"datafeed_data","layout_id"), null, 0);?>
<input type="hidden" name="url_data_feeds" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_data_feeds']->value, ENT_QUOTES, 'UTF-8');?>
" />



<div id="content_detailed"> 
<fieldset>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("general_settings"),'target'=>"#data_feed_general_settings"), 0);?>


<div id="data_feed_general_settings" class="in collapse">
    <div class="control-group">
        <label class="control-label"><?php echo $_smarty_tpl->__("layouts");?>
:</label>
        <div class="controls">
            <?php if ($_smarty_tpl->tpl_vars['layouts']->value) {?>
                <select name="datafeed_data[layout_id]" id="s_layout_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-submit cm-ajax" data-ca-dispatch="dispatch[data_feeds.set_layout]">
                    <?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layouts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['layout_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['l']->value['layout_id']==$_smarty_tpl->tpl_vars['layout_id']->value) {
$_smarty_tpl->tpl_vars["active_layout"] = new Smarty_variable($_smarty_tpl->tpl_vars['l']->value, null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                </select>

            <?php } else { ?>
                <p class="lowercase"><?php echo $_smarty_tpl->__("no_items");?>
</p>
            <?php }?>
        </div>
    </div>

    <div class="control-group">
        <label for="elm_datafeed_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("datafeed_name");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[datafeed_name]" id="elm_datafeed_name" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large main-input" />
        </div>
    </div>

    <?php if (fn_allowed_for("ULTIMATE")) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"datafeed_data[company_id]",'id'=>"datafeed_data_company_id",'selected'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['company_id'],'zero_company_id_name_lang_var'=>'all_vendors'), 0);?>

    <?php }?>

    <div class="control-group">
        <label for="elm_datafeed_file_name" class="control-label cm-required"><?php echo $_smarty_tpl->__("filename");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[file_name]" id="elm_datafeed_file_name" size="55" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['file_name'])===null||$tmp==='' ? "datafeed_".((string)$_smarty_tpl->tpl_vars['date']->value).".csv" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        </div>
    </div>

    <div class="control-group">
        <label for="elm_datafeed_enclosure" class="control-label"><?php echo $_smarty_tpl->__("enclosure");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[enclosure]" id="elm_datafeed_enclosure" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['enclosure'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
        </div>
    </div>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"data_feeds:pattern_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"data_feeds:pattern_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['pattern']->value&&$_smarty_tpl->tpl_vars['pattern']->value['options']) {?>
    <div id="pattern_options">
    <?php  $_smarty_tpl->tpl_vars['o'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['o']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pattern']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['o']->key => $_smarty_tpl->tpl_vars['o']->value) {
$_smarty_tpl->tpl_vars['o']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['o']->key;
?>
    <?php if (!$_smarty_tpl->tpl_vars['o']->value['import_only']) {?>
    <div class="control-group">
        <label for="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label">
            <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['title']);
if ($_smarty_tpl->tpl_vars['o']->value['description']) {
echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->__($_smarty_tpl->tpl_vars['o']->value['description'])), 0);
}?>:
        </label>
        <div class="controls"><?php if ($_smarty_tpl->tpl_vars['o']->value['type']=="checkbox") {?>
                <input type="hidden" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" type="checkbox" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="Y" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value]=="Y") {?>checked="checked"<?php }?> />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="input") {?>
                <input id="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" type="text" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="languages") {?>
                <div class="checkbox-list">
                    <?php $_smarty_tpl->tpl_vars["k_default_value"] = new Smarty_variable(key($_smarty_tpl->tpl_vars['o']->value['default_value']), null, 0);?>
                    <?php $_smarty_tpl->tpl_vars["default_lang"] = new Smarty_variable($_smarty_tpl->tpl_vars['o']->value['default_value'][$_smarty_tpl->tpl_vars['k_default_value']->value], null, 0);?>
                    <?php if (is_array($_smarty_tpl->tpl_vars['datafeed_data']->value['export_options']['lang_code'])) {?>
                        <?php $_smarty_tpl->tpl_vars["k_default_value"] = new Smarty_variable(key($_smarty_tpl->tpl_vars['datafeed_data']->value['export_options']['lang_code']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars["default_lang"] = new Smarty_variable($_smarty_tpl->tpl_vars['datafeed_data']->value['export_options']['lang_code'][$_smarty_tpl->tpl_vars['k_default_value']->value], null, 0);?>
                    <?php }?>

                    <?php  $_smarty_tpl->tpl_vars['lang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang']->_loop = false;
 $_smarty_tpl->tpl_vars['k_lang'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datafeed_langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->key => $_smarty_tpl->tpl_vars['lang']->value) {
$_smarty_tpl->tpl_vars['lang']->_loop = true;
 $_smarty_tpl->tpl_vars['k_lang']->value = $_smarty_tpl->tpl_vars['lang']->key;
?>
                        <lable class="radio inline-block" for="elm_lang">
                            <input id="elm_lang" type="radio" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k_lang']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['default_lang']->value==$_smarty_tpl->tpl_vars['k_lang']->value) {?>checked="checked"<?php }?> name="datafeed_data[export_options][lang_code][]" />
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8');?>

                        </lable>
                    <?php } ?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['o']->value['type']=="select") {?>
                <select id="elm_datafeed_element_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" name="datafeed_data[export_options][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
]">
                <?php if ($_smarty_tpl->tpl_vars['o']->value['variants_function']) {?>
                    <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_smarty_tpl->tpl_vars['vk'] = new Smarty_Variable;
 $_from = call_user_func($_smarty_tpl->tpl_vars['o']->value['variants_function']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['vk']->value = $_smarty_tpl->tpl_vars['vi']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value==(($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp)) {?>checked="checked"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vi']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php } ?>
                <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['vi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vi']->_loop = false;
 $_smarty_tpl->tpl_vars['vk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['o']->value['variants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vi']->key => $_smarty_tpl->tpl_vars['vi']->value) {
$_smarty_tpl->tpl_vars['vi']->_loop = true;
 $_smarty_tpl->tpl_vars['vk']->value = $_smarty_tpl->tpl_vars['vi']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vk']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['vk']->value==(($tmp = @$_smarty_tpl->tpl_vars['datafeed_data']->value['export_options'][$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['o']->value['default_value'] : $tmp)) {?>checked="checked"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['vi']->value);?>
</option>
                    <?php } ?>
                <?php }?>
                </select>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['o']->value['notes']) {?>
                <p class="muted"><?php echo $_smarty_tpl->tpl_vars['o']->value['notes'];?>
</p>
            <?php }?>
        </div>
    </div>
    <?php }?>
    <?php } ?>
    <!--pattern_options--></div>
    <?php }?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"data_feeds:pattern_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div class="control-group">
        <label for="elm_datafeed_csv_delimiter" class="control-label"><?php echo $_smarty_tpl->__("csv_delimiter");?>
:</label>
        <div class="controls"><?php echo $_smarty_tpl->getSubTemplate ("views/exim/components/csv_delimiters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('name'=>"datafeed_data[csv_delimiter]",'value'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['csv_delimiter'],'id'=>"elm_datafeed_csv_delimiter"), 0);?>
</div>
    </div>

    <div class="control-group">
        <label for="elm_datafeed_exclude_disabled_products" class="control-label"><?php echo $_smarty_tpl->__("exclude_disabled_products");?>
:</label>
        <div class="controls"><input type="hidden" name="datafeed_data[exclude_disabled_products]" value="N" />
            <input type="checkbox" name="datafeed_data[exclude_disabled_products]" id="elm_datafeed_exclude_disabled_products" value="Y" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['exclude_disabled_products']=="Y") {?>checked="checked"<?php }?> /></div>
    </div>
    <?php if (fn_allowed_for("ULTIMATE")&&!$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']&&$_smarty_tpl->tpl_vars['datafeed_data']->value['company_id']) {?>
    <div class="control-group">
        <label for="elm_datafeed_exclude_shared_products" class="control-label"><?php echo $_smarty_tpl->__("data_feeds.exclude_shared_products");?>
:</label>
        <div class="controls"><input type="hidden" name="datafeed_data[exclude_shared_products]" value="N" />
            <input type="checkbox" name="datafeed_data[exclude_shared_products]" id="elm_datafeed_exclude_shared_products" value="Y" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['exclude_shared_products']=="Y") {?>checked="checked"<?php }?> />
        </div>
    </div>
    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/select_status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"datafeed_data[status]",'id'=>"elm_datafeed_status",'obj'=>$_smarty_tpl->tpl_vars['datafeed_data']->value,'hidden'=>false), 0);?>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("export_to_server"),'target'=>"#data_feed_export_settings"), 0);?>


<div id="data_feed_export_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_save_directory" id="label_save_directory" class="control-label"><?php echo $_smarty_tpl->__("save_directory");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[save_dir]" id="elm_datafeed_save_directory" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['save_dir'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <p class="muted">
            <?php echo $_smarty_tpl->__("text_file_editor_notice",array("[href]"=>fn_url("file_editor.manage?path=/")));?>

            </p>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("export_to_ftp"),'target'=>"#data_feed_ftp_settings"), 0);?>


<div id="data_feed_ftp_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_ftp_url" id="label_ftp_url" class="control-label"><?php echo $_smarty_tpl->__("ftp_url");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[ftp_url]" id="elm_datafeed_ftp_url" size="55" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['ftp_url'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-large" />
            <p><small><?php echo $_smarty_tpl->__("ftp_url_hint");?>
</small></p>
        </div>
    </div>

    <div class="control-group">
        <label for="elm_datafeed_ftp_user" id="label_ftp_user" class="control-label"><?php echo $_smarty_tpl->__("ftp_user");?>
:</label>
        <div class="controls">
            <input type="text" name="datafeed_data[ftp_user]" id="elm_datafeed_ftp_user" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['ftp_user'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-medium" />
        </div>
    </div>

    <div class="control-group">
        <label for="elm_datafeed_ftp_pass" class="control-label"><?php echo $_smarty_tpl->__("ftp_pass");?>
:</label>
        <div class="controls">
            <input type="password" name="datafeed_data[ftp_pass]" id="elm_datafeed_ftp_pass" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['datafeed_data']->value['ftp_pass'], ENT_QUOTES, 'UTF-8');?>
" class="input-text-medium" />
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"data_feeds:cron_settings")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"data_feeds:cron_settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("cron_export"),'target'=>"#data_feed_cron_settings"), 0);?>


<div id="data_feed_cron_settings" class="in collapse">
    <div class="control-group">
        <label for="elm_datafeed_export_file_location" class="control-label"><?php echo $_smarty_tpl->__("export_by_cron_to");?>
:</label>
        <div class="controls">
            <select name="datafeed_data[export_location]" id="elm_datafeed_export_file_location">
                <option value=""> -- </option>
                <option value="S" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_location']=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
                <option value="F" <?php if ($_smarty_tpl->tpl_vars['datafeed_data']->value['export_location']=="F") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("ftp");?>
</option>
            </select>

            <p><small><?php echo $_smarty_tpl->__("export_cron_hint");?>
:<br>php /path/to/cart/<?php echo htmlspecialchars(fn_url('',"A","rel"), ENT_QUOTES, 'UTF-8');?>
 --dispatch=exim.cron_export --cron_password=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addons']->value['data_feeds']['cron_password'], ENT_QUOTES, 'UTF-8');?>
</small>
            </p>
        </div>
    </div>
</div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"data_feeds:cron_settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


</fieldset>

</div> 

<ul id="content_exported_items" class="hidden conditions-tree-group"> 
    <p><?php echo $_smarty_tpl->__("datafeed.description");?>
</p>
    <li class="datafeed__content-exported-categories-wrapper">
        <div class="datafeed__content-exported-categories conditions-tree-node">
            <label class="datafeed__content-exported-heading"><?php echo $_smarty_tpl->__("categories_in");?>
</label>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/categories/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"datafeed_data[categories]",'item_ids'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['categories'],'multiple'=>true,'single_line'=>true,'use_keys'=>"N",'no_item_text'=>$_smarty_tpl->__("any_category")), 0);?>

        </div>
    </li>

    <li class="datafeed__content-exported-products-wrapper cm-last-item">
        <div class="datafeed__content-exported-products conditions-tree-node">
            <label class="datafeed__content-exported-heading"><?php echo $_smarty_tpl->__("products_in");?>
</label>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('input_name'=>"datafeed_data[products]",'data_id'=>"added_products",'item_ids'=>$_smarty_tpl->tpl_vars['datafeed_data']->value['products'],'type'=>"links",'no_item_text'=>$_smarty_tpl->__("any_product")), 0);?>

        </div>
    </li>
</ul> 

<div id="content_fields" class="hidden"> 
    <?php echo $_smarty_tpl->getSubTemplate ("addons/data_feeds/views/data_feeds/components/datafeed_fields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div> 

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
    <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax cm-comet",'text'=>$_smarty_tpl->__("local_export"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['id']->value)."&location=L"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax cm-comet",'text'=>$_smarty_tpl->__("export_to_server"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['id']->value)."&location=S"));?>
</li>
            <li><?php smarty_template_function_btn($_smarty_tpl,array('type'=>"list",'class'=>"cm-ajax cm-comet",'text'=>$_smarty_tpl->__("upload_to_ftp"),'href'=>"exim.export_datafeed?datafeed_ids[]=".((string)$_smarty_tpl->tpl_vars['id']->value)."&location=F"));?>
</li>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list']));?>

    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[data_feeds.update]",'but_role'=>"submit-link",'but_target_form'=>"feed_update_form",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

</form>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tabsbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['tabsbox'],'group_name'=>$_smarty_tpl->tpl_vars['runtime']->value['controller'],'active_tab'=>$_REQUEST['selected_section'],'track'=>true), 0);?>


<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->__("add_new_datafeed"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php } else { ?>
    <?php ob_start();
echo $_smarty_tpl->__("update_datafeed");
$_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1.":&nbsp;".((string)$_smarty_tpl->tpl_vars['datafeed_data']->value['datafeed_name']),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons']), 0);?>

<?php }?>
<?php }} ?>
