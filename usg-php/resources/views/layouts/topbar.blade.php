<!-- top navbar -->
  <div class="top-bar" style="display: none;">
    <div class="container d-flex justify-content-end align-items-center">
      <form id="siteSearchForm" class="search-form d-inline-flex" action="https://www.google.com/search" onsubmit="performSiteSearch(event)">
        <input type="text" id="siteSearchInput" name="q" class="form-control me-2" placeholder="Search...">
        <button type="submit" class="btn btn-light" style="background-color: #ebebeb;">
          <i class="bi bi-search search-icon" style="color:#42c3da"></i>
        </button>
      </form>
      <a href="/allcourses" class="btn btn-apply me-2">APPLY NOW </a>
    </div>
  </div>
  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/images/logo-colored.png" alt="Unity Skills Group Logo" height="80">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto nav-underline">
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='home') em @endif" href="/index">Home</a></li>
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='why-us') em @endif" href="/why-us">Why Us</a></li>
          <li class="nav-item dropdown">
            <!-- 1-2 layer -->
            <a class="nav-link dropdown-toggle @if(isset($menu1)&&$menu1=='all-courses') em @endif" href="/all-courses" >Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item @if(isset($title)&&$title=='All Courses') em @endif" href="/all-courses">All Courses</a></li>
              
              <li><hr class="dropdown-divider"></li>

              <li><a class="dropdown-item" href="/colleges#usc-health">
                <img src="/images/logo-us-health-landscape1.png" alt="Unity Skills College of Health Logo" height="40" >
                <!-- Unity Skills College of Health -->
              </a></li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Aged Care and Community Services') em @endif" href="#" role="button" >Aged Care and Community Services</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="https://uscohealth.edu.au/course/CHC33021">CHC33021 Certificate III in Individual Support</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/CHC43015">CHC43015 Certificate IV in Ageing Support</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/CHC52021">CHC52021 Diploma of Community Services</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Aged Care and Community Services' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohealth.edu.au/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Early Childhood Education') em @endif" href="#" role="button" >Early Childhood Education</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="https://uscohealth.edu.au/course/CHC30121">CHC30121 Certificate III in Early Childhood Education and Care</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/CHC50121">CHC50121 Diploma of Early Childhood Education and Care</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Early Childhood Education' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohealth.edu.au/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach

                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Marketing and Communication') em @endif" href="#" role="button" >Marketing and Communication</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="https://uscohealth.edu.au/course/BSB40820">BSB40820 Certificate IV in Marketing and Communication</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/BSB50620">BSB50620 Diploma of Marketing and Communication</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/BSB60520">BSB60520 Advanced Diploma of Marketing and Communication</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Marketing and Communication' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohealth.edu.au/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Business and Management') em @endif" href="#" role="button" >Business and Management</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="https://uscohealth.edu.au/course/BSB50420">BSB50420 Diploma of Leadership and Management</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/BSB60420">BSB60420 Advanced Diploma of Leadership and Management</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/BSB80120">BSB80120 Graduate Diploma of Management (Learning)</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Business and Management' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohealth.edu.au/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='Automotive') em @endif" href="#" role="button" >Automotive</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="https://uscohealth.edu.au/course/AUR30620">AUR30620 Certificate III in Light Vehicle Mechanical Technology</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/AUR40216">AUR40216 Certificate IV in Automotive Mechanical Diagnosis</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'Automotive' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohealth.edu.au/course/{{ $courseItem->kname }}">{{ $courseItem->code }} {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&$course->class=='English Courses') em @endif" href="#" role="button" >English Courses</a>
                <ul class="dropdown-menu">
                  <li>
                    <!-- <a class="dropdown-item" href="https://uscohealth.edu.au/course/general-english">General English(GE) Elementary to Upper Intermediate</a>
                    <a class="dropdown-item" href="https://uscohealth.edu.au/course/english-for-academic-purposes">English for Academic Purposes(EAP) Intermediate to Advanced</a> -->
                    @foreach ( $allCourses as $courseItem)
                      @if ($courseItem->class == 'English Courses' )
                        <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohealth.edu.au/course/{{ $courseItem->kname }}"> {{ $courseItem->name }}</a>
                      @endif
                    @endforeach
                  </li>
                </ul>
              </li>

              <li><hr class="dropdown-divider"></li>

              <li><a class="dropdown-item" href="/colleges#usc-hospitality">
                <img src="/images/logo-us-hospitality-landscape1.png" alt="Unity Skills College of Hospitality Logo" height="40">
                <!-- Unity Skills College of Hospitality -->
              </a></li>

              <li class="dropdown-submenu dropend">
                <a class="dropdown-item dropdown-toggle @if(isset($course)&&($course->class=='Cookery' || $course->class=='Hospitality')) em @endif" href="#" role="button" >Cookery and Hospitality</a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohospitality.edu.au/course/SIT30821">SIT30821 Certificate III in Commercial Cookery</a>
                    <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohospitality.edu.au/course/SIT40521">SIT40521 Certificate IV in Kitchen Management</a>
                    <a class="dropdown-item @if(isset($course)&&$course->kname==$courseItem->kname) em @endif" href="https://uscohospitality.edu.au/course/SIT50422">SIT50422 Diploma of Hospitality</a>
                  </li>
                </ul>
              </li>

              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item @if(isset($title)&&$title=='Intake Dates') em @endif" href="/intake-dates">Intake Dates</a></li>
              



            </ul>
  
          </li>
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='colleges') em @endif" href="/colleges">Colleges</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle @if(isset($menu1)&&$menu1=='agent') em @endif" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Education Agents</a>
            <ul class="dropdown-menu">
              <!-- <li><a class="dropdown-item" href="/agentlist">Agents</a></li> -->
              <li><a class="dropdown-item" href="https://form.jotform.com/252581213016043">Become an Agent</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='contact') em @endif" href="/contact">Contact Us</a></li>
          <li class="nav-item"><a class="nav-link @if(isset($menu1)&&$menu1=='apply') em @endif" href="/all-courses">Apply Now</a></li>
        </ul>
      </div>
    </div>
  </nav>

