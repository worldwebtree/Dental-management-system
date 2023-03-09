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
                            <div class="card-header text-uppercase flex justify-between">
                                <h2>
                                    appointments
                                </h2>

                                <!-- Button trigger modal -->
                                <div class="add-patient-btn">
                                    <button type="button" data-toggle="modal" data-target="#modelId" class="btn-lg bg-blue-500 hover:bg-blue-700 text-white">
                                        Add Appointment
                                    </button>
                                </div>

                                <!-- Add Patient Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Add Appointment Details</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                                    @csrf

                                                    <div class="d-flex mb-3">
                                                        <div class="col-6">
                                                            <label for="inputName" class="form-label">name</label>
                                                            <input type="text" name="name" value="" class="form-control" id="inputName">
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="inputEmail" class="form-label">email</label>
                                                            <input type="email" name="email" class="form-control" value="" id="inputEmail">
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-3">
                                                        <div class="col-6">
                                                            <label for="inputGender" class="form-label">gender</label>
                                                            <select class="form-control" name="gender" id="inputGender">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="other">other</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="inputPhone" class="form-label">phone</label>
                                                            <input type="number" name="phone" value="" class="form-control" id="inputPhone">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="inputAddress" class="form-label">address</label>
                                                        <input type="text" name="address" class="form-control" value="" id="inputAddress">
                                                    </div>

                                                    <div class="d-flex mb-3">
                                                        <div class="col-6">
                                                            <label for="inputCountry" class="form-label">country</label>
                                                            <input type="text" name="country" class="form-control" value="" id="inputCountry">
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="inputCity" class="form-label">city</label>
                                                            <input type="text" name="city" class="form-control" value="" id="inputCity">
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mb-3">
                                                        <div class="col-6">
                                                            <label for="inputAge" class="form-label">age</label>
                                                            <input type="number" name="age" class="form-control" max="100" value="" id="inputAge">
                                                        </div>

                                                        <div class="col-6">
                                                            <label for="inputDob" class="form-label">date of birth</label>
                                                            <input type="date" name="dob" class="form-control" value="" id="inputDob">
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="col-6 mb-3">
                                                            <label for="inputOccupation" class="form-label">occupation</label>
                                                            <input type="text" class="form-control" name="Occupation" id="inputOccupation">
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <label for="inputPassword" class="form-label">password</label>
                                                            <input type="password" class="form-control" name="password" id="inputPassword">
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class="col-6 mb-3">
                                                            <label for="inputAppointmentTimeDate" class="form-label">apointment datetime</label>
                                                            <input type="date" class="form-control border-b-0" name="appointment_date" id="inputAppointmentTimeDate">
                                                            <input type="time" class="form-control border-t-0" name="appointment_time" id="inputAppointmentTimeDate">
                                                        </div>
                                                        <div class="col-6 mb-3">
                                                            <label for="inputAppointmentStatus" class="form-label">apointment status</label>
                                                            <select class="form-control" name="status" id="inputAppointmentStatus">
                                                                <option value="Active">Active</option>
                                                                <option value="Completed">Completed</option>
                                                                <option value="Canceled">Canceled</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex">
                                                        <div class=" col-6 mb-3">
                                                            <label for="inputDentistName" class="form-label">Dentists</label>
                                                            <select class="form-control" name="dentist_id" id="inputDentistName">
                                                                @foreach ($all_dentists as $dentists)
                                                                    <option value="{{ $dentists->dentist->id ?? ''}}">
                                                                        {{ $dentists->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-6 mb-3">
                                                            <label for="inputAppointmentPayment" class="form-label">appointment payment</label>
                                                            <input type="number" class="form-control" name="appointment_payment" id="inputAppointmentPayment">
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        <label for="inputDentistService" class="form-label">services</label>
                                                        <select class="form-control" name="dentist_service" id="inputDentistService">
                                                            @foreach ($services as $service)
                                                                <option value="{{ $service }}">
                                                                    {{ $service }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <button type="button" class="btn-lg bg-red-500 hover:bg-red-700 text-white float-right ml-3" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn-lg bg-blue-500 hover:bg-blue-700 text-white float-right">Add</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse table-responsive">
                                    <thead class="thead-inverse text-uppercase">
                                        <tr>
                                            <th>patient name</th>
                                            <th>appointment datetime</th>
                                            <th>service</th>
                                            <th>status</th>
                                            <th>actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td scope="row">{{ $appointment['patient-name'] }}</td>
                                                    <td>{{ $appointment['appointment-dateTime'] }}</td>
                                                    <td>{{ $appointment['dentist_service'] }}</td>

                                                    @if ($appointment['status'] == "Active")

                                                        <td class="text-yellow-500">{{ $appointment['status'] }}</td>

                                                        @elseif ($appointment['status'] == "Completed")

                                                        <td class="text-green-500">{{ $appointment['status'] }}</td>

                                                        @elseif ($appointment['status'] == "Canceled")
                                                        <td class="text-red-500">{{ $appointment['status'] }}</td>

                                                    @endif

                                                    <td>
                                                        <a href="{{ route('appointments.cancel', $appointment['id']) }}"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="cancel">
                                                            <i class="fas fa-times fa-lg"></i>
                                                        </a>|

                                                        <a href="{{ route('appointments.completed', $appointment['id']) }}"
                                                            data-toggle="tooltip"
                                                            data-placement="top"
                                                            title="completed">
                                                            <i class="fas fa-check fa-lg"></i>
                                                        </a>|

                                                        <a href="{{ route('appointments.delete', $appointment['id']) }}"
                                                            data-toggle="tooltip"
                                                            data-title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
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

            @elseif (auth()->user()->role == "Patient")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <x-error :errors="$errors" />
                            <x-alerts/>
                            <div class="card-header text-uppercase flex justify-between">
                                <h2>
                                    appointments
                                </h2>

                                <!-- Button trigger modal -->
                                <div class="add-patient-btn">
                                    <button type="button" data-toggle="modal" data-target="#modelId" class="btn-lg bg-blue-500 hover:bg-blue-700 text-white">
                                        Get Appointment
                                    </button>
                                </div>

                                <!-- Add Patient Modal -->
                                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Get Appointment</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('appointments.get.appointment') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                                    @csrf

                                                    <div class="d-flex">
                                                        <div class="col-6 mb-3">
                                                            <label for="inputAppointmentTimeDate" class="form-label">apointment datetime</label>
                                                            <input type="date" class="form-control border-b-0" required name="appointment_date" id="inputAppointmentTimeDate">
                                                            <input type="time" class="form-control border-t-0" required name="appointment_time" id="inputAppointmentTimeDate">
                                                        </div>
                                                        <div class=" col-6 mb-3">
                                                            <label for="inputDentistName" class="form-label">Dentists</label>
                                                            <select class="form-control" name="dentist_id" id="inputDentistName">
                                                                @foreach ($all_dentists as $dentists)
                                                                    <option value="{{ $dentists->dentist->id ?? ''}}">
                                                                        {{ $dentists->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 mb-3">
                                                        <label for="inputDentistService" class="form-label">services and prices</label>
                                                        <select class="form-control" name="dentist_service" id="inputDentistService">
                                                            @foreach ($services as $service => $price)
                                                                <option value="{{ $service }} - {{ $price }}">
                                                                    {{ $service }} - {{ $price }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <button type="button" class="btn-lg bg-red-500 hover:bg-red-700 text-white float-right ml-3" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn-lg bg-blue-500 hover:bg-blue-700 text-white float-right">Add</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse table-responsive">
                                    <thead class="thead-inverse text-uppercase">
                                        <tr>
                                            <th>dentist name</th>
                                            <th>appointment datetime</th>
                                            <th>service</th>
                                            <th>status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appointments as $appointment)
                                                <tr>
                                                    <td scope="row">{{ $appointment->dentist->user['name'] }}</td>
                                                    <td>{{ $appointment['appointment-dateTime'] }}</td>
                                                    <td>{{ $appointment['dentist_service'] }}</td>
                                                    @if ($appointment['status'] == "Active")
                                                        <td class="text-yellow-500">{{ $appointment['status'] }}</td>
                                                        @elseif ($appointment['status'] == "Completed")
                                                        <td class="text-green-500">{{ $appointment['status'] }}</td>
                                                        @elseif ($appointment['status'] == "Canceled")
                                                        <td class="text-red-500">{{ $appointment['status'] }}</td>
                                                    @endif
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
        @endif
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
