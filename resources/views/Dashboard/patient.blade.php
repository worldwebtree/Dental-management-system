<x-app-layout>

    <x-slot name="title">
        Patients
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header text-uppercase">
                            <h2>
                                patients
                            </h2>
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
