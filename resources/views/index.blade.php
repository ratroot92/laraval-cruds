<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/bootstrap/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/styles.min.css?h=dc21197aae9e8757f4a63cbb4e55c805">

</head>

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
          <a class="sign nav-link" href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Cart.html"><i class="fa fa-shopping-cart"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <nav class="mb-1 navbar navbar-expand-lg navbar-light grey" style="background-color:gray">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/index.html">HOME
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

  <div class="swiper-container main-slider" id="movingimages">
    <div class="swiper-wrapper">
      <div class="swiper-slide slider-bg-position" style="background:url('img2.jpg'); object-fit: none;"
        data-hash="slide1">
        <h2>MAKEUP PRODUCTS</h2>
      </div>
      <div class="swiper-slide slider-bg-position" style="background:url('img3.jpg'); object-fit: none;"
        data-hash="slide3">
      </div>
      <div class="swiper-slide slider-bg-position" style="background:url('img6.jpg'); object-fit: none;"
        data-hash="slide4">
      </div>
    </div>
    <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
    <div id="test" class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
  </div>

  <script>


    var moveimages = new Swiper('.swiper-container', {
      pagination: '.swiper-pagination',
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      paginationClickable: true,
      centeredSlides: true,
      autoplay: 3500,
      speed: 1500,
      loop: true,
      autoplayDisableOnInteraction: false
    });
  </script>

  <br>
  <br><br>
  <!---PRODUCTS-->
  <div class="container">
    <div class="row">
      <div class="card-deck">
        <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px;">
          <img src="NYX foundation.jpg" alt="Card image cap" style="object-fit: cover; height: 20rem; 
     border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px; ">
            <hr></hr>
            <span>NYX Foundation</span><br>
            <span>Face Product- 2 shades</span><br>
            <span>Rs 3,000</span>
          </div>
        </div>

        <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px;">
          <img class="card-img-top" src="NYX lipstick.jpg" alt="Card image cap" style="object-fit: cover; height: 21rem; 
     border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
     <hr></hr>
          <div style="text-align: center; font-size: 15px; margin-top: 15px; ">
            <span>NYX Lipstick</span><br>
            <span>Lip Product-6 colors</span><br>
            <span>Rs 1500</span>



          </div>
        </div>
<!--SETTING SPRAY PRODUCT-->
        <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px;">
          <img class="card-img-top" src="NYX setting spray.jpg" alt="Card image cap" style="object-fit: cover; height: 20rem; 
     border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px; ">
            <hr></hr>
            <span>Setting Spray</span><br>
            <span>Makeup setter-3 bottles</span><br>
            <span>Rs 5000</span>



          </div>
        </div>
<!---MASCARA PRODUCT-->
        <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px;">
          <img class="card-img-top" src="NYX mascara.png" alt="Card image cap" style="object-fit: cover; height: 20rem; 
     border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px;">
            <hr></hr>
            <span>NYX Mascara</span><br>
            <span>Eye Product-5 colors</span><br>
            <span>Rs 3500</span>



          </div>
        </div>
<!--CONCEALER-->
<div class="card" style="width: 20rem; height: 30rem; border-radius: 20px;">
  <img class="card-img-top" src="NYX concealer.jpg" alt="Card image cap" style="object-fit: cover; height: 20rem; 
border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
  <div style="text-align: center; font-size: 15px; margin-top: 15px;">
    <hr></hr>
    <span>NYX CONCEALER</span><br>
    <span>FACE PRODUCT-6 colors</span><br>
    <span>Rs 6000</span>



  </div>
</div>

      </div>
    </div>

  </div>

  <br><br>
  <div class="container">
    <div class="row">
      <div class="card-deck">

        <!---NAILPAINTS-->
        <div class="card" style="width: 20rem; height: 30rem; border-radius: 20px;">
          <img class="card-img-top" src="NYX nailpaint.jpg" alt="Card image cap" style="object-fit: cover; height: 20rem; 
        border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px;">
            <hr></hr>
            <span>NYX NAILPAINTS</span><br>
            <span>NAIL PRODUCT-12 colors</span><br>
            <span>Rs 1500</span>
          </div>
        </div>

        <!---NYX BLUSH-->
        <div class="card" style="width: 22rem; height: 30rem; border-radius: 20px;">
          <img class="card-img-top" src="NYX blush.jpg" alt="Card image cap" style="object-fit: contain; height: 20rem; 
        border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px;">
            <hr></hr>
            <span>NYX BLUSH</span><br>
            <span>FACE PRODUCT-5 COLORS</span><br>
            <span>Rs 4000</span>


          </div>
        </div>

<!---NYX EYE SHADES-->
       <div class="card" style="width: 45rem; height: 30rem; border-radius: 25px;">
          <img class="card-img-top" src="NYX eyeshades.jpg" alt="Card image cap" style="object-fit: contain; height: 20rem; 
        border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px;">
            <hr></hr>
            <span>NYX EYESHADES</span><br>
            <span>EYE PRODUCT-5 KITS</span><br>
            <span>Rs 10000</span>




          </div>
        </div>
<!--EYELINER-->
        <div class="card" style="width: 45rem; height: 30rem; border-radius: 25px;">
          <img class="card-img-top" src="NYX marker eyeliner.jpg" alt="Card image cap" style="object-fit: contain; height: 20rem; 
        border-top-right-radius: 20px; border-top-left-radius: 20px; margin-bottom: 0px;">
          <div style="text-align: center; font-size: 15px; margin-top: 15px;">
            <hr></hr>
            <span>NYX MARKER EYELINER</span><br>
            <span>EYE PRODUCT-5 COLORS</span><br>
            <span>Rs 2000</span>




          </div>
        </div>
      </div>
    </div>

  </div>

</body>

<!--------------------------------------------------------------------------------------------------->

<footer class="footer-48201">
  <div class="container">
  <div class="row">
  <div class="col-md-4 pr-md-5">
  <h3><a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Description.html" class="footer-site-logo d-block mb-4">DESCRIPTION</h3></a>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi quasi perferendis ratione perspiciatis accusantium.</p>
  </div>


  <div class="col-sm-6 col-md-4 footer-navigation">
    <h2 style="color:yellow" >QUICK LINKS</h2>
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