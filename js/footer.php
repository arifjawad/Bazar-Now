<!-- FOOTER -->
<footer id="footer" class="section section-grey">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <!-- footer widget -->
      <div class="col-md-1"><br></div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="footer">
          <!-- footer logo -->
          <div class="footer-logo">
            <a class="logo" href="#">
              <img src="./img/logo.png" alt="">
            </a>
          </div>
          <!-- /footer logo -->

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>

          <!-- footer social -->
          <ul class="footer-social ">
            <li><a href="#"><i class="fa fa-facebook color "></i></a></li>
            <li><a href="#"><i class="fa fa-twitter color"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram color"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus color"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest color"></i></a></li>
          </ul>
          <!-- /footer social -->
        </div>
      </div>
      <!-- /footer widget -->

      <!-- footer widget -->
    <!--	<div class="col-md-3 col-sm-6 col-xs-6">
        <div class="footer">
          <h3 class="footer-header">My Account</h3>
          <ul class="list-links">
            <li><a href="#">My Account</a></li>
            <li><a href="#">My Wishlist</a></li>
            <li><a href="#">Compare</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">Login</a></li>
          </ul>
        </div>
      </div>
      <!-- /footer widget -->

      <div class="clearfix visible-sm visible-xs"></div>
<div class="col-md-1"><br></div>
      <!-- footer widget -->
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="footer">
          <h3 class="footer-header">Customer Service</h3>
          <ul class="list-links">
            <li><a href="#">About Us</a></li>

          </ul>
        </div>
      </div>
      <!-- /footer widget -->
<div class="col-md-1"><br></div>
      <!-- footer subscribe-->
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="footer">
          <h3 class="footer-header">Stay Connected</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

        </div>
      </div>
      <!-- /footer subscribe
    </div>



    <!-- /row -->
    <hr>
    <div class="col-md-1"><br></div>
    <!-- row -->
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <!-- footer copyright -->
        <div class="footer-copyright">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by arifjawad

        </div>
        <!-- /footer copyright -->
      </div>
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
<script>var c = 0;
    function menu(){
      if(c % 2 == 0) {
        document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";
        document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";
        c++;
          }else{
        document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";
        document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";
        c++;
          }
    }


</script>
<script type="text/javascript">
$('.block2-btn-addcart').each(function(){
  var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
  $(this).on('click', function(){
    swal(nameProduct, "is added to cart !", "success");
  });
});

$('.block2-btn-addwishlist').each(function(){
  var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
  $(this).on('click', function(){
    swal(nameProduct, "is added to wishlist !", "success");
  });
});
</script>

</body>

</html>
