<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative Logo Desgin Order Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand d-flex w-100 flex-row justify-content-center" href="#">
                <img src="https://www.creativelogodesigns.io/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo-light.919e7d6c.png&w=256&q=75" />
            </a>
        </div>
    </nav>

    <section>

        <div class="container">
            
            <div class="wrap mt-5">

                <form class="form mt-3 mb-3" id="payment-form" method="POST" action="/order-porcessing" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="package_name" value="{{ $plan[0]->title }}">
                    <input type="hidden" name="package_price" value="{{ $plan[0]->price }}">
                    
                

                    
                    <div class="row g-4">
                     
                          
                        <div class="col-md-8">
                            <div class="wrap p-0 m-0">
                                <div class="wrap mt-5">
                                    <h2 class="text-start">Let's Get Started with Your Project</h2>
                                    <p style="color:red" class="text-start">Please Provide the information requested below.</p>
                                </div>
                                <hr>
                                <div class="wrap">

                                    <div class="form-group mt-4 mb-1">
                                        <label class="fs-6">IS THIS A RE-DESIGN OR A NEW LOGO? *</label>
                                        <select name="re-design" class="form-control mt-2 mb-2" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                  
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">WORD/NAME THAT YOU WANT IN LOGO TO APPEAR (TYPE IN EXACTLY AS YOU WANTED).*</label>
                                        <input type="text" name="logoname" class="form-control mt-2 " required>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">TAGLINE THAT YOU WANT IN LOGO TO APPEAR.</label>
                                        <input type="text" name="tagline" class="form-control mt-2 ">
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">PLEASE PROVIDE A BRIEF DESCRIPTION OF YOUR BUSINESS. YOU MAY ALSO WANT TO LIST WEBSITE ADDRESSES OF YOUR COMPETITORS, IF ANY.</label>
                                        <textarea class="form-control mt-2" name="description" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">ANYTHING THAT YOU DO NOT LIKE AND WE SHOULD AVOID THAT IN OUR DESIGN CONCEPT. (COLOR, PICTURE OR CERTAIN NATURE, ETC)</label>
                                        <textarea class="form-control mt-2" name="avoid-description" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">EXISTING WEBSITE ADDRESS, IF ANY</label>
                                        <input type="text" name="existing-website" class="form-control mt-2 ">
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">Upload Images (Optional)</label>
                                        <input type="file" name="website_imge[]" class="form-control mt-2 " multiple>
                                    </div>
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        </div>
                       
                     
                        <div class="col-md-4 ">
                            <div class="wrap">
                                <div class="card" style="border-color: #ad1317;">
                                    <div class="card-header" style="background:#ad1317;border-color: #ad1317;">
                                        <h3 style="color:white;    display: flex;
                                flex-direction: row;
                                flex-wrap: nowrap;
                                justify-content: space-between;"><span>{{ $plan[0]->title }}</span><span> ${{ $plan[0]->price }}.00</span></h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-2" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                                            <ul style="overflow: hidden; width: auto; height: 300px;overflow-y:scroll">
                                                @if(count($planItems) > 0)
                                                    @foreach($planItems as $items)
                                                        <li>{{ $items->itemsDescriptions }}</li>
                                                    @endforeach
                                                @endif
                                               
                                            </ul>
                                            @if(count($planItems) > 0)
                                            @foreach($planItems as $items)
                                                <input type="hidden" name="features[]" value="{{ $items->itemsDescriptions }}" name="PackageFeatures">
                                            @endforeach
                                            @endif
                                        </div>
                                        <button type="button" class="btn btn-outline-danger w-100 fs-4 mt-4">Creative Logo Desgin</button>
                                    </div>
                                </div>
                            </div>


                           


                            <div class="warp mt-5">
                                <div class="card">
                                    <div class="card-header" style="background:#ad1317;border-color: #ad1317;">
                                        <h3 style="color:white">Payment Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-row">
                                            <div class="form-group mt-4 mb-1">
                                                <label class="fs-6">Your Good Name *</label>
                                                <input type="text" name="customer_name" class="form-control" required>
                                            </div>
                                            <div class="form-group mt-4 mb-1">
                                                <label class="fs-6">Your Email *</label>
                                                <input type="text" name="customer_email" class="form-control" required>
                                            </div>
                                            <div class="form-group mt-4 mb-1">
                                                <label class="fs-6">Your Phone *</label>
                                                <input type="text" name="customer_phone" class="form-control" required>
                                            </div>

                                            
                                            <div class="col-md-12">
                                                <label class="control control-checkbox">
                                                    <input required="" type="checkbox" name="terms" value="1">
                                                    <span>I agree to the <a href="">Terms and Conditions</a> and <a href="">Privacy Policy</a></span><div class="control_indicator"></div>
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-danger mt-4">Procced For Payment</button>
                                            <!-- Used to display form errors. -->
                                            <div id="card-errors" role="alert"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    

                   
                     
                    
                 
                    </form>



            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>

</body>

</html>