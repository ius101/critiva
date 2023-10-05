<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-eqivalent="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>review</title>
        <link rel="stylesheet" href="css/review.css">
        <!-- FOR-ICON -->
        <link rel="shortcut icon" href="images/1092622.png">
        <!-- FOR-SCROLLTOTOP -->
        <script src="javascript/jquery-3.6.0.min.js"></script>
        <!-- rating system -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

        <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
        
    </head>
    <body>
       

      <!-- MAIN -->
        <div class="main-container">
        <!-- nav-bar -->
        <header>
            <h2>CRITIVA</h2> 
       
                <form action="https:/google.com/search" method="post" class="search-bar">
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
           <!-- product-banner -->
           <div class="small-container single-product">
               <div class="row">
                   <div class="col-2">
                       <img src="images/blue (2).jpg" width="100%" height="100%" id="productImg">
                       <div class="small-img-row">
                           
                       </div>
                   </div>
                   <div class="col-2">
                       <P>Home/Automobiles</P>
                       <h1>Zeus MTB 27.5</h1>
                       
                       <div class="rateyo" id= "Rating"
                             data-rateyo-rating="3"
                             data-rateyo-num-stars="5"
                             data-rateyo-score="3">
                       </div>
                       <span class='result'>rating</span>
                       <input type="hidden" name="Rating">
                       <h4>Write a Review<i class="fa fa-indent"></i></h4>
                       <div class="comment-box">
                             <form action="#">
                                <textarea name="comment" placeholder="Type Your Comment...."></textarea><br>
                                   <button type="submit">Submit</button>
                   

                </form>
               
            </div>
                        
                        
                   </div>
               </div>
           </div>
           <!-- footer -->
           <footer>
       <center>All rights reserved<br>@critiva.com</center>
     </footer> 
    </div>
    
    <!-- FOR-PRODUCT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
    </script>
    
    
    </body>
    
</html>