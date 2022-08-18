<x-app-layout>

    <x-slot name="title">
        Dentists
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header text-uppercase">
                            <h2>
                                dentists
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
                                        <th>dob</th>
                                        <th>specialization</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dentists as $dentist)
                                            <tr>
                                                <td scope="row">
                                                    <img src="{{ asset('storage/profileAvatars/'.$dentist->dentist['avatar'] ?? 'not added yet') }}" alt="dentist_avatar">
                                                </td>
                                                <td>{{ $dentist['name'] }}</td>
                                                <td>{{ $dentist['email'] }}</td>
                                                <td>{{ $dentist->dentist['phone'] ?? 'not added yet'   }}</td>
                                                <td>{{ $dentist->dentist['address'] ?? 'not added yet'   }}</td>
                                                <td>{{ $dentist->dentist['country'] ?? 'not added yet'   }}</td>
                                                <td>{{ $dentist->dentist['city'] ?? 'not added yet'   }}</td>
                                                <td>{{ $dentist->dentist['age'] ?? 'not added yet'   }}</td>
                                                <td>{{ $dentist->dentist['birthDate'] ?? 'not added yet'   }}</td>
                                                <td>{{ $dentist->dentist['specialization'] ?? 'not added yet'   }}</td>
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
