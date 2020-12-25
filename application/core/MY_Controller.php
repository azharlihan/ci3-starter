<?php
use AzharLihan\CI3Modules\BaseLoader;

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		define('APPNAME', 'Perpustakaan Universitas Muhammadiyah Sukabumi');
		define('APPSNAME', 'Perpustakaan UMMI');

		$this->load = new BaseLoader;
	}
}