<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

$server="localhost";
$username="root";
$password="";
$dbname = "logindata";

$con=new mysqli($server,$username,$password,$dbname);

if(!$con){
    die("connetcion was wrong to connect to database".mysqli_connect_error());
}

$name = $_POST['name'];
$pass = $_POST['pass'];

$query = "SELECT * FROM `logindata` WHERE uname = '$name' LIMIT 1";

$result = $con->query($query);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($pass === $row['pass']) {
        echo "Login successful!";
        header("Location:home.php");
    } 
    else {
        // echo "<p style='color:red;font-size:12px;'>Incorrect username or password!</p>";
        $insert = true;
    }
    
}
else {
    $insert = true;
    // echo "<p style='color:red;font-size:15px;'>User not found! You can create an account.</p>";
    // echo "<p style='color:red;font-size:20px;'>Please sign up account</p>";
    }
    
$result->close();

// $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="login">

    <div class="login-main">
        <div class="login-body">
            <div class="login-heading">
                <p class="login-text">Pizza house</p>
            </div>
            <div class="loginup">

                <form method="POST" action="index.php">
                    <p class="login-filed">
                        <input type="text" name="name" class="login-inp" placeholder="User name / Email ID" autofocus required>
                    </p class="filed">

                    <p>
                        <input type="password" name="pass" class="login-inp" placeholder="Password" required>
                    </p>

                    <p>
                        <input class="login-check" type="checkbox"> 
                        <span class=""> Term & Conditions</span>
                    </p>

                    <p class="filed">
                        <!-- <button class="btn login-font"><a href="">Login</a></button> -->
                    <input type="submit" value="Login" class="btn login-font">
                    </p>

                    <?php
                        if($insert == true){
                            echo "<p style='color:red;font-size:14px;margin-bottom:1em;line-height:25px;'>There was a problem logging you into Pizza house. Please try again soon.</p>";
                        }
                    ?>

                    <p>
                        <span class=""> Don't have an account? <a href="signup.php" class="login-signup">Sign up</a> </span>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>