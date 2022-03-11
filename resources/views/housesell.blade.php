 <!-- ***** Main Banner Area Start ***** -->
 <div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>HOUSE AGENTS SYSTEM</h4>
                        <h6>THE BEST WEBSITE</h6>
                        <div class="main-white-button scroll-to-section">
                            <a href="#reservation">more detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="main-banner header-text">
                    <div class="Modern-Slider">
                      <!-- Item -->
                      <div class="item">
                        <div class="img-fill">
                            <img src="assets/images/H0.jpg" alt="">
                        </div>
                      </div>
                      <!-- // Item -->
                      <!-- Item -->
                      <div class="item">
                        <div class="img-fill">
                            <img src="assets/images/H1.jpg" alt="">
                        </div>
                      </div>
                      <!-- // Item -->
                      <!-- Item -->
                      <div class="item">
                        <div class="img-fill">
                            <img src="assets/images/H3.jpg" alt="">
                        </div>
                      </div>
                      <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>We Leave For You</h2>
                    </div>
                    <p>house agents system is one of the best <a href="https://templatemo.com/tag/restaurant" target="_blank" rel="sponsored">restaurant HTML templates</a> with Bootstrap v4.5.2 CSS framework. You can download and feel free to use this website template layout for your restaurant business. You are allowed to use this template for commercial purposes. <br><br>You are NOT allowed to redistribute the template ZIP file on any template donwnload website. Please contact us for more information.</p>
                    <div class="row">
                        <div class="col-4">
                            <img src="assets/images/H2" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/H6" alt="">
                        </div>
                        <div class="col-4">
                            <img src="assets/images/H7" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                        <img src="assets/images/H5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our SELLHOUSES</h6>
                    <h2>Our selection sellhouse with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">
                <div class="item">
                    @foreach ($data as $data )
                        
                    
                    <div  style=" background-image:url('/housesellimage/{{$data->image}}');"class='card'>
                        <div class="price"><h6>{{$data->price}}</h6></div>
                        <div class='info'>
                          <h1 class='title'>{{$data->title}}</h1>
                          <p class='description'>{{$data->description}}</p>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make comment<i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ***** Menu Area Ends ***** -->