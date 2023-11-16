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
                <h2 class="text-center">Let's Get Started with Your Project</h2>
                <p style="color:red" class="text-center">Please Provide the information requested below.</p>
            </div>
            <div class="wrap mt-5">

                <form class="form mt-3 mb-3" id="payment-form" method="POST" action="/order-porcessing">
                    @csrf
                    <input type="hidden" name="package_name" value="{{ $plan[0]->title }}">
                    <input type="hidden" name="package_price" value="{{ $plan[0]->price }}">
                    
                

                    
                    <div class="row g-4">
                        @if($plan[0]->PLCID == 1)
                          
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
                        @elseif($plan[0]->PLCID == 2)
                       
                        <div class="col-md-8">
                            <div class="wrap p-0 m-0">
                                <h2>Breif Description</h2>
                                <div class="wrap">

                                    <div class="form-group mt-4 mb-1">
                                        <label class="fs-6">IIndustry  *</label>
                                        <select name="industry" class="form-control mt-2 mb-2" required="required">
                                            <option>Aviation</option>
                                            <option>Architectural</option>
                                            <option>Art</option>
                                            <option>Automotive</option>
                                            <option>Catalogues</option>
                                            <option>Children</option>
                                            <option>Communication</option>
                                            <option>Construction</option>
                                            <option>Consultation</option>
                                            <option>Craft</option>
                                            <option>Education</option>
                                            <option>Engineering</option>
                                            <option>Entertainment</option>
                                            <option>Environmental</option>
                                            <option>Fashion</option>
                                            <option>Financial</option>
                                            <option>Food</option>
                                            <option>Health</option>
                                            <option>Human resource</option>
                                            <option>Insurance</option>
                                            <option>Matrimony</option>
                                            <option>Medical</option>
                                            <option>Music</option>
                                            <option>Navigation</option>
                                            <option>News</option>
                                            <option>Religious</option>
                                            <option>Social</option>
                                            <option>Spa</option>
                                            <option>Sports</option>
                                            <option>Technology</option>
                                            <option>Travel</option>
                                            <option>Other</option>
                                        </select>
                                     
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label>What is the purpose of your website? Select all that apply :</label>
                                        <div class="col-sm-12 mt-3">
                                            <label class="control control-checkbox col-md-3 ">
                                                <input type="checkbox" name="websitePurpose[]" value="Informational">
                                                <span>Informational</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="PromoteService">
                                                <span>Promote Service</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="PromoteProducts">
                                                <span>Promote Products</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="DownloadableInfo">
                                                <span>Downloadable Info</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="SellService">
                                                <span>Sell Service</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="SellProducts">
                                                <span>Sell Products</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="Showcase">
                                                <span>Showcase</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="CustomerService">
                                                <span>Customer Service</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="Advertisement">
                                                <span>Advertisement</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="ECommerce">
                                                <span>E-Commerce</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="BrandingAwareness">
                                                <span>Branding/Awareness</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="CommunityService">
                                                <span>Community Service</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="EnhanceImage">
                                                <span>Enhance Image</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="EdgeOnCompetition">
                                                <span>Edge On Competition</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="GenerateLeads">
                                                <span>Generate Leads</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePurpose[]" value="PromoteAnIdea">
                                                <span>Promote An Idea</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox col-md-3">
                                                <input class="addOtherField" type="checkbox" name="websitePurpose[]" value="Other" data-id="websitePurpose">
                                                <span>Other</span>
                                                <div class="control_indicator"></div>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">Who are your major competitors? What are their websites? * </label>
                                        <input type="text" name="competitorWebsite" class="form-control mt-2 " required>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">What are the likes/dislikes of their websites? </label>
                                        <textarea class="form-control mt-2" name="liking" rows="5"></textarea>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">Describe the Image your website must communicate? Select all that apply </label>
                                        <div class="col-sm-12 mt-3" id="websiteCommunicate">
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="CuttingEdge">
                                                <span>Cutting Edge</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Traditional">
                                                <span>Traditional</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Modern">
                                                <span>Modern</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Flashy">
                                                <span>Flashy</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Professional">
                                                <span>Professional</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Masculine">
                                                <span>Masculine</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Glamorous">
                                                <span>Glamorous</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="HighTech">
                                                <span>HighTech</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Futuristic">
                                                <span>Futuristic</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Trendy">
                                                <span>Trendy</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Corporate">
                                                <span>Corporate</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Feminine">
                                                <span>Feminine</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="ContentDriven">
                                                <span>Content Driven</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Conservative">
                                                <span>Conservative</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="FriendlyForChildren">
                                                <span>Friendly For Children</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="FamilyOriented">
                                                <span>Family Oriented</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Academic">
                                                <span>Academic</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Fun">
                                                <span>Fun</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="International">
                                                <span>International</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Exciting">
                                                <span>Exciting</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="SimpleClean">
                                                <span>Simple Clean</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Industrial">
                                                <span>Industrial</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Inspirational">
                                                <span>Inspirational</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Colorful">
                                                <span>Colorful</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Humorous">
                                                <span>Humorous</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Soft">
                                                <span>Soft</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Elegant">
                                                <span>Elegant</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Nature">
                                                <span>Nature</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Complex">
                                                <span>Complex</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="Progressive">
                                                <span>Progressive</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websiteCommunicate[]" value="ServiceOriented">
                                                <span>Service Oriented</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input class="addOtherField" data-id="websiteCommunicate" type="checkbox" name="websiteCommunicate[]" value="Other">
                                                <span>Other</span><div class="control_indicator"></div>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">Select which pages do you want in your website </label>
                                        <div class="col-sm-12 mt-3" id="websitePages">
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="Home">
                                                <span>Home</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="AboutUs">
                                                <span>About Us / About</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="OurServices">
                                                <span>Our Services / Services</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="OurProducts">
                                                <span>Our Products / Products</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="FAQs">
                                                <span>FAQ's</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="ContactUs">
                                                <span>Contact Us / Contact</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="Portfolio">
                                                <span>Portfolio / Showcase</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="CustomerService">
                                                <span>Customer Service</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="NewsletterSignUp">
                                                <span>Newsletter SignUp</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="EmploymentFacility">
                                                <span>Employment Facility</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="InformationCareers">
                                                <span>Information Careers</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="OnlineRegistration">
                                                <span>Online Registration</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="PressRelease">
                                                <span>Press Release</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="Testimonials">
                                                <span>Testimonials</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="ManagementBios">
                                                <span>Management Bios</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="QuoteRequest">
                                                <span>Quote Request</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="Pricing">
                                                <span>Pricing</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="Direction">
                                                <span>Direction</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input type="checkbox" name="websitePages[]" value="DealerInformation">
                                                <span>Dealer Information</span><div class="control_indicator"></div>
                                            </label>
                                            <label class="control  control-checkbox col-md-3">
                                                <input class="addOtherField" data-id="websitePages" type="checkbox" name="websitePages[]" value="Other">
                                                <span>Other</span><div class="control_indicator"></div>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mt-3 mb-1">
                                        <label for="">Select Any :</label>
                                        <div class="col-sm-12 radio-wrap">
                                            <input type="radio" name="webImages" value="ownPhotos" id="webImages1" required checked="checked">
                                            <label for="webImages1"><span></span> I would like to use my own photos </label>
                                            <br>
                                            <input type="radio" name="webImages" value="stockPhotos" id="webImages2" required>
                                            <label for="webImages2"><span></span> I would like to use stock photos </label>
                                        </div>
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                        @endif
                     
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
                                        <button type="button" class="btn btn-outline-danger w-100 fs-4">Creative Logo Desgin</button>
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