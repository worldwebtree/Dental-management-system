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
                            @if (auth()->user()->role == "Dentist")

                                <form action="#" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                    @csrf

                                    <div class="flex justify-center items-center w-full">
                                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden">
                                        </label>
                                    </div>

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
                                        <select class="form-control" name="specialization" id="inputSpecialization">
                                            <option>General Dentist</option>
                                            <option>Pedodontist or Pediatric Dentist</option>
                                            <option>Orthodontist</option>
                                            <option>Periodontist or Gum Specialist</option>
                                            <option>Endodontist or Root Canal Specialist</option>
                                            <option>Oral Pathologist or Oral Surgeon</option>
                                            <option>Prosthodontist</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-lg btn-primary float-right">Update</button>
                                </form>

                                @elseif (auth()->user()->role == "Patient")

                                <form action="#" method="POST" enctype="multipart/form-data" class="form-profile text-capitalize">
                                    @csrf

                                    <div class="flex justify-center items-center w-full">
                                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                                <p class="text-xs text-gray-500 dark:text-gray-400">PNG, JPG (MAX. 800x400px)</p>
                                            </div>
                                            <input id="dropzone-file" type="file" class="hidden">
                                        </label>
                                    </div>

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
                                        <label for="inputOccupation" class="form-label">occupation</label>
                                        <input type="text" class="form-control" name="Occupation" id="inputOccupation">
                                    </div>

                                    <button type="submit" class="btn btn-lg button-primary float-right">Update</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </x-slot>

</x-app-layout>
