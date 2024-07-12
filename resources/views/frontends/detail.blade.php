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



    <section class="ftco-section ftco-car-details">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="car-details">
            <div class="img rounded" style="background-image: url(landing/images/car-2.jpeg); height: 400px; width: 520px;"></div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <h2 class="col-md-6">FORTUNER</h2>
          <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-dashboard"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Mileage <span>50,000</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-pistons"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Transmission <span>Manual</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-car-seat"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Seats <span>6 Adults</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-diesel"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Fuel <span>Pertamax</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="position: absolute; top: 10px; right: 10px;">
            <a href="{{url('carlist')}}" class="btn btn-primary btn-lg">Loan Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-car-details">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="car-details">
            <div class="img rounded" style="background-image: url(landing/images/car-1.jpeg); height: 400px; width: 520px;"></div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <h2>BRIO</h2>
          <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-dashboard"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Mileage <span>40,000</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-pistons"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Transmission <span>Manual</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-car-seat"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Seats <span>4 Adults</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-diesel"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Fuel <span>Pertamax</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="position: absolute; top: 10px; right: 10px;">
            <a href="{{url('carlist')}}" class="btn btn-primary btn-lg">Loan Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-car-details">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="car-details">
            <div class="img rounded" style="background-image: url(landing/images/car-5.jpeg); height: 400px; width: 520px;"></div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <h2>ALPHARD</h2>
          <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-dashboard"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Mileage <span>46,000</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-pistons"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Transmission <span>Matic</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-car-seat"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Seats <span>6 Adults</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-diesel"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Fuel <span>Pertamax</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="position: absolute; top: 10px; right: 10px;">
            <a href="{{url('carlist')}}" class="btn btn-primary btn-lg">Loan Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-car-details">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="car-details">
            <div class="img rounded" style="background-image: url(landing/images/car-4.jpeg); height: 400px; width: 520px;"></div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <h2>PAJERO</h2>
          <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-dashboard"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Mileage <span>55,000</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-pistons"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Transmission <span>Manual</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-car-seat"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Seats <span>6 Adults</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-diesel"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Fuel <span>Pertamax</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="position: absolute; top: 10px; right: 10px;">
            <a href="{{url('carlist')}}" class="btn btn-primary btn-lg">Loan Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-car-details">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="car-details">
            <div class="img rounded" style="background-image: url(landing/images/car-3.jpeg); height: 400px; width: 520px;"></div>
          </div>
        </div>
        <div class="col-md-6 position-relative">
          <h2>HR-V</h2>
          <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-dashboard"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Mileage <span>43,000</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-pistons"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Transmission <span>Matic</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-car-seat"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Seats <span>4 Adults</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
              <div class="media block-6 services">
                <div class="media-body py-md-4">
                  <div class="d-flex mb-3 align-items-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                      <span class="flaticon-diesel"></span>
                    </div>
                    <div class="text">
                      <h3 class="heading mb-0 pl-3">Fuel <span>Pertamax</span></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="position: absolute; top: 10px; right: 10px;">
            <a href="{{url('carlist')}}" class="btn btn-primary btn-lg">Loan Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection