
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Royalestate</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>

              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li <?php if($result['tw'] == "" || $result['tw'] == " ") { echo 'hidden'; }; ?> class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li <?php if($result['fb'] == "" || $result['fb'] == " ") { echo 'hidden'; }; ?> class="ftco-animate"><a href="<?php echo $result['fb']; ?>" target="blank"><span class="icon-facebook"></span></a></li>
                <li <?php if($result['ins'] == "" || $result['ins'] == " ") { echo 'hidden'; }; ?> class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>

            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Buy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home For Sale</a></li>
                <!-- <li><a href="#" class="py-2 d-block">Open Houses</a></li> -->
                <li><a href="#" class="py-2 d-block">New Listing</a></li>
                <!-- <li><a href="#" class="py-2 d-block">Recently Reduce</a></li> -->
                <!-- <li><a href="#" class="py-2 d-block">Off-Market Homes</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Sell</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Sell Your Home</a></li>
                <li><a href="#" class="py-2 d-block">Get A Home Valuation</a></li>
                <!-- <li><a href="#" class="py-2 d-block">Local Home Prices</a></li> -->
                <!-- <li><a href="#" class="py-2 d-block">Guides &amp; Rules</a></li> -->
                <!-- <li><a href="#" class="py-2 d-block">Others</a></li> -->
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $result['street'] . ", " . $result['location'] . ", " . $result['postal_code'] . "."; ?></span></li>

	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+52 <?php $text = $result['tel']; echo substr($text, 0, 3) . " " . substr($text, 3, 2) . " " .substr($text, 5, 5); ?></span></a></li>

                  <li><a href="#"><span class="icon icon-whatsapp"></span><span class="text">+52 <?php $text = $result['cel']; echo substr($text, 0, 3) . " " . substr($text, 3, 3) . " " .substr($text, 6, 4); ?></span></a></li>

	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $result['email']; ?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  
