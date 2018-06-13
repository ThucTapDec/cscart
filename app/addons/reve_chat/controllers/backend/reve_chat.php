<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if($_POST['type'] == 'reve_chat_install')
    {

        if($_POST['revechat_aid'] == NULL)
        {
            fn_set_notification('E', __('error'), __('error_installing_reve_chat'));
            return array(CONTROLLER_STATUS_REDIRECT, 'reve_chat.manage');
        }
        $revechat_id = 1;
        $reve_chat['aid'] = $_POST['revechat_aid'];
        $status = fn_update_aid($reve_chat, $revechat_id);
        if($status == false)
        {
            fn_set_notification('E', __('error'), __('error_installing_reve_chat'));

            return array(CONTROLLER_STATUS_REDIRECT, 'reve_chat.manage');
        }
        return array(CONTROLLER_STATUS_REDIRECT, "reve_chat.manage");
    }

        if($_POST['type'] == 'reve_chat_remove'){
            $revechat_id = 1;
            $reve_chat['aid'] = 0;

            $status = fn_update_aid($reve_chat, $revechat_id);
            if($status == false)
            {
                fn_set_notification('E', __('error'), __('reve_chat_uninstalled'));

                return array(CONTROLLER_STATUS_REDIRECT, 'reve_chat.manage');
            }

            return array(CONTROLLER_STATUS_REDIRECT, "reve_chat.manage");
        }

}


if ($mode == 'manage') {
    $reve_chat['aid'] = 0;

    // Get the REVE Chat Account ID from database
    $reve_chat_aid = db_get_field('SELECT aid FROM ?:reve_chat_data');

    if($reve_chat_aid != NULL ) {
        $reve_chat['aid'] = $reve_chat_aid;
    }

    Registry::get('view')->assign('reve_chat', $reve_chat);
}

function fn_update_aid($data,$reve_chat_id)
{
    if($reve_chat_id != 0 || $reve_chat_id != NULL)
    {
        db_query('UPDATE ?:reve_chat_data SET ?u WHERE id = ?i', $data, $reve_chat_id);
        return true;
    }
    return false;
}