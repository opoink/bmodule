<?php
namespace Opoink\Bmodule\Entity;

class User extends \Of\Database\Entity {

	public function testQry(){
		// // var_dump($this->_di->get('\Of\Database\Connection')->getConnection());
		// $this->Connection->setConfig()->connect();

		$this->getConnection();
		$s = $this->getSelect()
		->select(['u.email'])
		->select(['up.firstname' => 'upfirstname'])
		->from(['user' => 'u', 'users_profile' => 'up'])
		->where('u.email')->eq(function($subquery){
			// $subquery->_whereStatement->valPrefix = 'sub';
			// $subquery
			// ->from(['user' => 'u'])
			// ->select(['u.email'])
			// ->where('u.pass')->eq('asdasd');

			$subquery->_whereStatement->valPrefix = 'sub';
			$subquery
			->where('u.pass')->eq('asdasd')
			->where('u.pass')->eq('asdasd');
		})
		->where('u.pass')->eq('asdasd')
		->where('u.pass')->ne('asdasd')
		// ->where('u.pass')->lt(18)
		// ->where('u.pass')->gt(19)
		// ->where('u.pass')->ltoe(19)
		// ->where('u.pass')->gtoe(19)
		// ->where('u.pass')->between(19, 25)
		// ->where('u.pass')->notBetween(19, 25)
		// ->where('u.pass')->in(['asdasd', 'werwer'])
		// ->where('u.pass')->notIn(['asdasd', 'werwer'])
		/*->where('u.pass', '=', 'xcvxcvcvx')*/
		/*->orWhere('u.pass', '=', 'xcvxcvcvx')*/
		;
		echo $s->getQuery();
        var_dump($s->_whereStatement->unsecureValue);
	}
}
?>