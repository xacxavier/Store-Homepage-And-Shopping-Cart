<?php
session_start();


if (isset($_GET['set'])){
    $_SESSION['cart'][$_GET['set']] = $_GET['newVal'];
    header("Location: ../cart.php");

}

if (isset($_POST["pName"], $_POST["price"], $_POST["img"], $_POST["id"])){
    $item = array($_POST["pName"], $_POST["price"], $_POST["img"], $_POST["id"]); 
    $id = $_POST["id"];  
    if (isset($_SESSION['cart'])){
        if (isset($_SESSION['cart'][$id])){
            $count = $_SESSION['cart'][$id];
            $_SESSION['cart'][$id] =  $count+1;
        }else{
            $_SESSION['cart'][$id] =  1;
        }
    
    }else{
        $count = 1;
        $_SESSION['cart'] = [$id => $count];
    }

    if (isset($_SESSION['items'])){
        $_SESSION['items'] += [$id => $item];
    }else{
        $_SESSION['items'] = [$id => $item];
    }
}


if (isset($_SESSION['items'])){
    foreach($_SESSION['items'] as $key => $item){
        $amount = $_SESSION['cart'][$key];
        $subtotal = ((float)$item[1] )*((float)$amount);
        $_SESSION['subTotals'][$key] = $subtotal;
    }
}


if (isset ($_SESSION['subTotals'])){
    $grandTotal = 0;
    foreach($_SESSION['subTotals'] as $key => $t){
        $grandTotal  += (float)$t;
    }
    $_SESSION['grandTotal'] = $grandTotal ;
}

if (isset($_GET['delete'])){
    $_SESSION['grandTotal'] -= $_SESSION['subTotals'][$_GET['delete']];
    unset($_SESSION['cart'][$_GET['delete']]);
    unset($_SESSION['items'][$_GET['delete']]);
    unset($_SESSION['subTotals'][$_GET['delete']]);
    header("Location: ../cart.php");
}


if (isset($_GET['checkout'])){
    session_unset();
    session_destroy();
    header("Location: ../checkout.php");
}

?>

