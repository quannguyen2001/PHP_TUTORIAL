<?php
    //echo "We talk about Iterations(loop)";
    // for($i = 0; $i < 10; $i++)
    // {
    //     //echo $i;
    //     echo "i = $i<br>";
    // }

    
    $i = 0;
    // while($i < 10)
    // {
    //     echo "i = $i<br>";
    //     //never ending
    //     $i= $i+1;
    // }


    // do while = "do first", then check
    // do{
    //     echo "i = $i<br>";
    //     $i = $i + 1;
    // }while($i<30);

    //foreach
    $fruits = ['apple','pineapple','orange','lemon'];

    // for($i = 0; $i < count($fruits); $i++)
    // {
    //     echo "$fruits[$i] <br>";
    // }

    // foreach ($fruits as $fruit){
    //     echo "$fruit <br>";
    // }

    foreach ($fruits as $index => $fruit){
        echo "$index - $fruit <br>";//0 - apple
    }
    
    $person = [
        'fullname' => "Nguyen Quan",
        'email' => 'quannguyen@gmail.com',
        'age' => 30
    ];

    foreach($person as $key => $value)
    {
        echo "$key : $value";//fullname : Nguyen Quan
    }

?>