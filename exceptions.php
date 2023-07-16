<?php
    echo "Exceptions in PHP<br>";
    function divide($a,$b){
        if(!$b){
            throw new Exception("Cannot divide by zero");
        }
        return $a / $b;
    }
    // echo divide(5,0);
    try{
        echo divide(10,2);
        echo divide(5,0);
        echo "no error";
    }catch(Exception $e){
        echo "Caught exception: ".$e->getMessage()."\n";
    }finally{
        //co loi hay khong thi deu chui vao day
        echo "Finally come here...<br>";
    }
    echo "Program runs here...<br>";
?>