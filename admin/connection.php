<?php
/*
$dbhost = "hbibnaerayen.mysql.db";
$dbuser = "hbibnaerayen";
$dbpass = "Rayenbenhassen12345";
$dbname = "hbibnaerayen";

*/
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ecom";

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$con){
    die ("connection failed =".mysqli_connect_error());
}

if(isset($_POST["add-product"])){
    
    $category=$_POST['category'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $small_description=$_POST['small_description'];
    $description=$_POST['description'];
    $original_price=$_POST['original_price'];
    $selling_price=$_POST['selling_price'];
    $quantity=$_POST['quantity'];
    $status=isset($_POST['status'])? '1':'0';
    $populas=isset($_POST['populas'])? '1':'0';

    //-----------------------images
    $path = "uploads";

    $img1=$_FILES['img1']['name'];
    $img1_ex = pathinfo($img1, PATHINFO_EXTENSION);
    $filename1 = uniqid().'.'.$img1_ex;
    move_uploaded_file($_FILES['img1']['tmp_name'],$path.'/'.$filename1);
    
    

    $img2=$_FILES['img2']['name'];
    $img2_ex = pathinfo($img2, PATHINFO_EXTENSION);
    $filename2 = uniqid().'.'.$img2_ex;
    move_uploaded_file($_FILES['img2']['tmp_name'],$path.'/'.$filename2);


    $img3=$_FILES['img3']['name'];
    $img3_ex = pathinfo($img3, PATHINFO_EXTENSION);
    $filename3 = uniqid().'.'.$img3_ex;
    move_uploaded_file($_FILES['img3']['tmp_name'],$path.'/'.$filename3);

    $img4=$_FILES['img4']['name'];
    $img4_ex = pathinfo($img4, PATHINFO_EXTENSION);
    $filename4 = uniqid().'.'.$img4_ex;
    move_uploaded_file($_FILES['img4']['tmp_name'],$path.'/'.$filename4);
        
    
    $meta_Title=$_POST['meta_Title'];
    $meta_Description=$_POST['meta_Description'];
    $meta_Keywords=$_POST['meta_Keywords'];
    

    
    $product_queryy = "INSERT INTO product(category_id,name,slug,small_description,description,original_price,selling_price,qty
    ,status,trending,meta_title,meta_keywords,meta_discription,img1,img2,img3,img4) values('$category','$name','$slug','$small_description','$description','$original_price'
    ,'$selling_price','$quantity','$status','$populas','$meta_Title','$meta_Description','$meta_Keywords','$filename1','$filename2','$filename3','$filename4')";

    $product_query_run = mysqli_query($con,$product_queryy);
    
    if($product_query_run){
        
        header("Location: add_product.php");
        exit; 
        

    }


}

