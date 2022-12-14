<?php session_start(); 
include 'db/db.php';
$select_basic = $db->prepare("SELECT * FROM rstate_data WHERE id = '0'");
$select_basic->execute();
$result = $select_basic->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $result['name']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include 'links.php' ?>
  </head>
  <body>
	<?php include 'nav.php'; ?>

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
          <div class="col-md-6 text p-4 ftco-animate" style="border-top-right-radius: 25px;">
            <h1 class="mb-3">Florida 5, Pinecrest, FL</h1>
            <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <span class="price">$28,000</span>
            <a href="#" class="btn-custom p-3 px-4 bg-primary" style="border-top-left-radius: 25px; border-top-right-radius:25px;">View Details <span class="icon-plus ml-1"></span></a>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-md-end align-items-center justify-content-end">
          <div class="col-md-6 text p-4 ftco-animate">
            <h1 class="mb-3">3015 Grand Avenue, CocoWalk</h1>
            <span class="location d-block mb-3"><i class="icon-my_location"></i> Melbourne, Vic 3004</span>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <span class="price">$28,000</span>
            <a href="#" class="btn-custom p-3 px-4 bg-primary">View Details <span class="icon-plus ml-1"></span></a>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-search">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12 search-wrap">
						<h2 class="heading h5 d-flex align-items-center pr-4" style="border-top-right-radius: 25px; border-top-left-radius: 25px;"><span class="ion-ios-search mr-3" style="border-top-left-radius: 25px;"></span> Search Property</h2>
						<form action="#" class="search-property">
	        		<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Keyword</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Keyword">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Location</label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="City/Locality Name">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Property Type</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Type</option>
	                        <option value="">Commercial</option>
	                        <option value="">- Office</option>
	                        <option value="">Residential</option>
	                        <option value="">Villa</option>
	                        <option value="">Condominium</option>
	                        <option value="">Apartment</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Property Status</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Type</option>
	                        <option value="">Rent</option>
	                        <option value="">Sale</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Agents</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Any</option>
	                        <option value="">Jonh Doe</option>
	                        <option value="">Doe Mags</option>
	                        <option value="">Kenny Scott</option>
	                        <option value="">Emily Storm</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        		</div>

	        		<div class="row">
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Beds</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4</option>
	                        <option value="">5</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Bathroom</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">1</option>
	                        <option value="">2</option>
	                        <option value="">3</option>
	                        <option value="">4</option>
	                        <option value="">5</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Price</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Min Price</option>
	                        <option value="">$1,000</option>
	                        <option value="">$5,000</option>
	                        <option value="">$10,000</option>
	                        <option value="">$50,000</option>
	                        <option value="">$100,000</option>
	                        <option value="">$200,000</option>
	                        <option value="">$300,000</option>
	                        <option value="">$400,000</option>
	                        <option value="">$500,000</option>
	                        <option value="">$600,000</option>
	                        <option value="">$700,000</option>
	                        <option value="">$800,000</option>
	                        <option value="">$900,000</option>
	                        <option value="">$1,000,000</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Price</label>
	        					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Min Price</option>
	                        <option value="">$5,000</option>
	                        <option value="">$10,000</option>
	                        <option value="">$50,000</option>
	                        <option value="">$100,000</option>
	                        <option value="">$200,000</option>
	                        <option value="">$300,000</option>
	                        <option value="">$400,000</option>
	                        <option value="">$500,000</option>
	                        <option value="">$600,000</option>
	                        <option value="">$700,000</option>
	                        <option value="">$800,000</option>
	                        <option value="">$900,000</option>
	                        <option value="">$1,000,000</option>
	                        <option value="">$2,000,000</option>
	                      </select>
	                    </div>
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Min Area <span>(sq ft)</span></label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Min Area">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-items-end">
	        				<div class="form-group">
	        					<label for="#">Max Area <span>(sq ft)</span></label>
	          				<div class="form-field">
	          					<div class="icon"><span class="icon-pencil"></span></div>
			                <input type="text" class="form-control" placeholder="Max Area">
			              </div>
		              </div>
	        			</div>
	        			<div class="col-md align-self-end">
	        				<div class="form-group">
	        					<div class="form-field">
			                <input type="submit" value="Search" class="form-control btn btn-primary">
			              </div>
		              </div>
	        			</div>
	        		</div>
	        	</form>
					</div>
	    	</div>
	    </div>
    </section>


    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-pin"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Find Places Anywhere In The World</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-detective"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">We Have Agents With Experience</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-house"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Buy &amp; Rent Modern Properties</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-purse"></span></div></div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Making Money</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section ftco-properties">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Recent Posts</span>
            <h2 class="mb-4">Recent Properties</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="properties-slider owl-carousel ftco-animate">
    					<div class="item">
		    				<div class="properties">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-1.jpg); border-radius: 0px !important; border-top-right-radius: 25px !important; border-top-left-radius: 25px !important;">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status sale">Sale</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">North Parchmore Street</a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$20,000</span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-2.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<div class="d-flex">
		    							<span class="status rent">Rent</span>
		    							<div class="one">
				    						<h3><a href="#">North Parchmore Street</a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$2,000 <small>/ month</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-3.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status sale">Sale</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">North Parchmore Street</a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$20,000</span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-4.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status sale">Sale</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">North Parchmore Street</a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$20,000</span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-5.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status rent">Rent</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">North Parchmore Street</a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$900 <small>/ month</small></span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
		    				<div class="properties">
		    					<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/properties-6.jpg);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3">
		    						<span class="status sale">Sale</span>
		    						<div class="d-flex">
		    							<div class="one">
				    						<h3><a href="#">North Parchmore Street</a></h3>
				    						<p>Apartment</p>
			    						</div>
			    						<div class="two">
			    							<span class="price">$20,000</span>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
	    				</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Special Offers</span>
            <h2 class="mb-4">Most Recommended Properties</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-1.jpg); border-radius: 0px !important; border-top-right-radius: 25px !important; border-top-left-radius: 25px !important;">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$20,000</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-2.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$20,000</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-3.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status rent">Rent</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$800 <small>/ month</small></span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm col-md-6 col-lg ftco-animate">
    				<div class="properties">
    					<a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/properties-4.jpg);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3">
    						<span class="status sale">Sale</span>
    						<div class="d-flex">
    							<div class="one">
		    						<h3><a href="#">North Parchmore Street</a></h3>
		    						<p>Apartment</p>
	    						</div>
	    						<div class="two">
	    							<span class="price">$20,000</span>
    							</div>
    						</div>
    						<p>Far far away, behind the word mountains, far from the countries</p>
    						<hr>
    						<p class="bottom-area d-flex">
    							<span><i class="flaticon-selection"></i> 250sqft</span>
    							<span class="ml-auto"><i class="flaticon-bathtub"></i> 3</span>
    							<span><i class="flaticon-bed"></i> 4</span>
    						</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>


	<?php include 'footer.php'; ?>
	
  <!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

	<?php include 'scripts.php'; ?>
    
  </body>
</html>