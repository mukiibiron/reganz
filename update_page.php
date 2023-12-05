<?php
           include("header.php");
            include("includes/Dconnect.php");
             

            //SUBMIT UPDATE PAGE
       ?>
       <?php include 'includes/nav.php';
                
                ?>
       <?php
           if(isset($_GET['id'])){}
            $id = $_GET['id'];


                       
           

           
           //fetch data from the
           $query = "SELECT * FROM task where id = ? ";
           $stmt= mysqli_prepare($connection,$query);
           mysqli_stmt_bind_param($stmt, "i", $id);
           mysqli_stmt_execute($stmt);
           $result = mysqli_stmt_get_result($stmt);
           $data = mysqli_fetch_assoc($result);

           //check if the data exists for provided ID
           if($data){
            //display the update form with pre filled data

           }

       ?>
       <div>
            <form action="includes/processupdate_page.php" method="post">


            <input type="hidden" value="<?php echo $data['id'];?>" name="id">
                <div>
                    <label for="f_name">Task</label>
                    <input type="text" name="Task" class="form-control" value="<?php echo $data['Task'];?>">

                </div>
                <div>
                    <label for="f_name">Time</label>
                    <input type="text" name="TaskDate" class="form-control"value="<?php echo $data['TaskDate'];?>">

                </div>
                    <div>
                        <label for="f_name" >Goal</label>
                        <input type="text" name="Goal" class="form-control"value="<?php echo $data['Goal'];?>">

                    </div>
                    <button type="submit" class="btn btn-primary "> Update</button>
                 </form>
                 <?php
            //  footer section  
           include("footer.php");
       ?>
              
                 


       </div>
      









       