<!-- navbar -->
<?php
   session_start();
   $_SESSION["u_login"] = isset($_SESSION["u_login"]) ?  $_SESSION["u_login"]: 1 ;
   $_SESSION["username"]= isset($_SESSION["username"]) ?  $_SESSION["username"]: "" ;
   $_SESSION["Level"]= isset($_SESSION["Level"]) ?  $_SESSION["Level"]: 1 ;
   $_SESSION["name"]= isset($_SESSION["name"]) ?  $_SESSION["name"]: 404;
?>
<nav class="navbar navbar-expand-lg">
  <a class="nav-link-1" href="#"><b><font face="Times New Roman">InHyper</font></b></a>&nbsp&nbsp&nbsp&nbsp&nbsp
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
          $cart_item->user_id=1; // default to user with ID "1" for now
          $cart_count=$cart_item->count();
          ?>Shopping Cart</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user">&nbsp;</i>
          <?php echo $_SESSION["username"]; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="?logout=true"><i class="fa fa-fw fa-power-off"></i>Profile</a>
          </li>
          <li>
            <a href="?logout=true"><i class="fa fa-fw fa-power-off"></i>Log Out</a>
          </li>
        </ul>
      </li>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>&nbsp
      <button type="button" class="btn btn-primary" onclick="location.href='mem_index.php'"> Login</button>

    </form>
  </div>
</nav>

<!-- /navbar -->
