<?php
namespace Opoink\Bmodule\Controller\Index\Index;

class Index extends \Of\Controller\Controller {

	protected $pageTitle = 'Index Index Index';
	protected $_url;
	protected $_message;

	public function __construct(
		\Of\Http\Url $Url,
		\Of\Std\Message $Message,
		\Opoink\Bmodule\Entity\User $User
	){

		$this->_url = $Url;
		$this->_message = $Message;
		$this->user = $User;
	}

	public function run(){
		$this->user->testQry();
		return parent::run();
	}

	public function setLayout($router){
		$this->_url->setRouter($router);
		return parent::setLayout($router);
	}
}
?>
