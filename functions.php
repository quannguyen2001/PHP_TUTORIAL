<?php
    $y=22;
    //echo "This lesson for function";

    //function is a "block of code", with name
    // function sayHello($name){//function with "arguments"
    //     global $y;
    //     $x = 123;
    //     echo "Hello $name";
    // }
    // sayHello("Quan");//call function with "parameters




    // function sum($a, $b)
    // {
    //     return $a + $b;
    // }
    // echo sum(1,2);

    // function sum($a = 0, $b = 0)
    // {
    //     return $a + $b;
    // }
    // echo sum();

    //assign a variable to a function
    // $multiply = function ($a, $b){
    //     return $a * $b;
    // };
    // echo $multiply(3,4);

    //arrow function
    // $substract = fn($a,$b) => $a - $b;
    // echo $substract(6,2);



    //some built-in function for array
    $names = ['john','anna','hoang'];
    //echo "number of items: ".count($names);

    //search inside array
    // var_dump(in_array('elon',$names));
    // var_dump(in_array('hoang',$names));

    //insert an item
    array_push($names, 'elon','tom');
    //print_r($names);


    //insert to the beginning of the array
    array_unshift($names, 'satoshi');
    // print_r($names);

    //remove the last item
    array_pop($names);
    //print_r($names);

    //remove the first item
    array_shift($names);
    //print_r($names);

    //how to remove an item
    //unset($names[3]);
    
    //chunk an array (chat mang ra tung khuc)
    $chunked_array = array_chunk($names, 2);//moi khuc 2 ten
    print_r($chunked_array);


    $array_one = [1,3,5];
    $array_two = [2,4,6];
    $merged_array = array_merge($array_one, $array_two);
    //print_r($merged_array);


    // //spread operator
    // $array_three = [...$merged_array];//clone an array (nhan ban 1 array)
    // print_r($array_three);

    //spread operator
    $array_three = [...$merged_array];//clone an array (nhan ban 1 array, 2 vung nho khac nha)
    $merged_array[0] =111;
    // print_r($merged_array);
    // print_r($array_three);

    //merge and clone (nhan ban thanh 2 mang sau do gop vao nhau)
    $array_four = [...$array_one,...$array_two];
    //print_r($array_four);

    //combine two arrays
    $a = ['name','email','age'];
    $b = ['Hoang','hoang@gmail.com',21];
    $c = array_combine($a,$b);
    // print_r($c);
    // print_r(array_keys($c));//chi lay phan key
    // print_r(array_flip($c));//dao key cho value

    //array from arange
    $numbers = range(1,10);
    print_r($numbers);

    //map an array to another array
    //with the same size, but other values
    // $squared_numbers = array_map(function($each_number){
    //     return $each_number * $each_number;
    // },$numbers);
    $squared_numbers = array_map(fn($each_number) =>
        $each_number * $each_number
    ,$numbers);
    //print_r($squared_numbers);

    //filter an array
    $filtered_numbers = array_filter($numbers,fn($each_number) =>
        $each_number % 2 ==0);
    print_r($filtered_numbers);


?>