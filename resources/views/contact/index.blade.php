@extends('layout.layout')
@section('header')
@endsection
@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-5.jpg); background-size: cover; background-position: center;">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="demo-auto-services.html" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">CONTACT</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-12">Contact</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section border-0 py-0 m-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row py-5 my-5">
                        <div class="col-md-6">
                            <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Get In Touch</h2>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Work Inquiries</h3>
                                <a href="tel:+1234567890" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(800) 123-4567</a>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Careers & Press</h3>
                                <a href="tel:+1234567890" class="d-inline-block text-color-default text-color-hover-primary text-decoration-none mb-4">(800) 123-4567</a>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Assistance Hours</h3>
                                <p>Mon - Sat 9:00am - 8:00pm<br> Sunday - CLOSED</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="font-weight-bold text-color-dark text-6 text-lg-5 text-xl-7 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100">Address and Mail</h2>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1300">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Address</h3>
                                <p>12345 Porto Blvd. <br>Suite 1500 <br>Los Angeles, California 90000</p>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                                <h3 class="alternative-font-4 font-weight-bold text-color-dark text-transform-none text-4 mb-0">Email</h3>
                                <a href="mailto:mail@example.com" class="text-color-default text-color-hover-primary text-decoration-underline mb-4">mail@example.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 fluid-col-lg-5 p-0">
                    <div class="fluid-col h-100">

                        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                        <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 400px;"></div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card bg-primary border-0 border-radius-0">
                    <div class="card-body p-5">
                        <h3 class="d-block alternative-font-4 text-color-light font-weight-medium opacity-8 text-4 mb-0">ANY QUESTIONS?</h3>
                        <h2 class="text-color-light font-weight-bold text-9 pb-2 mb-4">Frequent Asked Questions</h2>

                        <div class="custom-seemore-overlay mb-4" style="max-height: 400px;">
                            <div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQOne">
                                                1- Why choose Porto Law?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQOne" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQTwo">
                                                2- Why do I need an attorney?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQTwo" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQFour">
                                                3- Cras a elit sit amet leo accumsan volutpa?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQFour" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQFive">
                                                4- Integer aliquet ullamcorper dolor?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQFive" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQSix">
                                                5- Efficitur felis ultrices non?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQSix" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQSeven">
                                                6- Efficitur sit a met non?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQSeven" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle text-color-dark font-weight-semibold text-2-5 collapsed" data-toggle="collapse" href="#collapseFAQEight">
                                                7- Efficitur felis ultrices non dolor sit?
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFAQEight" class="collapse" data-parent="#FAQAccordion">
                                        <div class="card-body pl-4 pt-2">
                                            <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non. Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="custom-seemore-overlay-button text-color-light text-5"><i class="fas fa-chevron-down position-relative z-index-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="requestConsultation" class="col-lg-6 col-xl-5 offset-xl-1">
                <h3 class="d-block alternative-font-4 text-color-primary font-weight-medium text-4 text-lg-right mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">LET'S TALK</h3>
                <h2 class="text-color-dark font-weight-bold text-9 text-lg-right pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Request Consultation</h2>

                <form class="contact-form custom-form-style-1 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800" action="php/contact-form.php" method="POST">
                    <div class="contact-form-success alert alert-success d-none mt-4">
                        <strong>Success!</strong> Your request has been sent to us.
                    </div>

                    <div class="contact-form-error alert alert-danger d-none mt-4">
                        <strong>Error!</strong> There was an error sending your request.
                        <span class="mail-error-message text-1 d-block"></span>
                    </div>

                    <div class="form-row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control border-radius-0" name="name" id="name" required placeholder="Name *">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col mb-3">
                            <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control border-radius-0" name="email" id="email" required placeholder="E-mail *">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col mb-3">
                            <input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control border-radius-0" name="phone" id="phone" required placeholder="Phone *">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col mb-4">
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="9" class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col text-lg-right mb-0">
                            <button type="submit" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="350" data-loading-text="Loading...">REQUEST CONSULTATION</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
@section('footer')
@endsection
