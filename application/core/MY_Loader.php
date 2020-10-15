<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{
	private $sectionName = null;
	private $sections;

	public function extend($name)
	{
		$this->view($name);
	}

	public function section($name)
	{
		if (!is_null($this->sectionName)) throw new Exception("Previous section is still open", 1);
		$this->sectionName = $name;
		ob_start();
	}

	public function endSection()
	{
		if (is_null($this->sectionName)) throw new Exception("No section opened", 2);
		$this->sections[$this->sectionName] = ob_get_clean();
		$this->sectionName = null;
	}

	public function renderSection($name)
	{
		echo $this->sections[$name];
	}
}
