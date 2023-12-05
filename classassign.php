<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLASS</title>
    <?php
        include "includes/head.html";
        include "includes/connect_classassign.php";
        
    ?>
</head>
<body>
    <?php
        if(empty($_POST['username'])){
            $username_error = "Please enter the username";
        }
        else if(empty($_POST['age'])){
            $age_error = "Please enter the username";
        }

    ?>

   
    <table class="table table-hover table-borded table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Age</th>
            </tr>

        </thead>
        
        <tbody>
            <?php
                $data = "SELECT * FROM class_assign";

                $query = mysqli_query($connection,$data);

                if(!$query){
                    die("Data connect failed".mysqli_error($connection));
                }
                else{
                    while($row=mysqli_fetch_assoc($query)){

                  
            ?>
            
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Age']; ?></td>

            </tr>
                
            <?php
        }
                }
                
            ?>
            

        </tbody>
    </table>
    <form action="procces_class_assign.php" method="POST">
        
            <div class="form-group" style=" margin-top:50px;" >
                        
                <input type="text" name="Name" value="" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                        <input type="number" name="Age" value="" class="form-control" placeholder="Age" style=" margin-top:10px;">
                         <button type="submit" class="btn btn-success" style=" margin-top:5px;">Register</button>
                        
            </div>
    </form>
</body>
</html>