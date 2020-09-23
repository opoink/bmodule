<?php
namespace Opoink\Bmodule\Controller\Admin;

class Controller extends \Of\Controller\Controller {

	public function __construct(){
		if(!is_link(ROOT.DS.'dist')){
			symlink(ROOT.DS.'App'.DS.'Ext'.DS.'Opoink'.DS.'Bmodule'.DS.'View'.DS.'dist', ROOT.DS.'dist');
		}
	}

	public function run(){
		return parent::run();
	}
}
?>