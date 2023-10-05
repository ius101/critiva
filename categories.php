<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Category</title>
        <link rel="stylesheet" href="css/categories.css" type="text/css">
        <script src="javascript/jquery-3.6.0.min.js"></script>

    </head>

    <?php
        include('../partials/connection.php');
    ?>

    <body>
     
    <!-- scrollTop -->
    <a id="top"><p id="arrow"></p></a>   

 <!-- main -->
<div class="mainContainer">

  <header>
    <h2 onclick="location.href='homePage.php'">CRITIVA</h2> 

        <form action="" method="POST" class="search-bar" autocomplete="off">
            <input typo="text" placeholder="search anything" name="q">
            <button type="submit"><img src="images/search-3-24.png"></button>
        </form>
 
      <nav>
        <ul class="nav-link">
          <li><a href="homePage.php">Home</a></li>
            <li><a href="categories.php">Catagories</a></li>
            
  
     
         </ul> 
      </nav>
    <a class="cta" href="login.php"><button>Login</button></a>
    
   </header>

<!-- categories -->
  <section class="bigContainer"> 
   <center> <h2>Browse By Categories</h2></center>
    <div class="container">
        <?php
          $select_query="select * from categories";
          if($data=mysqli_query($connect,$select_query)){
            while($row=mysqli_fetch_assoc($data)){?>
              <?php
                $id=$row['cat_id'];
                $name=$row['cat_name'];
                $image=$row['cat_image'];
              ?>
              <a href="./productListing.php?id=<?php echo $id;?>&category=<?php echo $name?>">
                <div class="card">
                  <div class="content">
                    <div class="imgBx"><img src="../uploads/<?php echo $image?>"></div>
                      <div class="contentBx">
          
                        <h3><?php echo $name?><br></h3>
                      </div>
                  </div>
                  <ul class="sci">
                    <li style="--i:1">
                    <button value="explore NOw">Explore Now!</button>
            
                    </li>
                  </ul>
                </div>
              </a>
          <?php  }
          }
        ?>  
      
    </div>
</section>
      </div>
          <footer>
            <center>All rights reserved<br>@critiva.com</center>
          </footer>

          
          <script type="text/javascript">
      
            $(window).scroll(function()
            {
                if ($(window).scrollTop() > 200)
                {
                  $("#top").fadeIn();  
                }
                else
                {
                    $("#top").fadeOut();
                }
            });
      
            
            $("#top").click(function()
            {
                $('html,body').animate({scrollTop:0},  800);
              }); 
            
            </script>
    </body>
    
</html>