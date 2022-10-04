<?php 
class User{

	public $found;
	public $gorengan = [
		'Tahu isi', 'Bakwan', 'Bala-Bala'
	];
	
	public $students = [
		[
			'name'		=> 'Rento',
			'age'		=> 17,
		]
	];

	public function display(){
		$index = 1; 
		foreach ($this->gorengan as $key => $item) {
			echo  $index++ . '.' . $item . '<br>';
		}
	}

	public function searchUser($name){
		if($result = array_search($name, array_column($this->students, 'name')) !== false){

			echo $result;
		}
	}
	
	public function searchGorengan($name){
		foreach ($this->gorengan as $key => $item) {
			if ($item == $name) {
				$this->found = true;
				echo $name . ' ada ';
			} 
		}if ($this->found == false) {
			echo $name . ' Tidak ada ';
		}
	}
}
$user = new User();
echo $user->searchUser('Rento');
// echo $user->searchGorengan('supermie');
