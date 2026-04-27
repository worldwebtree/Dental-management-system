<x-app-layout>

    <x-slot name="title">
        Dashboard
    </x-slot>

    <x-slot name="content">
        @if (auth()->user()->role == "Dentist")
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-1 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Total Patients</h3>
                                        <h2 class="text-white fw-bold">{{ $patients }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-users text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-4 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Active Appointments</h3>
                                        <h2 class="text-white fw-bold">{{ $appointments }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-calendar-check text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-3 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Completed</h3>
                                        <h2 class="text-white fw-bold">{{ $completed_appointments }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-check-circle text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card bg-danger h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Canceled</h3>
                                        <h2 class="text-white fw-bold">{{ $canceled_appointments }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-times-circle text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-2 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Contacts</h3>
                                        <h2 class="text-white fw-bold">{{ $contacts }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-address-book text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card bg-success h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Transactions</h3>
                                        <h2 class="text-white fw-bold">{{ $transactions }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-dollar-sign text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elseif (auth()->user()->role == "Patient")
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-1 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Total Dentists</h3>
                                        <h2 class="text-white fw-bold">{{ $dentists }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-user-md text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-4 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">My Appointments</h3>
                                        <h2 class="text-white fw-bold">{{ $appointments }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-calendar-check text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-3 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Completed</h3>
                                        <h2 class="text-white fw-bold">{{ $completed_appointments }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-check-circle text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card bg-danger h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Canceled</h3>
                                        <h2 class="text-white fw-bold">{{ $canceled_appointments }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-times-circle text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card gradient-2 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Contacts</h3>
                                        <h2 class="text-white fw-bold">{{ $contacts }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-address-book text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-4">
                        <div class="card bg-success h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h3 class="card-title text-white mb-1">Transactions</h3>
                                        <h2 class="text-white fw-bold">{{ $transactions }}</h2>
                                        <p class="text-white-50 mb-0">{{ $current_date->format('d M Y') }}</p>
                                    </div>
                                    <div class="bg-white bg-opacity-25 rounded-circle p-3">
                                        <i class="fas fa-dollar-sign text-white fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
