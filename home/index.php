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
        <li class="nav-item">
        <a class="nav-link" href="">Hello, <?php echo $user_data['user_name']; ?></a>
      </li>
        
      
    </ul>
    
  </div>
</nav>
    
    
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">
        
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" ></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
  </ul>
  <div class="carousel-inner">
    
    
      <div class="carousel-item active">
      <img src="images/bride.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Bride</h3>
        <p>we make over the bride with beauty</p>
      </div>   
    </div>
      <div class="carousel-item">
      <img src="images/blous.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Blouses</h3>
        <p>We here to sell and rent for all you needs</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/charisse-kenion-ZSc5c42YNPE-unsplash.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>costume</h3>
        <p>We here to sell and rent for all you needs</p>
      </div>   
    </div>
        <div class="carousel-item">
      <img src="images/mehan.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Mehandi </h3>
        <p>We make you better look for all you needs</p>
      </div>   
    </div>
       <div class="carousel-item ">
      <img src="images/assce.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Accesories </h3>
        <p>We make you better look for all you needs</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/sari.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Saries</h3>
        <p>We here to sell and rent for all you needs</p>
      </div>
        </div>
      <div class="carousel-item">
      <img src="images/ornm.jpg"  width="1100" height="500">
      <div class="carousel-caption">
        <h3>Ornaments</h3>
        <p>We here to sell and rent for all you needs</p>
      </div>   
    </div>
  
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
            
        </div>
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
        </div>
    </div>
    </div>    
    
</section> 
     <!---------our services------------>
 <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Our services</h2>
    </div>
     <div class="container-fluid">
     <div class="row">
  <div class="col-lg4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="images/sareedraping.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Bridal makeover</h4>
    <p class="card-text">We give you the best to look beautifull.</p>
    <a href="bridal.html" class="btn btn-primary">Explore</a>
  </div>
  </div>
  </div>
         <div class="col-lg4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="images/sh.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Shop</h4>
    <p class="card-text">we know what you need and we sell for you.</p>
    <a href="indexst.php" class="btn btn-primary">Explore</a>
  </div>
  </div>
  </div>
         <div class="col-lg4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="images/orn.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Ornaments </h4>
    <p class="card-text">saries for rent and sell</p>
    <a href="indexR.html" class="btn btn-primary">Explore</a>
  </div>
  </div>
  </div>
         <div class="col-lg4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="images/ll.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Rentals</h4>
    <p class="card-text">We give you the best to look beautifull so rent now.</p>
    <a href="indexR.html" class="btn btn-primary">Explore</a>
  </div>
  </div>
  </div>
         <div class="col-lg4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="images/services.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">services</h4>
    <p class="card-text">Some example text.</p>
    <a href="indexservice.html" class="btn btn-primary">Explore</a>
  </div>
  </div>
  </div>
         <div class="col-lg4 col-md-4 col-12">
  <div class="card" >
  <img class="card-img-top" src="images/meh2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">mehandi</h4>
    <p class="card-text">Some example text.</p>
    <a href="bridal.html" class="btn btn-primary">Explore</a>
  </div>
  </div>
  </div>
     </div>
     </div>      
</section>
     <!---------gallery------------>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/bb2.jpg" class="img-fluid pb-3">
            </div>
                <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g2.jpg" class="img-fluid pb-3">
            </div>
                <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g3.jpg" class="img-fluid pb-3">
            </div>
                <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g4.jpg" class="img-fluid pb-3">
            </div>
                <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g5.jpg" class="img-fluid pb-3">
            </div>
                <div class="col-lg-4 col-md-4 col-12">
                <img src="images/g7.jpg" class="img-fluid pb-3">
            </div>
              
            </div>
        </div>
    </section>
     <!---------contact------------>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h2>
        
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments" autocomplete="off">
                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
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
