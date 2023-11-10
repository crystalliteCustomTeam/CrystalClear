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
        @include('demo2.layout.header')
        <div id="app">
            @yield('content')
        </div>
        @include('demo2.layout.footer')
        <div class="container">
            <div class="wrap mt-5">
                <h2 class="text-center">Let's Get Started with Your Project</h2>
                <p style="color:red" class="text-center">Please Provide the information requested below.</p>
            </div>
            <div class="wrap mt-5">

                <form class="form mt-3 mb-3" id="payment-form" method="POST" action="/order-porcessing">
                    @csrf
                    <input type="hidden" name="package_name" value="basic logo">
                    <input type="hidden" name="package_price" value="300">
                    <input type="hidden" name="customer_name" value="{{$name}}">
                    <input type="hidden" name="customer_email" value="{{$email}}">
                    <input type="hidden" name="customer_phone" value="{{$phone}}">
                    <input type="hidden" name="stripe_token" id="stripeToken">

                    <div class="row g-4">
                        <div class="col-md-8">
                            <div class="wrap p-0 m-0">
                                <h2>Breif Description</h2>
                                <div class="wrap">

                                    <div class="form-group mt-4 mb-1">
                                        <label class="fs-6">IS THIS A RE-DESIGN OR A NEW LOGO? *</label>
                                        <select name="re-design" class="form-control mt-2 mb-2" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label>SELECT WHAT TYPE(S) OF YOUR LOGO SHOULD BE LOOK LIKE?</label>
                                        <div class="row g-3 mt-2">
                                            <div class="col-md-3">
                                                <img src="https://www.creativelogodesigns.io/_next/image?url=%2Fportfolios%2Flogo-design%2Fcombination%2F1.png&w=828&q=75" class="img-fluid">
                                                <div class="wrap mt-2">
                                                    <input type="checkbox" name="type[]" class="form-check-input" value="Combination" id="flexRadioDefault2" />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Combination
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="https://www.creativelogodesigns.io/_next/image?url=%2Fportfolios%2Flogo-design%2Femblem%2F3.png&w=828&q=75" class="img-fluid">
                                                <div class="wrap mt-2">
                                                    <input type="checkbox" name="type[]" class="form-check-input" value="Emblem" id="flexRadioDefault2" />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Emblem
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="https://www.creativelogodesigns.io/_next/image?url=%2Fportfolios%2Flogo-design%2Fmascot%2F4.png&w=828&q=75" class="img-fluid">
                                                <div class="wrap mt-2">
                                                    <input type="checkbox" name="type[]" class="form-check-input" value="Mascot" id="flexRadioDefault2" />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Mascot
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="https://www.creativelogodesigns.io/_next/image?url=%2Fportfolios%2Flogo-design%2Ftypography%2F1.png&w=828&q=75" class="img-fluid">
                                                <div class="wrap mt-2">
                                                    <input type="checkbox" name="type[]" class="form-check-input" value="Typography" id="flexRadioDefault2" />
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Typography
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
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
    justify-content: space-between;"><span>Logo Basic</span><span> $300.00</span></h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-2" style="position: relative; overflow: hidden; width: auto; height: 300px;">
                                            <ul style="overflow: hidden; width: auto; height: 300px;">
                                                <li>4 Original Logo Concepts</li>
                                                <li> 2 Dedicated Logo Designer</li>
                                                <li> 4 Revisions</li>
                                                <li> With Grey Scale Format</li>
                                                <li> Free Icon Design</li>
                                                <li> Formats: JPEG Only</li>
                                                <li> 24 - 48 Hours Turn Around Time</li>
                                                <li>MORE FEATURES</li>
                                                <li> 100% Satisfaction</li>
                                                <li> 100% Ownership Rights</li>
                                                <li> Money Back Guarantee</li>
                                                <li> Dedicated Account Manager</li>
                                            </ul>
                                        </div>
                                        <button class="btn btn-outline-danger w-100 fs-4">Creative Logo Desgin</button>
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
                                            <label for="card-element">
                                                Credit or debit card
                                            </label>
                                            <div id="card-element" class="mt-3 border p-2 border-danger">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <button type="submit" class="btn btn-danger mt-4">Submit Payment</button>
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
    <script>
        let stripe = Stripe("{{ env('STRIPE_KEY') }}")

        var elements = stripe.elements();
        let style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        }
        var cardElement = elements.create('card', {
            style: style
        });
        cardElement.mount('#card-element');
        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    // Handle errors, display them to the user
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server to complete the payment
                    // This is where you make a POST request to your server to process the payment
                    // Example: handlePayment(result.token);
                    console.log(result.token);
                    document.querySelector("#stripeToken").value = result.token.id

                    form.submit();

                }
            });
        });
    </script>
</body>

</html>