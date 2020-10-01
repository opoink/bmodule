<?php
namespace Opoink\Bmodule\Controller\Index\Index;

class Index extends \Of\Controller\Controller {

	protected $pageTitle = 'Index Index Index';
	protected $_url;
	protected $_message;

	public function __construct(
		\Of\Http\Url $Url,
		\Of\Std\Message $Message,
		\Of\Database\Entity $Entity
	){

		$this->_url = $Url;
		$this->_message = $Message;
		$entity = $Entity;

		// // var_dump($this->_di->get('\Of\Database\Connection')->getConnection());
		// $this->Connection->setConfig()->connect();
		$entity->getConnection();
		$entity->getSelect()
		->select(['u.email'])
		->select(['up.firstname' => 'upfirstname'])
		->from(['user' => 'u', 'users_profile' => 'up'])
		->where('u.email', '=', 'asdasd')
		->where('u.pass', '=', 'xcvxcvcvx')
		->getQuery()
		;
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
