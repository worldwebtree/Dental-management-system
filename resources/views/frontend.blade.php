@php
    $services = [
        'Complete exams, x-rays, and dental cleanings',
        'Fillings, root canals, and extractions',
        'Cosmetic dentistry, such as whitening, porcelain and composite veneers',
        'Implants - placement and restoration',
        'Crowns, bridges, full and partial dentures',
        'Implants',
        'Orthodontics',
        'Oral appliances for control of sleep apnea',
        'Preventive care, periodontal therapy, and nutritional counseling',
        'Relaxation techniques using nitrous oxide sedation',
    ];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Huzaifa Dental Clinic</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        :root {
            --primary: #7571f9;
            --secondary: #908efc;
            --dark: #051225;
            --light: #f8f9fa;
            --gray: #6c757d;
        }
        body {
            font-family: 'Outfit', sans-serif;
            color: #2c3e50;
            background-color: #ffffff;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--dark);
        }
        .text-primary { color: var(--primary) !important; }
        .bg-primary { background-color: var(--primary) !important; }
        .btn-primary { 
            background-color: var(--primary); 
            border-color: var(--primary);
            padding: 14px 35px;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }
        .btn-primary:hover {
            background-color: #5d59e0;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(117, 113, 249, 0.4);
        }
        .section-title h5 {
            color: var(--primary);
            letter-spacing: 3px;
            font-weight: 800;
        }
        .navbar-light .navbar-nav .nav-link {
            font-weight: 600;
            color: var(--dark);
            font-size: 1.1rem;
        }
        .hero-header {
            background: linear-gradient(rgba(5, 18, 37, 0.75), rgba(5, 18, 37, 0.75)), url("{{ asset('assets/frontend/img/carousel-1.jpg') }}") center center no-repeat;
            background-size: cover;
            padding: 180px 0;
        }
        .service-item {
            transition: .5s;
            background: #fff;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .service-item:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(117, 113, 249, 0.15);
        }
        .price-item {
            transition: .5s;
            border-radius: 20px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .price-item:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .testimonial-item {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
        .carousel-caption {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(5, 18, 37, 0.6);
            z-index: 1;
        }
        .navbar-sticky {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 999;
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }
        .team-item .team-social {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(117, 113, 249, 0.7);
            transition: .5s;
            opacity: 0;
            z-index: 1;
        }
        .team-item:hover .team-social {
            opacity: 1;
        }
        .bg-dark-blue {
            background-color: #051225;
        }
    </style>
</head>

<body>


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 navbar-sticky">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Huzaifa Dental</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="#aboutSection" class="nav-item nav-link">About</a>
                <a href="#serviceSection" class="nav-item nav-link">Service</a>
                <a href="#pricingSection" class="nav-item nav-link">Pricing</a>
                <a href="#teamSection" class="nav-item nav-link">Dentists</a>
                <a href="#appointmentSection" class="nav-item nav-link">Appointment</a>
                <a href="#contactSection" class="nav-item nav-link">Contact</a>
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary py-2 px-4 ms-3">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Login</a>
                    @endauth
                </div>
            @endif
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container-fluid">
        <x-alerts />
        <x-error :errors="$errors" />
    </div>


    <!-- Hero Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/frontend/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3" style="letter-spacing: 3px;">Keep Your Smile Bright</h5>
                            <h1 class="display-1 text-white mb-md-4">Premium Quality Dental Treatment</h1>
                            <p class="text-white mb-4 pb-2 fs-5">Expert dental care tailored to your needs. Experience the difference today.</p>
                            <a href="#appointmentSection" class="btn btn-primary py-md-3 px-md-5 me-3">Appointment</a>
                            <a href="#contactSection" class="btn btn-outline-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/frontend/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3" style="letter-spacing: 3px;">Modern Dental Solutions</h5>
                            <h1 class="display-1 text-white mb-md-4">Advanced Technology & Expert Doctors</h1>
                            <p class="text-white mb-4 pb-2 fs-5">We use the latest tools to ensure painless and efficient treatments for all our patients.</p>
                            <a href="#appointmentSection" class="btn btn-primary py-md-3 px-md-5 me-3">Appointment</a>
                            <a href="#contactSection" class="btn btn-outline-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Features Start -->
    <div class="container-fluid py-5" style="background: #f8f9fa;">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5 rounded-start shadow" style="height: 280px;">
                        <h3 class="text-white mb-3"><i class="fa fa-clock me-3"></i>Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-2">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-2">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-4">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 10:00am - 4:00pm</p>
                        </div>
                        <a class="btn btn-light rounded-pill mt-auto" href="#appointmentSection">Check Details</a>
                    </div>
                </div>
                <div class="col-lg-4" data-wow-delay="0.3s">
                    <div class="bg-white d-flex flex-column p-5 shadow" style="height: 280px;">
                        <h3 class="text-primary mb-3"><i class="fa fa-user-md me-3"></i>Expert Staff</h3>
                        <p class="text-muted">Our team of highly qualified dentists and specialists are dedicated to your oral health and beautiful smile.</p>
                        <a class="btn btn-outline-primary rounded-pill mt-auto" href="#teamSection">Meet Doctors</a>
                    </div>
                </div>
                <div class="col-lg-4" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5 rounded-end shadow" style="height: 280px;">
                        <h3 class="text-white mb-3"><i class="fa fa-phone-alt me-3"></i>Call Anytime</h3>
                        <p class="text-white mb-4">Have an emergency or want to book over the phone? Our dedicated support line is open for you.</p>
                        <h2 class="text-white mt-auto mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Emergency Start -->
    <div class="container-fluid py-5" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 align-items-center bg-dark rounded shadow-lg overflow-hidden">
                <div class="col-lg-6 p-0" style="min-height: 400px;">
                    <img class="w-100 h-100" src="{{ asset('assets/frontend/img/carousel-2.jpg') }}" style="object-fit: cover;">
                </div>
                <div class="col-lg-6 p-5">
                    <h5 class="text-primary text-uppercase mb-3">Emergency Care</h5>
                    <h1 class="display-5 text-white mb-4">Urgent Dental Pain? We're Here to Help!</h1>
                    <p class="text-white opacity-75 mb-4">Dental emergencies can be stressful. Our clinic provides rapid response for toothaches, broken teeth, and other urgent issues. Your comfort and health are our top priorities.</p>
                    <div class="d-flex align-items-center">
                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <h5 class="text-white mb-0">Call Now</h5>
                            <h2 class="text-primary mb-0">+012 345 6789</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency End -->

    <!-- About Start -->
    <div class="container-fluid py-5" id="aboutSection" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">Expert Care for a Brighter, Healthier Smile</h1>
                    </div>
                    <h4 class="text-dark mb-4 fw-bold">Painless, Professional, and Compassionate Dental Services Since 2010.</h4>
                    <p class="mb-4 text-dark fs-5">At Huzaifa Dental Clinic, we combine decades of expertise with the latest dental innovations. Our mission is to provide high-quality care that is accessible to everyone. From simple checkups to advanced oral surgeries, our team is committed to excellence.</p>
                    <div class="row g-3">
                        <div class="col-sm-6" data-wow-delay="0.3s">
                            <h6 class="mb-3 text-dark fw-bold"><i class="fa fa-award text-primary me-3"></i>Award Winning Clinic</h6>
                            <h6 class="mb-3 text-dark fw-bold"><i class="fa fa-user-check text-primary me-3"></i>Highly Certified Doctors</h6>
                        </div>
                        <div class="col-sm-6" data-wow-delay="0.6s">
                            <h6 class="mb-3 text-dark fw-bold"><i class="fa fa-shield-alt text-primary me-3"></i>Modern Digital X-Ray</h6>
                            <h6 class="mb-3 text-dark fw-bold"><i class="fa fa-hand-holding-heart text-primary me-3"></i>Affordable Payment Plans</h6>
                        </div>
                    </div>
                    <a href="#appointmentSection" class="btn btn-primary mt-4">Book Your Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded shadow-lg border border-5 border-white" data-wow-delay="0.9s" src="{{ asset('assets/frontend/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary py-5" id="appointmentSection" data-wow-delay="0.1s" style="border-radius: 0 100px 0 100px;">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-4 text-white mb-4">Ready for Your Perfect Smile?</h1>
                        <p class="text-white mb-4 fs-5 opacity-75">Book your appointment today and take the first step towards a healthier, more beautiful smile. Our experts are waiting to help you.</p>
                        <ul class="list-unstyled text-white fs-6">
                            <li class="mb-2"><i class="fa fa-check me-3 text-white"></i> Instant Online Confirmation</li>
                            <li class="mb-2"><i class="fa fa-check me-3 text-white"></i> Flexible Scheduling</li>
                            <li class="mb-2"><i class="fa fa-check me-3 text-white"></i> Personalized Care Plan</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center p-5" data-wow-delay="0.6s">
                        <h2 class="text-white mb-4 text-center">Schedule a Visit</h2>
                        <form action="{{ route('make.appointment.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label class="text-white mb-2 small fw-bold">Select Service</label>
                                    <select class="form-select bg-white border-0 py-3" name="service" required>
                                        <option selected disabled>Choose...</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service }}">{{ $service }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label class="text-white mb-2 small fw-bold">Select Dentist</label>
                                    <select class="form-select bg-white border-0 py-3" name="dentist_id" required>
                                        <option selected disabled>Choose...</option>
                                        @foreach ($dentist as $den)
                                            <option value="{{ $den->dentist['id'] ?? ''}}">{{ $den['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label class="text-white mb-2 small fw-bold">Preferred Date</label>
                                    <input type="date" name="date" class="form-control bg-white border-0 py-3" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label class="text-white mb-2 small fw-bold">Preferred Time</label>
                                    <input type="time" name="time" class="form-control bg-white border-0 py-3" required>
                                </div>
                                <div class="col-12 mt-4">
                                    <button class="btn btn-dark w-100 py-3 fw-bold rounded-pill shadow" type="submit">Confirm Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    <!-- Service Start -->
    <div class="container-fluid py-5" id="serviceSection" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                <h1 class="display-5 mb-0">Premium Dental Care Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6" data-wow-delay="0.3s">
                    <div class="service-item bg-light p-5 text-center h-100">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-tooth text-white fs-3"></i>
                        </div>
                        <h4 class="mb-3">Cosmetic Dentistry</h4>
                        <p class="mb-0">Transform your smile with our advanced cosmetic treatments including veneers and whitening.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.6s">
                    <div class="service-item bg-light p-5 text-center h-100">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-laptop-medical text-white fs-3"></i>
                        </div>
                        <h4 class="mb-3">Dental Implants</h4>
                        <p class="mb-0">High-quality dental implants to restore functionality and aesthetic beauty to your teeth.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-wow-delay="0.9s">
                    <div class="service-item bg-light p-5 text-center h-100">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle mb-4" style="width: 80px; height: 80px;">
                            <i class="fa fa-teeth-open text-white fs-3"></i>
                        </div>
                        <h4 class="mb-3">Teeth Whitening</h4>
                        <p class="mb-0">Professional whitening services that deliver fast, visible results in a single session.</p>
                    </div>
                </div>
            </div>
            
            <div class="row g-5 mt-4">
                <div class="col-lg-8">
                    <div class="bg-light rounded p-5 shadow-sm">
                        <h3 class="mb-4">Visualize Your Results</h3>
                        <div class="twentytwenty-container rounded overflow-hidden shadow-sm" style="height: 350px;">
                            <img src="{{ asset('assets/frontend/img/before.jpg') }}" style="object-fit: cover;">
                            <img src="{{ asset('assets/frontend/img/after.jpg') }}" style="object-fit: cover;">
                        </div>
                        <p class="mt-4 mb-0 text-muted">Drag the slider to see the incredible transformation our patients experience through our dedicated care.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-primary rounded p-5 h-100 d-flex flex-column align-items-center justify-content-center text-center">
                        <h3 class="text-white mb-3">Quick Booking</h3>
                        <p class="text-white mb-4">Call us today to schedule your consultation with our experts.</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                        <a href="#appointmentSection" class="btn btn-light rounded-pill px-4 py-2 mt-4">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Start -->
    <div class="container-fluid py-5" id="pricingSection" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Pricing Plan</h5>
                <h1 class="display-5 mb-0">We Offer Fair Prices For Dental Treatment</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4" data-wow-delay="0.3s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/price-1.jpg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-primary rounded p-2 px-4 shadow">
                                <h4 class="text-white m-0">Basic</h4>
                            </div>
                        </div>
                        <div class="text-center p-4 pt-5">
                            <div class="d-flex justify-content-center mb-3">
                                <h1 class="display-4 fw-bold text-primary mb-0">$49</h1>
                                <span class="align-self-end pb-2">/Year</span>
                            </div>
                            <div class="mb-4">
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Routine Checkup</p>
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Dental X-Ray</p>
                                <p class="mb-2"><i class="fa fa-times text-danger me-2"></i>Teeth Whitening</p>
                                <p class="mb-2"><i class="fa fa-times text-danger me-2"></i>Dental Implants</p>
                            </div>
                            <a href="javascript:void(0)" onclick="bookPlan('Basic', 49)" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-wow-delay="0.6s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/price-2.jpg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-primary rounded p-2 px-4 shadow">
                                <h4 class="text-white m-0">Premium</h4>
                            </div>
                        </div>
                        <div class="text-center p-4 pt-5">
                            <div class="d-flex justify-content-center mb-3">
                                <h1 class="display-4 fw-bold text-primary mb-0">$99</h1>
                                <span class="align-self-end pb-2">/Year</span>
                            </div>
                            <div class="mb-4">
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Routine Checkup</p>
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Dental X-Ray</p>
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Teeth Whitening</p>
                                <p class="mb-2"><i class="fa fa-times text-danger me-2"></i>Dental Implants</p>
                            </div>
                            <a href="javascript:void(0)" onclick="bookPlan('Premium', 99)" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-wow-delay="0.9s">
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="{{ asset('assets/frontend/img/price-3.jpg') }}" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle bg-primary rounded p-2 px-4 shadow">
                                <h4 class="text-white m-0">Advanced</h4>
                            </div>
                        </div>
                        <div class="text-center p-4 pt-5">
                            <div class="d-flex justify-content-center mb-3">
                                <h1 class="display-4 fw-bold text-primary mb-0">$149</h1>
                                <span class="align-self-end pb-2">/Year</span>
                            </div>
                            <div class="mb-4">
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Routine Checkup</p>
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Dental X-Ray</p>
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Teeth Whitening</p>
                                <p class="mb-2"><i class="fa fa-check text-primary me-2"></i>Dental Implants</p>
                            </div>
                            <a href="javascript:void(0)" onclick="bookPlan('Advanced', 149)" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5" data-wow-delay="0.6s" style="background: rgba(255,255,255,0.1); backdrop-filter: blur(10px);">
                        <div class="testimonial-item text-center text-white p-4">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{ asset('assets/frontend/img/testimonial-1.jpg') }}" style="width: 100px; height: 100px;">
                            <p class="fs-5 mb-4">"The best dental experience I've ever had. The staff is professional, and the technology is cutting edge. Highly recommend!"</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                        <div class="testimonial-item text-center text-white p-4">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{ asset('assets/frontend/img/testimonial-2.jpg') }}" style="width: 100px; height: 100px;">
                            <p class="fs-5 mb-4">"Amazing results with my teeth whitening. Fast, painless, and very affordable. Thank you Huzaifa Clinic!"</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contactSection">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>123 Street, New York, USA</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>info@example.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>+012 345 6789</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6" data-wow-delay="0.3s">
                    <form action="{{ route('contact.store') }}" method="POST">
                        <x-alerts/>
                        <x-error :errors="$errors" />
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="name" required placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control border-0 bg-light px-4" name="email" required placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" name="subject" required placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" name="message" required placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Team Start -->
    <div class="container-fluid py-5" id="teamSection">
        <div class="container">
            <div class="section-title text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentists</h5>
                <h1 class="display-5 mb-0">Meet Our Experienced Specialists</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($dentist as $den)
                    @if (!empty($den->dentist))
                        <div class="col-lg-4 col-md-6" data-wow-delay="0.3s">
                            <div class="team-item bg-white shadow rounded overflow-hidden">
                                <div class="position-relative overflow-hidden" style="height: 350px;">
                                    @if ($den->dentist->avatar != null)
                                        <img class="img-fluid w-100 h-100" src="{{ asset('storage/profileAvatars/'.$den->dentist->avatar) }}" alt="dentist_image" style="object-fit: cover;">
                                    @else
                                        <img class="img-fluid w-100 h-100" src="{{ asset('assets/images/user/1.jpg') }}" alt="dentist_image" style="object-fit: cover;">
                                    @endif
                                    <div class="team-social">
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                    </div>
                                </div>
                                <div class="text-center p-4">
                                    <h4 class="mb-1">{{ $den->name ?? 'Dentist' }}</h4>
                                    <p class="text-primary text-uppercase mb-0 small fw-bold">{{ $den->dentist->specialization ?? 'General Dentist' }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative py-5" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5 rounded shadow-lg text-center">
                <h2 class="text-white mb-4">Stay Updated With Our Newsletter</h2>
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="email" class="form-control border-white p-3 rounded-start" placeholder="Your Email Address" required>
                        <button class="btn btn-dark px-5 rounded-end shadow-sm fw-bold">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <footer class="container-fluid bg-dark-blue text-light py-5" data-wow-delay="0.3s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6"> 
                    <h3 class="text-white mb-4">Clinic Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2 text-decoration-none" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2 text-decoration-none" href="#aboutSection"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2 text-decoration-none" href="#serviceSection"><i class="bi bi-arrow-right text-primary me-2"></i>Services</a>
                        <a class="text-light mb-2 text-decoration-none" href="#appointmentSection"><i class="bi bi-arrow-right text-primary me-2"></i>Appointment</a>
                        <a class="text-light text-decoration-none" href="#contactSection"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Treatments</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2 text-decoration-none" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Teeth Whitening</a>
                        <a class="text-light mb-2 text-decoration-none" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Dental Implants</a>
                        <a class="text-light mb-2 text-decoration-none" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Oral Surgery</a>
                        <a class="text-light mb-2 text-decoration-none" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Braces & Aligners</a>
                        <a class="text-light text-decoration-none" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Routine Checkups</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Contact Info</h3>
                    <p class="mb-3"><i class="bi bi-geo-alt text-primary me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-3"><i class="bi bi-envelope text-primary me-3"></i>info@huzaifadental.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-3"></i>+012 345 6789</p>
                    <div class="d-flex pt-4">
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">About Clinic</h3>
                    <p class="text-light opacity-75">Huzaifa Dental Clinic provides state-of-the-art dental solutions with a focus on patient comfort and high-quality results. Our team is here to give you the smile you deserve.</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid text-light py-4 border-top border-secondary" style="background: #051225;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; {{ date('Y') }} <a class="text-white fw-bold text-decoration-none" href="#">Huzaifa Dental Clinic</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0 small opacity-50">Design and develop by <a href="https://worldwebtree.com" class="text-white text-decoration-none fw-bold" target="_blank">WorldWebTree.com</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Plan Booking Modal -->
    <div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg" style="border-radius: 20px;">
                <div class="modal-header bg-primary text-white border-0 py-3" style="border-radius: 20px 20px 0 0;">
                    <h5 class="modal-title text-white fw-bold" id="planModalLabel">Book Pricing Plan</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('plan.booking.store') }}" method="POST">
                    @csrf
                    <div class="modal-body p-4">
                        <input type="hidden" name="plan_name" id="modal_plan_name">
                        <input type="hidden" name="price" id="modal_plan_price">
                        
                        <div class="d-flex align-items-center mb-4 p-3 bg-light rounded-3">
                            <div class="flex-grow-1">
                                <p class="mb-0 text-muted small">Selected Plan</p>
                                <h5 class="mb-0 text-primary fw-bold" id="display_plan_name">Basic Plan</h5>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 text-muted small">Annual Price</p>
                                <h5 class="mb-0 text-dark fw-bold" id="display_plan_price">$49.00</h5>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-uppercase">Full Name</label>
                            <input type="text" name="name" class="form-control border-0 bg-light px-4" placeholder="Enter your name" required style="height: 50px; border-radius: 10px;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-uppercase">Email Address</label>
                            <input type="email" name="email" class="form-control border-0 bg-light px-4" placeholder="Enter your email" required style="height: 50px; border-radius: 10px;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold text-uppercase">Phone Number</label>
                            <input type="text" name="phone" class="form-control border-0 bg-light px-4" placeholder="Enter your phone" required style="height: 50px; border-radius: 10px;">
                        </div>
                    </div>
                    <div class="modal-footer border-0 p-4 pt-0">
                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary rounded-pill px-4">Confirm Booking</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/twentytwenty/jquery.event.move.js') }}"></script>
    <script src="{{ asset('assets/frontend/lib/twentytwenty/jquery.twentytwenty.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    <script>
        function bookPlan(name, price) {
            document.getElementById('modal_plan_name').value = name;
            document.getElementById('modal_plan_price').value = price;
            document.getElementById('display_plan_name').innerText = name + " Plan";
            document.getElementById('display_plan_price').innerText = "$" + price + ".00";
            
            var myModal = new bootstrap.Modal(document.getElementById('planModal'));
            myModal.show();
        }
    </script>
</body>

</html>

