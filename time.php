<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TASK</title>
    <?php
        include "includes/head.html";
    ?>
</head>
<body>
    <div class="container" class="bg" style="background-image:url(images/0cean.jpg);">
            <div class="row">
            <?php include 'includes/nav.php';
                    
            ?>
        
            </div>
            <div class="row">
                <div>
                    <form action="includes/process_task.php" name="" method="Post" >
                        <div class="form-group" style=" margin-top:50px;" >
                        
                            <input type="text" name="Task" value="" class="form-control" placeholder="Task">
                        </div>
                        <div class="form-group">
                        
                            <input type="text" name="Goal" value="" class="form-control" placeholder="Goal" style=" margin-top:10px;">
                        </div>
                        <div class="form-group">
                            <input type="text" name="TaskDate" value="" class="form-control" placeholder="Date" style=" margin-top:10px;">
                            <button type="submit" class="btn btn-success" style=" margin-top:5px;"> Submit</button>
                            <td class="delete"> <a href="addtask.php?del_task=<?php echo $row['ID'] ?>"></a> </td>
                            
                        </div>


                    </form>
                </div>

                

        </div>
        <?php
            //  footer section  
           include("footer.php");
       ?>