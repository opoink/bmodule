<?php
namespace Opoink\Bmodule\Controller\Admin;

class Controller extends \Of\Controller\Controller {

	public function __construct(){
		$this->symLinkDist();
	}

	protected function symLinkDist(){
		$deployDir = ROOT.DS.'public'.DS.'deploy';

		$generationFile = ROOT.DS.'public'.DS.'generation.php';
		if(file_exists($generationFile)){
			$deployDir .= include($generationFile);
		}

		$dist = $deployDir.DS.'dist';
		if(!is_dir($dist)){

			$dirMan = new \Of\File\Dirmanager();
			$dirMan->copyDir(ROOT.DS.'App'.DS.'Ext'.DS.'Opoink'.DS.'Bmodule'.DS.'View'.DS.'dist', $dist);
		}
	}

	public function run(){
		return parent::run();
	}
}
?>