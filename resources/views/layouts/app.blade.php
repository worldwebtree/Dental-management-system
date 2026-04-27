<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
        {{ $title }}
    </title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .gradient-1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .gradient-2 {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 99%, #fecfef 100%);
        }
        .gradient-3 {
            background: linear-gradient(135deg, #f6d365 0%, #fda085 100%);
        }
        .gradient-4 {
            background: linear-gradient(135deg, #5ee7df 0%, #b490d2 100%);
        }
        .table thead th {
            background-color: #f1f3f5;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
            border-bottom: 2px solid #dee2e6;
        }
        .btn-primary {
            background-color: #7571f9;
            border-color: #7571f9;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ route('dashboard') }}">
                    <h1 class="logo-abbr text-white bold text-uppercase text-xl">
                        @if (auth()->user()->role == "Dentist")
                            D
                            @elseif (auth()->user()->role == "Patient")
                            P
                        @endif
                    </h1>
                    <span class="brand-title text-white bold text-uppercase">
                        @if (auth()->user()->role == "Dentist")
                                Dentist
                            @elseif (auth()->user()->role == "Patient")
                                Patient
                        @endif
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <x-dashboard-header/>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <x-dashboard-sidebar/>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            {{ $content }}
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <x-dashboard-footer/>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('assets/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    <script src="{{ asset('assets/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
    <!-- Chartjs -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

    <!-- Circle progress -->
    <script src="{{ asset('assets/plugins/circle-progress/circle-progress.min.js') }}"></script>

    <!-- Datamap -->
    <script src="{{ asset('assets/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('assets/plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datamaps/datamaps.world.min.js') }}"></script>

    <!-- Morrisjs -->
    <script src="{{ asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>

    <!-- Pignose Calender -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>

    <!-- ChartistJS -->
    <script src="{{ asset('assets/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
</body>

</html>

