<x-app-layout>

    <x-slot name="title">
        Plan Bookings
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <x-alerts />
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-bottom py-3">
                            <h4 class="m-0 fw-bold text-primary text-uppercase">Pricing Plan Bookings</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover m-0">
                                    <thead class="bg-light text-uppercase small fw-bold">
                                        <tr>
                                            <th class="border-0">Customer Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Phone</th>
                                            <th class="border-0">Selected Plan</th>
                                            <th class="border-0">Price</th>
                                            <th class="border-0">Status</th>
                                            <th class="border-0">Date</th>
                                            <th class="border-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td class="align-middle fw-medium">{{ $booking->name }}</td>
                                                <td class="align-middle small text-muted">{{ $booking->email }}</td>
                                                <td class="align-middle">{{ $booking->phone }}</td>
                                                <td class="align-middle">
                                                    <span class="badge bg-primary px-3 py-2 rounded-pill">{{ $booking->plan_name }}</span>
                                                </td>
                                                <td class="align-middle fw-bold text-primary">${{ number_format($booking->price, 2) }}</td>
                                                <td class="align-middle">
                                                    <span class="badge {{ $booking->status == 'Pending' ? 'bg-warning text-dark' : 'bg-success' }} px-2 py-1 rounded-pill">
                                                        {{ $booking->status }}
                                                    </span>
                                                </td>
                                                <td class="align-middle small">{{ $booking->created_at->format('M d, Y') }}</td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('plan.bookings.delete', $booking->id) }}"
                                                        class="btn btn-sm btn-outline-danger shadow-sm"
                                                        data-toggle="tooltip"
                                                        title="Delete Booking">
                                                        <i class="fas fa-trash-alt"></i>
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
    </x-slot>

</x-app-layout>
