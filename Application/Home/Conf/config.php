<?php
return array(
	//'配置项'=>'配置值'
	    'TMPL_PARSE_STRING' => array(
        '__IMG__'    => __ROOT__ . '/Public/img',
        '__CSS__'    => __ROOT__ . '/Public/css',
        '__JS__'     => __ROOT__ . '/Public/js',
		'__FONTS__'    => __ROOT__ . '/Public/fonts',
		'__UP__'    => __ROOT__ . '/Public/uploads',
		
		'MODULE_ALLOW_LIST' => array ('Home','Mobile'),
		'DEFAULT_MODULE' => 'Home',
    )
	
	
);