<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">

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

                <nav class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><h4>Add New User</h4></a></li>
                       
                    </ol>
                </nav>

               

                <div class="row">
                    <div class="col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Inputs</h6>
                                <form>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">Text Input</label>
                                        <input type="text" class="form-control" id="exampleInputText1" value="Amiah Burton" placeholder="Enter Name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputEmail3" class="form-label">Email Input</label>
                                        <input type="email" class="form-control" id="exampleInputEmail3" value="amiahburton@gmail.com" placeholder="Enter Email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputNumber1" class="form-label">Number Input</label>
                                        <input type="number" class="form-control" id="exampleInputNumber1" value="6473786">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPassword3" class="form-label">Password Input</label>
                                        <input type="password" class="form-control" id="exampleInputPassword3" value="amiahburton" placeholder="Enter Password">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputDisabled1" class="form-label">Disabled Input</label>
                                        <input type="text" class="form-control" id="exampleInputDisabled1" disabled value="Amiah Burton">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputPlaceholder" class="form-label">Placeholder</label>
                                        <input type="text" class="form-control" id="exampleInputPlaceholder" placeholder="Enter Your Name">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputReadonly" class="form-label">Readonly</label>
                                        <input type="text" class="form-control" id="exampleInputReadonly" readonly value="Amiah Burton">
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1" class="form-label">Select Input</label>
                                        <select class="form-select" id="exampleFormControlSelect1">
                                            <option selected disabled>Select your age</option>
                                            <option>12-18</option>
                                            <option>18-22</option>
                                            <option>22-30</option>
                                            <option>30-60</option>
                                            <option>Above 60</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                                        <select multiple class="form-select" id="exampleFormControlSelect2">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="customRange1" class="form-label">Range Input</label>
                                        <input type="range" class="form-range" id="formRange1">
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkDefault">
                                            <label class="form-check-label" for="checkDefault">
                                                Default checkbox
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkChecked" checked>
                                            <label class="form-check-label" for="checkChecked">
                                                Checked
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="checkbox" class="form-check-input" id="checkDisabled" disabled>
                                            <label class="form-check-label" for="checkDisabled">
                                                Disabled checkbox
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkCheckedDisabled" disabled checked>
                                            <label class="form-check-label" for="checkCheckedDisabled">
                                                Disabled checked
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="checkInline">
                                            <label class="form-check-label" for="checkInline">
                                                Inline checkbox
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="checkInlineChecked" checked>
                                            <label class="form-check-label" for="checkInlineChecked">
                                                Checked
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="checkInlineDisabled" disabled>
                                            <label class="form-check-label" for="checkInlineDisabled">
                                                Inline disabled checkbox
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" id="checkInlineCheckedDisabled" disabled checked>
                                            <label class="form-check-label" for="checkInlineCheckedDisabled">
                                                Disabled checked
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="form-check mb-2">
                                            <input type="radio" class="form-check-input" name="radioDefault" id="radioDefault">
                                            <label class="form-check-label" for="radioDefault">
                                                Default
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="radio" class="form-check-input" name="radioDefault" id="radioDefault1">
                                            <label class="form-check-label" for="radioDefault1">
                                                Default
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="radio" class="form-check-input" name="radioSelected" id="radioSelected" checked>
                                            <label class="form-check-label" for="radioSelected">
                                                Selected
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input type="radio" class="form-check-input" name="radioDisabled" id="radioDisabled" disabled>
                                            <label class="form-check-label" for="radioDisabled">
                                                Disabled
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" class="form-check-input" name="radioSelectedDisabled" id="radioSelectedDisabled" disabled checked>
                                            <label class="form-check-label" for="radioSelectedDisabled">
                                                Selected and disabled
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline">
                                            <label class="form-check-label" for="radioInline">
                                                Default
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radioInline" id="radioInline1">
                                            <label class="form-check-label" for="radioInline1">
                                                Default
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radioInlineSelected" id="radioInlineSelected" checked>
                                            <label class="form-check-label" for="radioInlineSelected">
                                                Selected
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radioInlineDisabled" id="radioInlineDisabled" disabled>
                                            <label class="form-check-label" for="radioInlineDisabled">
                                                Disabled
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" name="radioInlineSelectedDisabled" id="radioInlineSelectedDisabled" disabled checked>
                                            <label class="form-check-label" for="radioInlineSelectedDisabled">
                                                Selected and disabled
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check form-switch mb-2">
                                            <input type="checkbox" class="form-check-input" id="formSwitch1">
                                            <label class="form-check-label" for="formSwitch1">Toggle this switch element</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" class="form-check-input" disabled id="formSwitch2">
                                            <label class="form-check-label" for="formSwitch2">Disabled switch element</label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="formFile">File upload</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title">Form Grid</h6>
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" placeholder="Enter first name">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" placeholder="Enter last name">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control" placeholder="Enter city">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label class="form-label">State</label>
                                                <input type="text" class="form-control" placeholder="Enter state">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label class="form-label">Zip</label>
                                                <input type="text" class="form-control" placeholder="Enter zip code">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" autocomplete="off" placeholder="Password">
                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                </form>
                                <button type="button" class="btn btn-primary submit">Submit form</button>
                            </div>
                        </div>
                    </div>
                </div>

                

               

            </div>

            <!-- partial:partials/_footer.html -->
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