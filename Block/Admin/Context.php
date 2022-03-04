<?php
/**
* Copyright 2018 Opoink Framework (http://opoink.com/)
* Licensed under MIT, see LICENSE.md
*/
namespace Opoink\Bmodule\Block\Admin;

class Context extends \Of\Html\Context {

	// public function __construct(
	// 	\Of\Http\Url $Url,
	// 	\Of\Config $Config,
	// 	\Of\Route\Router $Router
	// ){
	// 	parent::__construct($Url, $Config);
	// 	$this->_router = $Router;
	// }

	protected function getAdminUrlNoDomain($path='', $param=array()){
		$p = ltrim($path, '/');

		$adminRoute = 'admin'.$this->_config->getConfig('admin');

		$p = '/' . $adminRoute . '/' . $p;
		if(count($param) >= 1){
			$p .= '?' . http_build_query($param);
		}

		return $p;
	}
}
?>