<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        @if (auth()->user()->role == "Dentist")

            <ul class="metismenu">
                <li class="nav-label">Dashboard</li>
                <li>
                    <a class="" href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i><span class="nav-text pl-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('patients') }}">
                        <i class="fas fa-users"></i><span class="nav-text pl-3">Patients</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('appointments') }}">
                        <i class="fas fa-calendar-check"></i><span class="nav-text pl-3">Appointments</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('transactions') }}">
                        <i class="fas fa-money-bill"></i><span class="nav-text pl-3">Transactions</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('contacts') }}">
                        <i class="fas fa-address-book"></i><span class="nav-text pl-3">Contacted Patients</span>
                    </a>
                </li>
            </ul>

            @elseif (auth()->user()->role == "Patient")

            <ul class="metismenu">
                <li class="nav-label">Dashboard</li>
                <li>
                    <a class="" href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i><span class="nav-text pl-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('dentists') }}">
                        <i class="fas fa-users"></i><span class="nav-text pl-3">Dentists</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('appointments') }}">
                        <i class="fas fa-calendar-check"></i><span class="nav-text pl-3">Appointments</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('transactions') }}">
                        <i class="fas fa-money-bill"></i><span class="nav-text pl-3">Transactions</span>
                    </a>
                </li>
            </ul>
        @endif
    </div>
</div>
