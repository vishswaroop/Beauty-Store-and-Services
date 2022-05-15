<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
 
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
    
    
    
    </body>
</html>