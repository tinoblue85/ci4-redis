<?php
namespace App\Libraries;
require_once APPPATH.'ThirdParty\predis\src\Autoloader.php';	

class Redis 
{
	       
	public function config()
	{
		
	\Predis\Autoloader::register();

	$client = new \Predis\Client([
            'scheme' => 'tcp',
            'host'   => '127.0.0.1',
            'port'   => 6379 // redis default port
        ]);

        return $client;
	}

	

}
