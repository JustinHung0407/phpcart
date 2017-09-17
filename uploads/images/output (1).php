<?php
// connect to database
include 'config/database.php';

// include objects
include_once "objects/product.php";
include_once "objects/product_image.php";
include_once "objects/cart_item.php";

// get database connection
$database = new Database();
$db       = $database->getConnection();

// initialize objects
$product       = new Product($db);
$product_image = new ProductImage($db);
$cart_item     = new CartItem($db);

// set page title
$page_title = "";

// include page header html

$_SESSION['cart'] = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php
echo isset($page_title) ? $page_title : "The Code of a Ninja";
?></title>

    <!-- Bootstrap CSS -->
    <link href="libs/css/bootstrap.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- custom css for users -->
    <link href="libs/css/user.css" rel="stylesheet" media="screen">

    <style>

    body{
      background-image:url(http://localhost/phpcart_v2/uploads/images/nbacover.jpg);

      margin:0px;
      padding:0px;
      background-size: cover;　

</style>
    }
    </style>
</head>
<body background:#fff url(背景圖片網址) center center fixed no-repeat; >

<!-- navbar -->
<nav class="navbar navbar-expand-lg">
                                    <a class="navbar-brand" href="#">InHyper</a>
                                                                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                                                                                                                                                                                                                                                                   <span class="navbar-toggler-icon"></span>
                                                                                                                                                                                                                                                                                                                       </button>

                                                                                                                                                                                                                                                                                                                         <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                                                                                                                                                                                                                                                                                                                                                          <ul class="navbar-nav mr-auto">
                                                                                                                                                                                                                                                                                                                                                                                                                        <li class="nav-item" id="home">
                                                                                                                                                                                                                                                                                                                                                                                                                                                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class="nav-item" id="product">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           <a class="nav-link" href="products.php">Products</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <li class="nav-item" id="cart">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <a class="nav-link" href="cart.php">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <?php
// count products in cart
$cart_item->user_id = 1; // default to user with ID "1" for now
$cart_count         = $cart_item->count();
?>Shopping Cart</a>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             </ul>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               <form class="form-inline my-2 my-lg-0">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>&nbsp
      <button type="button" class="btn btn-primary" onclick="location.href='mem_index.php'"> Login</button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </form>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </nav>

<!-- /navbar -->

</div>

  </div>
         <!-- /row -->

     </div>
     <!-- /container -->

  <!-- jQuery library -->
  <script src="libs/js/jquery.js"></script>

  <!-- bootstrap JavaScript -->
  <!-- <script src="libs/js/holder.js"></script>
  <script src="libs/js/bootstrap.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


  <script>
  $(document).ready(function(){

      // add to cart button listener
      $('.add-to-cart-form').on('submit', function(){

          // info is in the table / single product layout
          var id = $(this).find('.product-id').text();
          var quantity = $(this).find('.cart-quantity').val();

          // redirect to add_to_cart.php, with parameter values to process the request
          window.location.href = "add_to_cart.php?id=" + id + "&quantity=" + quantity;
          return false;
      });

      // update quantity button listener
      $('.update-quantity-form').on('submit', function(){

      // get basic information for updating the cart
      var id = $(this).find('.product-id').text();
      var quantity = $(this).find('.cart-quantity').val();

      // redirect to update_quantity.php, with parameter values to process the request
      window.location.href = "update_quantity.php?id=" + id + "&quantity=" + quantity;
      return false;
      });

      // change product image on hover
      $(document).on('mouseenter', '.product-img-thumb', function(){
      var data_img_id = $(this).attr('data-img-id');
      $('.product-img').hide();
      $('#product-img-'+data_img_id).show();
  });

    var pathname = window.location.pathname.split('/').pop();
    var currentTag = pathname.split('.')[0];
    console.log(currentTag);
    if(currentTag == 'products'){
      $('#product').addClass('active');
    }else if (currentTag == 'cart') {
      $('#cart').addClass('active');
    }
  });



  </script>

  </body>
  </html>
