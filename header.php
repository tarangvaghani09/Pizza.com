<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- nav section -->
    <nav class="nav">
        <div class=" flex stick">
            <div class="left flex">
                <img src="images/main_img.jpg" alt="" class="im">
            </div>

            <div class="mid" id="nav-link">
                <ul class="flex center">
                    <li><a href="home.php" class="nav-link active">Home</a> </li>
                    <li><a href="menu.php" class="nav-link">Menu</a> </li>
                    <li><a href="about.php" class="nav-link">About</a> </li>
                </ul>
            </div>

            <div class="right flex">
                <button class="btn btn-hide"><a href="cart.php"> My Cart</a></button>
            </div>

            <div class="ha flex">
                <a href="#" class="nav-toggle nav-ham" id="toggle">
                    <i class="fa-solid fa-bars ham"></i>
                </a>
            </div>
        </div>
    </nav>
</body>
</html>
