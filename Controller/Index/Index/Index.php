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
		// ->where('u.email')->eq('asdads@ya.com')
		// ->where('u.pass')->ne('asdasd')
		// ->where('u.pass')->lt(18)
		// ->where('u.pass')->gt(19)
		// ->where('u.pass')->ltoe(19)
		// ->where('u.pass')->gtoe(19)
		// ->where('u.pass')->between(19, 25)
		// ->where('u.pass')->notBetween(19, 25)
		// ->where('u.pass')->in(['asdasd', 'werwer'])
		->where('u.pass')->notIn(['asdasd', 'werwer'])
		/*->where('u.pass', '=', 'xcvxcvcvx')*/
		/*->orWhere('u.pass', '=', 'xcvxcvcvx')*/
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
