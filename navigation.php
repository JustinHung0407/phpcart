<!-- navbar -->
<?php
   session_start();
   $_SESSION["u_login"] = isset($_SESSION["u_login"]) ?  $_SESSION["u_login"]: 1 ;
   $_SESSION["username"]= isset($_SESSION["username"]) ?  $_SESSION["username"]: "" ;
   $_SESSION["Level"]= isset($_SESSION["Level"]) ?  $_SESSION["Level"]: 1 ;
   $_SESSION["identity"]= isset($_SESSION["identity"]) ?  $_SESSION["identity"]: 404;

   if (isset($_GET["logout"]) && ($_GET["logout"] == "true")) {
   	$_SESSION["u_login"]=1;
   	unset($_SESSION["Level"]);
   	unset($_SESSION["username"]);
    unset($_SESSION["identity"]);
   	header("Location:index.php");
   }
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


    <div class="dropdown">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  <?php if ($_SESSION["identity"]!=404){?>
      <li class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
            <?php echo $_SESSION["identity"]; ?><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li ><a role="menuitem" tabindex="-1" href="mem_index.php">Profile</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="products.php">Products</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="cart.php">Cart</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="?logout=true">Logout</a></li>
        </ul>
      </li>
    <?php } ?>
    </div>
    &nbsp&nbsp
    <?php if ($_SESSION["Level"]==99){?>
      <button type="button" class="btn btn-primary" onclick="location.href='mem_index.php'">Login</button>
    <?php } ?>
    </form>
  </div>
</nav>

<!-- /navbar -->
