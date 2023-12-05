
    <?php
        include "includes/head.html";
        include("header.php");
        
    ?>
   
<body>
  


    <div class="container" class="bg" style="background-image:url(images/todo9.webp); height:120vh; width: 100%; background-size:cover;">
        <div class="row">
            <?php include 'includes/nav.php';
                
            ?>
           
            
        </div>
        <div class="row">
          <div class="col-lg-3" style="color:aliceblue;">
            <p>
             
            <h2>A TO DO LIST</h2> 
             <marquee behavior="scroll" direction="right"><h5>IS</h5></marquee>
             <marquee behavior="scroll" direction="right">A</marquee>
             <marquee behavior="scroll" direction="right"> <h4>LIST</h4></marquee>
             <marquee behavior="scroll" direction="right"><h4>FOR</h4></marquee>
             <marquee behavior="scroll" direction="right"><h3>YOUR</h3></marquee>
             <marquee behavior="scroll" direction="right"><h2>TO</h2></marquee>
             <marquee behavior="scroll" direction="right"><h1>DOES.</h1></marquee>
             
            </p>
          </div>
          <div class="col-lg-6" >
            <!-- <h1 class="text-center">Carousel example</h1> -->
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
              <center>
              <div class="carousel-inner" style=" animation-duration:5s;">
                <div class="carousel-item active">
                <!-- <p class="text-bg-danger display-6">Slide 1</p> -->
                <img src="images/todo5.webp" alt="GFG" width="900" height="400" class="d-block w-20" alt="...">
                </div>
                <div class="carousel-item">
                <!-- <p class="text-bg-danger display-6">Slide 2</p> -->
                <img src="images/todo2.jpg" alt="GFG" width="900" height="400" class="d-block w-20" alt="...">
                </div>
                <div class="carousel-item">
                <!-- <p class="text-bg-danger display-6">Slide 3</p> -->
                <img src="images/todo3.jpg" alt="GFG" width="900" height="400" class="d-block w-20" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </center>
          </div>
        </div>
        <div class="col-lg-3" style="color:aliceblue;">
            <p>
             
             <marquee behavior="alternate" direction="left"> <img src="images/todo6.jpeg" alt="" > </marquee>
            </p>
            
        </div>
        <?php
            //  footer section  
           include("footer.php");
       ?>
        

    </div>
            
    </div>
     
    
</body>
</html>

    