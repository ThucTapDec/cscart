<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

$reve_chat_aid = db_get_field('SELECT aid FROM ?:reve_chat_data');
$is_reve_chat_active = fn_is_reve_chat_active($reve_chat_aid);

$reve_chat['reve_chat_aid'] = $reve_chat_aid;
$reve_chat['is_reve_chat_active'] = $is_reve_chat_active;

Registry::get('view')->assign('reve_chat', $reve_chat);

function fn_is_reve_chat_active($reve_chat_aid){
    if(($reve_chat_aid == 0 || $reve_chat_aid == ''))
    {
        return false;
    }
    return true;
}