if(isset($_POST["update-product"])){
    
    $product_id=$_POST['product_id'];
    $category=$_POST['category'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $small_description=$_POST['small_description'];
    $description=$_POST['description'];
    $original_price=$_POST['original_price'];
    $selling_price=$_POST['selling_price'];
    $quantity=$_POST['quantity'];
    $status=isset($_POST['status'])? '1':'0';
    $populas=isset($_POST['populas'])? '1':'0';

    //-----------------------images
    

    
    

    
    

    $path = "uploads";


    $new_img1=$_POST['old_img1'];
    $img1=$_FILES['img1']['name'];
    if($img1 !=''){
        $img1_ex = pathinfo($img1, PATHINFO_EXTENSION);
        $filename1 = uniqid().'.'.$img1_ex;
        move_uploaded_file($_FILES['img1']['tmp_name'],$path.'/'.$filename1);
    }else{
        $filename1 = $new_img1;
    }
    
    
    $new_img2=$_POST['old_img2'];
    $img2=$_FILES['img2']['name'];
    if($img2 !=''){
        $img2_ex = pathinfo($img2, PATHINFO_EXTENSION);
        $filename2 = uniqid().'.'.$img2_ex;
        move_uploaded_file($_FILES['img2']['tmp_name'],$path.'/'.$filename2);
    }else{
        $filename2 = $new_img2;
    }
    

    $new_img3=$_POST['old_img3'];
    $img3=$_FILES['img3']['name'];
    if($img3 !=''){
        $img3_ex = pathinfo($img3, PATHINFO_EXTENSION);
        $filename3 = uniqid().'.'.$img3_ex;
        move_uploaded_file($_FILES['img3']['tmp_name'],$path.'/'.$filename3);
    }else{
        $filename3 = $new_img3;
    }
    
    
    $new_img4=$_POST['old_img4'];
    $img4=$_FILES['img4']['name'];
    if($img4 !=''){
        $img4_ex = pathinfo($img4, PATHINFO_EXTENSION);
        $filename4 = uniqid().'.'.$img4_ex;
        move_uploaded_file($_FILES['img4']['tmp_name'],$path.'/'.$filename4);
    }else{
        $filename4 = $new_img4;
    }


    $img3=$_FILES['img3']['name'];
    $img3_ex = pathinfo($img3, PATHINFO_EXTENSION);
    
    

    $img4=$_FILES['img4']['name'];
    $img4_ex = pathinfo($img4, PATHINFO_EXTENSION);
    
    
        
    
    $meta_Title=$_POST['meta_Title'];
    $meta_Description=$_POST['meta_Description'];
    $meta_Keywords=$_POST['meta_Keywords'];

   
    
    $ediit = "UPDATE product SET category_id='$category',name='$name',slug='$slug',small_description='$small_description',description='$description',original_price='$original_price',
    selling_price='$selling_price',qty='$quantity',status='$status',trending='$populas',meta_title='$meta_Title',meta_discription='$meta_Description'
    ,meta_keywords='$meta_Keywords',img1='$filename1',img2='$filename2',img3='$filename3',img4='$filename4'  WHERE id='$product_id'";

    $edit=mysqli_query($con,$ediit);
    if ($edit) {
        header("Location: all_product.php");
        exit; 
    }
}

if(isset($_POST["update-Cat"])){

    $product_id=$_POST['cat_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $status=isset($_POST['status'])? '1':'0';
    $populas=isset($_POST['populas'])? '1':'0';

    //-----------------------images
    

    
    

    
    

    $path = "uploads";


    $new_img1=$_POST['old_img1'];
    $img1=$_FILES['img1']['name'];
    if($img1 !=''){
        $img1_ex = pathinfo($img1, PATHINFO_EXTENSION);
        $filename1 = uniqid().'.'.$img1_ex;
        move_uploaded_file($_FILES['img1']['tmp_name'],$path.'/'.$filename1);
    }else{
        $filename1 = $new_img1;
    }
    
    
    $new_img2=$_POST['old_img2'];
    $img2=$_FILES['img2']['name'];
    if($img2 !=''){
        $img2_ex = pathinfo($img2, PATHINFO_EXTENSION);
        $filename2 = uniqid().'.'.$img2_ex;
        move_uploaded_file($_FILES['img2']['tmp_name'],$path.'/'.$filename2);
    }else{
        $filename2 = $new_img2;
    }
    

    $new_img3=$_POST['old_img3'];
    $img3=$_FILES['img3']['name'];
    if($img3 !=''){
        $img3_ex = pathinfo($img3, PATHINFO_EXTENSION);
        $filename3 = uniqid().'.'.$img3_ex;
        move_uploaded_file($_FILES['img3']['tmp_name'],$path.'/'.$filename3);
    }else{
        $filename3 = $new_img3;
    }
    
    
    $new_img4=$_POST['old_img4'];
    $img4=$_FILES['img4']['name'];
    if($img4 !=''){
        $img4_ex = pathinfo($img4, PATHINFO_EXTENSION);
        $filename4 = uniqid().'.'.$img4_ex;
        move_uploaded_file($_FILES['img4']['tmp_name'],$path.'/'.$filename4);
    }else{
        $filename4 = $new_img4;
    }


    $img3=$_FILES['img3']['name'];
    $img3_ex = pathinfo($img3, PATHINFO_EXTENSION);
    
    

    $img4=$_FILES['img4']['name'];
    $img4_ex = pathinfo($img4, PATHINFO_EXTENSION);
    
    
        
    
    $meta_Title=$_POST['meta_Title'];
    $meta_Description=$_POST['meta_Description'];
    $meta_Keywords=$_POST['meta_Keywords'];

   
    
    $ediit = "UPDATE categoes SET name='$name',slug='$slug',description='$description',
    status='$status',popular='$populas',meta_title='$meta_Title',meta_description='$meta_Description'
    ,meta_keywords='$meta_Keywords',img1='$filename1',img2='$filename2',img3='$filename3',img4='$filename4'  WHERE id='$product_id'";

    $edit=mysqli_query($con,$ediit);
    if ($edit) {
        header("Location: all_Categories.php");
        exit; 
    }
}

if(isset($_POST['delete_pro'])){
    $product_id=$_POST['product_id'];
    $delete = " DELETE FROM product WHERE id='$product_id' ";
    $update_res=mysqli_query($con,$delete);
    if($update_res){
        header("Location: all_product.php");
        exit; 
    }

}

if(isset($_POST['delete_Cat'])){
    $Categories_id=$_POST['categories_id'];
    $delete = " DELETE FROM categoes WHERE id='$Categories_id' ";
    $update_res=mysqli_query($con,$delete);
    if($update_res){
        header("Location: all_Categories.php");
        exit; 
    }

}

if(isset($_POST["add_categories"])){
    
    
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    
    $description=$_POST['description'];
    
    $status=isset($_POST['status'])? '1':'0';
    $populas=isset($_POST['populas'])? '1':'0';

    //-----------------------images
    $path = "uploads";

    $img1=$_FILES['img1']['name'];
    $img1_ex = pathinfo($img1, PATHINFO_EXTENSION);
    $filename1 = uniqid().'.'.$img1_ex;
    move_uploaded_file($_FILES['img1']['tmp_name'],$path.'/'.$filename1);
    
    

    $img2=$_FILES['img2']['name'];
    $img2_ex = pathinfo($img2, PATHINFO_EXTENSION);
    $filename2 = uniqid().'.'.$img2_ex;
    move_uploaded_file($_FILES['img2']['tmp_name'],$path.'/'.$filename2);


    $img3=$_FILES['img3']['name'];
    $img3_ex = pathinfo($img3, PATHINFO_EXTENSION);
    $filename3 = uniqid().'.'.$img3_ex;
    move_uploaded_file($_FILES['img3']['tmp_name'],$path.'/'.$filename3);

    $img4=$_FILES['img4']['name'];
    $img4_ex = pathinfo($img4, PATHINFO_EXTENSION);
    $filename4 = uniqid().'.'.$img4_ex;
    move_uploaded_file($_FILES['img4']['tmp_name'],$path.'/'.$filename4);
        
    
    $meta_Title=$_POST['meta_Title'];
    $meta_Description=$_POST['meta_Description'];
    $meta_Keywords=$_POST['meta_Keywords'];
    

    
    $add_cat = "INSERT INTO categoes(name,slug,description,status,popular,meta_title,meta_description,meta_keywords,img1,img2,img3,img4) values('$name','$slug','$description'
    ,'$status','$populas','$meta_Title','$meta_Description','$meta_Keywords','$filename1','$filename2','$filename3','$filename4')";

    $add_cat_run = mysqli_query($con,$add_cat);
    
    if($add_cat_run){
        
        header("Location: add_Categories.php");
        exit; 
        

    }


}

?>