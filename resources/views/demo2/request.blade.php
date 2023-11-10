<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
  <meta name="author" content="NobleUI">
  <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

  <title>Crystal Clear Admin Payment System</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

  <!-- core:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
  <!-- endinject -->

  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}">
  <!-- End plugin css for this page -->

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- endinject -->

  <!-- Layout styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    @include('demo2.partials.sidebar')
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      @include('demo2.partials.navbar')
      <!-- partial -->

      <div class="page-content">

        <div class="row">
          <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Form Validation</h4>
                <p class="text-muted mb-3">Read the <a href="https://jqueryvalidation.org/" target="_blank"> Official jQuery Validation Documentation </a>for a full list of instructions and other options.</p>
                <form id="signupForm">
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" class="form-control" name="name" type="text">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control" name="email" type="email">
                  </div>
                  <div class="mb-3">
                    <label for="ageSelect" class="form-label">Age</label>
                    <select class="form-select" name="age_select" id="ageSelect">
                      <option selected disabled>Select your age</option>
                      <option>12-18</option>
                      <option>18-22</option>
                      <option>22-30</option>
                      <option>30-60</option>
                      <option>Above 60</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender_radio" id="gender1">
                        <label class="form-check-label" for="gender1">
                          Male
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender_radio" id="gender2">
                        <label class="form-check-label" for="gender2">
                          Female
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender_radio" id="gender3">
                        <label class="form-check-label" for="gender3">
                          Other
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Skills</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline1">
                        <label class="form-check-label" for="checkInline1">
                          Angular
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline2">
                        <label class="form-check-label" for="checkInline2">
                          ReactJs
                        </label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="checkbox" name="skill_check" class="form-check-input" id="checkInline3">
                        <label class="form-check-label" for="checkInline3">
                          VueJs
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control" name="password" type="password">
                  </div>
                  <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm password</label>
                    <input id="confirm_password" class="form-control" name="confirm_password" type="password">
                  </div>
                  <div class="mb-3">
                    <div class="form-check">
                      <label class="form-check-label" for="termsCheck">
                        Agree to <a href="#"> terms and conditions </a>
                      </label>
                      <input type="checkbox" class="form-check-input" name="terms_agree" id="termsCheck">
                    </div>
                  </div>
                  <input class="btn btn-primary" type="submit" value="Submit">
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- partial:../../partials/_footer.html -->
      @include('demo2.partials.footer')
      <!-- partial -->

    </div>
  </div>

	<!-- core:js -->
	<script src="{{ asset('assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('assets/js/template.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('assets/js/apexcharts-dark.js') }}"></script>
	<!-- End custom js for this page -->

</body>

</html>