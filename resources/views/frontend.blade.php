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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/frontend/lib/twentytwenty/twentytwenty.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


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
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h2 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Huzaifa Dental Clinic</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                <a href="#aboutSection" class="nav-item nav-link">About</a>
                <a href="#serviceSection" class="nav-item nav-link">Service</a>
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/frontend/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Teeth Healthy</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Dental Treatment</h1>
                            <a href="#appointmentSection" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a>
                            <a href="#contactSection" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
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
    <!-- Carousel End -->


    <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <a class="btn btn-light" href="#appointmentSection">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment On Call</h3>
                        <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="aboutSection" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The World's Best Dental Clinic That You Can Trust</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="#appointmentSection" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/frontend/img/about.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" id="appointmentSection" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="display-5 text-white mb-4">موږ یو تصدیق شوی او جایزه ګټونکی د غاښونو کلینیک یو چې تاسو باور کولی شئ</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">ملاقات وکړئ</h1>
                        <form action="{{ route('make.appointment.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="service" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service }}">
                                                {{ $service }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" name="dentist_id" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        @foreach ($dentist as $den)
                                            <option value="{{ $den->dentist['id'] ?? ''}}">
                                                {{ $den['name'] }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="date"
                                                name="date"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Date">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time1" data-target-input="nearest">
                                        <input type="time"
                                                name="time"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Appointment Time">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">ملاقات وکړئ</button>
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
    <div class="container-fluid py-5 wow fadeInUp" id="serviceSection" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/frontend/img/before.jpg') }}" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="{{ asset('assets/frontend/img/after.jpg') }}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">موږ د غاښونو غوره کیفیت خدمتونه وړاندې کوو</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-1.jpg') }}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Cosmetic Dentistry</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-2.jpg') }}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Implants</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-3.jpg') }}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Bridges</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{ asset('assets/frontend/img/service-4.jpg') }}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contactSection">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
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
                <div class="col-xl-6 col-lg-6 wow slideInUp" data-wow-delay="0.3s">
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
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Dentist</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Dentist</h1>
                        <a href="#appointmentSection" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    @foreach ($dentist as $den)
                        @if (!empty($den->dentist))
                            <div class="team-item">
                                <div class="position-relative rounded-top" style="z-index: 1;">
                                    @if ($den->dentist->avatar != null)
                                        <img class="img-fluid rounded-top w-100" src="{{ asset('storage/profileAvatars/'.$den->dentist->avatar) }}" alt="dentist_image">
                                        @elseif ($den->dentist->avatar != null)
                                        <img class="img-fluid rounded-top w-100" src="{{ asset('assets/images/user/1.jpg') }}" alt="dentist_image">
                                    @endif
                                </div>
                                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                                    <h4 class="mb-2">{{ $den->name ?? '' }}</h4>
                                    <p class="text-primary mb-0">{{ $den->dentist->specialization ?? '' }}</p>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6"> 
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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
</body>

</html>

