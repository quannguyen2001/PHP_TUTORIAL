<?php
    //echo "We talk about array<br>";
    $some_number = [1,3,4,6];
    $fruits = ['pineapple','melon','apple'];
    // var_dump($some_number);
    // var_dump($fruits);
    //echo $fruits[0];

    //associative array
    $colors =[
        3 => 'red',
        5 => 'green',
        7 => 'blue',
    ];
   //echo $colors[5];
   //key as a string
   $hex_colors =[
    'red' => '#FF0000',
    'green' => '#00FF00',
    'blue' => '#00000FF',
   ];
   //echo $hex_colors['green'];
   $person =[
        [
            'full_name' => 'Nguyen Duc Hoang',
            'age' => 43,
            'email' => 'quang@gmail.com',
        ],
        [
            'full_name' => 'Nguyen Minh',
            'age' => 41,
            'email' => 'nguyenminh@gmail.com',
        ],
        [
            'full_name' => 'Lan',
            'age' => 42,
            'email' => 'lan@gmail.com',
        ]
   ];
   //print_r($person);
   //echo $person[1]['full_name'];
   var_dump(json_encode($person));


   ?>
