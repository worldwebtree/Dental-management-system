<x-app-layout>

    <x-slot name="title">
        Transactions
    </x-slot>

    <x-slot name="content">
        @if (auth()->user()->role == "Dentist")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-bottom py-3">
                            <h4 class="m-0 fw-bold text-primary text-uppercase">Transactions History</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover m-0">
                                    <thead class="bg-light text-uppercase small fw-bold">
                                        <tr>
                                            <th class="border-0">Patient Name</th>
                                            <th class="border-0">Appointment ID</th>
                                            <th class="border-0">Payment Amount</th>
                                            <th class="border-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $transaction)
                                            <tr>
                                                <td class="align-middle fw-medium">{{ $transaction->patient->user['name'] }}</td>
                                                <td class="align-middle">#{{ $transaction['appointment_id'] }}</td>
                                                <td class="align-middle fw-bold text-success">{{ number_format($transaction['payment'], 2) }} PKR</td>
                                                <td class="align-middle">
                                                    <span class="badge bg-success px-3 py-2 rounded-pill shadow-sm">Paid</span>
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
                    <div class="col-lg-12 col-xl-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-bottom py-3">
                            <h4 class="m-0 fw-bold text-primary text-uppercase">My Transactions</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover m-0">
                                    <thead class="bg-light text-uppercase small fw-bold">
                                        <tr>
                                            <th class="border-0">Patient Name</th>
                                            <th class="border-0">Appointment ID</th>
                                            <th class="border-0">Payment Amount</th>
                                            <th class="border-0 text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($patient_transactions as $patient_transaction)
                                            <tr>
                                                <td class="align-middle fw-medium">{{ $patient_transaction->patient->user['name'] }}</td>
                                                <td class="align-middle">#{{ $patient_transaction['appointment_id'] }}</td>
                                                <td class="align-middle fw-bold text-success">{{ number_format($patient_transaction['payment'], 2) }} PKR</td>
                                                <td class="align-middle text-center">
                                                    <span class="badge bg-success px-3 py-2 rounded-pill shadow-sm">Paid</span>
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
        @endif
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
