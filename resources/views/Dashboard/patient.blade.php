<x-app-layout>

    <x-slot name="title">
        Patients
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <x-error :errors="$errors" />
                        <x-alerts/>
                        <div class="card-header text-uppercase flex justify-between">
                            <h2>
                                patients
                            </h2>

                            <!-- Button trigger modal -->
                            <div class="add-patient-btn">
                                <button type="button" data-toggle="modal" data-target="#modelId" class="btn-lg bg-blue-500 hover:bg-blue-700 text-white">
                                    Add Patient
                                </button>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('patients.store') }}" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
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
                                                        <input type="number" name="age" class="form-control" min="25" max="100" value="" id="inputAge">
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
                                        <th>avatar</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>phone</th>
                                        <th>address</th>
                                        <th>country</th>
                                        <th>city</th>
                                        <th>age</th>
                                        <th>gender</th>
                                        <th>dob</th>
                                        <th>occupation</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patients as $patient)
                                            <tr>
                                                <td scope="row">{{ $patient->patient['avatar'] }}</td>
                                                <td>{{ $patient['name'] }}</td>
                                                <td>{{ $patient['email'] }}</td>
                                                <td>{{ $patient->patient['phone'] }}</td>
                                                <td>{{ $patient->patient['address'] }}</td>
                                                <td>{{ $patient->patient['country'] }}</td>
                                                <td>{{ $patient->patient['city'] }}</td>
                                                <td>{{ $patient->patient['age'] }}</td>
                                                <td>{{ $patient['gender'] }}</td>
                                                <td>{{ $patient->patient['birthDate'] }}</td>
                                                <td>{{ $patient->patient['occupation'] }}</td>
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
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
