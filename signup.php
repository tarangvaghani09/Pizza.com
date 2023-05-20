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
$mno = $_POST['mno'];
$address = $_POST['address'];
$pass = $_POST['pass'];
$city = $_POST['city'];

$sql_u = "SELECT * FROM logindata WHERE uname='$name'";

$res_u = $con->query($sql_u);

if (mysqli_num_rows($res_u) > 0) {
  echo "Sorry... username already taken"; 	
}
// else if(mysqli_num_rows($res_e) > 0){
//   echo "Sorry... email already taken"; 	
// }
else{

      $sql ="INSERT INTO `logindata` (`uname`, `mno`, `address`, `pass` , `city`, `time`) VALUES ( '$name','$mno', '$address', '$pass' , '$city', current_timestamp());";
    //   echo '<script>alert("Saved!")</script>';
    //   echo 'Saved!';
}
if($con->query($sql)==true){
    // echo "<p style='color:green;font-size:20px;'>Saved!</p>";
    // $insert = true;
    header("Location:index.php");
}
else{
    // $insert = true;
    echo "error $sql $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="sign">

    <div class="sign-main">
        <div class="signup-body">
            <div class="signup-heding">
                <p class="signup-pizza-text">Pizza house</p>
                <p><u>Sign Up</u></p>
            </div>
            <div class="signup">

                <form method="POST" action="signup.php">
                    <p class="filed">
                        <input type="text" name="name" class="inp" placeholder="User name / Email" autofocus required>
                    </p>

                    <p class="filed">
                        <input type="number" name="mno" class="inp" placeholder="Enter Your Mno">
                    </p>

                     <!-- <p class="filed">
                        <input type="email" name="" class="inp" placeholder="Enter Your Email" required>
                    </p> -->

                    <p class="filed">
                        <textarea cols="23" rows="1" name="address" class="inp signup-area" placeholder="Enter Your Address" required></textarea>
                    </p>

                    <p class="filed"> 
                        <input type="password" name="pass" class="inp" placeholder="Enter Password" required>
                    </p>

                    <p class="filed inp sign-select">
                        <label for="">Choose City</label>
                        <select name="city" id="" class="choose">
                            <option value="surat">Surat</option>
                            <option value="Baroda">Baroda</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Rajkot">Rajkot</option>
                        </select>
                    </p>
                    
                    <p class="filed">
                        <input type="submit" value="Sign up" class="btn sign-font signup-font">
                    </p>

                    <!-- <p class="filed">
                        <button class="btn sign-font signup-font"><a href="home.html">Sign up</a></button>
                    </p> -->
                </form>
            </div>
        </div>
    </div>

</body>

</html>










