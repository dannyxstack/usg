<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<style>
.section-bg-intake {
  background-image: url('/images/bg-header-intake.png');
  background-size: cover; /* 覆盖整个区域 */
  background-position: center; /* 居中显示 */
  width: 100%;
  height: 400px;
}

table { border-collapse: collapse; margin-bottom: 20px; }
th, td { border: 0; padding: 8px; text-align: left; }
th { 
  background-color: #f2f2f2; 
  font-weight: 700;
}



.usca table { 
  border-collapse: collapse;
  margin-bottom: 20px; 
  border: 1.5px solid #f1e1ed ;
}
.usca th,
.usca td { 
  border: 1px solid #f1e1ed !important;
  /* border-color: white !important; */
  padding: 4px;
  text-align: left; 
}
.usca th { 
  background-color: #a64d78; 
  color: white;
  font-weight: 700;
}

.usca table tr td:first-child {
    /* background-color: #f1e1ed; */
    color: #313131;
    width: 36%;
}



.th-bg-darkpink {
  background-color: #a64d78;
}
.th-bg-lightpink {
  background-color: #d4a6bd;
}

.uscb table { 
  border-collapse: collapse;
  margin-bottom: 20px; 
  border: 1.5px solid #d4b83b ;
}
.uscb th, 
.uscb td { 
  border: 1px solid white !important;
  border-color: rgb(241, 240, 225) !important;
  padding: 4px;
  text-align: left; 
}
.uscb th { 
  background-color:#313131; 
  color: white;
  font-weight: 700;
}

.uscb table tr td:first-child {
    background-color: #d4b83b;
    color: #313131;
    width: 36%;
}

.uscb h1,
.uscb h2 {
  color: #AC8E3B;
}

</style>

