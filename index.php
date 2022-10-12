<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');


define('APP_DEBUG',false);

define('BUILD_DIR_SECURE',true);

define('DIR_SECURE_CONTENT', 'deney Access!');

define ("GZIP_ENABLE", function_exists('ob_gzhandler'));
ob_start(GZIP_ENABLE?'ob_gzhandler':null);


define('APP_PATH','./Application/');


require './ThinkPHP/ThinkPHP.php';


