<?php
    // echo "We talk about conditional in PHP<br>";
    // $age =30;
    // if($age >18)
    // {
    //     echo "You are greater than or equal to 18 years old";
    // }
    // else
    // {
    //     echo "You are so young";
    // }


    // $date_time = date("F j");
    // echo $date_time;

    // // $hours = date("H");
    // $hours = 18;
    // echo $hours;
    
    // if($hours < 12)
    // {
    //     echo "Good morning";
    // }
    // else if($hours >= 12 && $hours <= 17)
    // {
    //     echo "Good evening";
    // }

    $comments = [
        'Good', 'I like it', 'How are you?'
    ];
    // $comments = [
        
    // ];
    // if(empty($comments)){
    //     echo "No comments";
    // }

    // if(!empty($comments)){
    //     echo "There are some comments";
    // }
    // else{
    //     echo "No comments";
    // }

    // echo !empty($comments) ? "There are comments":"No comments";

    // $first_comment = !empty($comments) ? $comments[0] : 'No comments';
    // echo $first_comment;

    // //coalescing operator
    // $first_comment = $comments[0] ?? 'No comments';
    // echo $first_comment;

    // $favourite_color = 'aqua';
    $favourite_color = 'blue';
    switch($favourite_color){
        case 'red':
            echo 'You choose Red';
            break;
        case 'green':
            echo 'You choose Green';
            break;
        case 'blue':
            echo 'You choose Blue';
            break;
        default:
            echo 'Not Red, Not Green, Not Blue';
    }

?>