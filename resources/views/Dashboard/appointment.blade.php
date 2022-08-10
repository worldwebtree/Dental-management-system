<x-app-layout>

    <x-slot name="title">
        Appointments
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header text-uppercase">
                            <h2>
                                appointments
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse text-uppercase">
                                    <tr>
                                        <th>patient name</th>
                                        <th>appointment datetime</th>
                                        <th>status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointments as $appointment)
                                            <tr>
                                                <td scope="row">{{ $appointment['patient-name'] }}</td>
                                                <td>{{ $appointment['appointment-dateTime'] }}</td>
                                                <td>{{ $appointment['status'] }}</td>
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