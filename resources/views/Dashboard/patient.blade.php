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
                                        <th>dob</th>
                                        <th>occupation</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <a href="#">
                                                    <i class="fas fa-trash"></i>
                                                </a>|
                                                <a href="#">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
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
