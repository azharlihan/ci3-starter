<?php
// Autoloading untuk class yang lain
spl_autoload_register(function ($className) {
	require_once APPPATH . "$className.php";
});
