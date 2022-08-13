<x-app-layout>

    <x-slot name="title">
        Transactions
    </x-slot>

    <x-slot name="content">
        @if (auth()->user()->role == "Dentist")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="card">
                            <div class="card-header text-uppercase">
                                <h2>
                                    transaction
                                </h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse table-responsive">
                                    <thead class="thead-inverse text-uppercase">
                                        <tr>
                                            <th>patient</th>
                                            <th>appointment</th>
                                            <th>payment</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td scope="row">{{ $transaction->patient->user['name'] }}</td>
                                                    <td>{{ $transaction['appointment_id'] }}</td>
                                                    <td>{{ $transaction['payment'] }}</td>
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
                            <div class="card-header text-uppercase">
                                <h2>
                                    transaction
                                </h2>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-inverse table-responsive">
                                    <thead class="thead-inverse text-uppercase">
                                        <tr>
                                            <th>patient</th>
                                            <th>appointment</th>
                                            <th>payment</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($patient_transactions as $patient_transaction)
                                                <tr>
                                                    <td scope="row">{{ $patient_transaction->patient->user['name'] }}</td>
                                                    <td>{{ $patient_transaction['appointment_id'] }}</td>
                                                    <td>{{ $patient_transaction['payment'] }}</td>
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
