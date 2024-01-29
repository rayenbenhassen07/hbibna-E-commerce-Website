

<?php
include("connection.php");
include("../middleware/adminMiddleware.php");
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/welcom.css">
    <link rel="stylesheet" href="assets/dashboard.css">
    <link rel="icon" href="../img/logosolo2.png">
    <script>
        alerrt('eee');
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Hbibna- dashboard</title>
    <script src="ff.js"></script>
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

    <?php 
        if(isset($_SESSION['message'])){
    ?>

        <div class="error_information_in_index"><?php echo $_SESSION['message']  ; ?><i class='bx bxs-check-circle'></i></div>
    <?php
        unset($_SESSION['message']);
        }
                    
    ?>

    <i class='bx bxs-food-menu' onclick="alii()"></i> 
    <section class="welcome_page">
    
        <div class="dashbar">
            <div class="dashboard_header">
                
                <img  src="img/logoad.png" alt="" width="50px">
            </div>
            <div class="dashboard_body">
                
                <a href="index.php">
                    <div class="menu1" id="dash_buttom">
                        <div class="menu_icon"><i class='bx bxs-dashboard' ></i></div>
                        <h5>Dashboard</h5>
                    </div>
                </a>

                <div class="between_dash">Product Party
                <i class='bx bx-chevron-down'></i>
                </div>
                
                <a href="add_product.php">
                    <div class="menu1">
                        <div class="menu_icon"><i class='bx bx-image-add' ></i></div>
                        <h5>Add Product</h5>

                        
                        
                    </div>
                </a>
                
                <a href="all_product.php">
                    <div class="menu1">
                        <div class="menu_icon"><i class='bx bx-images'></i></div>
                        <h5>See Product</h5>
                        <?php
                            $nbproo = "SELECT COUNT(id) AS count FROM product";
                            $resultt = mysqli_query($con, $nbproo);
                            
                            if ($resultt) {
                                $row = mysqli_fetch_assoc($resultt);
                                $count = $row['count'];
                                echo '<div class="add_product_number">'.$count.'</div>';
                            } else {
                                echo "Query execution failed.";
                            }
                        ?>
                    </div>
                    
                </a>
                
                <div class="between_dash">Categories Party 
                <i class='bx bx-chevron-down'></i>
                </div>


                <a href="add_Categories.php">
                    <div class="menu1">
                        <div class="menu_icon"><i class='bx bxs-add-to-queue'></i></div>
                        <h5>Add Categories</h5>
                    </div>
                    
                </a>

                <a href="all_Categories.php">
                    <div class="menu1">
                        <div class="menu_icon"><i class='bx bx-category-alt' ></i></div>
                        <h5>See Categories</h5>
                        <?php
                            $nbcat = "SELECT COUNT(id) AS count FROM categoes";
                            $resulcat = mysqli_query($con, $nbcat);
                            
                            if ($resulcat) {
                                $row = mysqli_fetch_assoc($resulcat);
                                $count = $row['count'];
                                echo '<div class="add_product_number">'.$count.'</div>';
                            } else {
                                echo "Query execution failed.";
                            }
                        ?>
                    </div>
                    
                </a>

                
            </div>
            <!--
            <div class="dashboard_footer">
                <button>refreach</button>
                
            </div>-->
            
            
        </div>


        
        <div class="header">
            <div class="titlee">
                <h1>Dashboard</h1>
            </div>
        
            <div class="sta-all">

                <div class="stat s1">
                    <div  class="stat-logo stat-logo1">
                        <i class='bx bxs-package'></i>
                    </div>
                    <div class="stat-cont 1">
                        Numbre of Order
                    </div>
                    <div class="stat-number 1">
                    <?php
                        $nbpro = "SELECT COUNT(id) AS count FROM Commande";
                        /*$nbpro = "SELECT COUNT(id) AS count FROM product";*/
                        $result = mysqli_query($con, $nbpro);
                        
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $count = $row['count'];
                            echo $count;
                        } else {
                            echo "Query execution failed.";
                        }
                        ?>
                    </div>


                </div>

                <div class="stat s2">
                    <div  class="stat-logo stat-logo2">
                        <i class='bx bxs-copy-alt'></i>
                    </div>
                    <div class="stat-cont 2">
                        Number of Product
                    </div>
                    <div class="stat-number 2">
                    <?php
                        $nbpro = "SELECT COUNT(id) AS count FROM product";
                        $result = mysqli_query($con, $nbpro);
                        
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $count = $row['count'];
                            echo $count;
                        } else {
                            echo "Query execution failed.";
                        }
                        ?>
                    </div>
                    

                </div>

                <div class="stat s3">
                    <div  class="stat-logo stat-logo3">
                        <i class='bx bx-money-withdraw'></i>
                    </div>
                    <div class="stat-cont 3">
                        Total money
                    </div>
                    <div class="stat-number 2">
                    <?php
                        $nbpro = "SELECT SUM(prixx) AS somme FROM Commande";
                        $result = mysqli_query($con, $nbpro);
                        
                        if ($result) {
                            $row = mysqli_fetch_assoc($result);
                            $somme = $row['somme'];
                            echo $somme.' dt';
                        } else {
                            echo "Query execution failed.";
                        }
                        ?>
                    </div>
                    

                </div>

                <div class="stat s4">
                    <div  class="stat-logo stat-logo4">
                        <i class='bx bxs-package'></i>
                    </div>
                    <div class="stat-cont 4">

                    </div>

                </div>


            </div>
            <div class="sta-alll">

                <div class="courb courb1">
                    <div class="title">Last Product</div>
                    <div class="sta-alll-content">
                        <table class="product_name_table">
                            <thead>
                                <tr>
                                    <td class="ttitle">Id</td>
                                    <td class="ttitle">Name</td>
                                    <td class="ttitle">Tell</td>
                                    <td class="ttitle">Adresse</td>
                                    <td class="ttitle">Prix</td>
                                    
                                </tr>
                            </thead>
                            
                            <?php
                                $i = 0;
                                $select = mysqli_query($con,"SELECT * FROM Commande ORDER BY id DESC");
                                while (($row = mysqli_fetch_array($select)) && ($i<6)) {
                                    $i++;
                                    echo '
                                    <tr>
                                        <td>'.$row['id'].'</td>
                                        
                                        <td class="name_tdd" width="50px">'.$row['prenom'].' '.$row['nom'].'</td>
                                        <td>'.$row['tell'].'</td>
                                        <td class="name_tdd">'.$row['adresse'].'</td>
                                        <td>'.$row['prixx'].'dt</td>
                                        
                                        
                                        
                                    </tr>
                                    ';
                                }
                                /*
                                $i = 0;
                                $select = mysqli_query($con,"SELECT * FROM product ORDER BY id DESC");
                                while (($row = mysqli_fetch_array($select)) && ($i<6)) {
                                    $i++;
                                    echo '
                                    <tr>
                                        <td>'.$row['id'].'</td>
                                        
                                        <td class="name_tdd" width="50px">'.$row['id'].'</td>
                                        <td>'.$row['id'].'</td>
                                        <td class="name_tdd">'.$row['id'].'</td>
                                        <td>'.$row['id'].'</td>
                                        
                                        
                                        
                                    </tr>
                                    ';
                                }*/

                            ?>
                    </table>
                        
                    </div>
                </div>

                <div class="courb courb2">
                    <div class="title">Add Product</div>
                </div>
                

            </div>
            
        </div>
        
    </section>
    
    
</body>

    <script>
            
            var i=0;
            let dash = document.querySelector('.dashbar');
            function alii(){
                if(i==1){
                    dash.classList.remove("active");
                    i=0;
                }else{
                    dash.classList.add("active");
                    i=1;
                }  
            }

            
            const loader = document.querySelector('.loader');
            window.addEventListener("load", function(){
                loader.style.display="none";
            })
    
            
    </script>




</html>