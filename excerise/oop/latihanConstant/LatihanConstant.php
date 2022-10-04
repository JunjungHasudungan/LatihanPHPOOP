<?php 
// Perbedaan const dengan define 

// const 
    // 1. 	bisa mode case insensitive => Case Insensitive merupakan kasus 
    // dimana huruf besar dan huruf kecil diartikan sama.
    // 2. 	tidak bisa mendefinisikan konstanta dalam kondisional
    // CONSTANT DENGAN 1 NILAI
    // const CHECK_STATUS = 'HADIR';

    // const NAMA_GORENGAN = [
    //     // CONSTANT DENGAN NILAI ARRAY BIASA
    //     'TAHU ISI', 'BALA-BALA', 'RISOLES', 'BAKWAN', TRUE
    // ];

    // const STUDENT = [
    //     // CONSTANT DENGAN NILAI ARRAY ASSOSIASI
    //     'name'      => 'Arief',
    //     'age'       => 16,
    //     'role'      => 'Student',
    //     'is_active' => true
    // ];

    const USERS = [
        // CONST DENGAN NILAI ARRAY MULTI DIMENSI
        [
            'name'      => 'Arief',
            'age'       => 16,
            'role'      => 'Student',
            'is_active' => true 
        ],
        [
            'name'      => 'Satrio',
            'age'       => 25,
            'role'      => 'Teacher',
            'is_active' => true
        ],
        [
            'name'      => 'Asmida',
            'age'       => 16,
            'role'      => 'Student',
            'is_active' => false
        ]
    ];
        $index = 1;

        // foreach (USERS as $key => $value) {
        //     echo "No." . $index++ . '<br>';
        //     echo  'Nama: '.   $value[ 'name' ] .'<br>';
        //     echo  'Umur: '.  $value[ 'age' ] .'<br>';
        //     echo  'Jabatan: '.  $value[ 'role' ] .'<br>';
        //     echo  'Status: '.  $value[ 'is_active' ] .'<br>';
        //     echo '<hr>';
        // }

        // nilai constant menggunakan method define dengan 1 nilai
        define('CHECK_STATUS', 'Hadir');

        define('NAMA_GORENGAN', [
            // array biasa
            'TAHU ISI', 'BALA-BALA', 'RISOLES', 'BAKWAN', TRUE
        ]);

        // menampilkan nilai define
        echo CHECK_STATUS . '<hr>';
        // output: "Hadir"

        // menampilkan nilai array biasa
        foreach (NAMA_GORENGAN as $key => $value) {
            echo $key . '.' . $value . '<br>';
        }
        // output:
        // 0. 'TAHU ISI', 
        // 1. 'BALA-BALA', 
        // 2. 'RISOLES', 
        // 3. 'BAKWAN', 
        // 4. TRUE
        echo '<hr>';

        define('STUDENT', [
            // Array assosiasi
            'name'      => 'Arief',
            'age'       => 16,
            'role'      => 'Student',
            'is_active' => true,
        ]);

        foreach (STUDENT as  $value) {
            echo $value . '<br>'; 
        }
        
        echo '<hr>';

define( 'STUDENTS', [
    [
        'name'      => 'Arief',
        'age'       => 16,
        'role'      => 'Student',
        'is_active' => true 
    ],
    [
        'name'      => 'Satrio',
        'age'       => 25,
        'role'      => 'Akunting Pajak',
        'is_active' => true 
    ],
    [
        'name'      => 'Rendi',
        'age'       => 35,
        'role'      => 'HRD',
        'is_active' => true 
    ]
]);
$index = 1; 
foreach (STUDENTS as $key => $value) {
    echo 'No.'. $index++ .'<br>';
    echo 'Nama: '. $value['name'] . '<br>';
    echo 'Umur: ' . $value['age'] . '<br>';
    echo  'Jabatan: '. $value['role'] . '<br>';
    echo  'Aktif: ' .  $value['is_active'] . '<br>';
    echo '<hr>';
}