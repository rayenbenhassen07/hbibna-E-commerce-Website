<?php
include("../admin/connection.php");
session_start();
$id = $_GET['id'];
$ediit="SELECT * FROM product WHERE id='$id'";
$edit=mysqli_query($con,$ediit);
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- Meta Pixel Code -->
<script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '312803128038647');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=312803128038647&ev=PageView&noscript=1"
        /></noscript>
<!-- End Meta Pixel Code -->
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="Achat et vente en ligne de t-shirts pour homme sur le site hbibna.">
    <meta name="keywords"    content="hbibna.com,hbibna,habibna,tunisia,shop,store,hbibna shop">
    <link rel="icon" href="../img/logosolo2.png">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;500;600;700&family=Passion+One:wght@400;700;900&display=swap" rel="stylesheet">
    <title>hbibna</title>
    <style>
        /*-loader-------------*/
        .loader{
            width: 100vw;
            height: 100vh;
            position: fixed;
            z-index: 2001;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(var(--bgcolor-10),var(--bgcolor-11));
        
        }

        .loader::after{
            content: "";
            margin-right:0 ;
            align-items: center;
            width: 100px;
            height: 100px;
            border: 20px solid white;
            border-top-color:var(--bgcolor-9);
            border-radius: 50%;
            animation: loading 1s ease infinite;
        }

        @keyframes loading{
            from { transform: rotate(0turn)}
            to { transform: rotate(1turn) }
            
            }

    </style>
