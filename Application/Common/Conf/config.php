<?php
return array(
		
		//elasticsearch config
	   'DB_CONFIG_ELASTICSEARCH'=> array (
			'ES_TYPE' => 'elasticsearch',
			'ES_HOST' => '127.0.0.1',
			'ES_PORT'=>'9200',
			'ES_INDEX' => 'seframe',
			'ES_TABLE'=>'sedata'
		),
		
		
		//mysql config	    
		'DB_TYPE'   => 'mysqli',  
		'DB_HOST'   => '127.0.0.1', 
		'DB_NAME'   => 'panle', 
		'DB_USER'   => 'shuju666', 
		'DB_PWD'    => 'NfzyMtgt520chi',
		'DB_PORT'   => '3306', 
		'DB_PREFIX' => 'pan_', 
		
		'MODULE_ALLOW_LIST' => array ('Home','Mobile'),
		'DEFAULT_MODULE' => 'Home',
		
		
);