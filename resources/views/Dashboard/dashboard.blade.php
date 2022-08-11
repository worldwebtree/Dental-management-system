<x-app-layout>

    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Patients</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $patients }}</h2>
                                <p class="text-white mb-0">{{ $current_date->format('d M Y') }}</p>
                            </div>
                            <span class="float-right display-5"><i class="fas fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Appointments</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $appointments }}</h2>
                                <p class="text-white mb-0">{{ $current_date->format('d M Y') }}</p>
                            </div>
                            <span class="float-right display-5"><i class="fas fa-calendar-check"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">Contacts</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">{{ $contacts }}</h2>
                                <p class="text-white mb-0">{{ $current_date->format('d M Y') }}</p>
                            </div>
                            <span class="float-right display-5"><i class="fas fa-address-book"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
