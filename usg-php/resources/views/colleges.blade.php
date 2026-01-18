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

  <!-- Colleges Section -->
  <section class="py-5 bg-white">
    <div class="container">
      <div class="accordion" id="collegesAccordion">
        <!-- College 1: Unity Skills College of Health -->
        <div class="accordion-item">
          <h1 class="text-center color-darkblue" id="healthHeading">
            <img src="/images/Icon_US_Health-01.png" alt="Unity Skills College of Health Logo" class="mb-3" style="max-height: 100px;">
            Unity Skills College of Health
          </h1>
          <p class="color-darkblue fs-4">RTO Code: 45045 | Cricos: 03946C</p>
          <p class="fs-5">Prepare for meaningful careers in healthcare through our nationally-recognized programs, where you'll gain the practical skills and compassionate approach needed to support individuals and communities at every stage of life.</p>
          <div id="healthCollapse" class="accordion-collapse collapse show" aria-labelledby="healthHeading">
            <div class="accordion-body">
              <ul class="nav nav-tabs mb-4" id="healthTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="aged-tab" data-bs-toggle="tab" data-bs-target="#aged" type="button" role="tab">Aged Care and Community Services</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button" role="tab">Marketing and Communication</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button" role="tab">Business and Management</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="automotive-tab" data-bs-toggle="tab" data-bs-target="#automotive" type="button" role="tab">Automotive</button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="aged" role="tabpanel">
                  <div class="row g-4">
                    <div class="col-md-4">
                      <div class="card h-100">
                        <div class="img-cover-container" style="height: 200px;">
                          <img src="https://placehold.co/300x200?text=Aged+Care" class="card-img-top" alt="Course 1">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">CHC33021 Certificate III in Individual Support</h5>
                          <p class="card-text">CRICOS Code: 112210</p>
                          <a href="course-detail-chc33021.html" class="btn btn-primary">View Details</a>
                        </div>
                      </div>
                    </div>
                    <!-- 重复最多 3 个卡片 -->
                    <div class="col-md-4">
                      <div class="card h-100">
                        <div class="img-cover-container" style="height: 200px;">
                          <img src="https://placehold.co/300x200?text=Community" class="card-img-top" alt="Course 2">
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">CHC43015 Certificate IV in Ageing Support</h5>
                          <p class="card-text">CRICOS Code: 112211</p>
                          <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                      </div>
                    </div>
                    <!-- 第 3 个类似 -->
                  </div>
                </div>
                <div class="tab-pane fade" id="marketing" role="tabpanel">
                  <!-- 类似 row + cards，最多 3 个 -->
                  <div class="row g-4">
                    <!-- 示例课程卡片 -->
                  </div>
                </div>
                <div class="tab-pane fade" id="business" role="tabpanel">
                  <!-- 类似 -->
                </div>
                <div class="tab-pane fade" id="automotive" role="tabpanel">
                  <!-- 类似 -->
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- College 2: Unity Skills College of Hospitality -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="hospitalityHeading">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#hospitalityCollapse" aria-expanded="false" aria-controls="hospitalityCollapse">
              Unity Skills College of Hospitality
            </button>
          </h2>
          <div id="hospitalityCollapse" class="accordion-collapse collapse" aria-labelledby="hospitalityHeading">
            <div class="accordion-body">
              <ul class="nav nav-tabs mb-4" id="hospitalityTabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="cookery-tab" data-bs-toggle="tab" data-bs-target="#cookery" type="button" role="tab">Cookery</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="hospitality-tab" data-bs-toggle="tab" data-bs-target="#hospitality" type="button" role="tab">Hospitality</button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="cookery" role="tabpanel">
                  <div class="row g-4">
                    <!-- 示例课程卡片，最多 3 个 -->
                  </div>
                </div>
                <div class="tab-pane fade" id="hospitality" role="tabpanel">
                  <div class="row g-4">
                    <!-- 示例 -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

