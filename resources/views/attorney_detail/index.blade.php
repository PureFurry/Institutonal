@extends('layout.layout')
@section('header')
@endsection
@section('content')
<div role="main" class="main">

    <section class="page-header page-header-modern page-header-lg overlay overlay-show overlay-op-9 m-0" style="background-image: url(img/demos/law-firm-2/backgrounds/background-4.jpg); background-size: cover; background-position: center;">
        <div class="container py-4">
            <div class="row">
                <div class="col text-center">
                    <ul class="breadcrumb d-flex justify-content-center text-4-5 font-weight-medium mb-2">
                        <li><a href="demo-law-firm-2.html" class="text-color-primary text-decoration-none">HOME</a></li>
                        <li class="text-color-primary active">ATTORNEY</li>
                    </ul>
                    <h1 class="text-color-light font-weight-bold text-10">Attorney</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer py-3 my-4"></div>
    <div class="container">
        <div class="row pb-lg-4">
            <div class="col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">
                <aside class="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                    <div class="card border-0 border-radius-0 custom-box-shadow-1 mb-5">
                        <img src="img/demos/law-firm-2/team/team-1.jpg" class="card-img-top border-radius-0" alt="John Doe Image" />
                        <div class="card-body text-center px-4 py-5">
                            <h2 class="card-title alternative-font-4 text-color-dark font-weight-semibold line-height-1 text-5 mb-1">John Doe</h2>
                            <p class="text-color-grey positive-ls-3 mb-3">CEO & FOUNDER</p>
                            <p class="font-weight-light text-color-dark line-height-7 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra erat orci, ac auctor lacus tincidunt ut...</p>
                        </div>
                    </div>
                    <ul class="social-icons social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark social-icons-big mb-0">
                        <li class="social-icons-facebook">
                            <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f text-4"></i></a>
                        </li>
                        <li class="social-icons-twitter">
                            <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter text-4"></i></a>
                        </li>
                        <li class="social-icons-linkedin">
                            <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in text-4"></i></a>
                        </li>
                    </ul>
                    <hr class="my-4">
                    <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 mb-2">Contact Info</h3>
                    <p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
                    <div class="d-flex align-items-center">
                        <i class="icons icon-phone text-color-primary text-8"></i>
                        <div class="ml-3">
                            <h4 class="alternative-font-4 font-weight-bold line-height-1 text-3 mb-0">Direct Phone Number</h4>
                            <a href="tel:1234567890" class="text-decoration-none text-color-default text-color-hover-primary">(800) 123-4567</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center py-2 my-4">
                        <i class="icons icon-envelope text-color-primary text-8 position-relative bottom-2"></i>
                        <div class="ml-3">
                            <h4 class="alternative-font-4 font-weight-bold line-height-1 text-3 mb-0">E-mail Address</h4>
                            <a href="mailto:email@domain.com" class="text-decoration-none text-color-default text-color-hover-primary">johndoe@domain.com</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icons icon-calendar text-color-primary text-8 position-relative bottom-3"></i>
                        <div class="ml-3">
                            <h4 class="alternative-font-4 font-weight-bold line-height-1 text-3 mb-0">Working Days/Hours</h4>
                            <p class="mb-0">Mon - Sun / 9:00AM - 8:00PM</p>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">
                <p class="font-weight-semibold text-4 pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper. </p>
                <h3 class="alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">BIO</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. </p>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. </p>
                <h3 class="text-transform-none alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">Education</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. </p>
                <div class="custom-process-style-1 process process-vertical pt-4 pb-0">
                    <div class="process-step align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">2016</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="text-4-5 font-weight-bold mb-0">Washington State University</h4>
                            <p class="mb-0">Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum</p>
                        </div>
                    </div>
                    <div class="process-step align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">2010</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="text-4-5 font-weight-bold mb-0">Criminal Justice Degree</h4>
                            <p class="mb-0">Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum</p>
                        </div>
                    </div>
                    <div class="process-step align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">1999</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="text-4-5 font-weight-bold mb-0">Bachelor Degree</h4>
                            <p class="mb-0">Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc. In nibh ipsum</p>
                        </div>
                    </div>
                </div>
                <h3 class="text-transform-none alternative-font-4 text-color-primary text-4-5 font-weight-bold mb-1">Skills</h3>
                <p class="pb-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est consectetur. Vestibulum auctor felis eget orci semper vestibulum. </p>
                <div class="progress-bars custom-progress-bars-style-1">
                    <div class="progress-label d-flex justify-content-between">
                        <span class="text-2">SAMPLE SKILL 1</span>
                        <span class="text-2">85%</span>
                    </div>
                    <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-4 mb-2">
                        <div class="progress-bar progress-bar-primary bg-dark" data-appear-progress-animation="85%"></div>
                    </div>

                    <div class="progress-label d-flex justify-content-between pt-2">
                        <span class="text-2">SAMPLE SKILL 2</span>
                        <span class="text-2">90%</span>
                    </div>
                    <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-4 mb-2">
                        <div class="progress-bar progress-bar-primary bg-dark" data-appear-progress-animation="90%"></div>
                    </div>

                    <div class="progress-label d-flex justify-content-between pt-2">
                        <span class="text-2">SAMPLE SKILL 3</span>
                        <span class="text-2">85%</span>
                    </div>
                    <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-4 mb-0">
                        <div class="progress-bar progress-bar-primary bg-dark" data-appear-progress-animation="85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="spacer py-3 my-4"></div>

    <section class="section section-height-3 bg-primary-darken border-0 m-0">
        <div class="container py-3">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8 text-center text-lg-left mb-4 mb-lg-0">
                    <h3 class="alternative-font-4 text-color-light font-weight-semibold text-4 opacity-9 mb-1">ARE YOU LOOKING FOR</h3>
                    <h2 class="text-transform-none text-color-light font-weight-bold text-10 negative-ls-1 mb-2">Experienced Attorneys?</h2>
                    <p class="text-color-light text-3-5 opacity-8 mb-0">Get a free initial consultation right now</p>
                </div>
                <div class="col-lg-4 text-center text-lg-right">
                    <a href="demo-law-firm-2-contact.html" data-hash data-hash-offset="100" class="btn btn-primary font-weight-bold btn-px-5 btn-py-3">REQUEST CONSULTATION</a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
@section('footer')
@endsection
