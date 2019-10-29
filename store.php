<?php 
    include 'dbconnexion.php';
        if (!empty($_POST))
        {
            $firstn = $_POST['firstn'];
            $lastn = $_POST['lastn'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
        
            $bdd->exec("INSERT INTO students (firstname,lastname,email,phone) VALUES ('$firstn','$lastn','$email','$phone')");
                echo "etudiant  a éte ajouté a la BD";
           header('location: create.php');
//require
            exit;
            
            
         }
    
?>