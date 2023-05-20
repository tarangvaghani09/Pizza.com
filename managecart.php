<?php
include ("header.php");
session_start();           
// echo "<script> alert('you in cart'); </script>";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['add_cart'])){

        if(isset($_SESSION['cart'])){

            $myitem=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitem)){

                echo "<script>
                        alert('Item Alrady Added'); 
                        window.location.href='home.php';
                     </script>";

            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
                // print_r($_SESSION['cart']);
                echo "<script>
                        alert('Item Added'); 
                        window.location.href='home.php';
                     </script>";
            }

        }

        else{

            $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
            echo "<script>
                    alert('Item Added'); 
                    window.location.href='home.php';
                  </script>";
        }

    }

    
    if(isset($_POST['remove'])){

        foreach($_SESSION['cart'] as $key => $value){

            if($value['item_name']==$_POST['item_name']){

                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo "<script>
                        alert('Item Remove'); 
                        window.location.href='cart.php';
                      </script>";
            }

        }
    }   
}
?>















