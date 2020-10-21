        </div>
        <script>
        CKEDITOR.replace('editor1');
        </script>
        <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
        <br><br><br><br><br><br><br><br><br><br>
    <!-- Footer -->
    
<footer class="page-footer font-small pt-4 bg-primary text-white ">

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">Footworld</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p> Footworld je stranica u kojoj ćemo se baviti diskutiranjem  o nogometu 
          i molim vas da svi sudjelujete u tome pogotovo za vrijeme prijelaznog roka </p>

    </div>

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Linkovi</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
      <a class="text-white" href="<?php echo base_url();?>home">Početna</a>
      </p>
      <p>
      <a class="text-white" href="<?php echo base_url();?>about">Info</a>
      </p>
      <p>
      <?php if(!empty($this->session->id))
		 {
		   echo '<a class="text-white" href="' . base_url() . 'klubovi">Klubovi</a>';
	 
		}?>
      </p>
      <p>
      <?php if(!empty($this->session->id))
		 {
		   echo '<a class="text-white" href="' . base_url() . 'posts">Blog </a>';
	 
		}?> 
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Kontakt</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
        <i class="fas fa-home mr-3"></i> Orašje, bb-for now, BiH</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> footworld@gmail.com</p>
    
    </div>
  </div>
  <!-- Grid row -->

</div>
<div class="footer-copyright text-right py-3">
   <h6>Make by: Ermin Srna</h6>
</div>

      
</footer>
      
    </body>
</html>