@extends("frontend.layouts-css.main")
  @section("main-container")
  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
        <div class="container">
  
          <div class="row counters">
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="23" data-purecounter-duration="1" class="purecounter"></span>
              <p>Company</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
              <p>Placement</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p>Student</p>
            </div>
  
            <div class="col-lg-3 col-6 text-center">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Counts Section -->
  
      <!-- ======= Our Values Section ======= -->
      <section id="our-values" class="our-values">
        <div class="container">
  
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
              <div class="card" style='background-image: url({{asset("frontend/assets/img/our-values-1.jpg")}});'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Mission</a></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
              <div class="card" style='background-image: url({{asset("frontend/assets/img/our-values-2.jpg")}});'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Plan</a></h5>
                  <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
  
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url({{asset("frontend/assets/img/our-values-3.jpg")}});'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Vision</a></h5>
                  <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" style='background-image: url({{asset("frontend/assets/img/our-values-4.jpg")}});'>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Our Care</a></h5>
                  <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                  <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Our Values Section -->
  
      <!-- ======= Clients Section ======= -->
      <section id="clients" class="clients section-bg">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset("frontend/assets/img/clients/client-1.png")}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset("frontend/assets/img/clients/client-2.png")}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset("frontend/assets/img/clients/client-3.png")}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset("frontend/assets/img/clients/client-4.png")}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset("frontend/assets/img/clients/client-5.png")}}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
              <img src="{{asset("frontend/assets/img/clients/client-6.png")}}" class="img-fluid" alt="">
            </div>
  
          </div>
  
        </div>
      </section><!-- End Clients Section -->
  
   


</main><!-- End #main -->
@endsection