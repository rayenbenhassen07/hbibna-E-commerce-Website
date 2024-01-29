<?php 
include("../admin/connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
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

                        <li class="li2"><a href="shop_all.php" id="shop">boutique</a></li>
                        <i class='bx bx-chevron-down'></i>
                        
                    </div>

                    <div class="under_a" id="a_2">
                        <div class="only_a"><a href="shop_all.php">electromenager</a></div>
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
                        <div class="op"><a href='register.php'>Créer une compte</a></div>
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
    <!---------------------------------------  cart  ---------------------------------------------->

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

        <!-----------------------    --shop---------------------------->
        
    <div class="all-shop">
        <div class="search_all">
            
            <div class="sea">
                <input type="search" id="search-saisie" class="search-saisie" placeholder="  Search..." onkeyup="search()">
                <button>Search</button>
            </div>

        </div>
        
        
    

        
        <div class="page-shop">  
            <?php 
            $req = "SELECT * FROM product";
            $featured = mysqli_query($con,$req);
            if(!$featured){
                echo"feartured errors";
            }else{
                while ($row = mysqli_fetch_array($featured)) {
                    echo '
                            <div class="box">
                            <a href="../products/product.php?id='.$row['id'].'">
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
    </div>

        <!---------------------------------------  finaly  ---------------------------------------------->
<br><br><br><br><br><br><br><br>
        <section class="finaly">

<div class="party1">

    <div class="p1 t1">
        <p>Need help?</p><br><button></button>
        <p>Support From 09:00 to 16:00</p><br>
        <p>Click here!</p>
        <div class="icon_sc">
                    <a href="https://www.facebook.com/profile.php?id=100038322585073" target="_black"><i class='bx bxl-facebook-circle' ></i></a>
                    <a href="https://www.instagram.com/rayenbenhassen12/" target="_black"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href=""><i class='bx bxs-envelope' ></i></a>
                    <a href="https://x.com/rayenbenhassen?s=11" target="_black"><i class='bx bxl-twitter' ></i></a>
        </div>
    </div>

    <div class="p1 t2">
        <a href="../page-information/contacter-nous.html" ><p class="p1a">Contactez nous</p></a>
        <a href="../page-information/aide-et-faq.html" ><p class="p1a">Aide & FAQ </p></a>
        <a href="../page-information/conditions-utilisateur.html" ><p class="p1a">Conditions d'utilisation</p></a>
        <a href="../page-information/retours-echanges.html" ><p class="p1a">Retours & échanges</p></a>

        <a href="../page-information/politique-de-confidentialite.html" ><p class="p1a">Politique de Confidentialité</p></a>
        <a href="../page-information/a-propos.html" ><p class="p1a">À propos </p></a>
        <a href="../page-information/methode-payement.html" ><p class="p1a">Méthodes de payement</p></a>
        <a href="../page-information/expedition-manutention.html" ><p class="p1a">Expedition et manutention</p></a>
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
 


<!-----------------------------------------------|||||||||||||||||||||||||||||||||----------------------------------------------------------------->
    <script src="../assets/js/all.js"></script>
    <script src="../assets/js/add-to-cart.js"></script>\
    <script src="../assets/js/script3.js"></script>

    <link rel="stylesheet" href="../assets/css/shop-all.css">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <script>
            const loader = document.querySelector('.loader');
            window.addEventListener("load", function(){
                loader.style.display="none";
            })
    </script>
 
</body>
</html>