<?php

class User{
    public $numbers  = [0, 1, 2, 3];
    public $users = [
        "Rendi", "Rajiman", "Surti"
    ];

    public $students = [
        [
            'id'            => 1,
            'name'          => 'Santi',
            'age'           => 16,
            'address'       => 'Tanjung Uma'
        ],
        [
            'id'            => 2,
            'name'          => 'Resta',
            'age'           => 17,
            'address'       => 'Baloi Permai'
        ],
    ];


    public function loopingDenganWhile(){
        echo 'looping menggunakan while' . '<br>';
        $index = 0;
        // perulangan menggunakan while
        while($index < count($this->numbers)){
            echo $this->numbers[$index] . '<br>';
            $index++;
        }
    }

    public function space(){
        echo '<hr>';
    }
    public function loopingMenggunakanFor(){
        
        echo 'looping menggunakan for' . '<br>';
        for($index = 0; $index < count($this->numbers); $index++){
            echo $this->numbers[$index] . '<br>';
        }
    }

    public function loopingMenggunakanForeach(){
        echo 'looping menggunakan foreach' . '<br>';
        foreach($this->numbers as $number){
            echo $number . '<br>';
        }
    }

    public function loopingMenggunakanDoWhile(){
        echo 'looping menggunakan do-while' . '<br>';
        $index = 0;
        do {
            echo $this->numbers[$index] . '<br>';
            $index++;
        } while ($index < count($this->numbers));
    }

    public function loopingMenggunakanIteration(){
        echo 'looping menggunakan array iteration' . '<br>';
        $arrayNumbers = new ArrayObject($this->numbers);
        $arrayIteration = $arrayNumbers->getIterator();
        while($arrayIteration->valid()){
            echo $arrayIteration->current() . '<br>';
            $arrayIteration->next();
        }
    }

    public function getAllUser(){
        echo 'Semua data user'. '<br>';
        // $index = 1;
        foreach($this->users as $key => $user){
            echo $key++ .'.'. $user . '<br>';
        }
    }

    public function getAllStudent(){
        echo 'Semua data murid' . '<br>';
        foreach($this->students as $key => $student){
            echo 'Id: ' . $key . '<br>';
            echo 'Nama: ' . $student['name'] . '<br>';
            echo 'Umur: ' . $student['age'] . '<br>';
            echo 'Alamat: ' . $student['address'] . '<br>';
            // echo $this->space();
        }
    }

    public function findStudent($name){
        $student = $this->students['name'];
        $result = array_search($name, array_column($this->students, 'name'));
        print_r($result);
    }
}

$user = new User();
echo $user->loopingDenganWhile();
echo $user->space();
echo $user->loopingMenggunakanFor();
echo $user->space();
echo $user->loopingMenggunakanForeach();
echo $user->space();
echo $user->loopingMenggunakanDoWhile();
echo $user->space();
echo $user->loopingMenggunakanIteration();
echo $user->space();
echo $user->getAllUser();
echo $user->space();
echo $user->getAllStudent();
echo $user->space();