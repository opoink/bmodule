<?php
namespace Opoink\Bmodule\Entity;

class User extends \Of\Database\Entity {

	public function testQry(){
		
		$s = $this->getSelect()
		->select(['sa.*'])
		// ->distinct()
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
		->min('id')
		->max('id')
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


		$count = $this->count($s, 'id', 'sasd');
		$data = $this->fetchAll($s);

		echo "<pre>";
		print_r($count);
		echo $s->dumpQuery();

		die;
	}
}
?>