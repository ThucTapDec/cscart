<?php
use Tygh\Registry;
if (!defined('BOOTSTRAP')) { die('Access denied'); }
$config['resources']['marketplace_url'] .= '?access_token=ed1fb72ff5c77e64d328d39e384e6014';
Registry::set('reve_chat_controllers', array (
    'reve_chat'
));