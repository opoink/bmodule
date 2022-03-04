<?php
namespace Opoink\Bmodule\Controller\Opoink\Bmodule\Admin\Vue\Component;

class ComponentName extends \Of\Controller\Controller {

	protected $pageTitle = '';
	protected $_url;
	protected $_message;
	protected $_config;

	public function __construct(
		\Of\Http\Url $Url,
		\Of\Std\Message $Message,
		\Of\Config $Config
	){

		$this->_url = $Url;
		$this->_message = $Message;
		$this->_config = $Config;
	}

	public function run(){
		$componentname = $this->getParam('componentname');

		$vendors = $this->_config->getConfig('modules');

		foreach ($vendors as $vendor => $modules) {
			foreach ($modules as $module) {
				$dir = ROOT.DS.'App'.DS.'Ext'.DS.$vendor.DS.$module;
				$dir .= DS . 'View' . DS . 'js' . DS . 'admin' . DS . 'vue-components';

				$target = $dir . DS . $componentname;

				if(file_exists($target) && is_file($target)){
					$js = file_get_contents($target);

					echo header("Content-type: application/javascript", true);
					echo $js;
					exit;
					die;
				}
			}
		}

		$this->returnError(404, 'Page not found');
	}

	public function setLayout($router){
		$this->_url->setRouter($router);
		return parent::setLayout($router);
	}
}
?>
