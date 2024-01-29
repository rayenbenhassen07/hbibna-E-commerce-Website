<?php
session_start();
include('../admin/connection.php');

if(isset($_POST['creer_compte'])){
    $prenom=mysqli_real_escape_string($con,$_POST['prenom']);
    $nom=mysqli_real_escape_string($con,$_POST['nom']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mdp=mysqli_real_escape_string($con,$_POST['mdp']);
    $cmdp=mysqli_real_escape_string($con,$_POST['cmdp']);
    // Controle email deja existe ou non 

    $controle_email=mysqli_query($con,"SELECT email FROM users WHERE email ='$email';");
    if(mysqli_num_rows($controle_email)>0){
        $_SESSION['message'] = "l'email existe déjà !!";
        
        header('location:../register.php');
    }
    else{
        // Conrole de mot de passe
        if($mdp == $cmdp){
            $requet  = "INSERT INTO users (prenom,nom,email,mdp,c_mdp)VALUES('$prenom','$nom','$email','$mdp','$cmdp');";
            $valid1  = mysqli_query($con,$requet);

            if($valid1){
                $_SESSION['message']="Compte est Créer !!";
                header('location:../login.php');
            }
            else{
                $_SESSION['message'] = "somthing went wrong !!";
                header('location:../register');
            }

        }


        else{
            $_SESSION['message'] = "Mot de passe incorrecte !!";
            
            header('location:../register.php');
        }

    }

    
}

else if(isset($_POST['login_compte'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $mdp=mysqli_real_escape_string($con,$_POST['mdp']);

    $login_requet=mysqli_query($con,"SELECT * FROM users WHERE email='$email' AND mdp='$mdp';");
    if(mysqli_num_rows($login_requet) > 0 ){

        $_SESSION['auth']= true;

        $userdata = mysqli_fetch_array($login_requet);
        $username = $userdata['prenom'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];


        $_SESSION['auth_user'] = [
            'name' => $username,
            'email'=> $useremail
        ];

        $_SESSION['role_as']= $role_as ;

        if($role_as == 1){
            $_SESSION['message'] = 'Welcome to dashboard';
            header('location:../admin/index.php') ;

        }else{
            $_SESSION['message'] = 'connectez-vous avec succès';
            header('location:../index.php') ;

        }

        


        
    }
    else{
        $_SESSION['message'] = 'La connexion au compte est incorrecte';
        header('location:../login.php');
    }
}




?>