<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="Cart.css">
<script src="https://use.fontawesome.com/c560c025cf.js"></script>

<body>
<nav class="navbar navbar-expand-sm navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!--search bar-->
    <div class="input-group  col-15">
      <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
        aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="header_button btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
      </div>
    </div>


    <div class="col-3">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="sign nav-link" href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Sign%20in.html">SIGN IN<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="sign nav-link" href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Signup.html">SIGN UP<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="sign nav-link" href="#"><i class="fa fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <nav class="mb-1 navbar navbar-expand-lg navbar-light grey" style="background-color:gray">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">HOME
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Products.html">PRODUCTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FILTER PRODUCTS</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item avatar">
          <a class="nav-link p-0" href="#">
            <img src="user icon.png" class="rounded-circle z-depth-0"
              alt="avatar image" height="45">
          </a>
        </li>
      </ul>
    </div>
  </nav>
<div class="container">
   <div class="card-shopping-cart">
            <div class="card-header">
                 <h3 style="text-align: center;"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <b>Shopping-Cart</b></h3>
            </div>

            <div class="card-body">
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="NYX foundation.jpg" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>NYX FOUNDATION</strong></h4>
                            <h4>
                                <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px" >
                                <h6><strong>Rs.4000 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="10" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-light btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                    <!-- PRODUCT -->
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="NYX concealer.jpg" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>NYX CONCEALER</strong></h4>
                            <h4>
                                <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                <h6><strong>Rs.8000 <span class="text-muted">x</span></strong></h6>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4">
                                <div class="quantity">
                                    <input type="button" value="+" class="plus">
                                    <input type="number" step="1" max="10" min="1" value="1" title="Qty" class="qty"
                                           size="4">
                                    <input type="button" value="-" class="minus">
                                </div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="button" class="btn btn-outline-light btn-xs">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- END PRODUCT -->
                <div class="pull-left">
                    <div>
                        <a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/index.html" class="btn btn-outline-info btn-sm pull-left">Continue Shopping</a>
                        <div class="clearfix"></div>
                   
                       </div>
            </div>
                <div class="pull-right-total" style="margin: 10px">
                    <br></br>
                    <a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/checkout%20new.html" class="btn btn-success pull-right">Checkout</a>
                    <div class="pull-right" style="margin: 5px">
                      <h2> Total price= <b>Rs.12000</b>
                      </h2>
                    </div>
                </div>
            </div>
        </div>
</div>




</body>
<footer class="footer-48201">
    <div class="container">
    <div class="row">
    <div class="col-md-4 pr-md-5">
    <h3><a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Description.html" class="footer-site-logo d-block mb-4">DESCRIPTION</h3></a>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione perspiciatis accusantium.</p>
    </div>
  
  
    <div class="col-sm-6 col-md-4 footer-navigation">
      <h3><a href="#" class="footer-site-logo d-block mb-4">QUICK LINKS</h3></a> 
      <p class="links"><a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/FAQ.html">FAQ-Frequently Asked Questions</a><br></br>
        <a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Terms%20and%20Conditions.html">Terms & Conditions</a>
         <br></br>
           <a href='file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Privacy%20Policy.html'> Privacy Policy</a>
      </div>
  
  
        <div class="col-sm-6 col-md-4 footer-navigation">
          <h3><a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Contact%20Us.html" class="footer-site-logo d-block mb-4">CONTACT US</h3></a> 
          <p>D&Amakeupstudio@gmail.com</p>
          <br></br>
          <p>+92 12345678910</p>
          <br></br>
          <br></br>
      </div>
  
  
      <div><i class="fa fa-instagram footer-contacts-icon" aria-hidden="true"></i>
        <i class="fa fa-twitter footer-contacts-icon"></i>
        <i class="fa fa-pinterest footer-contacts-icon"></i>
        <i class="fa fa-facebook footer-contacts-icon"></i>
      </div>
      
  
    </div>
  
    
    <div class="row ">
    <div class="col-12 text-center">
    <div class="copyright mt-5 pt-5">
    <p><small>&copy; 2019-2021 All Rights Reserved.</small></p>
    </div>
    </div>
    </div>
    </div>
    </footer>
</html>