</head>
<body>
    <!------------------------------------------loader------------------------------------------>
    <div class="loader"></div>
 <!---------------------------------------  nav  ---------------------------------------------->
    <nav>
        <a href="../index.php"><img src="../img/logo3.png" alt="" ></a>
        <ul type="none">
            <i class='bx bx-x'></i>

            <div class="sous_ul">

                <div class="nav_party_lien">
                    <div class="nav_party_lien_box">
                        <li class="li1"><a href="../index.php">Home</a></li>
                        
                        
                    </div>
                    <!--
                    <div class="under_a" id="a_1">
                        <div class="only_a"><a href="">Men's Slippers</a></div>
                        <div class="only_a"><a href="">Women's Slippers</a></div>
                        <div class="only_a"><a href="">Sandals & Flip-Flops</a></div> 
                    </div>
                    -->
                </div>

                <div class="nav_party_lien">
                    <div class="nav_party_lien_box">

                        <li class="li2"><a href="../shop_all/shop_all.php" id="shop">boutique</a></li>
                        <i class='bx bx-chevron-down'></i>
                        
                    </div>

                    <div class="under_a" id="a_2">
                        <div class="only_a"><a href="../shop_all/shop_all.php">electromenager</a></div>
                    </div>
                </div>

                <div class="nav_party_lien">
                    <div class="nav_party_lien_box">
                        <li class="li3"><a href="../page-information/contacter-nous.html" id="contact" >Contacter nous</a></li>
                        <i class='bx bx-chevron-down'></i>
                        
                    </div>
                    <div class="under_a" id="a_3">
                    <div class="only_a"><a href="../page-information/contacter-nous.html">Contacter nous</a></div>
                        <div class="only_a"><a href="../page-information/aide-et-faq.html">Aide & FAQ</a></div>
                        
                    </div>
                </div>
                <!--
                <div class="nav_party_lien">
                    <div class="nav_party_lien_box">
                        <li class="li4">Interior Decoration</li>
                        <i class='bx bx-chevron-down'></i>
                        
                    </div>
                    <div class="under_a" id="a_4">
                    <div class="only_a"><a href="">Men's Slippers</a></div>
                        <div class="only_a"><a href="">Women's Slippers</a></div>
                        <div class="only_a"><a href="">Sandals & Flip-Flops</a></div>
                    </div>
                </div>
                -->

            </div>
            
        </ul>

        <div class="nav_party_left">
            
            <i class='bx bx-search' id="search-icon"></i>

            <!------------------------------------------------------------------icon(compte + favories)
            <i class='bx bx-user'></i>
            
            <div class='favories-box'>
                <i class='bx bx-star' ></i>
                <div class='favories-number'>0</div>
            </div>-->
            <div class="user_party">
                <i class='bx bx-user'></i>
                <?php 
                if(isset($_SESSION['auth']))
                {?>

                    <div class="option1">
                        <div class="op"><a href='#'>Mon compte</a></div>
                        <div class="op"><a href='#'>Ma liste</a></div>
                        <div class="op"><a href='../register.php'>Créer une compte</a></div>
                        <div class="op"><a href='../logout.php'>Se déconnecter</a></div>
                    </div>
                <?php
                }
                else{
                ?> 
                    <div class="option1">
                        <div class="op"><a href='../login.php'>Se connecter</a></div>
                        <div class="op"><a href='../register.php'>Créer une compte</a></div>
                        
                    </div>

                <?php
                }
                ?>
            </div>

            <div class='cart-bo'>
                <i class='bx bx-shopping-bag' id="shopping-bag"></i>
                <div class='nbproduct'>0</div>
            </div>
            
            <i class='bx bx-menu'></i>
            
        </div>

        <div class="search">
            <input type="text" placeholder=" Search...">
            <i class='bx bx-x' id="close-search"></i>
        </div>
    </nav>

    <!----------------------------Cart---------------------------->
    <div class="cart">
        <h3 class="cart-title">Your Cart</h3>
        <div class="cart-content">

        </div>
        <div class="total">
            <div class="total-title">Total :</div>
            
            <div class="total-price">0dt</div>
        </div>

        <a href="../formulaire.html"><button type="buttom" class="btn-buy" >Acheter Maintenant</button></a>

        <i class='bx bx-x' id="close-cart"></i>
        
    </div>

    <!-----------------------    --product---------------------------->

    <?php
     while($roww = mysqli_fetch_array($edit)){
        
        echo '

                <section class="product-party">
                
                    <div class="product-details">
                        <div class="product-imgs">
                            <img src="../admin/uploads/'.$roww['img1'].'" class="activee" alt="" class="img1">
                            <img src="../admin/uploads/'.$roww['img2'].'" alt="" class="img2">
                            <img src="../admin/uploads/'.$roww['img3'].'" alt="" class="img2">
                           
                        </div>
                    </div>
                
                    <div class="product-text">
                        <h3 class="product-name">'.$roww['name'].'</h3>
                        <p class="product-dis">'.$roww['slug'].'</p>
                        <div class="price">
                            <span class="product-price">'.$roww['selling_price'].' dt</span>
                            <span class="product-price-old">'.$roww['original_price'].' dt</span>

                        </div>

                        <!--kkk
                        <div class="size-zone">
                            <p class="product-size">select size</p>
                            <input type="radio" name="size" value="xs"  class="select_btn"  hidden id="xs-size">
                            <label for="xs-size" class="size-radio check">XS</label>
                            <input type="radio" name="size" value="s" class="select_btn" hidden id="s-size">
                            <label for="s-size" class="size-radio">S</label>
                            <input type="radio" name="size" value="m" class="select_btn" hidden id="m-size">
                            <label for="m-size" class="size-radio">M</label>
                            <input type="radio" name="size" value="l" class="select_btn" hidden id="l-size">
                            <label for="l-size" class="size-radio">L</label>
                        </div>
                        
                        </div>-->

                        <div class="pay">
                            <div class="quantity-party">
                                <label for="" class="quantity-text">Quantite :</label>
                                <button class="addquanty" onclick="addquanty()">+</button>
                                <input type="number" class="quantityy" placeholder="1" value="1">
                                <button class="sousquanty" onclick="sousquanty()">-</button>

                            </div>
                            
                            <button class="btn-cart" onclick="ajouter()">Ajouter Au Panier</button>
                        </div>
                    
                        <section class="description">
                            <span class="disc-title">description</span>
                            <p>'.$roww['description'].'</p>
                            <div class="matiriel">
                                
                                <div class="matier">'.$roww['small_description'].'</div>
                                

                            </div>
                            
                            <div class="desimg">
                                <img src="../admin/uploads/'.$roww['img4'].'" alt="" width="100%">
            
                            </div>

                            <div class="desvid">
                                
                            
                                <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/2vXJ6J1Yrlg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
                            
                            </div>
                        </section>
                    </div>
                </section>
        ';
    ?>
    
    

        
     <!-----------------------    --therd---------------------------->

        
     <section class="page2" id="page2-contient-all">
        <div class="page2_title">Les coups de coeur du mois</div>
        <i class='bx bx-chevrons-right' id="sahm1"></i>
        <i class='bx bx-chevrons-left' id="sahm2"></i>
        <div class="page2-contient">  
            <?php 
            $req = "SELECT * FROM product";
            $featured = mysqli_query($con,$req);
            if(!$featured){
                echo"feartured errors";
            }else{
                while ($row = mysqli_fetch_array($featured)) {
                    echo '
                            <div class="box">
                            <a href="product.php?id='.$row['id'].'">
                            <img src="../admin/uploads/'.$row['img1'].'" alt="">
                            <!--<div class="mark">addidas</div>-->
                            <h5 class="titlee-product">'.$row['name'].'</h5>  
                            <div class="stars">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                            </div>
                            
                            <div class="stock">en stock</div>
                            <div class="shopping-btn">
                                    <h6 class="product-pricee">'.$row['selling_price'].'dt</h6>
                                    <a ><i class="bx bx-shopping-bag add-cart"></i></a>
                            </div></a>
                            <!--<button class="acheter-btn">Plus de détails</button>-->
                        </div>
                    ';
                }  
            }

            ?>

        

        </div>



    </section>
            <br><br><br><br>


    <!---------------------------------------  page4  ---------------------------------------------->

    <section class="page4">
        <div class="page4_content">
            <i class='bx bxs-truck'></i>
            <div class="page4_content_content">Free shipping over $100.</div>
        </div>

        <div class="page4_content">
            <i class='bx bx-repeat' ></i>
            <div class="page4_content_content">30-day return policy.</div>
        </div>

        <div class="page4_content">
            <i class='bx bxs-lock'></i>
            <div class="page4_content_content">Secure payment with Paypal & credit card.</div>
        </div>

        <div class="page4_content">
            <i class='bx bx-credit-card'></i>
            <div class="page4_content_content"><p>Payment in 4 installments without charge.</p></div>
        </div>

    </section>

    <!-----------------------    --footer---------------------------->

    <section class="finaly">

        <div class="party1">

            <div class="p1 t1">
                <p>Need help?</p><br><button></button>
                <p>Support From 09:00 to 16:00</p><br>
                <p>Click here!</p>
                <div class="icon_sc">
                    <i class='bx bxl-facebook-circle' ></i>
                    <i class='bx bxl-instagram-alt' ></i>
                    <i class='bx bxs-envelope' ></i>
                    <i class='bx bxl-twitter' ></i>
                </div>
            </div>

            <div class="p1 t2">
                <a href="" ><p class="p1a">About the company</p></a>
                <a href="" ><p class="p1a">Shipping & return </p></a>
                <a href="" ><p class="p1a">Terms and conditions of sale</p></a>
                <a href="" ><p class="p1a">Legals</p></a>
            </div>

            <div class="p1 t3">
                <p>20€ GIFT* (FREE OF CHARGE)</p>
                <div class="sub">
                    <input type="text" placeholder="Your email adresse">
                    <button>subscribe</button>
                </div>
                <p>* Single use offer valid for purchases over 100€, cannot be combined</p>
                
            </div>


        </div>

        <div class="party2">
            <div class="copyright">© Hbibna 2023 - By hbibna</div>
            <div class="bank">
                <i class="fa-brands fa-cc-paypal"></i>
                <i class="fa-brands fa-cc-mastercard"></i>
                <i class="fa-brands fa-cc-visa"></i>
                <i class="fa-brands fa-cc-discover"></i>
            </div>
        </div>

        

    </section>



    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/shop.css">
    <link rel="stylesheet" href="../assets/css/all.css">


    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <script src="../assets/js/script2.js"></script>
    <script src="../assets/js/all.js"></script>
    <script src="../assets/js/add-to-cart.js"></script>


    <?php
    echo'
        <style>
            .product-details{
                background: url(../admin/uploads/'.$roww['img1'].') ;
                background-size: cover;
                background-position: center;
                
            }
        

        </style>';

    }
    
    ?>
    
    <script>
        /*-------------------------------image------------------------------- */
        const pi = document.querySelectorAll(".product-imgs img");
        const pbg = document.querySelector(".product-details");
        let a = 0;
        pi.forEach((item, i) => {
        item.addEventListener('click', () => {
            
            pbg.style.backgroundImage = `url('${item.src}')`;
            a = i;
            })
        })
        

        const loader = document.querySelector('.loader');
    
        window.addEventListener("load", function(){
            loader.style.display="none";
        })
    </script>
</body>
</html>