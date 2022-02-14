<?php
include_once "php/header.php";
?>

    <!--============================================================================================-->


<div class="hero1">
        <div class="hero_left">
            <h1 class="hero_text"> Natural products that make a difference</h1>
            <a href="#products" class="btn1 hero_button">SHOP NOW!</a>
        </div>
        <div class="hero_img hero_right">
            <img src="media/hero.jpg" alt="hero">

        </div>

    </div>

    <!-- products-->


    <section id="products" class="section">
        <div class="title1">
            <h1 >Our Products</h1>
        </div>
        <div class="title2">
            <p>A story of nature and beauty</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="item">
                    <img src="media/item1.jpg" alt="item1">
                    <div class="pName">Purifying Serum</div>
                    <div class="price">
                        <h3 class="price">$13.99</h3>
                    </div>
                    <form action="php/cart.pro.php" method="post" class="ajax_form">
                    <input type="hidden" name="pName" value="Purifying Serum">
                    <input type="hidden" name="price" value="13.99">
                    <input type="hidden" name="img" value="media/item1.jpg">
                    <input type="hidden" name="id" value="item1">
                    <button type="submit" class="btn2" >Add to Cart</button>
                    </form>
                </div>
            </div>

            <div class="col">
                <div class="item">
                    <img src="media/item2.jpg" alt="item1">
                    <div class="pName">Detox Serum</div>
                    <div class="price">
                        <h3 class="price">$11.99</h3>
                    </div>
                    <form action="php/cart.pro.php" method="post" class="ajax_form">
                    <input type="hidden" name="pName" value="Detox Serum">
                    <input type="hidden" name="price" value="11.99">   
                    <input type="hidden" name="img" value="media/item2.jpg">
                    <input type="hidden" name="id" value="item2">
                    <button type="submit" class="btn2" >Add to Cart</button>
                    </form>
                </div>
            </div>


            <div class="col">
                <div class="item">
                    <img src="media/item3.jpg" alt="item1">
                    <div class="pName">Deep Sweep</div>
                    <div class="price">
                        <h3 class="price">$15.99</h3>
                        
                    </div>
                    <form action="php/cart.pro.php" method="post" class="ajax_form">
                    <input type="hidden" name="pName" value="Deep Sweep">
                    <input type="hidden" name="price" value="15.99">   
                    <input type="hidden" name="img" value="media/item3.jpg">
                    <input type="hidden" name="id" value="item3">
                    <button type="submit" class="btn2" >Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="row container">
            <div class="col">
                <div class="item">
                    <img src="media/item4.jpg" alt="item1">
                    <div class="pName">Pore Purifying</div>
                    <div class="price">
                        <h3 class="price">$17.99</h3>
         
                    </div>
                    <form action="php/cart.pro.php" method="post" class="ajax_form">
                    <input type="hidden" name="pName" value="Pore Purifying">
                    <input type="hidden" name="price" value="17.99">   
                    <input type="hidden" name="img" value="media/item4.jpg">
                    <input type="hidden" name="id" value="item4">
                    <button type="submit" class="btn2" >Add to Cart</button>
                    </form>
                </div>
            </div>

            <div class="col">
                <div class="item">
                    <img src="media/item5.jpg" alt="item1">
                    <div class="pName">Facial Serum</div>
                    <div class="price">
                        <h3 class="price">$17.99</h3>
                    
                    </div>
                    <form action="php/cart.pro.php" method="post" class="ajax_form">
                    <input type="hidden" name="pName" value="Facial Serum">
                    <input type="hidden" name="price" value="17.99">   
                    <input type="hidden" name="img" value="media/item5.jpg">
                    <input type="hidden" name="id" value="item5">
                    <button type="submit" class="btn2" >Add to Cart</button>
                    </form>
                </div>
            </div>


            <div class="col">
                <div class="item">
                    <img src="media/item6.jpg" alt="item1">
                    <div class="pName">Facial Treatment</div>
                    <div class="price">
                        <h3 class="price">$17.99</h3>
  
                    </div>
                    <form action="php/cart.pro.php" method="post" class="ajax_form">
                    <input type="hidden" name="pName" value="Facial Treatment">
                    <input type="hidden" name="price" value="17.99">   
                    <input type="hidden" name="img" value="media/item6.jpg">
                    <input type="hidden" name="id" value="item6">
                    <button type="submit" class="btn2">Add to Cart</button>
                    </form>
                </div>
            </div>


        </div>
    </section>
    <div class="center-hero">
        <div class="hero_img2">
            <h1 class="hero_text"> Our best products</h1>
            <a href="#products" class="btn3 hero_button">SHOP NOW</a>
        </div>
    </div>

    <?php
include_once 'php/footer.php';


?>




<script src="js/ajax.js" > </script>


<script>
let btn2List = document.querySelectorAll(".btn2");
let cart =  document.getElementById("cartHeader");
for (let b2 of btn2List){
    b2.addEventListener('click', function(){
        let count = Number(cart.textContent)+1;
        cart.textContent = count;
    })
}
</script>

