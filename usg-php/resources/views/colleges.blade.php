<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
:root {
    --primary-color: #1a5f7a;
    --secondary-color: #57cc99;
    --accent-color: #ff7e5f;
    --light-color: #f8f9fa;
    --dark-color: #343a40;
    --gray-color: #6c757d;
}

* {
    font-family: 'Open Sans', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
}

body {
    color: var(--dark-color);
    line-height: 1.6;
}

/* Header Styles */
.navbar-brand {
    font-weight: 700;
    font-size: 1.8rem;
    color: var(--primary-color) !important;
}

.navbar-brand span {
    color: var(--secondary-color);
}

.hero h1 {
  margin-top: 40px;
}


/* College Cards */
.college-card {
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: none;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    height: 100%;
}

.college-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.college-health .card-header {
    /* background-color: #1a5f7a; */
    background-color: #9292ed;
}

.college-hospitality .card-header {
    /* background-color: #57cc99; */
    background-color: #42c3da;
}

.college-card .card-header {
    color: white;
    border-bottom: none;
    padding: 1.5rem;
}

/* Tab Styles */
.nav-tabs {
    border-bottom: 1px solid #dee2e6;
    justify-content: center;
    margin-bottom: 1.5rem;
}

.nav-tabs .nav-link {
    color: var(--gray-color);
    font-weight: 500;
    border: none;
    padding: 0.75rem 1.5rem;
    margin: 0 0.25rem;
    border-radius: 50px;
    transition: all 0.3s ease;
}

.nav-tabs .nav-link:hover {
    color: #4059a8;
    background-color: rgba(26, 95, 122, 0.05);
}

.nav-tabs .nav-link.active {
    color: white;
    background-color: #3f58a7;
    border: none;
}

/* Course Cards */
.course-card {
    border: 1px solid #eaeaea;
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
}

