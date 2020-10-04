<?php
namespace Opoink\Bmodule\Entity;

class User extends \Of\Database\Entity {

	public function testQry(){
		// // var_dump($this->_di->get('\Of\Database\Connection')->getConnection());
		// $this->Connection->setConfig()->connect();

		
		// $s = $this->getSelect()
		// ->select(['u.email'])
		// ->select(['up.firstname' => 'upfirstname'])
		// ->from(['user' => 'u', 'users_profile' => 'up'])
		// ->where('u.pass')->eq('asdasd')
		// ->where('u.pass')->eq('asdasd')
		// ->where('u.email')->eq(function($subquery){
			// $subquery->_whereStatement->valPrefix = 'sub';
			// $subquery
			// ->from(['user' => 'u'])
			// ->select(['u.email'])
			// ->where('u.pass')->eq('asdasd');

			// $subquery->_whereStatement->valPrefix = 'sub';
			// $subquery
			// ->where('u.pass')->eq('asdasd')
			// ->where('u.pass')->eq('asdasd');
		// })
		// ->where('u.pass')->ne('asdasd')
		// ->where('u.pass')->lt(18)
		// ->where('u.pass')->gt(19)
		// ->where('u.pass')->ltoe(19)
		// ->where('u.pass')->gtoe(19)
		// ->where('u.pass')->between(19, 25)
		// ->where('u.pass')->notBetween(19, 25)
		// ->where('u.pass')->in(['asdasd', 'werwer'])
		// ->where('u.pass')->notIn(['asdasd', 'werwer'])
		// ->where('u.pass')->like('%asdasd%')
		// ->where('u.pass')->notLike('%asdasd%')
		/*->where('u.pass', '=', 'xcvxcvcvx')*/
		/*->orWhere('u.pass', '=', 'xcvxcvcvx')*/
		;

		$s = $this->getSelect()
		->select(['sa.*'])
		->from(['system_admin' => 'sa'])
		// ->where('sa.id')->in(function($sub){
			
		// })
		// ->where('sa.id')->eq(function($sub){
		// 	$sub
		// 	->select('id')
		// 	->from('system_admin')
		// 	->where('firstname')->eq('ron')
		// 	->orWhere('lastname')->eq('perez');
		// })
		->group(function($sub){
			$sub
			->group(function($subd1){
				$subd1
				->where('sa.firstname')->eq('ron')
				->where('sa.lastname')->eq('perez');
			}, false)
			->orGroup(function($subd2){
				$subd2
				->where('sa.firstname')->eq('ron2')
				->where('sa.lastname')->eq('perez2');
			})
			;
		})
		;


		// $data = $this->fetchAll($s);

		echo "<pre>";
		// print_r($data );
		// echo $s->dumpQuery();

		die;
	}
}
?>