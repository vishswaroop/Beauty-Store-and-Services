<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


?>

<!DOCTYPE html>
<html>
<head>
<title>Beauty services</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-green bg-dark">
  <a class="navbar-brand" href="#"><img src="images/KAAV.png" width="125px">Beauty services</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="indexservice.html">services</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="indexR.html">rentals</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="bridal.html">bridal </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="indexst.php">shop</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="contactus.php">contact us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
        
      
    </ul>
    
  </div>
</nav>
    
    
    
 <!---------about us------------>
<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">About us</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
       <div class="col-lg-6 col-md-6 col-12">
           <img src="images/bb1.jpg" class="img-fluid" aboutimg>    
            </div>
             <div class="col-lg-6 col-md-6 col-12">
         <h2 class="display-4"> We are well experienced butesians for your skin care</h2>
        <h3 class="py-3"> we are the team for 3 well experienced in this field so we are happy to announce you that we started this in our town with more friendly we rent for all your needs and we have a store for all your needs we specially presents you the bridal package which you can save many more</h3>
                 <a href="about.php" class="btn btn-success"> more</a>
                 <p>  Before going to a party or a get-together, we all want to groom ourselves and look better than our everyday usual look. On special occasions, we seek out grooming professionals to make us feel confident in our skin. Such grooming professionals not only enhance our look but also gives us a marvellous touch with the appropriate use of beauty products.  There are several types of beauticians. A theatre beautician, also known as a makeup artist may transform an actor into the appearance of a monster or beast. He or she may make an older talent look like a twenty-year-old college-going youth. While other beauticians employed by salons, spas or beauty parlours possess proficiency in enhancing the look of their clients as per their requirements or recommendations. In order to become a beautician, it is advisable that the interested individual does a beauty and fitness course, in order to have some validation of his or her skills.  </p>
        </div>
    </div>
    </div>    
    
</section> 
    
     
    
    
   
    <!---------footer------------>
   <section class="p-3 bg-dark text-white text-center text-center" >
       
     <div class="footer">
        <div class="container">
        <div class="row">
            <div class="col">
            <div class="p-3 bg-dark text-white text-center text-center">
            <div class="footer-col-1">
                <h3>Useful links</h3>
                <ul class="p-3 bg-dark text-white text-center"> 
                <li><a href="#">Return policy</a></li>
                <li><a href="#">Rental policy</a></li>
                <li><a href="#">Makeovers</a></li>
                </ul>
            </div>
                 </div>
                </div>
            <div class="col">
            <div class="p-3 bg-dark text-white text-center">
            <div class="footer-col-2">
                <h3><a href="#">Our services</a></h3>
                <ul> 
                <li><a href="indexservice.html">Spa and services</a></li>
                <li><a href="indexst.php">Shop</a></li>
                <li><a href="indexR.html">Rental</a></li>
                <li><a href="bridal.html">Mehandi</a></li>
                <li><a href="bridal.html">bridal</a></li>
                </ul>
            </div>
                 </div>
            </div>
            <div class="col">
                <div class="p-3 bg-dark text-white text-center">
            <div class="footer-col-3">
                <h3>follow us on</h3>
                <ul> 
                <li><a href="https://www.facebook.com/Kaavs-Beauty-Parlour-112265971451141/">Facebook</a></li>
                <li><a href="https://www.instagram.com/p/CcQhPWPs2Je/?igshid=MDJmNzVkMjY=">Instagram</a></li>
                <li><a href="https://twitter.com/VishnuChelikam?t=sY_S7QvGMDSNRSTBKIlT7A&s=09">Twitter</a></li>
                <li><a href="https://chat.whatsapp.com/FFAVfOe12as4DFdS89Vf1q">whatsapp</a></li>
                 <li>   <a href="https://t.me/+bJCDTt5RfV05NGQ1">telegram</a></li>
                    
                </ul>
            </div>
                     </div>
            </div>
            </div>
        </div>
           
        
        
       </div>
    
      <p  class="p-3 bg-dark text-white text-center">Copyright &copy; 2022  beauty services</p>
    </section>
    
    
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 
