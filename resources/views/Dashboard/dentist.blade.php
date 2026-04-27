<x-app-layout>

    <x-slot name="title">
        Dentists
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-bottom py-3">
                            <h4 class="m-0 fw-bold text-primary text-uppercase">Dentists List</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover m-0">
                                    <thead class="bg-light text-uppercase small fw-bold">
                                        <tr>
                                            <th class="border-0">Avatar</th>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Phone</th>
                                            <th class="border-0">Specialization</th>
                                            <th class="border-0">Age</th>
                                            <th class="border-0">City</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dentists as $dentist)
                                            <tr>
                                                <td class="align-middle text-center">
                                                    @if($dentist->dentist && $dentist->dentist->avatar)
                                                        <img src="{{ asset('storage/profileAvatars/'.$dentist->dentist->avatar) }}" 
                                                             class="rounded-circle shadow-sm" 
                                                             height="40" width="40" alt="avatar">
                                                    @else
                                                        <img src="{{ asset('assets/images/user/1.jpg') }}" 
                                                             class="rounded-circle shadow-sm" 
                                                             height="40" width="40" alt="default">
                                                    @endif
                                                </td>
                                                <td class="align-middle fw-medium">{{ $dentist['name'] }}</td>
                                                <td class="align-middle small text-muted">{{ $dentist['email'] }}</td>
                                                <td class="align-middle">{{ $dentist->dentist['phone'] ?? 'N/A'   }}</td>
                                                <td class="align-middle">
                                                    <span class="badge bg-soft-primary text-primary px-2 py-1 rounded">
                                                        {{ $dentist->dentist['specialization'] ?? 'N/A'   }}
                                                    </span>
                                                </td>
                                                <td class="align-middle">{{ $dentist->dentist['age'] ?? 'N/A'   }}</td>
                                                <td class="align-middle">{{ $dentist->dentist['city'] ?? 'N/A'   }}</td>
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
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
