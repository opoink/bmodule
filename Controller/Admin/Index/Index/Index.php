<?php
namespace Opoink\Bmodule\Controller\Admin\Index\Index;

class Index extends \Opoink\Bmodule\Controller\Admin\Controller {

	protected $pageTitle = 'Admin Dashboard';
	protected $_url;
	protected $_message;

	public function __construct(
		\Of\Http\Url $Url,
		\Of\Std\Message $Message
	){
		parent::__construct();
		$this->_url = $Url;
		$this->_message = $Message;
	}

	public function run(){
		return parent::run();
	}

	public function setLayout($router){
		$this->_url->setRouter($router);
		return parent::setLayout($router);
	}
}
?>
