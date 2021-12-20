@extends('user.base')
@include('user.navbar')

<link rel="stylesheet" type="text/css" href="core/css/about/mobirise-icons.css">
<link rel="stylesheet" type="text/css" href="core/css/about/mbr-additional.css">
<link rel="stylesheet" type="text/css" href="core/css/about/theme/style.css"> 
<link rel="stylesheet" type="text/css" href="core/css/about/socicon/style.css">
<link rel="stylesheet" type="text/css" href="core/css/carousel.css">

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide" src="core/img/home/hotrending.jpg" alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide" src="core/img/home/hotopic.jpg" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide" src="core/img/home/popular.jpg" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="features4 counters cid-r7p52rqYmR" id="features4-6">
    <div class="boday">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <h2 class="mbr-section-title pb-3 mbr-bold mbr-fonts-style align-left display-1">Run for Charity</h2>
  
                  <p class="mbr-section-sub-title pb-4 mbr-normal mbr-fonts-style align-left display-4">Bootstrap Basic Template.</p>
                  <div class="media-container-row">
  
  
  
                      <div class="card p-3 col-12 col-md-6 border-r col-lg-4">
                          
                          <div class="card-box">
                              <h4 class="count card-title mbr-fonts-style mbr-white mbr-normal align-center display-1">5942</h4>
                              <p class="mbr-text mbr-fonts-style mbr-white mbr-normal align-center display-4">Participants</p>
                          </div>
                      </div>
  
                      <div class="card p-3 col-12 col-md-6 border-r col-lg-4">
                          
                          <div class="card-box">
                              <h4 class="count card-title mbr-fonts-style mbr-white mbr-normal align-center display-1">33644</h4>
                              <p class="mbr-text mbr-fonts-style mbr-white mbr-normal align-center display-4">
                                  Km</p>
                          </div>
                      </div>
  
                      <div class="card p-3 col-12 col-md-6 border-r col-lg-4">
                          
                          <div class="card-box">
                              <h4 class="count card-title mbr-fonts-style mbr-white mbr-normal align-center display-1">856</h4>
                              <p class="mbr-text mbr-fonts-style mbr-white mbr-normal align-center display-4">
                                  Children</p>
                          </div>
                      </div>
  
                      
                  </div>
              </div>
          </div>
      </div>
    </div>
  </section>
  <section class="accordion1 cid-r7p5hudegl" id="accordion1-7">


    <div class="row-mid">
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
    </div>
          
    
                            
    </section>




@include('user.footer')