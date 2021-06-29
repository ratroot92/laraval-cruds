
<!DOCTYPE html>
<html>
<head>
  <title>Checkout</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <link rel="stylesheet" href="checkout new.css">
    <script src="Jquery3.5.1.js"></script>
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

      <div class="container">
        <div class="block-heading"></div>
        <div class="card">
			<div class="card-header">
				<h3 style="text-align: center;"><b>Checkout</b></h3>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate>
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="firstName" class="form-label">First name</label>
                  <input type="text" class="form-control" id="Name" placeholder="ali" value="" required>
                  <div class="invalid-feedback">
                    Valid first name is required.
                  </div>
                </div>
    
                <div class="col-sm-6">
                  <label for="lastName" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="lastName" placeholder="ahmed" value="" required>
                  <div class="invalid-feedback">
                    Enter valid last name.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="username" class="form-label">Username</label>
                  <div class="input-group has-validation">
                    <span class="input-group-text">@</span>
                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                  <div class="invalid-feedback">
                      Your username is required.
                    </div>
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="email" class="form-label">Email <span class="form-text-muted-label">(Optional)</span></label>
                  <input type="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="col-12">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="house#123 street#123 sector" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>
                </div>
                <div class="col-md-5">
                  <label for="country" class="form-label">Country</label>
                  <br><select class="form-select" id="country" required>
                   <option value="">Choose...</option>
                    <option>Pakistan</option>
                  </select></br>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>
    
                <div class="col-md-4">
                  <label for="state" class="form-label">City</label>
                 <br> <select class="form-select" id="state" required>
                    <option value="">Choose...</option>
                    <option>Islamabad</option>
                  </select></br>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
    
                <div class="col-md-3">
                  <label for="zip" class="form-label">Zip</label>
                  <input type="number" class="form-control" id="zip" placeholder="" required>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>
                </div>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
    
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Save this information for next time</label>
              </div>
            </form>
        </div>
<pre></pre>
    <hr></hr>
        <h4 class="mb-3">Payment</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Credit card</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Debit card</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="form-label-text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
<Center>
          <hr class="my-4">

          <a href="file:///D:/SEMESTER%205/WEB/WEB%20PROJECT%20DANIA&%20AZKA/Thankyou.html"button class="w-50 btn btn-primary btn-lg" type="submit">Checkout</button></a>
        </Center>
        </form>
      </div>
    </div>
      </div>
      </div>      
    </section>
</main>
</body>

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
</html>