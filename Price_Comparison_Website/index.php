 <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@500&display=swap" rel="stylesheet">
  <style>
  .card
  {
	  
	  margin:15px;
	  border-radius:15px;
  }
  img
  {
	  height:180px;
  }
  span
  {
	  font-weight:bolder;
	  font-size: large;
  }
  #visitsite
  {
	  text-decoration:none;
	  color:white;
    /* border: 2px solid blue; */
    
  }
  .card-text
  {
	  font-weight:bolder;
	  font-size: large;
  }
  .amazonbtn{
    padding: 7px;
    border: 2px solid #007bff;
    border-radius: 5px;
    background-color: #007bff;
  }
  *{
         margin: 0px;
         padding: 0px;
         list-style: none;
         text-decoration: none;
         box-sizing: border-box;
      }
      .navbar{
         background-color: rgb(29, 165, 54);
         height:70px;
         width: 100%;
         z-index: 2;
         /* padding: 1em; */
      }
      label.logo{
         color: white;
         font-size: 35px;
         line-height: 50px;
         padding: 0 10px;
         font-weight: bold;
         font-family: 'Albert Sans', sans-serif;
      }
      nav ul{
         float: right;
         margin-right: 20px;
      }
      nav ul li{
         display: inline-block;
         line-height: 50px;
         margin: 0 5px;
      }
      nav ul li a{
        font-family: 'Albert Sans', sans-serif;
         color:white;
         font-size: 17px;
         text-transform: uppercase;
         padding: 3px 5px;
         border-radius: 5px;
      }
      a:active,a:hover{
         background-color: rgb(14, 74, 25);
         color: rgb(214, 227, 217);
         transition: .5s;
         text-decoration:none;
      }
      .checkbtn{
         font-size: 25px;
         color: white;
         float: right;
         line-height: 50px;
         margin-right: 40px;
         cursor: pointer;
         display: none;
      }
      #check{
         display: none;
      }
      @media (max-width:952px){
         label.logo{
            font-size: 30px;
            padding-left: 50px;
         }
         nav ul li a{
            font-size: 16px;
         }
      }
      @media (max-width:858px){
        .checkbtn{
         display: block;
         z-index: 2;
        }
        ul{
         position: fixed;
         width: 100%;
         height: 100vh;
         background: rgb(50, 149, 68);
         top:55px;
         left: -100%;
         text-align: center;
         transition: all .5s;
         z-index: 2;
         
        }
        nav ul li{
         display: block;
         margin: 50px 0;
         line-height: 30px;
        
        }
        nav ul li a{
         font-size: 20px;
        }
        a:hover,a:active{
         background: none;
        }
        #check:checked ~ ul{
         left: 0;
        }
      }
      .navimg{
        height: 52px;
        width: 52px;
        border: 1px solid green;
        border-radius: 10px;
        margin-bottom: 10px;
      }
  .form-control{
    border: 2px solid green;
    margin: 5px;
  }
</style>  
  <!--Navbar-->
  <nav class="navbar">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
         <i class="fas fa-bars"></i>
      </label>
      <label for="" class=" logo"> CASHBACHAT</label>
<ul>
   <li><a href="#">Flipkart</a></li>
   <li><a href="#">Amazon</a></li>
   <!-- <li><a href="#">amazon</a></li> -->
   <li><img src="https://i.imgur.com/zCwQoqv.jpg" alt="IMAGE ERROR" class="navimg"></li>
</ul>

   </nav>

<br><br>
<form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="index.php" method="POST">
  <i class="fas fa-search" aria-hidden="true"></i>
  <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" name="searchtext" value=""
    aria-label="Search"><br><br>
  <input class="btn btn-dark btn-rounded " type="submit" value="Search">
</form>

<!--Section: Group of personal cards-->
<section class="pt-5 mt-3 pb-3">

  <!--Grid row-->
  <div class="row">

    <!--Grid column-->
    <div class="col-md-12">

      <!--Card group-->
      <div class="card-group">

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="https://i.imgur.com/G9hAlSf.gif" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">flipkart.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			 <?php
require 'simple_html_dom.php';


$searchtext="";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$searchtext = $_POST["searchtext"];

}
$searchtext = str_replace(' ', '%20', $searchtext);
$flp_str1="https://www.flipkart.com/search?q=";
$flp_str2="&otracker=search&otracker1=search&marketplace=FLIPKART&as-show=on&as=off";
$flp_query=$flp_str1.$searchtext.$flp_str2;

$html = file_get_html($flp_query);


#1
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";


#2
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";

#3
if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";

#4

if(isset($html->find('div[class="_4rR01T"]',0)->plaintext)){
	
echo	$html->find('div[class="_4rR01T"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('div[class="_3tbKJL"]',0)->plaintext)){
	
echo	$html->find('div[class="_3tbKJL"]',0)->plaintext;
}

echo "</span><br><br>";
?>
			
			
			
			
			</p>
            <hr>
            <div class="websites">
            <button type="button" class="btn btn-primary"><a href="https://www.flipkart.com" tatget="_Blank" id="visitsite">Visit Flipkart</a></button>
            <!-- <button type="button" class="btn btn-primary"><a href="https://www.amazon.com" tatget="_Blank" id="visitsite">Visit Amazon</a></button> -->
            </div>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->

        <!--Card-->
        <div class="card card-personal mb-6">

          <!--Card image-->
          <div class="view">
            <img class="card-img-top" src="https://i.imgur.com/TEUE7DA.gif" alt="Card image cap">
            <a href="#!">
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <!--Card image-->

          <!--Card content-->
          <div class="card-body">
            <!--Title-->
            <a>
              <h4 class="card-title">amazon.com</h4>
            </a>
            <a class="card-meta">Search Results</a>

            <!--Text-->
            <p class="card-text">
			<?php


$amz_str1="https://www.amazon.in/s?k=";
$amz_str2="&ref=nb_sb_noss_2";

$amz_query=$amz_str1.$searchtext.$amz_str2;



$html = file_get_html($amz_query);

#1

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";


#2

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";

#3

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";

#4

 if(isset($html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext)){
	echo $html->find('span[class="a-size-medium a-color-base a-text-normal"]',0)->plaintext;
}
echo "<span class='float-right'>";

if(isset($html->find('span[class="a-price-whole"]',0)->plaintext)){
	echo $html->find('span[class="a-price-whole"]',0)->plaintext;
}
echo "</span><br><br>";

?>
			
			
			
			
			
			
			
			
			</p>
            <hr>
           <button type="button" class="amazonbtn"><a href="https://www.amazon.com" tatget="_Blank" id="visitsite">Visit amazon</a></button>
          </div>
          <!--Card content-->

        </div>
        <!--Card-->


      </div>
      <!--Card group-->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Group of personal cards-->


<!-- Footer -->
<footer class="page-footer font-small  pt-4 btn-dark" >

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Price Comparison Tool</h5>
        <p>Here you can compare prices of a product on various e-commerce platforms.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">E-commerce sites</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Amazon</a>
          </li>
          <li>
            <a href="#!">Flipkart</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">amazon.com</a>
          </li>
          <li>
            <a href="#!">flipkart.com</a>
          </li>
        
          
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a href=""> Created Projectworlds</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





















<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>