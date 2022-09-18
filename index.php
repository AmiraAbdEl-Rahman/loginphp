<?php
    session_start();
    $userslogin = array('Amr'=>'12345','Amira'=>'22222','Ali'=>'33333','Alaa'=>'44444','Doaa'=>'55555');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST["name"];
        $pass = $_POST["password"];
        
        
        // foreach($userslogin as $user){
        //     var_dump($user);
        
        
        
        if (isset($userslogin[$user])&& $userslogin[$user]==$pass){
            $_SESSION['UsersInfo']['Username']=$userslogin[$user];
            header("Location: home.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LogIn Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
    <div class="login">
        <img src="imge/avatar.jpg" class="ava" >
        <h1>Login Here</h1>
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username" autocomplete="off"s>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="login">
            <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a>
        </form>
    </div>
</body>
</html>