<x-app-layout>

    <x-slot name="title">
        Contacts
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white border-bottom py-3">
                            <h4 class="m-0 fw-bold text-primary text-uppercase">Contact Messages</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover m-0">
                                    <thead class="bg-light text-uppercase small fw-bold">
                                        <tr>
                                            <th class="border-0">Name</th>
                                            <th class="border-0">Email</th>
                                            <th class="border-0">Subject</th>
                                            <th class="border-0">Message</th>
                                            <th class="border-0 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td class="align-middle fw-medium">{{ $contact['name'] }}</td>
                                                <td class="align-middle small text-muted">{{ $contact['email'] }}</td>
                                                <td class="align-middle">{{ $contact['subject'] }}</td>
                                                <td class="align-middle"><small>{{ $contact['message'] }}</small></td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('contacts.delete', $contact['id']) }}"
                                                        class="btn btn-sm btn-outline-danger shadow-sm"
                                                        data-toggle="tooltip"
                                                        title="Delete Contact">
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
        </div>
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
