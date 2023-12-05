<?php 
     

       require_once "Dconnect.php";
      
          
    $query = "INSERT INTO task ( Task, Goal, TaskDate ) VALUES( ?,?,?)";
    
    $stmt =mysqli_prepare($connection,$query);


    if(!$stmt){
        die( "Prepared Failed.".mysqli_error($connection));
    }
    mysqli_stmt_bind_param($stmt,"sss",$Task,$Goal,$Date);
    $Task=$_POST["Task"];
    $Goal=$_POST["Goal"];
    $Date=$_POST["TaskDate"];

    if(mysqli_stmt_execute($stmt)){
        echo"Data inserted successfully.";
    }
    else{
        die("execute failed.".mysqli_error($connection));

    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);




     
?>