<body>

  <!-- top navbar -->
  @include('layouts.topbar')

  <!-- main content -->

  <section class="hero text-center section-bg-intake">
    <div class="container py-5">
      <!-- <h1 class="color-darkblue">Intake Dates</h1> -->
      <!-- <img src="https://placehold.co/600x400" alt="Illustration" class="img-fluid"> -->
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row">

      <div class="usca">

        <h1 class="text-center color-darkpurple">Unity Skills of Health Academic Calendar</h1>
        <h2 class="text-center color-darkpurple">Intake Dates 2026</h2>
          <table >
            <thead>
              <tr>
                <th> </th>
                <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>May</th><th>Jun</th>
                <th>Jul</th><th>Aug</th><th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
              </tr>
            </thead>
            <tbody>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Business Courses</strong></td></tr>
              <tr>
                <td>Diploma of Leadership and Management (DLM)</td>
                <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td><td>25-May</td><td>22-Jun</td>
                <td>6-Jul</td><td>24-Aug</td><td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Advanced Diploma of Leadership and Management (ADLM)</td>
                <td>27-Jan</td><td>23-Feb</td><td>16-Mar</td><td>27-Apr</td><td>25-May</td><td>22-Jun</td>
                <td>27-Jul</td><td>24-Aug</td><td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Certificate IV in Marketing and Communication (C4MC)</td>
                <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td><td>25-May</td><td>22-Jun</td>
                <td>6-Jul</td><td>24-Aug</td><td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Diploma of Marketing and Communication (DMC)</td>
                <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td><td>25-May</td><td>22-Jun</td>
                <td>6-Jul</td><td>24-Aug</td><td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Advanced Diploma of Marketing and Communication (ADMC)</td>
                <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td></td><td>25-May</td><td>22-Jun</td>
                <td>13-Jul</td><td>24-Aug</td><td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Graduate Diploma of Management (Learning) (GDM)</td>
                <td>27-Jan</td><td>9-Feb</td><td>23-Mar</td><td>27-Apr</td><td>11-May</td><td>22-Jun</td>
                <td>27-Jul</td><td>10-Aug</td><td>21-Sep</td><td>26-Oct</td><td>16-Nov</td><td>14-Dec</td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Childcare Courses</strong></td></tr>
              <tr>
                <td>Certificate III in Early Childhood Education and Care (C3ECEC)</td>
                <td></td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td><td>18-May</td><td>22-Jun</td>
                <td>27-Jul</td><td>17-Aug</td><td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Diploma of Early Childhood Education and Care (DECEC)</td>
                <td>27-Jan</td><td>9-Feb</td><td>23-Mar</td><td>27-Apr</td><td>25-May</td><td>22-Jun</td>
                <td>20-Jul</td><td>24-Aug</td><td>21-Sep</td><td>12-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Community Services Courses</strong></td></tr>
              <tr>
                <td>Certificate III in Individual Support (C3IS)</td>
                <td>19-Jan</td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td><td>25-May</td><td></td>
                <td>6-Jul</td><td>24-Aug</td><td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Cert IV Ageing Support (C4AS)</td>
                <td>27-Jan</td><td>23-Feb</td><td>23-Mar</td><td>27-Apr</td><td>25-May</td><td>22-Jun</td>
                <td>20-Jul</td><td>24-Aug</td><td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Diploma of Community Services (DCS)</td>
                <td>27-Jan</td><td></td><td>16-Mar</td><td>27-Apr</td><td>25-May</td><td>22-Jun</td>
                <td>27-Jul</td><td>24-Aug</td><td>14-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Automotive Courses</strong></td></tr>
              <tr>
                <td>Certificate III in Light Vehicle Mechanical Technology (C3LVMT)</td>
                <td>27-Jan</td><td>23-Feb</td><td>16-Mar</td><td>20-Apr</td><td>25-May</td><td>22-Jun</td>
                <td>27-Jul</td><td>24-Aug</td><td>21-Sep</td><td>26-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr>
                <td>Certificate IV in Automotive Mechanical Diagnosis (C4AMD)</td>
                <td></td><td>23-Feb</td><td>9-Mar</td><td>27-Apr</td><td>25-May</td><td>22-Jun</td>
                <td>27-Jul</td><td>24-Aug</td><td></td><td>19-Oct</td><td>23-Nov</td><td>14-Dec</td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>English Courses</strong></td></tr>
              <tr>
                <td>General English Elementary to Upper Intermediate (GE)</td>
                <td colspan="12" style="text-align:center">Every Monday</td>
              </tr>
              <tr>
                <td>English for Academic Purposes Intermediate to Advanced (EAP)</td>
                <td colspan="12" style="text-align:center">Every Monday</td>
              </tr>
            </tbody>
          </table>
        
          <h2 class="text-center color-darkpurple">Intake Dates 2027</h2>
          <table >
            <thead>
              <tr>
                <th> </th>
                <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>May</th><th>Jun</th>
                <th>Jul</th><th>Aug</th><th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
              </tr>
            </thead>
            <tbody>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Business Courses</strong></td></tr>
              <tr>
                <td>Diploma of Leadership and Management (DLM)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td></td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>20-Dec</td>
              </tr>
              <tr>
                <td>Advanced Diploma of Leadership and Management (ADLM)</td>
                <td>25-Jan</td><td>22-Feb</td><td>29-Mar</td><td></td><td>24-May</td><td>28-Jun</td>
                <td></td><td>30-Aug</td><td>27-Sep</td><td></td><td>29-Nov</td><td>13-Dec</td>
              </tr>
              <tr>
                <td>Certificate IV in Marketing and Communication (C4MC)</td>
                <td>25-Jan</td><td></td><td>22-Mar</td><td>26-Apr</td><td></td><td>28-Jun</td>
                <td>26-Jul</td><td>9-Aug</td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
              </tr>
              <tr>
                <td>Diploma of Marketing and Communication (DMC)</td>
                <td>25-Jan</td><td>22-Feb</td><td>29-Mar</td><td>26-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td></td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
              </tr>
              <tr>
                <td>Advanced Diploma of Marketing and Communication (ADMC)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>19-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td>30-Aug</td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
              </tr>
              <tr>
                <td>Graduate Diploma of Management (Learning) (GDM)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td>23-Aug</td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Childcare Courses</strong></td></tr>
              <tr>
                <td>Certificate III in Early Childhood Education and Care (C3ECEC)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td>30-Aug</td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
              </tr>
              <tr>
                <td>Diploma of Early Childhood Education and Care (DECEC)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td></td><td>24-May</td><td>14-Jun</td>
                <td>26-Jul</td><td>30-Aug</td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td>20-Dec</td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Community Services Courses</strong></td></tr>
              <tr>
                <td>Certificate III in Individual Support (C3IS)</td>
                <td>25-Jan</td><td>22-Feb</td><td>15-Mar</td><td>26-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td>30-Aug</td><td>27-Sep</td><td>25-Oct</td><td>22-Nov</td><td>13-Dec</td>
              </tr>
              <tr>
                <td>Cert IV Ageing Support (C4AS)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td>26-Apr</td><td>24-May</td><td>21-Jun</td>
                <td>26-Jul</td><td>30-Aug</td><td>13-Sep</td><td>25-Oct</td><td>29-Nov</td><td>13-Dec</td>
              </tr>
              <tr>
                <td>Diploma of Community Services (DCS)</td>
                <td>25-Jan</td><td>22-Feb</td><td>29-Mar</td><td>26-Apr</td><td>24-May</td><td>28-Jun</td>
                <td>26-Jul</td><td>30-Aug</td><td>27-Sep</td><td>25-Oct</td><td>29-Nov</td><td></td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>Automotive Courses</strong></td></tr>
              <tr>
                <td>Certificate III in Light Vehicle Mechanical Technology (C3LVMT)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td></td><td>24-May</td><td>28-Jun</td>
                <td></td><td>23-Aug</td><td>27-Sep</td><td></td><td>29-Nov</td><td>13-Dec</td>
              </tr>
              <tr>
                <td>Certificate IV in Automotive Mechanical Diagnosis (C4AMD)</td>
                <td>25-Jan</td><td>22-Feb</td><td>22-Mar</td><td></td><td>24-May</td><td>28-Jun</td>
                <td>12-Jul</td><td>30-Aug</td><td>27-Sep</td><td>18-Oct</td><td>29-Nov</td><td>13-Dec</td>
              </tr>
              <tr class="th-bg-lightpink"><td colspan="13"><strong>English Courses</strong></td></tr>
              <tr>
                <td>General English Elementary to Upper Intermediate (GE)</td>
                <td colspan="12" style="text-align:center">Every Monday</td>
              </tr>
              <tr>
                <td>English for Academic Purposes Intermediate to Advanced (EAP)</td>
                <td colspan="12" style="text-align:center">Every Monday</td>
              </tr>
            </tbody>
          </table>

      </div>  
      
  <!-- Unity Skills of Hospitality -->
  <div class="uscb">

    <h1 class="text-center color-gold">Unity Skills of Hospitality Academic Calendar </h1>
    <h2 class="text-center color-gold">Intake Dates 2026</h2>
    <table>
      <thead>
        <tr>
          <th>Courses</th>
          <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>May</th><th>Jun</th>
          <th>Jul</th><th>Aug</th><th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>BSB50420 Diploma of Leadership and Management (DLM)</td>
          <td rowspan="7">12-Jan</td><td rowspan="7">9-Feb</td><td rowspan="7">10-Mar</td><td rowspan="7">13-Apr</td><td rowspan="7">11-May</td><td rowspan="7">9-Jun</td>
          <td rowspan="7">13-Jul</td><td rowspan="7">10-Aug</td><td rowspan="7">14-Sep</td><td rowspan="7">12-Oct</td><td rowspan="7">9-Nov</td><td rowspan="7">14-Dec</td>
        </tr>
        <tr><td>BSB80120 Graduate Diploma of Management (Learning) (GDM)</td></tr>
        <tr><td>CHC52021 Diploma of Community Services (DCS)</td></tr>
        <tr>
          <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
        </tr>
        <tr><td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td></tr>
        <tr><td>SIT50422 Diploma of Hospitality Management (DHM)</td></tr>
        <tr><td>BSB50120 Diploma of Business (DOB)</td></tr>
      </tbody>
    </table>
  
    <h2 class="text-center color-gold">Intake Dates 2027</h2>
    <table cellpadding="4" cellspacing="0">
      <thead>
        <tr>
          <th>Courses</th>
          <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>May</th><th>Jun</th>
          <th>Jul</th><th>Aug</th><th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>BSB50420 Diploma of Leadership and Management (DLM)</td>
          <td rowspan="7">11-Jan</td><td rowspan="7">8-Feb</td><td rowspan="7">9-Mar</td><td rowspan="7">12-Apr</td><td rowspan="7">10-May</td><td rowspan="7">15-Jun</td>
          <td rowspan="7">12-Jul</td><td rowspan="7">9-Aug</td><td rowspan="7">13-Sep</td><td rowspan="7">11-Oct</td><td rowspan="7">8-Nov</td><td rowspan="7">13-Dec</td>
        </tr>
        <tr><td>BSB80120 Graduate Diploma of Management (Learning) (GDM)</td></tr>
        <tr><td>CHC52021 Diploma of Community Services (DCS)</td></tr>
        <tr>
          <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
        </tr>
        <tr><td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td></tr>
        <tr><td>SIT50422 Diploma of Hospitality Management (DHM)</td></tr>
        <tr><td>BSB50120 Diploma of Business (DOB)</td></tr>
      </tbody>
    </table>
  
    <h2 class="text-center color-gold">Intake Dates 2028</h2>
    <table cellpadding="4" cellspacing="0">
      <thead>
        <tr>
          <th>Courses</th>
          <th>Jan</th><th>Feb</th><th>Mar</th><th>Apr</th><th>May</th><th>Jun</th>
          <th>Jul</th><th>Aug</th><th>Sep</th><th>Oct</th><th>Nov</th><th>Dec</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>BSB50420 Diploma of Leadership and Management (DLM)</td>
          <td rowspan="7">10-Jan</td><td rowspan="7">14-Feb</td><td rowspan="7">14-Mar</td><td rowspan="7">10-Apr</td><td rowspan="7">8-May</td><td rowspan="7">13-Jun</td>
          <td rowspan="7">10-Jul</td><td rowspan="7">14-Aug</td><td rowspan="7">11-Sep</td><td rowspan="7">9-Oct</td><td rowspan="7">13-Nov</td><td rowspan="7">11-Dec</td>
        </tr>
        <tr><td>BSB80120 Graduate Diploma of Management (Learning) (GDM)</td></tr>
        <tr><td>CHC52021 Diploma of Community Services (DCS)</td></tr>
        <tr>
          <td>SIT30821 Certificate III in Commercial Cookery (C3CC)</td>
        </tr>
        <tr><td>SIT40521 Certificate IV in Kitchen Management (C4KM)</td></tr>
        <tr><td>SIT50422 Diploma of Hospitality Management (DHM)</td></tr>
        <tr><td>BSB50120 Diploma of Business (DOB)</td></tr>
      </tbody>
    </table>
  </div>




      </div>
    </div>
  </section>

  <section class="py-5 bg-white">
    <div class="container">
      <div class="row"></div>
      <div class="row">
        <div class="col-md-6">
          <img src="/images/orientation1.png" alt="" class="img-fluid" style="max-height: 600px;border-radius: 20px;" >
        </div>
        <div class="col-md-6">
          <h2 class="color-darkpurple fw-bold">What to Bring to Your Orientation Day?</h2>
          <p class="fs-5">The first step of your enrollment is to attend the Student Orientation day. 
            This is a compulsory requirement to your enrollment and to study in Australia. 
            The date and time will be confirmed over email.

          </p>
          <p class="fs-5">
            Wondering what to bring?
          </p>
          <p class="fs-5">
            1. Copy of your Letter of Offer or Confirmation of Enrolment (COE)<br>
            2. Passport<br>
            3. Laptop & Pen<br>
          </p>
        </div>
      </div>

    </div>
  </section>


  <section class="">
    <div class="">

      <div class="container py-5" style="border-radius: 10px; background-color: #b8e9f1;">
        <div class="row">
          <div class="col-md-6 fs-6 px-4">
            <span class="color-darkpurple fs-6 fw-bold">Our Facilities</span>
            <h2 class="color-darkblue fw-bold">MELBOURNE CBD CAMPUS</h2>
            <p>Our Melbourne campus is conveniently located in the heartof the CBD at Level 3, 123 Londales st.</p>
            <p>
              This new modern, spacious campus features state-of-the-art facilities, including:<br>
              - Multiple classrooms equipped with computers,projectors, screens, and internet access.<br>
              - Simulation Lab designed to replicate a real aged carefacility environment for practical training.<br>
              - Student kitchen with fridges, microwaves, and tea andcoffee amenities.<br>
              - Wireless internet available for students at all times, bothinside and outside class hours.<br>
              - Quiet self-study areas with access to learning resourcesfor independent and extra-curricular study.<br>
              - Meeting rooms for academic consultations and studentcounselling sessions.<br>
              - Common areas for dining, socialising,and relaxation..Access to library resources for research and studysupport.
            </p>
          </div>
          <div class="col-md-6">
            <!-- 示例：校园图片轮播 -->
            <div id="examplePhotosCarousel" class="carousel slide" >
              <!-- 轮播图片 -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/melbourne1.jpg" class="d-block w-100 rounded-4" alt="Campus 2">
                </div>
                <div class="carousel-item">
                  <img src="/images/classroom1.jpg" class="d-block w-100 rounded-4">
                </div>
                <div class="carousel-item">
                  <img src="/images/melbourne2.png" class="d-block w-100 rounded-4" alt="Campus 3">
                </div>
              </div>

              <!-- 自定义指示器（核心部分） -->
              <div class="carousel-indicators custom-carousel-indicators custom-carousel-bg-white">
                <button type="button" data-bs-target="#examplePhotosCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#examplePhotosCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#examplePhotosCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <p></p>
  <section class="py-5">
    <div class="">

      <div class="container py-5" style="border-radius: 10px; background-color: #b8e9f1;">
        <div class="row">
          <div class="col-md-6">
            <img src="/images/melbourne3.png" alt="" class="img-fluid" style="max-height: 100%;border-radius: 20px;" >

          </div>
          <div class="col-md-6 fs-6 px-4">
            <span class="color-darkpurple fs-6 fw-bold">Study In Australia</span>
            <h2 class="color-darkblue fw-bold">LIFE IN MELBOURNE</h2>
            <p>There's more to life at Allied Institute than just study. 
              While you are with us you will have a full lifestyle, and with that comes some expenses. 
              Accommodation, food and transport are three of the major money spenders outside of your course.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



 <!-- footer -->
 @include('layouts.footer')

 </body>
</html>

