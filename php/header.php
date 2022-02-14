<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--fonts importing from google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@800&family=Oswald:wght@300&family=Poppins:wght@100&family=Readex+Pro:wght@300&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <!--stylesheet-->
    
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>The Store</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            
            $(".btn2").click(function(){
                $.post()                

    
            });

        });
    </script>

</head>

<body>

    <div id="nav" class="nav-wrapper">

        <div class="logo"> <a href="index.php">THE STORE</a></div>
        <ul class="navlist">

            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="aboutUs.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li>
                <div class="nav-right row">
                    <a href="cart.php">&#128722</a>
                    <p id="cartHeader">
                        <?php 
                            if (isset($_SESSION['cart'])){
                                $total = 0;
                                foreach($_SESSION['cart'] as $key => $item){
                                    $total += $_SESSION['cart'][$key];
                                }
                                echo $total;
                                $_SESSION["total"] = $total;
                            }else{
                                echo "";
                            }
                        ?>
                    </p>
                </div>
            </li>
        </ul>
    
        <script type= "text/javascript">
            window.addEventListener("scroll", function(){
                let nav = document.querySelector("#nav");
                nav.classList.toggle("nav-transition", window.scrollY>0);
            });        
        </script>

</script>



    </div>