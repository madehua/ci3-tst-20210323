<?php
/**
 * 生产环境必须要设置session加密字符串
 */
$config['encryption_key'] = '';
if (empty($config['encryption_key']))
	throw new RuntimeException('encryption_key not set value');
