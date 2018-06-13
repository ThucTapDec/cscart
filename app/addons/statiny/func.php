<?php

use Tygh\Registry;

define('STATINY_URL', 'https://api.statiny.com/');;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

function fn_statiny_place_order(&$order_id, &$action, &$order_status, &$cart)
{
	$key = Registry::get('addons.statiny.statiny_api_key');

	if (AREA != 'C' || $action == 'save' || !$key)
		return;

	$order = fn_get_order_info($order_id);

	if (empty($order) || $order['is_parent_order'] == 'Y')
		return;

	foreach (fn_get_currencies() as $_currency)
		if ($_currency['is_primary'] == 'Y')
			break;

	$data = array (
		'auth' => array (
			'api_key' => $key
		),
		'order_id'   => $order_id,
		'company_id' => $order['company_id'],
		'total'      => $order['total'],
		'currency'   => $_currency['currency_code'],
		'link'       => fn_url("orders.details?order_id=$order_id", 'A', 'current', CART_LANGUAGE, true),
		'timestamp'  => $order['timestamp'],
		'country'	 => fn_get_country_name($order['s_country']),
		'state'		 => fn_get_state_name($order['s_state'], $order['s_country']),
		'city'		 => $order['s_city'],
		'uid'		 => md5(empty($order['s_phone']) ? $order['email'] : $order['s_phone']),
		'phone'      => $order['s_phone'],
		'email'      => $order['email'],
	);

	$names = [];

	if (!empty($order['s_firstname']))
		$names[] = $order['s_firstname'];

	if (!empty($order['s_lastname']))
		$names[] = $order['s_lastname'];

	if (!empty($names))
		$data['name'] = implode(' ', $names);

	foreach ($order['products'] as $order_product)
	{
		$product = fn_get_product_data($order_product['product_id'], $_SESSION['auth']);

		$data['products'][] = array (
			'product_id'   => $order_product['product_id'],
			'product'      => $order_product['product'],
			'amount'       => $order_product['amount'],
			'price'        => $order_product['price'],
			'product_code' => $order_product['product_code'],
			'category_id'  => $product['main_category'],
			'category'	   => empty($product['main_category']) ? 0 : fn_get_category_name($product['main_category'])
		);
	}

	$string_data = json_encode($data);

	fn_statiny_async_request(STATINY_URL . 'post_event', array('data' => $string_data));
}

function fn_statiny_async_request($url, $params)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_exec($ch);
}