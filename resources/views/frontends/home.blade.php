@extends('_layouts.frmain')

@section('content')
    
	  
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('landing/images/image_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
	            <p   style="font-size: 18px;">A Car
                A website that provides cheap, safe and reliable car loans</p>
            </div>
          </div>
        </div>
      </div>
    </div>

     <section class="ftco-section ftco-no-pt bg-light align-items-center">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-12 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h2 class="heading-section mb-4 text-center"><span class="text-primary">Condition</span></h2>
                  
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h2 class="heading mb-2">Identity Card</h2>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h2 class="heading mb-2">Driver's License</h2>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h2 class="heading mb-2">Phone Number</h2>
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


    <section class="ftco-section ftco-no-pt bg-light" id="car">
    	<div class="container" >
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row" >
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(landing/images/car-1.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Brio</a></h2>
		    						<div class="d-flex mb-5">
			    						<span class="cat">Honda</span>
			    						<p class="price ml-auto">Rp 300.000<span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#loan" class="btn btn-primary py-2 mr-1">Loan Now</a><a href="{{url('detail')}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(landing/images/car-2.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Fortuner</a></h2>
		    						<div class="d-flex mb-5">
			    						<span class="cat">Toyota</span>
			    						<p class="price ml-auto">Rp 700.000<span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#loan" class="btn btn-primary py-2 mr-1">Loan Now</a><a href="{{url('detail')}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(landing/images/car-3.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Hr-v</a></h2>
		    						<div class="d-flex mb-5">
			    						<span class="cat">Honda</span>
			    						<p class="price ml-auto">Rp 500.000<span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#loan" class="btn btn-primary py-2 mr-1">Loan Now</a><a href="{{url('detail')}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(landing/images/car-4.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Pajero</a></h2>
		    						<div class="d-flex mb-5">
			    						<span class="cat">Mitsubishi</span>
			    						<p class="price ml-auto">Rp 700.000 <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#loan" class="btn btn-primary py-2 mr-1">Loan Now</a><a href="{{url('detail')}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(landing/images/car-5.jpeg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Alphard</a></h2>
		    						<div class="d-flex mb-5">
			    						<span class="cat">Toyota</span>
			    						<p class="price ml-auto">Rp 800.000 <span>/day</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#loan" class="btn btn-primary py-2 mr-1">Loan Now</a><a href="{{url('detail')}}" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section>
        <div class="row justify-content-center" >
              <div class="col-md-12 heading-section text-center ftco-animate mb-4" id="loan">
                <span class="subheading">Borrowing</span>
                <h2 class="mb-2">Form Peminjaman</h2>
              </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
		<div class="row justify-content-center">
			<div class="">
				<div class="col-md-12">
					<div class="row no-gutters">
						  <div class="col-md-12">
							  <form action="#" class="request-form ftco-animate bg-primary align-items-center">
						  <h2>Make your trip</h2>
				  <div class="form-group">
					<label for="" class="label">Username</label>
					<input type="text" name="username" class="form-control" placeholder="Your Name">
				  </div>
								<div class="form-group">
					  <label for="pickup-location" class="label">Choose a Vehicle</label>
					  <select id="pickup-location" class="form-control" name="vehicle">
						  <option value="" disabled selected>Brio, Fortuner, Hr-V, etc</option>
						  <option class="text-dark" value="brio" data-cost="300000">Brio</option>
						  <option class="text-dark" value="fortuner" data-cost="700000">Fortuner</option>
						  <option class="text-dark" value="hrv" data-cost="500000">Hr-V</option>
						  <option class="text-dark" value="pajero" data-cost="700000">Pajero</option>
						  <option class="text-dark" value="alphard" data-cost="800000">Alphard</option>
					  </select>
				  </div>
								<div class="d-flex">
					<div class="form-group mr-2">
					  <label for="loan-date" class="label">Loan Date</label>
					  <input type="date" id="loan-date" name="loan_date" class="form-control" placeholder="Date">
					</div>
					<div class="form-group ml-2">
					  <label for="return-date" class="label">Return Date</label>
					  <input type="date" id="return-date" name="return_date" class="form-control" placeholder="Date">
					</div>
					<div class="form-group mr-2">
						<label for="total-cost" class="label">Total Cost</label>
						<input type="text" id="total-cost" name="TotalCost" class="form-control" placeholder="Total" readonly>
					</div>
				  <script>
					  function calculateTotalCost() {
						  var vehicleSelect = document.getElementById('pickup-location');
						  var loanDateInput = document.getElementById('loan-date');
						  var returnDateInput = document.getElementById('return-date');
						  var totalCostInput = document.getElementById('total-cost');
	
						  var selectedOption = vehicleSelect.options[vehicleSelect.selectedIndex];
						  var costPerDay = selectedOption.getAttribute('data-cost');
						  var loanDate = new Date(loanDateInput.value);
						  var returnDate = new Date(returnDateInput.value);
	
						  if (costPerDay && loanDate && returnDate && loanDate <= returnDate) {
							  var timeDifference = returnDate.getTime() - loanDate.getTime();
							  var daysDifference = Math.ceil(timeDifference / (1000 * 3600 * 24));
							  var totalCost = daysDifference * costPerDay;
							  totalCostInput.value = 'Rp ' + totalCost;
						  } else {
							  totalCostInput.value = '';
						  }
					  }
	
					  document.getElementById('pickup-location').addEventListener('change', calculateTotalCost);
					  document.getElementById('loan-date').addEventListener('change', calculateTotalCost);
					  document.getElementById('return-date').addEventListener('change', calculateTotalCost);
				  </script>
					  </div>
						<div class="form-group">
						  <p><a href="#" class="btn btn-secondary py-3 px-4">Submit</a></p>
						</div>
							</form>
						  </div>
					  </div>
				</div>
		  </div>
	</section>


    <section>
        <div class="row justify-content-center"id="about">
              <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">What we offer</span>
                <h2 class="mb-2">About Us</h2>
              </div>
        </div>
    </section>

    <section class="ftco-section ftco-about" >
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(landing/images/car-5.jpeg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to Gaspool</h2>

	            <p>Welcome to Gaspool Rental Mobil, your best solution for transportation needs! We are a leading car rental company committed to providing high-quality services at affordable prices. Established in 2020, we have served thousands of customers with various transportation needs, whether for personal, business, or leisure purposes.</p>
	            <!-- <p><a href="about.php" class="btn btn-primary py-3 px-4">View Details</a></p> -->
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Our Latest Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Ceremony</h3>
                <p>For those of you who want to celebrate a wedding and have problems with transportation, we provide services to accompany your wedding group</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">City Transfer</h3>
                <p>If you want to go out of town and run out of bus tickets, we rent out several cars that you can choose to go to the city you are going to</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Transfer</h3>
                <p>You can also use our driver services, if you are in a hurry to go to the airport</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
                <p>Apart from rental services, we also provide driver services for farewell events, family gatherings and other events</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(landing/images/anya.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">I Love a car so much. Because very nice car and clean.It's really cool, you have to order it now</p>
                    <p class="name">Annya Geraldine</p>
                    <span class="position">Artist</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(landing/images/arhan.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">The car is very nice, the transmission is good, the interior is nice. It's really comfortable, you should try it too</p>
                    <p class="name">Arhan Pratama</p>
                    <span class="position">Player Football</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(landing/images/adi.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Masyaallah the car rented was very clean and comfortable, equipped with facilities to support our long journey. </p>
                    <p class="name">Ust. Adi Hidayat</p>
                    <span class="position">Religius</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(landing/images/iko.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">As an actor with a hectic schedule, finding reliable transportation is crucial for me.</p>
                    <p class="name">Iko Uwais</p>
                    <span class="position">Actor</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(landing/images/Xavier.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">I recently used Gaspol Rental Mobil's service, and I was very impressed with my experience.</p>
                    <p class="name">Xaviera Putri</p>
                    <span class="position">Collage</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section contact-section" id="contact">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span>H. Amiin 15 St. Nagrak, Bogor, West Java, Indonesia 16961</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://089605955665">+62 89605955665</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">Gaspool@gmail.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
            <form action="#" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>
        </div>
      </div>
    </section>
@endsection
    
	