@php
    $user = auth()->user();
@endphp
<x-app-layout>

    <x-slot name="title">
        Profile
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header text-uppercase">
                            <h2>
                                profile
                            </h2>
                        </div>
                        <div class="card-body">
                            @if ($user->role == "Dentist" && $user->dentist != null)

                                <form action="{{ route('profile.store.dentist') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                    @csrf
                                    <x-error :errors="$errors" />
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Avatar</label>
                                        <input
                                         class="block w-full px-3 py-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help"
                                        id="file_input"
                                        type="file"
                                        name="dentistAvatar"
                                        accept="image/png, image/jpeg, image/jpg">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG.</p>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputName" class="form-label">name</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputName">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputEmail" class="form-label">email</label>
                                            <input type="email" disabled class="form-control" value="{{ $user->email }}" id="inputEmail">
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputGender" class="form-label">gender</label>
                                            <select class="form-control" name="gender" id="inputGender">
                                                <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="other">other</option>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="inputPhone" class="form-label">phone</label>
                                            <input type="number" name="phone" value="{{ $user->dentist->phone }}" class="form-control" id="inputPhone">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $user->dentist->address }}" id="inputAddress">
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputCountry" class="form-label">country</label>
                                            <input type="text" name="country" class="form-control" value="{{ $user->dentist->country }}" id="inputCountry">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputCity" class="form-label">city</label>
                                            <input type="text" name="city" class="form-control" value="{{ $user->dentist->city }}" id="inputCity">
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputAge" class="form-label">age</label>
                                            <input type="number" name="age" class="form-control" min="25" max="100" value="{{ $user->dentist->age }}" id="inputAge">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputDob" class="form-label">date of birth</label>
                                            <input type="date" name="dob" class="form-control" value="{{ $user->dentist->birthDate }}" id="inputDob">
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="inputSpecialization" class="form-label">specialization</label>
                                        <select class="form-control" name="specialization" id="inputSpecialization">
                                            <option value="{{ $user->dentist->specialization }}">{{ $user->dentist->specialization }}</option>
                                            <option value="General Dentist">General Dentist</option>
                                            <option value="Pedodontist or Pediatric Dentist">Pedodontist or Pediatric Dentist</option>
                                            <option value="Orthodontist">Orthodontist</option>
                                            <option value="Periodontist or Gum Specialist">Periodontist or Gum Specialist</option>
                                            <option value="Endodontist or Root Canal Specialist">Endodontist or Root Canal Specialist</option>
                                            <option value="Oral Pathologist or Oral Surgeon">Oral Pathologist or Oral Surgeon</option>
                                            <option value="Prosthodontist">Prosthodontist</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary float-right">Update</button>
                                </form>

                                @elseif ($user->role == "Dentist" && $user->dentist == null)
                                <form action="{{ route('profile.store.dentist') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                    @csrf
                                    <x-error :errors="$errors" />
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Avatar</label>
                                        <input
                                         class="block w-full px-3 py-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help"
                                        id="file_input"
                                        type="file"
                                        name="dentistAvatar"
                                        value="{{ asset('assets/images/user/1.jpg') }}"
                                        accept="image/png, image/jpeg, image/jpg">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG.</p>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputName" class="form-label">name</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputName">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputEmail" class="form-label">email</label>
                                            <input type="email" disabled class="form-control" value="{{ $user->email }}" id="inputEmail">
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputGender" class="form-label">gender</label>
                                            <select class="form-control" name="gender" id="inputGender">
                                                <option value="{{ $user->gender }}">{{ $user->gender }}</option>
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
                                            <input type="number" name="age" class="form-control" min="25" max="100" value="" id="inputAge">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputDob" class="form-label">date of birth</label>
                                            <input type="date" name="dob" class="form-control" value="" id="inputDob">
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="inputSpecialization" class="form-label">specialization</label>
                                        <select class="form-control" name="specialization" id="inputSpecialization">
                                            <option value="General Dentist">General Dentist</option>
                                            <option value="Pedodontist or Pediatric Dentist">Pedodontist or Pediatric Dentist</option>
                                            <option value="Orthodontist">Orthodontist</option>
                                            <option value="Periodontist or Gum Specialist">Periodontist or Gum Specialist</option>
                                            <option value="Endodontist or Root Canal Specialist">Endodontist or Root Canal Specialist</option>
                                            <option value="Oral Pathologist or Oral Surgeon">Oral Pathologist or Oral Surgeon</option>
                                            <option value="Prosthodontist">Prosthodontist</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary float-right">Update</button>
                                </form>

                                @elseif ($user->role == "Patient" && $user->patient != null)

                                <form action="{{ route('profile.store.patient') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                    @csrf
                                    <x-error :errors="$errors" />
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Avatar</label>
                                        <input
                                         class="block w-full px-3 py-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help"
                                        id="file_input"
                                        type="file"
                                        name="patientAvatar"
                                        accept="image/png, image/jpeg, image/jpg">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG.</p>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputName" class="form-label">name</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputName">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputEmail" class="form-label">email</label>
                                            <input type="email" disabled class="form-control" value="{{ $user->email }}" id="inputEmail">
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputGender" class="form-label">gender</label>
                                            <select class="form-control" name="gender" id="inputGender">
                                                <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>other</option>
                                            </select>
                                        </div>

                                        <div class="col-6">
                                            <label for="inputPhone" class="form-label">phone</label>
                                            <input type="number" name="phone" class="form-control" value="{{ $user->patient->phone }}" id="inputPhone">
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputAddress" class="form-label">address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $user->patient->address }}" id="inputAddress">
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputCountry" class="form-label">country</label>
                                            <input type="text" name="country" class="form-control" value="{{ $user->patient->country }}" id="inputCountry">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputCity" class="form-label">city</label>
                                            <input type="text" name="city" class="form-control" value="{{ $user->patient->city }}" id="inputCity">
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputAge" class="form-label">age</label>
                                            <input type="number" name="age" class="form-control" value="{{ $user->patient->age }}" id="inputAge">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputDob" class="form-label">date of birth</label>
                                            <input type="date" name="dob" class="form-control" value="{{ $user->patient->birthDate }}" id="inputDob">
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="inputOccupation" class="form-label">occupation</label>
                                        <input type="text" class="form-control" name="Occupation" value="{{ $user->patient->occupation }}" id="inputOccupation">
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary float-right">Update</button>
                                </form>

                                @elseif ($user->role == "Patient" && $user->patient == null)
                                <form action="{{ route('profile.store.patient') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                    @csrf
                                    <x-error :errors="$errors" />
                                    <div class="mb-3">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Avatar</label>
                                        <input
                                         class="block w-full px-3 py-3 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help"
                                        id="file_input"
                                        type="file"
                                        name="patientAvatar"
                                        value="{{ asset('assets/images/user/1.jpg') }}"
                                        accept="image/png, image/jpeg, image/jpg">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG, JPG or JPEG.</p>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputName" class="form-label">name</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="inputName">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputEmail" class="form-label">email</label>
                                            <input type="email" disabled class="form-control" value="{{ $user->email }}" id="inputEmail">
                                        </div>
                                    </div>

                                    <div class="d-flex mb-3">
                                        <div class="col-6">
                                            <label for="inputGender" class="form-label">gender</label>
                                            <select class="form-control" name="gender" id="inputGender">
                                                <option value="{{ $user->gender }}">{{ $user->gender }}</option>
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
                                            <input type="number" name="age" class="form-control" min="25" max="100" value="" id="inputAge">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputDob" class="form-label">date of birth</label>
                                            <input type="date" name="dob" class="form-control" value="" id="inputDob">
                                        </div>
                                    </div>

                                    <div class="col-6 mb-3">
                                        <label for="inputOccupation" class="form-label">occupation</label>
                                        <input type="text" class="form-control" name="Occupation" id="inputOccupation">
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary float-right">Update</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
