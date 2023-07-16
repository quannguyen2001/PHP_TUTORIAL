<!-- <?php
        echo "Small porject<br>";
        ?> -->

<?php require 'components/header.php';
$name = $email = $body = '';
$name_error = $email_error = $body_error = '';
if (isset($_POST['submit'])) {
    //validations
    if (empty($_POST['name'])) {
        $name_error = 'Name is required';
    } else {
        $name = htmlspecialchars($_POST['name']);
    }
    if (empty($_POST['email'])) {
        $email_error = 'Email is required';
    } else {
        // $email = htmlspecialchars($_POST['email']);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['body'])) {
        $body_error = 'Body is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_SPECIAL_CHARS);
    }

    $validate_success = empty($name_error) && empty($email_error) && empty($email_error);

    if($validate_success){
        $sql = "INSERT INTO feedback(name, email, body) VALUES(?,?,?)";
        try{
            $statement = $connection->prepare($sql);
            $statement->bindParam(1, $name);
            $statement->bindParam(2, $email);
            $statement->bindParam(3, $body);
            $statement->execute();
            //echo "Feedback inserted successfully";
            header("Location: feedback_list.php");//Nhay sang feedback_list.php sau khi nhap xong
        }catch(PDOException $e){
            echo "Cannot insert feedback into database".$e->getMessage();
        }
    }
    // echo $name_error;
    // echo $email_error;
    // echo $body_error;
}
?>
<h1>Enter your feedback here</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3">
        <input type="text" name="name" placeholder="What's your name?" class="form-control <?php echo $name_error ? 'is-invalid' : '';?>">
    </div>
    <p class="text-danger;"><?php echo $name_error; ?></p>
    <div class="mb-3">
        <input type="email" name="email" placeholder="Enter your email" class="form-control <?php echo $email_error ? 'is-invalid' : '';?>">
    </div>
    <p class="text-danger;"><?php echo $email_error; ?></p>
    <div class="mb-3">
        <textarea placeholder="Enter your feedback" name="body" rows="2" class="form-control <?php echo $body_error ? 'is-invalid' : '';?>"></textarea>
    </div>
    <p class="text-danger;"><?php echo $body_error; ?></p>
    <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-primary">
    </div>
</form>

<?php include 'components/footer.php'; ?>
<!-- 
    require: bat buoc neu khong bao loi + warning
    include: khong bat buoc neu khong thay bao warning-->