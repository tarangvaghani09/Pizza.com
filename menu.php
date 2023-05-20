<?php
include ("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- main section -->

    <div class="main-image">
        <img src="images/m1.jpg" alt="" class="main-imge">
    </div>

    <div class="container">
        <h2>PIZZA</h2>
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
                <img src="images/peppy_paneer3.webp" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Peppy Paneer</h4>
                    <p>Flavorful trio of juicy paneer ,</p>
                    <p>with spicy red paprika</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">459/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Peppy Paneer">
                    <input type="hidden" name="price" value="459">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/cheese_corn4.webp" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Cheese n Corn</h4>
                    <p>A delectable combination of</p>
                    <p> sweet & juicy golden corn</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">379/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Cheese n Corn">
                    <input type="hidden" name="price" value="379">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/achari5.webp" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Achari Do Pyaza</h4>
                    <p>super cheesy onion pizza </p>
                    <p>as desi as it gets!</p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">329/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Achari Do Pyaza">
                    <input type="hidden" name="price" value="329">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- grill -->

    <div class="container">
        <h2>GRILL</h2>
        <div class="items flex">
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
                <img src="images/grill2.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Paneer Sandwich</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">200/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Paneer Sandwich">
                    <input type="hidden" name="price" value="200">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/grill3.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Veg Cheese Grilled</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">450/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Veg Cheese Grilled">
                    <input type="hidden" name="price" value="450">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/grill4.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Garlic With Mozzarella</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">350/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Garlic With Mozzarella">
                    <input type="hidden" name="price" value="350">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- pasta and noodle -->

    <div class="container">
        <h2>PASTA / NOODLES</h2>
        <div class="items flex">
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
                <img src="images/p2.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Crispy With Onion Noodles</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">250/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Crispy With Onion Noodles">
                    <input type="hidden" name="price" value="250">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/p3.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Cheese Pasta</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">279/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Cheese Pasta">
                    <input type="hidden" name="price" value="279">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/p4.jpeg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Mozzarella Cheese Pasta</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">319/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Mozzarella Cheese Pasta">
                    <input type="hidden" name="price" value="319">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <!-- pdrink -->

    <div class="container">
        <h2>DRINKS</h2>
        <div class="items flex">
        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/d1.jpeg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Kiwi Juice</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">150/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Kiwi Juice">
                    <input type="hidden" name="price" value="150">
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

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/d3.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Lemon Juice</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">179/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Lemon Juice">
                    <input type="hidden" name="price" value="179">
                </div>
            </div>
            </form>

        <form action="managecart.php" method="POST">
            <div class="item1">
                <img src="images/d4.jpg" alt="" class="img">
                <div class="text-left">
                    <h4 class="text-heading">Red Drink</h4>
                    <p>Classic delight with 100% real </p>
                    <p>mozzarella cheese</p>
                    </p>
                </div>
                <hr>
                <div class="flex t">
                    <p class="p">250/-</p>
                    <button type="submit" name="add_cart" class="text-right">ADD TO CART</button>
                    <input type="hidden" name="item_name" value="Red Drink">
                    <input type="hidden" name="price" value="250">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>

    <?php
    include ("footer.php");
    ?>
    
    <script src="new.js"></script>

</body>

</html>