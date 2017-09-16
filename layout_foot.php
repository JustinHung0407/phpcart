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
