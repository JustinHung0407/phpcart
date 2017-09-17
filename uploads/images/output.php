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
