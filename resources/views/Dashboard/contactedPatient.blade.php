<x-app-layout>

    <x-slot name="title">
        Contacts
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header text-uppercase">
                            <h2>
                                contacts
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table-inverse table-responsive">
                                <thead class="thead-inverse text-uppercase">
                                    <tr>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>subject</th>
                                        <th>message</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td scope="row">{{ $contact['name'] }}</td>
                                                <td>{{ $contact['email'] }}</td>
                                                <td>{{ $contact['subject'] }}</td>
                                                <td>{{ $contact['message'] }}</td>
                                                <td>
                                                    <a href="{{ route('contacts.delete', $contact['id']) }}"
                                                    data-toggle="tooltip"
                                                    data-title="Delete">
                                                        <i class="fas fa-trash"></i>
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
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
