<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/
use Tygh\Settings;
use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	fn_trusted_vars(
		'addon_data'
	);

	if ($mode == 'update') {

		if (!empty($_REQUEST['addon']) && $_REQUEST['addon'] == 'statiny') {
			if (!empty($_REQUEST['addon_data']) && !empty($_REQUEST['addon_data']['options'])) {
				$api_key = reset($_REQUEST['addon_data']['options']);

				if (!empty($api_key)) {

					foreach (fn_get_currencies() as $_currency)
						if ($_currency['is_primary'] == 'Y')
							break;


					fn_statiny_async_request(
						STATINY_URL . 'validate_key',
						array (
							'data' => json_encode(array(
								'key'	   => $api_key,
								'host'	   => Registry::get('config.http_host'),
								'platform' => 'cscart',
								'currency' => $_currency['currency_code'],
							))
						)
					);
				}
			}
		}
	}
}