<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Critiva</title>
        <link rel="stylesheet" href="css/productListing.css" type="text/css">
        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        <script src="javascript/jquery-3.6.0.min.js"></script>

    </head>
    <body>
     
    <!-- scrollTop -->
    <a id="top"><p id="arrow"></p></a>   

 <!-- main -->
<div class="mainContainer">

  <header>
    <h2>CRITIVA</h2> 

        <form action="https:/google.com/search" method="get" class="search-bar">
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
<div class="boxa">
  <span>search Results:</span><h2> motorcycle</h2>
</div>
    <div class="container">

      <div class="card">
        <div class="content">
          <div class="imgBx"><img src="images/download.jpg"></div>
          <div class="contentBx">
          
          <h3>Burger House</div>
          <div class="Product-review">
                        <i class="fas fa-star "></i> 3.5/5
                        

                       </div></h3>
          
        </div>
        <ul class="sci">
          <li style="--i:1">
            <button value="explore NOw">Review</button>
            
          </li>
        </ul>
      </div>
      
      
     
  </div>
</section>
      
          <footer>
            <center>All rights reserved<br>@critiva.com</center>
          </footer>
</div>
          
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