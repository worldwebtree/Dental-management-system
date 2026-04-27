@php
    $services = [
        'Complete exams, xrays, and dental cleanings' => '5000',
        'Fillings, root canals, and extractions' => '10000',
        'Cosmetic dentistry, such as whitening, porcelain and composite veneers' => '6000',
        'Implants placement and restoration' => '3000',
        'Crowns, bridges, full and partial dentures' => '8000',
        'Implants' => '20000',
        'Orthodontics' => '15000',
        'Oral appliances for control of sleep apnea' => '4000',
        'Preventive care, periodontal therapy, and nutritional counseling' => '8000',
        'Relaxation techniques using nitrous oxide sedation' => '30000',
    ];
@endphp
<x-app-layout>

    <x-slot name="title">
        Appointments
    </x-slot>

    <x-slot name="content">
        @if (auth()->user()->role == "Dentist")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <x-error :errors="$errors" />
                            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                                <h4 class="m-0 fw-bold text-primary text-uppercase">Appointments</h4>

                                <!-- Button trigger modal -->
                                <!-- Add Patient Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content border-0 shadow-lg">
                                            <div class="modal-header bg-primary text-white border-0">
                                                <h5 class="modal-title fw-bold">Add Appointment Details</h5>
                                                <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-4">
                                                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-3">
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Patient Name</label>
                                                            <input type="text" name="name" class="form-control rounded-3" placeholder="Enter patient name" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Email Address</label>
                                                            <input type="email" name="email" class="form-control rounded-3" placeholder="Enter email" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Gender</label>
                                                            <select class="form-select rounded-3" name="gender" required>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Phone Number</label>
                                                            <input type="number" name="phone" class="form-control rounded-3" placeholder="Enter phone" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Address</label>
                                                            <input type="text" name="address" class="form-control rounded-3" placeholder="Enter address" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Country</label>
                                                            <input type="text" name="country" class="form-control rounded-3" placeholder="Enter country" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">City</label>
                                                            <input type="text" name="city" class="form-control rounded-3" placeholder="Enter city" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Age</label>
                                                            <input type="number" name="age" class="form-control rounded-3" placeholder="Enter age" max="100" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Occupation</label>
                                                            <input type="text" name="Occupation" class="form-control rounded-3" placeholder="Enter occupation" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Password (for Patient)</label>
                                                            <input type="password" name="password" class="form-control rounded-3" placeholder="Max 8 chars" maxlength="8" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Appointment Status</label>
                                                            <select class="form-select rounded-3" name="status" required>
                                                                <option value="Active">Active</option>
                                                                <option value="Completed">Completed</option>
                                                                <option value="Canceled">Canceled</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Date of Birth</label>
                                                            <input type="date" name="dob" class="form-control rounded-3" required>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Appointment Date & Time</label>
                                                            <div class="input-group">
                                                                <input type="date" class="form-control rounded-start-3" name="appointment_date" required>
                                                                <input type="time" class="form-control rounded-end-3" name="appointment_time" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Dentist</label>
                                                            <select class="form-select rounded-3" name="dentist_id" required>
                                                                @foreach ($all_dentists as $dentist)
                                                                    <option value="{{ $dentist->dentist->id ?? ''}}">{{ $dentist->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                            <label class="form-label fw-semibold">Payment Amount</label>
                                                            <input type="number" name="appointment_payment" class="form-control rounded-3" placeholder="Enter payment" required>
                                                        </div>
                                                        <div class="col-12 mb-3">
                                                            <label class="form-label fw-semibold">Service</label>
                                                            <select class="form-select rounded-3" name="dentist_service" required>
                                                                @foreach ($services as $service)
                                                                    <option value="{{ $service }}">{{ $service }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="text-end mt-4">
                                                        <button type="button" class="btn btn-light px-4 me-2" data-dismiss="modal">Cancel</button>
                                                        <button type="submit" class="btn btn-primary px-4 shadow-sm">Save Appointment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover m-0">
                                        <thead class="bg-light text-uppercase small fw-bold">
                                            <tr>
                                                <th class="border-0">Patient Name</th>
                                                <th class="border-0">Date & Time</th>
                                                <th class="border-0">Service</th>
                                                <th class="border-0">Status</th>
                                                <th class="border-0 text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td class="align-middle fw-medium">{{ $appointment['patient-name'] }}</td>
                                                    <td class="align-middle">{{ $appointment['appointment-dateTime'] }}</td>
                                                    <td class="align-middle">{{ $appointment['dentist_service'] }}</td>

                                                    <td class="align-middle">
                                                        @if ($appointment['status'] == "Active")
                                                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill shadow-sm">Active</span>
                                                        @elseif ($appointment['status'] == "Completed")
                                                            <span class="badge bg-success px-3 py-2 rounded-pill shadow-sm">Completed</span>
                                                        @elseif ($appointment['status'] == "Canceled")
                                                            <span class="badge bg-danger px-3 py-2 rounded-pill shadow-sm">Canceled</span>
                                                        @endif
                                                    </td>

                                                    <td class="align-middle text-center">
                                                        <div class="btn-group shadow-sm">
                                                            <a href="{{ route('appointments.cancel', $appointment['id']) }}"
                                                                class="btn btn-sm btn-outline-danger"
                                                                data-toggle="tooltip"
                                                                title="Cancel">
                                                                <i class="fas fa-times"></i>
                                                            </a>
                                                            <a href="{{ route('appointments.completed', $appointment['id']) }}"
                                                                class="btn btn-sm btn-outline-success"
                                                                data-toggle="tooltip"
                                                                title="Mark Completed">
                                                                <i class="fas fa-check"></i>
                                                            </a>
                                                            <a href="{{ route('appointments.delete', $appointment['id']) }}"
                                                                class="btn btn-sm btn-outline-dark"
                                                                data-toggle="tooltip"
                                                                title="Delete">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            @elseif (auth()->user()->role == "Patient")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow-sm border-0">
                            <x-error :errors="$errors" />
                            <x-alerts/>
                            <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                                <h4 class="m-0 fw-bold text-primary text-uppercase">My Appointments</h4>
                                <button type="button" data-toggle="modal" data-target="#modelId" class="btn btn-primary shadow-sm">
                                    <i class="fas fa-calendar-plus me-2"></i> Get Appointment
                                </button>
                            </div>

                            <!-- Get Appointment Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog modal-md" role="document">
                                    <div class="modal-content border-0 shadow-lg">
                                        <div class="modal-header bg-primary text-white border-0">
                                            <h5 class="modal-title fw-bold">Book New Appointment</h5>
                                            <button type="button" class="btn-close btn-close-white" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form action="{{ route('appointments.get.appointment') }}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Date & Time</label>
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" name="appointment_date" required>
                                                        <input type="time" class="form-control" name="appointment_time" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Select Dentist</label>
                                                    <select class="form-select" name="dentist_id" required>
                                                        @foreach ($all_dentists as $dentist)
                                                            <option value="{{ $dentist->dentist->id ?? ''}}">{{ $dentist->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label fw-semibold">Service & Price</label>
                                                    <select class="form-select" name="dentist_service" required>
                                                        @foreach ($services as $service => $price)
                                                            <option value="{{ $service }} - {{ $price }}">{{ $service }} ({{ $price }} PKR)</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="text-end mt-4">
                                                    <button type="button" class="btn btn-light px-4 me-2" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Confirm Booking</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover m-0">
                                        <thead class="bg-light text-uppercase small fw-bold">
                                            <tr>
                                                <th class="border-0">Dentist Name</th>
                                                <th class="border-0">Date & Time</th>
                                                <th class="border-0">Service</th>
                                                <th class="border-0 text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td class="align-middle fw-medium">{{ $appointment->dentist->user['name'] }}</td>
                                                    <td class="align-middle">{{ $appointment['appointment-dateTime'] }}</td>
                                                    <td class="align-middle">{{ $appointment['dentist_service'] }}</td>
                                                    <td class="align-middle text-center">
                                                        @if ($appointment['status'] == "Active")
                                                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill shadow-sm">Active</span>
                                                        @elseif ($appointment['status'] == "Completed")
                                                            <span class="badge bg-success px-3 py-2 rounded-pill shadow-sm">Completed</span>
                                                        @elseif ($appointment['status'] == "Canceled")
                                                            <span class="badge bg-danger px-3 py-2 rounded-pill shadow-sm">Canceled</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