.course-card:hover {
    /* border-color: var(--secondary-color); */
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

.course-card h5:hover {
    color: #4059a8;

}

.course-img {
    height: 180px;
    object-fit: cover;
    width: 100%;
}

.cricos-code {
    display: inline-block;
    /* background-color: rgba(26, 95, 122, 0.1); */
    background-color: #f8f8f8;
    /* color: var(--primary-color); */
    color: #4059a8;
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

/* Campus Section */
.campus-section {
    background-color: #f8f9fa;
    padding: 80px 0;
}

.campus-card {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
}

.campus-card:hover {
    transform: translateY(-5px);
}


/* Responsive Adjustments */
@media (max-width: 768px) {
    .hero {
        padding: 80px 0 40px;
    }
    
    .nav-tabs .nav-link {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
}
</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->
  <section class="hero section-bg-campus">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4">
          <h1 class="">Our Colleges</h1>
          <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
          <p class="fs-5">Unity Skills offers specialized education through our dedicated colleges, each focusing on key industry sectors to provide you with the skills needed for career success.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- colleges ds -->
  <section class="py-5">
        <div class="container">
            <!-- College Cards -->
            <div class="row g-4 mb-5">
                <!-- College of Health -->
                <div class="col-lg-6">
                    <div class="college-card college-health">
                        <div class="card-header">
                          <div class="row">
                            <div class="col-md-2">
                              <img src="/images/Icon_US_Health-02.png" height="80">
                            </div>
                            <div class="col-md-10">
                              <h3 class="mb-0">
                                   Unity Skills College of Health
                              </h3>
                              <p class="mb-0 mt-2">Building the healthcare professionals of tomorrow</p>
                            </div>
                          </div>
                        </div>
                        <div class="card-body p-4">
                            <p class="card-text">Our College of Health provides comprehensive training in healthcare disciplines, combining theoretical knowledge with practical skills for real-world application.</p>
                            
                            <!-- Tabs for Course Categories -->
                            <ul class="nav nav-tabs" id="healthTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="aged-care-tab" data-bs-toggle="tab" data-bs-target="#aged-care" type="button">Aged Care</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing" type="button">Marketing</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="business-tab" data-bs-toggle="tab" data-bs-target="#business" type="button">Business</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="automotive-tab" data-bs-toggle="tab" data-bs-target="#automotive" type="button">Automotive</button>
                                </li>
                            </ul>
                            
                            <!-- Tab Content -->
                            <div class="tab-content pt-4" id="healthTabContent">
                                <!-- Aged Care Courses -->
                                <div class="tab-pane fade show active" id="aged-care" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Aged Care Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 092342A</span>
                                                    <h5>Certificate III in Individual Support</h5>
                                                    <p class="small text-muted">Specializing in aged care and disability support.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1584432810601-6c7f27d2362b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Community Services" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 092342B</span>
                                                    <h5>Diploma of Community Services</h5>
                                                    <p class="small text-muted">Develop skills to work in community service organizations.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Marketing Courses -->
                                <div class="tab-pane fade" id="marketing" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Marketing Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 093452C</span>
                                                    <h5>Diploma of Marketing and Communication</h5>
                                                    <p class="small text-muted">Develop strategic marketing and communication skills.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Digital Marketing" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 093452D</span>
                                                    <h5>Advanced Diploma of Digital Marketing</h5>
                                                    <p class="small text-muted">Master digital marketing strategies and analytics.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Business Courses -->
                                <div class="tab-pane fade" id="business" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Business Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 094562E</span>
                                                    <h5>Diploma of Business</h5>
                                                    <p class="small text-muted">Gain foundational knowledge in business operations.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Management Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 094562F</span>
                                                    <h5>Advanced Diploma of Leadership and Management</h5>
                                                    <p class="small text-muted">Develop leadership skills for managerial roles.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Automotive Courses -->
                                <div class="tab-pane fade" id="automotive" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Automotive Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 095672G</span>
                                                    <h5>Certificate III in Light Vehicle Mechanical Technology</h5>
                                                    <p class="small text-muted">Learn to service and repair light vehicles.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1549399542-7e3f8b79c341?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Automotive Electrical" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 095672H</span>
                                                    <h5>Diploma of Automotive Technology</h5>
                                                    <p class="small text-muted">Advanced training in automotive systems and diagnostics.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- College of Hospitality -->
                <div class="col-lg-6">
                    <div class="college-card college-hospitality">
                        <div class="card-header">
                          <div class="row">
                            <div class="col-md-2">
                              <img src="/images/Icon_US_Hospitality-02.png" height="80">
                            </div>
                            <div class="col-md-10">
                              <h3 class="mb-0">
                                  Unity Skills College of Hospitality
                              </h3>
                              <p class="mb-0 mt-2">Crafting culinary and hospitality excellence</p>
                            </div>
                          </div>

                        </div>
                        <div class="card-body p-4">
                            <p class="card-text">Our College of Hospitality delivers industry-focused training in culinary arts and hospitality management, preparing students for dynamic careers in the global hospitality sector.</p>
                            
                            <!-- Tabs for Course Categories -->
                            <ul class="nav nav-tabs" id="hospitalityTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="cookery-tab" data-bs-toggle="tab" data-bs-target="#cookery" type="button">Cookery</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="hospitality-tab" data-bs-toggle="tab" data-bs-target="#hospitality" type="button">Hospitality</button>
                                </li>
                            </ul>
                            
                            <!-- Tab Content -->
                            <div class="tab-content pt-4" id="hospitalityTabContent">
                                <!-- Cookery Courses -->
                                <div class="tab-pane fade show active" id="cookery" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Cookery Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 096782I</span>
                                                    <h5>Certificate III in Commercial Cookery</h5>
                                                    <p class="small text-muted">Learn essential cooking techniques and kitchen operations.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Patisserie Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 096782J</span>
                                                    <h5>Certificate IV in Patisserie</h5>
                                                    <p class="small text-muted">Master the art of pastry, cake decoration and dessert creation.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Advanced Cookery" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 096782K</span>
                                                    <h5>Diploma of Hospitality Management (Commercial Cookery)</h5>
                                                    <p class="small text-muted">Combine advanced cookery skills with hospitality management.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Hospitality Courses -->
                                <div class="tab-pane fade" id="hospitality" role="tabpanel">
                                    <div class="row g-4">
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hospitality Course" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 097892L</span>
                                                    <h5>Certificate III in Hospitality</h5>
                                                    <p class="small text-muted">Learn front office operations, food and beverage service.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="course-card">
                                                <img src="https://images.unsplash.com/photo-1564501049418-3c27787d01e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Hotel Management" class="course-img">
                                                <div class="p-3">
                                                    <span class="cricos-code">CRICOS: 097892M</span>
                                                    <h5>Diploma of Hospitality Management</h5>
                                                    <p class="small text-muted">Develop skills for management roles in hotels and resorts.</p>
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View Details</a>
                                                </div>
                                            </div>
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

  <!-- colleges -->
  <section class="py-5 bg-white" style="display:none;">
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

 <script>
        // jQuery for enhancing tab functionality
        $(document).ready(function() {
            // Add animation to tab switching
            $('button[data-bs-toggle="tab"]').on('click', function() {
                // Add active class to parent li
                $(this).closest('.nav-tabs').find('.nav-link').removeClass('active');
                $(this).addClass('active');
            });
            
            // Course card hover effect enhancement
            // $('.course-card').hover(
            //     function() {
            //         $(this).find('h5').css('color', '#1a5f7a');
            //     },
            //     function() {
            //         $(this).find('h5').css('color', '');
            //     }
            // );
            
            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    
                    const hash = this.hash;
                    
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 80
                    }, 800);
                }
            });
            
            // Initialize tooltips (if needed)
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        });
    </script>
 </body>
</html>

