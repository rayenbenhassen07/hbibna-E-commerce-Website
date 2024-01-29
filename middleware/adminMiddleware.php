<?php

if(isset($_SESSION['auth'])){
    if($_SESSION['role_as'] != 1){
        $_SESSION['message'] = "vous n'avez pas la permission d'accéder à cette page";
        header('location:../index.php');
    }
}
else{
    $_SESSION['message'] = 'connectez-vous pour continuer';
    header('location:../login.php');

}

?>