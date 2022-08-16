<div class="header">
    <div class="header-content clearfix">

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
        <div class="header-right">
            <ul class="clearfix d-flex align-items-center">
                <li class="">
                    <a href="{{ route('home') }}"
                    data-toggle="tooltip"
                    data-title="Home"
                    class="text-blue-300 hover:text-blue-600 rounded-circle py-2 px-2">
                    <i class="fas fa-home fa-lg"></i>
                    </a>
                </li>
                <li class="icons dropdown">
                    @if (auth()->user()->role == "Dentist" && auth()->user()->dentist != null && auth()->user()->dentist->avatar != null)
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{ asset('storage/profileAvatars/'.auth()->user()->dentist->avatar) }}" height="40" width="40" alt="">
                        </div>

                        @elseif (auth()->user()->role == "Patient" && auth()->user()->patient != null && auth()->user()->patient->avatar != null)
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{ asset('storage/profileAvatars/'.auth()->user()->patient->avatar) }}" height="40" width="40" alt="">
                        </div>
                        @else
                        <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{ asset('assets/images/user/1.jpg') }}" height="40" width="40" alt="user-icon">
                        </div>
                    @endif
                    <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="{{ route('profile') }}"><i class="icon-user"></i> <span>Profile</span></a>
                                </li>

                                <hr class="my-2">
                                <form
                                id="logout-form"
                                action="{{ route('logout') }}"
                                method="POST"
                                style="display: none;"
                                >
                                    {{ csrf_field() }}
                                </form>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                    >
                                    <i class="icon-key"></i>
                                    <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


