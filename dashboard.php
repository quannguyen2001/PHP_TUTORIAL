<?php
    session_start();
    if(isset($_SESSION['email'])){
        echo "Welcome to Dashboard page<br>";
        echo $_SESSION['email'];
        echo "<a href='/logout.php'>Logout</a>";
    }else{
        echo "Welcome guest to Dashboard<br>";
        echo "<a href='/sessions.php'>Back to login</a>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is dashboard</h1>
</body>
</html>