<?php
    // update_handler
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        require_once "Dconnect.php";
        $id = $_POST["id"];
        $fname= $_POST["Task"];
        $sName = $_POST["TaskDate"];
        $Goal = $_POST["Goal"];

        $query = "UPDATE task SET Task = ?, TaskDate = ?, Goal = ? WHERE id = ?";
        $stmt = mysqli_prepare($connection,$query);
         mysqli_stmt_bind_param($stmt, "sssi", $fname,$sName,$Goal,$id);
         mysqli_stmt_execute($stmt);
         echo "update was successfull"; 
         //header
         header( "Location: ../status.php");
        exit();



    }
?>