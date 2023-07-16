<?php
    //echo "String functions in PHP";
    $full_name = 'Nguyen Duc Hoang';
    //echo "length: ".strlen($full_name);

    // //reverse a string
    // echo strrev($full_name);

    // //convert to lowercase
    // echo strtolower($full_name);
    // //convert to uppercase
    // echo strtoupper($full_name);

    //find and replace
    //echo str_replace(' ','-', $full_name);

    // if(str_starts_with($full_name,'Nguyen')){
    //     echo "His name starts with Nguyen";
    // }

    //Kiem tra khong phan biet hoa thuong
    if(str_starts_with(strtolower($full_name),'nguyen')){
        echo "His name starts with Nguyen<br>";
    }

    //Kiem tra sau co ket thuc bang chu
    if(str_ends_with(strtolower($full_name),'hoang')){
        echo "His name end with Hoang<br>";
    }
    echo "<h1>html string</h1>";

    //how to ignore the html string ?
    echo htmlspecialchars("<h1>html string</h1>");
    // echo "<script>alert('This is javascript code')</script>";
    echo htmlspecialchars("<script>alert('This is javascript code')</script>");

    //htmlspecialchars used to get data in form
    printf('<br>%s likes %s','Hoang','Mec');
    printf('<br>%s likes %s','<h1>Hoang</h1>','Mec');
    printf('<br>pi = %f', 3.14);


?>