
<?php
include("connection.php");
$id = $_GET['id'];
$ediit="SELECT * FROM categoes WHERE id='$id'";
$edit=mysqli_query($con,$ediit);


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
    <script src="assets/wolcom.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Edit Product</title>
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
        
            <?php
                
                while ($row = mysqli_fetch_array($edit)) {
                    echo '
                    <div class="header">

                <div class="title">Edit Product</div>
                <form action="connection.php" method="post" enctype="multipart/form-data">

                    

                    <div class="f23">
                        <div class="f2">
                            <label name="">Name</label><br>
                            <input type="text" required name="name" value="'.$row['name'].'" placeholder="enter name" >
                        </div>

                        <div class="f3">
                            <label name="">Slug</label><br>
                            <input type="text" required name="slug" value="'.$row['slug'].'" placeholder="enter slug" >
                        </div>
                    </div>


                    <div class="f4">
                        <label name="">description</label><br>
                        <textarea rows="3" required name="description" placeholder="enter description" >'.$row['description'].'</textarea>

                    </div>

                    

                    <div class="f7910">
                        
                        <div class="f910">
                            <div class="f9">
                                <label name="">Status</label><br>
                                <input type="checkbox" '. ($row['status'] == '0' ? '' : 'checked') .' name="status">
                            </div>

                            <div class="f10">
                                <label name="">Popular</label><br>
                                <input type="checkbox"  '. ($row['popular'] == '0' ? '' : 'checked') .' name="populas">
                                <input type="hidden" name="cat_id"  value="'.$_GET['id'].'" alt="img1">
                            </div>
                        </div>
                    </div>

                    <div class="upload">
                        
                        <div class="f7">
                            <label for="img1">Image 1</label><br>
                            <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img1" id="img1">
                            <img src="uploads/'.$row['img1'].'" alt="product img" height="50px" width="50px">
                            <input type="hidden" name="old_img1" value="'.$row['img1'].'" alt="img1">
                        </div>

                        <div class="f7">
                            <label for="img2">Image 2</label><br>
                            <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img2" id="img2">
                            <img src="uploads/'.$row['img2'].'" alt="product img" height="50px" width="50px">
                            <input type="hidden" name="old_img2" value="'.$row['img2'].'" alt="img2">
                        </div>
                        <div class="f7">
                            <label for="img3">Image 3</label><br>
                            <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img3" id="img3">
                            <img src="uploads/'.$row['img3'].'" alt="product img" height="50px" width="50px">
                            <input type="hidden" name="old_img3" value="'.$row['img3'].'" alt="img3">
                        </div>

                        <div class="f7">
                            <label for="img4">Image 4</label><br>
                            <input type="file"  accept="image/png, image/jpeg, image/jpg" name="img4" id="img4">
                            <img src="uploads/'.$row['img4'].'" alt="product img" height="50px" width="50px">
                            <input type="hidden" name="old_img4" value="'.$row['img4'].'" alt="img4">
                        </div>

                        
                    </div>

                    

                    <div class="f10">
                        <label name="">Meta Title</label><br>
                        <input type="text" required value="'.$row['meta_title'].'" name="meta_Title" placeholder="enter Meta Title" >
                    </div>

                    <div class="f11">
                        <label name="">Meta Description</label><br>
                        <textarea rows="3" required  name="meta_Description" placeholder="enter Meta Description" >'.$row['meta_description'].'</textarea>
                    </div>

                    <div class="f12">
                        <label name="">Meta Keywords</label><br>
                        <textarea rows="3" required  name="meta_Keywords" placeholder="enter meta Keywords" >'.$row['meta_keywords'].'</textarea>
                    </div>




                    <div class="validation">
                        <button type="submit" class="valider-btn" name="update-Cat">Save</button>
                    </div>





                </form>
            </div>
                    
                    
                    ';
                    
                        
                }
                
                
            ?>
            





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