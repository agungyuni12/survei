<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/third_party/Prediscli/src/Autoloader.php';
Predis\Autoloader::register();

class Prediscli { 
	public $client;
    public function __construct() { 
        $this->client = new Predis\Client([
        	'scheme' => 'tcp',
        	'host' => '127.0.0.1',
        	'port' => 6379,
        	'password' => 'logaritma123'
        ]);
    } 
}