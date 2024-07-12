@extends('_layouts.frmain')

@section('content')
<!-- END nav -->

<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{ asset('landing/images/image_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4">Fast &amp; Easy Way To Rent A Car</h1>
                    <p style="font-size: 18px;">A website that provides cheap, safe, and reliable car loans</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('landing/images/car-1.jpeg') }}');"></div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ url('Honda') }}">Brio</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Honda</span>
                            <p class="price ml-auto">Rp 300.000 <span>/day</span></p>
                        </div>
                        <p class="mb-0"><a href="{{ url('Honda') }}" class="btn btn-secondary py-2 ml-0 btn-block">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('landing/images/car-2.jpeg') }}');"></div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ url('Fortuner') }}">Fortuner</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Toyota</span>
                            <p class="price ml-auto">Rp 700.000 <span>/day</span></p>
                        </div>
                        <p class="mb-0"><a href="{{ url('Fortuner') }}" class="btn btn-secondary py-2 ml-0 btn-block">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('landing/images/car-3.jpeg') }}');"></div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ url('HRV') }}">Hr-v</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Honda</span>
                            <p class="price ml-auto">Rp 500.000 <span>/day</span></p>
                        </div>
                        <p class="mb-0"><a href="{{ url('HRV') }}" class="btn btn-secondary py-2 ml-0 btn-block">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('landing/images/car-4.jpeg') }}');"></div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ url('Pajero') }}">Pajero</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Mitsubishi</span>
                            <p class="price ml-auto">Rp 700.000 <span>/day</span></p>
                        </div>
                        <p class="mb-0"><a href="{{ url('Pajero') }}" class="btn btn-secondary py-2 ml-0 btn-block">Details</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url('{{ asset('landing/images/car-5.jpeg') }}');"></div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ url('Alphard') }}">Alphard</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Toyota</span>
                            <p class="price ml-auto">Rp 800.000 <span>/day</span></p>
                        </div>
                        <p class="mb-0"><a href="{{ url('Alphard') }}" class="btn btn-secondary py-2 ml-0 btn-block">Details</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                  <p><a href="{{ url('carlist') }}" class="btn btn-secondary py-3 px-4">Submit</a></p>
                </div>
                    </form>
                  </div>
              </div>
        </div>
  </div>
</section>
@endsection
