<?php
include ("header.php");

// $total=NULL;
// echo "<script> alert('you in cart'); </script>";
session_start();    

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

<body style="color: black;">


    <div class="container flex">
        <div>
            <div class="cart-heading flex">
                <h1 class="">MY CART</h1>
            </div>

            <!-- <div class="cart-total flex">
                    <div>
                        <h4 class="cart-text">Total:</h4>
                        <h5 class="cart-pay"><?php $total; ?></h5><br>
                    </div>
                    <button class="btn cart-btn">Make Purchase</button>
                </div> -->

            <div class="flex cart-reverse">
                
                <table>
                    <div class="flex">
                    <thead>
                        <tr class="cart-head hiii">
                            <th>Serial No</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    // $total=0;

                        if(isset($_SESSION['cart'])){

                            foreach($_SESSION['cart'] as $key => $value){

                            // print_r($value);

                            $sr=$key+1;
                            // $total=$total+$value['price'];
                            echo"

                            <tr class='cart-center hiii'>
                                <td>$sr</td>
                                <td>$value[item_name]</td>
                                <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
                                <td><input type='number' value='$value[quantity]' min='1' max='20' onchange='subtotal()' class='cart-center iquantity'></td>
                                <td class='itotal'></td>
                                    <form action='managecart.php' method='POST'>
                                        <td><button name='remove' class='btn cart-remove'>REMOVE</button></td>
                                        <input type='hidden' name='item_name' value='$value[item_name]'> 
                                    </form> 
                            </tr>
                            </div>
                            ";

                             }
                         }

                     ?>
                    
                    <div class="cart-total flex">
                        <div>
                            <h4 class="cart-text">Grand Total:</h4>
                            <h5 id="gtotal" class="cart-pay"></h5><br>
                        </div>
                        <button class="btn cart-btn">Make Purchase</button>
                    </div>  
                    
                </tbody>
                
            </table>                 
        </div>
        </div>
        </div>


        <script>
            let gt = 0;
            let iprice=document.getElementsByClassName('iprice');
            let iquantity=document.getElementsByClassName('iquantity');
            let itotal=document.getElementsByClassName('itotal');
            let gtotal=document.getElementById('gtotal');

            function subtotal(){

                gt = 0;

                for(i=0;i<iprice.length;i++){

                    itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                    
                    gt = gt+(iprice[i].value)*(iquantity[i].value);
                }
                gtotal.innerText = gt;
            }

        subtotal();
        
        </script>
        
</body>

</html>