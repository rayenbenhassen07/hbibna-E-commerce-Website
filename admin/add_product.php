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
    <link rel="stylesheet" href="assets/add_product.css">
    <link rel="icon" href="../img/logosolo2.png">
    <script src=ff.js></script>
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

            <div class="title">Add Product</div>
            <form action="connection.php" method="post" enctype="multipart/form-data">

                <div class="f1">
                    <label name="">Select Category</label><br>
                    <select name="category">
                        
                        <?php 
                        
                        $select_cat = mysqli_query($con,"SELECT * FROM categoes");
                        while ($row = mysqli_fetch_array($select_cat)) {
                            echo '
                                <option value="1">'.$row['name'].'</option>
                            ';
                        }
                    
                        ?>
                    </select>
                </div>

                <div class="f23">
                    <div class="f2">
                        <label name="">Name</label><br>
                        <input type="text" required name="name" placeholder="enter name" >
                    </div>

                    <div class="f3">
                        <label name="">Slug</label><br>
                        <input type="text" required name="slug" placeholder="enter slug" >
                    </div>
                </div>

                <div class="f4">
                    <label name="">Small description</label><br>
                    <textarea rows="3" required name="small_description" placeholder="enter small description" ></textarea>

                </div>

                <div class="f4">
                    <label name="">description</label><br>
                    <textarea rows="3" required name="description" placeholder="enter description" ></textarea>

                </div>

                <div class="f56">
                    <div class="f5">
                        <label name="">Original Price</label><br>
                        <input type="text" required name="original_price" placeholder="enter original price" >
                    </div>

                    <div class="f6">
                        <label name="">Selling Price</label><br>
                        <input type="text" required name="selling_price" placeholder="enter selling price" >
                    </div>
                </div>

                <div class="f7910">
                    <div class="f8">
                        <label name="">Quantity</label><br>
                        <input type="number" required name="quantity" placeholder="enter quantity" >
                    </div>
                    <div class="f910">
                        <div class="f9">
                            <label name="">Status</label><br>
                            <input type="checkbox" name="status">
                        </div>

                        <div class="f10">
                            <label name="">Popular</label><br>
                            <input type="checkbox" name="populas">
                        </div>
                    </div>
                </div>

                <div class="upload">
                    
                    <div class="f7">
                        <label for="img1">Image 1</label><br>
    
                        <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img1" id="img1">
                    </div>

                    <div class="f7">
                        <label for="img2">Image 2</label><br>
                        <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img2" id="img2">
                    </div>
                    <div class="f7">
                        <label for="img3">Image 3</label><br>
                        <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img3" id="img3">
                    </div>

                    <div class="f7">
                        <label for="img4">Image 4</label><br>
                        <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img4" id="img4">
                        
                    </div>

                    
                </div>

                

                <div class="f10">
                    <label name="">Meta Title</label><br>
                    <input type="text" required name="meta_Title" placeholder="enter Meta Title" >
                </div>

                <div class="f11">
                    <label name="">Meta Description</label><br>
                    <textarea rows="3" required name="meta_Description" placeholder="enter Meta Description" ></textarea>
                </div>

                <div class="f12">
                    <label name="">Meta Keywords</label><br>
                    <textarea rows="3" required name="meta_Keywords" placeholder="enter meta Keywords" ></textarea>
                </div>


                <div class="validation">
                    <button type="submit" class="valider-btn" name="add-product">Save</button>
                </div>





            </form>
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