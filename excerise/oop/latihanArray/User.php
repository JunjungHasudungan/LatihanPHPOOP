<?php 
class User{
    // 1. array biasa
    public $numbers = [
        1, 2, 3, 4, 5
    ];
    
    // 2. array assosiasi
    public $user = [
        'name'  => 'Arief',
        'age'   => 16,
        'major' => 'RPL'
    ];


    // 3. array multi dimensi
    public $students = [
        'satu' =>
        [
            'name'  => 'Arief',
            'age'   => 16,
            'major' => 'RPL'   
        ],
        'dua' =>
        [
            'name'  => 'Asep',
            'age'   => 17,
            'major' => 'Akuntansi'
        ],
        'tiga' =>
        [
            'name'  => 'Arnold',
            'age'   => 16,
            'major' => 'RPL'
        ]
    ];
    // menampilkan / mengeluarkan nilai array biasa

    public function getNumbers()
    {
        echo 'nilai array biasa' . '<br>';
        foreach ($this->numbers as $key => $value) {
            echo $value . '<br>';
        }
        echo '<hr>';
    }

    // menampilkan / mengeluarkan nilai array assosiasi
    public function getUser()
    {
        // Memampilkan / mengeluarkan nilai array assosiasi
        echo 'nilai array assosiasi '.'<br>';
        foreach ($this->user as $value) {
            echo $value . '<br>';
        }
        echo '<hr>';
    }

    public function getStudent()
    {
        echo 'nilai array multi dimensi' . '<br>';
        foreach ($this->students as $key => $value) {
            echo 'nama: ' .  $value['name'] . '<br>';
            echo  'umur:' .  $value['age'] . '<br>';
            echo  'Jurusan: '. $value['major'] . '<br>';
            echo '<hr>';
        }
    }
} 
// inisialisasi class objek
$user = new User();

// menampilkan nilai array biasa mennggukan function 
echo $user->getNumbers();
echo $user->getUser();
echo $user->getStudent();
