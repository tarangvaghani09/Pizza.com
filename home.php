<?php
include ("header.php");
?>

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

    <!-- main section -->


    <div class="main-image">
        <img src="images/paneer1.jpg" alt="" class="main-img">
    </div>



    <div class="container">
        <h2 class="main-title">What's Trending</h2>
        <div class="items flex">
            <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/margherita2.webp" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Margherita</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">450/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Margherita">
                    <input type="hidden" name="price" value="450">
                </div>
            </div>
            </form>

            <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/grill1.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Veg Cheese</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">379/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Veg Cheese">
                    <input type="hidden" name="price" value="379">
                </div>
            </div>
            </form>

            <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/p1.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Crispy Noodles</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">179/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Crispy Noodles">
                    <input type="hidden" name="price" value="179">
                </div>
            </div>
            </form>

            <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/d2.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Beverages</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">350/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Beverages">
                    <input type="hidden" name="price" value="350">
                </div>
            </div>
            </form>

        </div>
    </div>


    <?php
    include ("footer.php");
    ?>

    <script src="new.js"></script>
</body>

</html>