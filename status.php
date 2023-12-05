       <?php
           include("header.php");
            include("includes/Dconnect.php");
       ?>
    <div class="container bg"   style="background-image:url(images/todo5.webp); height:110vh; width: 100%; background-size:cover;">
       <div class="row">
            <?php include 'includes/nav.php';
                
                
            ?>
        
        </div>
        <div class="row" >
            <?php
                require_once "includes/Dconnect.php";
            ?>  
            <div class="row">
            <div>
            <marquee behavior="alternate" direction="left"><h2 style="text-align:center; color:white;">PROJECT TABLE</h2>
             </marquee>            </div>
                    
            <div>
                
                <a href="time.php" ><button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="text-align:left;" >Add Task</button>
              </a>
                                

                </p>
                
              </div>
          </div>  

            
            
            
          <table class="table table-striped table-info ">
          
            <thead>
                
            <th>
              <tr>
              <th scope="col"> ID</th>
              <th scope="col"> Task</th>
              <th scope="col"> Time</th>
              <th scope="col"> Goal</th>
              <th scope="col">Upadate</th>
              <th scope="col">Delete</th>
              <th scope="col"> </th>

              </tr>
            </thead> 
            <tbody>
                <?php
                    // a query to select all tasks if the page is visited or refreshed
                    $query = "SELECT * FROM task";
                    //   function for the connection
                    
                    $result = mysqli_query($connection,$query);
                    //    check connection function

                    if(!$result){
                        die("query failed".mysqli_error($connection));
                }
                
                    //   fetch each row data 
                    while($row = mysqli_fetch_assoc($result)){
                        ?> 
                        
                            
                        <tr class="table-info">
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['Task'] ?></td>
                            <td><?php echo $row['Goal'] ?></td>
                            <td><?php echo $row['TaskDate'] ?></td>
                            <td><a href="update_page.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Update</a></td>
                            <td><a href="processdelete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                            <td><img src="" alt=""></td>

                           
                        </tr>
                    <?php
                    
                    }
               
                ?>
            
              

            </tbody>


              
           
          </table>

        </div>
        <?php
            //  footer section  
           include("footer.php");
       ?>
            

    </div>
      
                    
       