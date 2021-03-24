<?php
$config['encryption_key'] = '';
//生产环境必须要设置session加密字符串
if (empty($config['encryption_key']))
	show_error('encryption_key not set value', 500);
