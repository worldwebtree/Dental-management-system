<x-app-layout>

    <x-slot name="title">
        Profile
    </x-slot>

    <x-slot name="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header text-uppercase">
                            <h2>
                                profile
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                @csrf
                                <div class="d-flex mb-3">
                                    <div class="col-6">
                                        <label for="inputName" class="form-label">name</label>
                                        <input type="text" name="name" class="form-control" id="inputName">
                                    </div>

                                    <div class="col-6">
                                        <label for="inputEmail" class="form-label">email</label>
                                        <input type="email" disabled class="form-control" id="inputEmail">
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="col-6">
                                        <label for="inputGender" class="form-label">gender</label>
                                          <select class="form-control" name="gender" id="inputGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>other</option>
                                          </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="inputPhone" class="form-label">phone</label>
                                        <input type="number" name="phone" class="form-control" id="inputPhone">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="inputAddress" class="form-label">address</label>
                                    <input type="text" name="address" class="form-control" id="inputAddress">
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="col-6">
                                        <label for="inputCountry" class="form-label">country</label>
                                        <input type="text" name="country" class="form-control" id="inputCountry">
                                    </div>

                                    <div class="col-6">
                                        <label for="inputCity" class="form-label">city</label>
                                        <input type="text" name="city" class="form-control" id="inputCity">
                                    </div>
                                </div>

                                <div class="d-flex mb-3">
                                    <div class="col-6">
                                        <label for="inputAge" class="form-label">age</label>
                                        <input type="number" name="age" class="form-control" id="inputAge">
                                    </div>

                                    <div class="col-6">
                                        <label for="inputDob" class="form-label">date of birth</label>
                                        <input type="date" name="dob" class="form-control" id="inputDob">
                                    </div>
                                </div>

                                <div class="col-6 mb-3">
                                    <label for="inputSpecialization" class="form-label">specialization</label>
                                    <input type="text" name="specialization" class="form-control" id="inputSpecialization">
                                </div>

                                <button type="submit" class="btn btn-lg btn-primary float-right">Update</button>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
