
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PROFILE</title>
        <?php
            include "includes/head.html";

        ?>
    </head>
    <body>
        <div class="container bg" style="background-image:url(images/todo12.jpeg);background-size:cover;height:120vh; width: 100%;">

       
        <?php
            include "includes/Dconnect.php";
            include 'includes/nav.php';
            ?>
              <table class="table table-striped table-info ">
          
          <thead>
              
          <th>
            <tr>
            <th scope="col"> ID</th>
            <th scope="col"> Name</th>
            <th scope="col"> Telephone</th>
            <th scope="col"> AVATAR</th>

            </tr>
          </thead> 
          <tbody>
              <?php
                  // a query to select all tasks if the page is visited or refreshed
                  $query = "SELECT * FROM profile";
                  //   function for the connection
                  
                  $result = mysqli_query($connection,$query);
                  //    check connection function

                  if(!$result){
                      die("query failed".mysqli_error($connection));
              }
                 else{
                  //   fetch each row data 
                  while($row = mysqli_fetch_assoc($result)){
                      
                      
                          
                      echo'<tr class="table-info">';
                      echo'<td>'. $row['id'] . "</td>";
                      echo'<td>'. $row['Name'] . "</td>";
                      echo'<td>'. $row['Telephone'] . "</td>";
                      echo'<td><img src="images/ocean.jpeg,"'. base64_encode($row['Avatar'])  . "' width = '60'height ='50' alt = 'Avatar'></td>";
                      echo'</tr>';
                 
                  
                  }
                 }
              ?>
          
            

          </tbody>


            
         
        </table>

           
          <form action="includes/uploaded_form_processor.php" method="post"enctype="multipart/form-data">
        
                <div class="form-group" style=" margin-top:5px;" >
                            
                    <input type="text" name="Name" value="" class="form-control" placeholder="Name">
                </div>
                <div class="form-group" style=" margin-top:5px;" >
                            
                    <input type="text" name="Telephone" value="" class="form-control" placeholder="Telephone">
                </div>
                <div class="form-group">
                            <input type="file"  name="Avatar" value="" class="form-control" placeholder="Avatar" style=" margin-top:10px;">
                            <button type="submit" class="btn btn-success" style=" margin-top:5px;">UPLOAD</button>
                            
                </div>
         </form>
         <?php
            //  footer section  
           include("footer.php");
         ?>
        </div>
        </body>
    </html>
                      
       
        
