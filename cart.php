
<?php
session_start();
include_once "php/header.php";
include_once "php/productCard.php";
?>



<div class= "cart_wrapper"></div>
<h1 class="cart_title">My Cart</h1>
<div class="cart_container">

    <div class="left_panel">
        <div class="cart_col">
            <div class="table_cart">
                <table>
                    <tr>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                    
                    <?php
                    if (isset($_SESSION['items'])){
                        foreach($_SESSION['items'] as $key => $item){
                            $amount = $_SESSION['cart'][$key];
                            $subtotal = ((float)$item[1] )*$amount;
                            createCardRow($item[0], $item[1], $item[2], $amount, $subtotal, $key);
                            

                        }
                    }else{
                        echo "<h1 class=\"cart_title\">Your Cart is Empty</h1>";
                    }
                    ?>           
        
                </table>
                
            </div>
        </div>
    </div>
    <div class="right_panel">
            <div class="cart_box">
            <?php
                if (isset($_SESSION['grandTotal'])){
                    createCardRowRight($_SESSION['grandTotal']);
                    }
                else{
                    echo "";
                    
                }
                
                // echo "subtotals".var_dump($_SESSION['subTotals']);
                // echo "<br>";
                // echo "<br>";
                // echo "grandtotal".var_dump($_SESSION['grandTotal']);
                // echo "<br>";
                // echo "<br>";
                // echo "items".var_dump($_SESSION['items']);
                ?> 
                
            </div>
    </div>
</div>

</div>

<?php
include_once 'php/footer.php';

?>




                    

