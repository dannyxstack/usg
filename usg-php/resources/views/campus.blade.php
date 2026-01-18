<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->
  <section class="hero text-center section-bg-campus">
    <div class="container py-5">
      <h1 class="">Our Campus</h1>
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="padding-top: 100px;">
          <h2 class="color-lightblue">Our Campus</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkblue" style="font-size: 32px;">Melbourne</p>
          <p style="font-size: 20px;">Melbourne offers a world-class education, consistently ranked highly globally for liveability and student experience, boasting top universities like UniMelb & Monash, diverse learning opportunities from K-12 to tertiary, and innovative, future-focused schooling with flexible spaces and advanced tech, making it a premier destination for academic growth and skill development in a vibrant, multicultural city. </p>
          <!-- <p style="font-size: 20px;">The campus is located in the heart of the Melbourne Central Business District (CBD). Public transport (trains, trams and buses) is accessible to and from the campus 7 days a week. Penfold facilities boast modern classrooms and computer labs, as well as other training facilities that are ideal for you to gain the most out of your study.</p> -->
        </div>
        <div class="col-md-6">
          <!-- <img src="svg/Vector Header-05.svg" alt="Hand illustration" class="img-fluid" style="max-height: 600px;"> -->
          <!-- 示例：校园图片轮播 -->
          <div id="melPhotosCarousel" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item college-carousel-item active">
                <img src="/images/campus-ex1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/campus-ex2.png" class="d-block w-100 campus-img" alt="Campus 2">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/campus-ex3.png" class="d-block w-100 campus-img">
              </div>
            </div>
    
            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-grey">
              <button type="button" data-bs-target="#melPhotosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#melPhotosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#melPhotosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- <img src="svg/Vector Header-05.svg" alt="Hand illustration" class="img-fluid" style="max-height: 600px;"> -->
          <!-- 示例：校园图片轮播 -->
          <div id="carousel2" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item college-carousel-item active">
                <img src="/images/earlychildhood1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/agedcare1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/marketing1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/auto1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/english1.png" class="d-block w-100 campus-img">
              </div>
            </div>
    
            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-grey">
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carousel2" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-5" style="padding-top: 100px;">
          <h2 class="color-lightblue">Unity Skills College of Health</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkblue fs-4">RTO Code: 45045 | Cricos: 03946C</p>
          <p class="fs-5">Prepare for meaningful careers in healthcare through our nationally-recognized programs, where you'll gain the practical skills and compassionate approach needed to support individuals and communities at every stage of life.</p>
        </div>
      </div>

    </div>
  </section>

  <section class=" bg-lightblue-campus">
    <div class=" bg-lightblue-left-bottom">
    <div class="container">
      <div class="row pb-5">
        <div class="col-md-6" style="padding-top: 100px;">
          <h2 class="color-lightblue">Unity Skills College of Hospitality</h2>
          <!-- <p class="color-darkblue" style="font-size: 32px;">Discover the unique advantages that make USG the preferred choice for students seeking quality education and career success</p> -->
          <p class="color-darkblue fs-4">RTO Code: 41480 | Cricos: 03642G</p>
          <p class="fs-5">Master the art of world-class service and culinary excellence in our hospitality programs, designed to equip you with both technical expertise and business acumen for global career opportunities in Australia's vibrant tourism and hospitality industry.

          </p>
        </div>
        <div class="col-md-6">
          <!-- <img src="svg/Vector Header-05.svg" alt="Hand illustration" class="img-fluid" style="max-height: 600px;"> -->
          <!-- 示例：校园图片轮播 -->
          <div id="carousel3" class="carousel slide">
            <!-- 轮播图片 -->
            <div class="carousel-inner">
              <div class="carousel-item college-carousel-item active">
                <img src="/images/cookery1.png" class="d-block w-100 campus-img">
              </div>
              <div class="carousel-item">
                <img src="/images/business1.png" class="d-block w-100 campus-img" alt="Campus 2">
              </div>
              <div class="carousel-item college-carousel-item">
                <img src="/images/hospitality1.png" class="d-block w-100 campus-img">
              </div>
            </div>
    
            <!-- 自定义指示器（核心部分） -->
            <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-grey">
              <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
          </div>
          
        </div>
      </div>

    </div>

    </div>
  </section>


  <section class="bg-lightblue-campus">
    <div class="">

      <div class="container py-5">
        <div class="row">
          <div class="col-md-6 mt-5">
            <h2 class="color-white pt-5">Public Transport</h2>
            <!-- <h1 class="color-white py-2" >Student Support Services</h2> -->
            <p class="color-white fs-5">123 Lonsdale Street is conveniently located in Melbourne's most sought after education precinct within close proximity to all forms of public transport. </p>
          </div>
          <div class="col-md-6">
            <a href="https://maps.app.goo.gl/xfjuaYD7aieqqX4k6" target="_blank" rel="noopener noreferrer">
              <img src="/images/location2.png" alt="Penfold College Location" class="img-fluid campus-location-img" style="max-height: 500px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>




 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

