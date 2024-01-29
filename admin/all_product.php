

<?php
include("connection.php");
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
    <link rel="stylesheet" href="assets/all_product.css">
    <link rel="icon" href="../img/logosolo2.png">
    <script src="assets/wolcom.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
 
    <title>dashboard</title>
    
</head>
<body>
    <section class="welcome_page">
        <div class="dashbar">
            <div class="dashboard_header">
                
                <img  src="img/logosolo2.png" alt="" width="50px">
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
            <div class="title">See Product</div>
            <div class="product_display">
                <table class="product_display_table">
                    <thead>
                        <tr>
                            <td class="ttitle">Id</td>
                            <td class="ttitle">Image</td>
                            <td class="ttitle">Name</td>
                            <td class="ttitle">O_Price</td>
                            <td class="ttitle">S_Price</td>
                            <td class="ttitle">Edit</td>
                            
                        </tr>
                    </thead>
                    <?php
                        $select = mysqli_query($con,"SELECT * FROM product");
                        while ($row = mysqli_fetch_array($select)) {
                            echo '
                            <tr>
                                <td class="id_td">'.$row['id'].'</td>
                                <td class="img_td"><img src="uploads/'.$row['img1'].'" alt=""></td>
                                <td class="name_td" >'.$row['name'].'</td>
                                <td class="op_td">'.$row['original_price'].'</td>
                                <td class="sp_td">'.$row['selling_price'].'</td>
                                
                                <td class="edit_td">
                                    <a href=edit_product.php?id='.$row['id'].'><button name="edit_pro" class="edit_btn">edit</button></a><br>
                                    <form method="POST" action="connection.php">

                                        <input type="hidden" name="product_id" value='.$row['id'].'>
                                        <a href=edit_product.php><button name="delete_pro" class="delete_btn">delete</button></a>
                                    
                                    </form>
                                </td>
                                
                            </tr>
                            ';
                        }
                    ?>



                </tabele>
            </div>
        </div>
                    </div>


    </section>
    
    
    <i class='bx bxs-food-menu' onclick="alii()"></i> 
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
            
    </script>




</html>