<?php
     echo "Superglobals in PHP";
    // var_dump($_SERVER);
    //print_r($_SERVER);
    // print_r($_GET);
    // print_r($_POST);

    //We will send data through url or form using $_GET / $_POST
    // if(isset($_GET['name'])){
    //     echo $_GET['name'];
    // }
    // if(isset($_GET['age'])){
    //     echo $_GET['age'];
    // }
    // echo $_GET['name'];
    // echo $_GET['age'];

    // $name = $_GET['name'] ?? '';//coalescing
    // $age = $_GET['age'] ?? '';
    // echo $name;
    // echo $age;

    //<script>alert("Hello")</script>
    // htmlspecialchars & filter_var co tac dung nhu nhau
    // $email = htmlspecialchars($_POST['email']) ?? '';//coalescing
    $email = filter_var($_POST['email'],FILTER_SANITIZE_SPECIAL_CHARS) ?? '';//coalescing
    $password = htmlspecialchars($_POST['password']) ?? '';
    echo $email;
    echo $password;
    //send this to Database, etc...
    //We will talk about MySQL Database Later
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- $_SERVER['PHP_SELF'] tra ve ten file nay Superglobals in PHP -->
    <!-- <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <div>
            <label for="name">Your name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Your age:</label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form> -->
    <!-- <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form> -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
        <h3>Login to your account</h3>
        <div>
            <label for="name">Email:</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
    
</body>
</html>