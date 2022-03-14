<?php
     $user=$Email="";
     $userErr = $EmailErr="";
     if($_SERVER["REQUEST_METHOD"]=="POST"){
         if(empty($_POST["user"])){
             $userErr="*Fill the username..";
         }
         else{
             $user = $_POST["user"];
         }
         if(preg_match('/^\w{10,}$/', $user)) {
             $userErr=" use only alphabets";

        }
         if(empty($_POST["Email"])){
            $EmailErr="*Email must be filled..";
         }
         else{
            $Email = $_POST["Email"];
         }
        
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
            $EmailErr=" invalid email address";
        }
        

    }
?>
