<?php
   require_once "includes/Dconnect.php";
    // Delete_handler
    if(isset($_GET["id"]) && is_numeric($_GET["id"])){
        
        $id = $_GET["id"];
       
        $query = "DELETE FROM task WHERE id = ?";

        $stmt = mysqli_prepare($connection,$query);
         mysqli_stmt_bind_param($stmt, "i", $id);
         if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_close($stmt);
            mysqli_close($connection);
            header( "Location: status.php");
            exit();
         }
        
        else {
            die("Delete query failed.");

        }
    }
    else {
        die("Error");
    }
?>