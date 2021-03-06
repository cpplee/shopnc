<?php
defined('InShopNC') or exit('Access Invalid!');
$config = array();
$config['shop_site_url'] 		= 'http://localhost/shop/shop';
$config['cms_site_url'] 		= 'http://localhost/shop';
$config['microshop_site_url'] 	= 'http://localhost/shop/microshop';
$config['circle_site_url'] 		= 'http://localhost/shop/circle';
$config['admin_site_url'] 		= 'http://localhost/shop/admin';
$config['upload_site_url']		= 'http://localhost/shop/data/upload';
$config['resource_site_url']	= 'http://localhost/shop/data/resource';
$config['version'] 		= '2014627';
$config['setup_date'] 	= '2015-12-30 11:43:15';
$config['gip'] 			= 0;
$config['dbdriver'] 	= 'mysqli';
$config['tablepre']		= 'shopnc_';
$config['db'][1]['dbhost']  	= 'localhost';
$config['db'][1]['dbport']		= '3306';
$config['db'][1]['dbuser']  	= 'root';
$config['db'][1]['dbpwd'] 	 	= '';
$config['db'][1]['dbname']  	= 'shopnc';
$config['db'][1]['dbcharset']   = 'UTF-8';
$config['db']['slave'] 		= array();
$config['session_expire'] 	= 3600;
$config['lang_type'] 		= 'zh_cn';
$config['cookie_pre'] 		= '8C12_';
$config['tpl_name'] 		= 'default';
$config['thumb']['save_type'] 		= 1;
$config['thumb']['cut_type'] = 'gd';
$config['thumb']['impath'] = '';
$config['cache']['type'] 			= 'file';
$config['memcache']['prefix']      	= '';
$config['memcache'][1]['port']     	= 11211;
$config['memcache'][1]['host']     	= '127.0.0.1';
$config['memcache'][1]['pconnect'] 	= 0;
$config['debug'] 			= true;
$config['spec_model']		= '0';
$config['payment'] 			= 1;
$config['product_indate'] 	= 7;
$config['syn_site'][] = 'shop';
$config['syn_site'][] = 'cms';
$config['syn_site'][] = 'microshop';
$config['syn_site'][] = 'circle';
$config['app_key']['shop'] = '1ca3e5ccdc2f6f71e98285f04bee4b98';
$config['app_key']['cms'] = '89431a9612c97ea22747a77df678bb36';
$config['app_key']['microshop'] = '904f072825271885f7edc0f21aa2d08a';
$config['app_key']['circle'] = '965b330afa2fb1b8ddc0da0f9fc46611';