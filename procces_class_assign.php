<?php
    require_once "includes/connect_classassign.php";
    $query = "INSERT INTO class_assign ( Name, Age, ) VALUES( ?,?)";
    
    $stmt =mysqli_prepare($connection,$query);
    
    
    if(!$stmt){
        die( "Prepared Failed.".mysqli_error($connection));
    }

   
   function registerNameAndAge($Name,$Age){
    $Name=$_POST["Name"];
    $Age=$_POST["Age"];
    
    
   
   
    echo"Hello, $Name! you are $Age years old.";


   }
   if($_SERVER['REQUEST_METHOD'] ==='POST'){
    registerNameAndAge($Name,$Age);
   }
?>