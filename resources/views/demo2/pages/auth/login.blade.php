<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Crystal Clear Admin Payment System">
	<meta name="author" content="NobleUI">


	<title>Crystal Clear Admin Payment System</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="{{ asset('assets/css/demo2/style.css') }}">
  <!-- End layout styles -->
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="#" class="noble-ui-logo logo-light d-block mb-2"><img src="https://www.creativelogodesigns.io/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo-light.919e7d6c.png&w=256&q=75" class="img-fluid"/></a>
                    <h5 class="text-muted fw-normal mb-4 mt-4">Welcome back! Log in to your account.</h5>
                    <form class="forms-sample" id="loginForm">
                      @csrf
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="userEmail" placeholder="Email" autocomplete="off"  required>
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" name="userPassword" autocomplete="off" required placeholder="Password">
                      </div>
                      <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="authCheck">
                        <label class="form-check-label" for="authCheck">
                          Remember me
                        </label>
                      </div>
                      <div>
                        <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                        <button type="button" class="btn btn-outline-primary btn-icon-text mb-2 mb-md-0">
                          <i class="btn-icon-prepend" data-feather="twitter"></i>
                          Login with twitter
                        </button>
                      </div>
                      <a href="{{ url('/admin/register') }}" class="d-block mt-3 text-muted">Not a user? Sign up</a>
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{ asset('assets/vendors/core/core.js') }}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('assets/js/template.js')}}" ></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->
  <script>
      $("#loginForm").submit(( event )=>{
          event.preventDefault();
          let formData = $('#loginForm').serialize();
          $.ajax({
            url: "{{ url('/api/adminloginprocess') }}",
            type: "POST",
            data:formData,
            beforeSend:(()=>{
              $("#loginForm").html(`<div class="spinner-border text-danger" role="status"><span class="visually-hidden">Loading...</span></div>`);
            }),
            success:((Response)=>{
              alert(Response);
              $("#loginForm").html(`<div class="spinner-border text-danger" role="status"><span >Login Successful Redirecting To Dashboard</span></div>`);
            }),
            error:((errorMessage)=>{
              alert(errorMessage);
              window.location.reload();
            }),
          });
      });
  </script>
</body>
</html>