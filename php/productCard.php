<?php
     function createCardCol($pName, $pPrice, $pImage, $pId){
        $element =
        "    
        <div class=\"col\">
        <div class=\"item\">
        <img src=\"$pImage\" alt=\"$pName\">
        <div class=\"product_title\">$pName</div>
        <div class=\"price\">
            <h3 class=\"price\">$pPrice</h3>
        </div>
        <form action=\"php/cart.pro.php\" method=\"post\">
        <input type=\"hidden\" name=\"product_title\" value=\"$pName\">
        <input type=\"hidden\" name=\"price\" value=\"$pPrice\">
        <input type=\"hidden\" name=\"img\" value=\"$pImage\">
        <input type=\"hidden\" name=\"id\" value=\"$pId\">
        <button type=\"submit\" class=\"btn2\" type=\"submit\" name=\"add\">Add to Cart</button>
        </form>
        </div>
        </div>
        ";
        echo $element;

};

function createCardRow($pName, $pPrice, $pImage, $amount, $subtotal, $pId){
    $element =
    "    
    <tr>
    <td class=\"td_img cart_img\"><img src=\"$pImage\" alt=\"$pName\"></td>
    <td><div class=\"pName\">$pName</div></td>
    <td><div class=\"price\"><h3 class=\"price\">$pPrice</h3></div></td>
    <td>
    <div class=\"row-col\">
    
    <form action=\"php\cart.pro.php\" class=\"row\" method=\"get\" >

    <input class=\"row number_input\" type=\"number\" value=\"$amount\" min=\"1\" name=\"newVal\">
    <button class=\"btn4\" name=\"set\" value=\"$pId\" type=\"submit\" >Set</button>

    </form>

    <form action=\"php\cart.pro.php\">
    <button class=\"btn4\" name=\"delete\" value=\"$pId\">x</button>
    </form>
    </div>
    </td>

    <td>$$subtotal</td>
    </tr>
    ";
    echo $element;

};

function createCardRowRight($total){
    $element = 
    "<h2>Cart Totals</h2>
    <table class=\"cart_total\">
        <tr>
        <th>Subtotal</th>
        <td>$$total</td>
        </tr>
        <tr>
        <th>Total</th>
        <td>$$total</td>
        </tr>

    </table>
    ";
    echo $element;

    $element2 = "
    <form action=\"php\cart.pro.php\" method=\"get\"> 
    <button type=\"submit\" name=\"checkout\" class=\"checkout_btn\">Check Out</button>
    </form>
    ";
    echo $element2;
}


?>





