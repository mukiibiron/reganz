<?php
    require_once "Dconnect.php";
   
    $query = "INSERT INTO profile ( Name, Telephone, Avatar ) VALUES( ?,?,?)";
    
    $stmt =mysqli_prepare($connection,$query);


    if(!$stmt){
        die( "Prepared Failed.".mysqli_error($connection));
    }
    mysqli_stmt_bind_param($stmt,"sss",$Name,$Telephone, $Avatar);
    $Name=$_POST["Name"];
    $Telephone=$_POST["Telephone"];
    
    
       /// use file the content to read the image file
    $AvatarPath = $_FILES["Avatar"]["tmp_name"];
    $Avatar = file_get_contents($AvatarPath);

    if(mysqli_stmt_execute($stmt)){
        echo"Data inserted successfully.";
    }
    else{
        die("execute failed.".mysqli_error($connection));

    }
    mysqli_stmt_close($stmt);
    mysqli_close($connection);


    
    

?>