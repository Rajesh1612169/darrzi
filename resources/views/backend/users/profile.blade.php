@extends('backend.layouts.app')
@section('content')

    @php

    $user['user_details']['profile_picture'] != null ? $profile_picture = 1 : $profile_picture = 0;
    $user['user_details']['nic_or_passport_front'] != null ? $nic_or_passport_front = 1 : $nic_or_passport_front = 0;
    $user['user_details']['nic_or_passport_back'] != null ? $nic_or_passport_back = 1 : $nic_or_passport_back = 0;
    $user['user_details']['matriculation_marks_sheet'] != null ? $matriculation_marks_sheet = 1 : $matriculation_marks_sheet = 0;
    $user['user_details']['matriculation_certificate'] != null ? $matriculation_certificate = 1 : $matriculation_certificate = 0;
    $user['user_details']['enter_marks_sheet'] != null ? $enter_marks_sheet = 1 : $enter_marks_sheet = 0;
    $user['user_details']['enter_certificate'] != null ? $enter_certificate = 1 : $enter_certificate = 0;
    //dd($profile_picture,$nic_or_passport_front,$nic_or_passport_back,$matriculation_marks_sheet,$matriculation_certificate,$enter_marks_sheet,$enter_certificate);

    $progress = 14.28 * ($profile_picture+$nic_or_passport_front+$nic_or_passport_back+$matriculation_marks_sheet+$matriculation_certificate+$enter_marks_sheet+$enter_certificate);
    //dd($progress);
    @endphp

    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30"> <img src="{{asset('images/user_avatar/'.$user['user_details']['profile_picture'])}}" class="img-circle" width="150">
                        <h4 class="card-title m-t-10">{{$user->name}}</h4>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                            <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                        </div>
                    </center>
                </div>
                <div>
                    <hr> </div>
                <div class="card-body">
                    <small class="text-muted">CNIC / Passport </small>
                    <h6>{{$user->passport_or_nic}}</h6>
                    <small class="text-muted">Email address </small>
                    <h6>{{$user->email}}</h6>
                    <small class="text-muted p-t-30 db">Phone</small>
                    <h6>{{$user->phone}}</h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#basic_info" role="tab" aria-selected="false">Basic Info</a> </li>
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#documents" role="tab" aria-selected="true">Documents</a> </li>
{{--                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a> </li>--}}
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="documents" role="tabpanel">
                        <div class="card-body">
                            <label for="">Progress</label>
                            <div class="progress m-t-20">

                                <div class="progress-bar bg-info" style="width: {{$progress}}%; height:25px;" role="progressbar">
                                    {{$progress}}%</div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">Upload Profile Picture</h6>
                                            <input type="file" name="profile_picture" id="profile_picture" class="dropify" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">CNIC / Passport Front</h6>
                                            <input type="file" name="nic_or_passport_front" id="nic_or_passport_front" class="dropify" />
                                            @if($user['user_details']['nic_or_passport_front'] !== null)
                                                <a href="{{asset('documents/'.$user['user_details']['nic_or_passport_front'])}}" class="mt-3" download>Download</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title">CNIC / Passport Back</h6>
                                            <input type="file" name="nic_or_passport_back" id="nic_or_passport_back" class="dropify" />
                                            @if($user['user_details']['nic_or_passport_back'] !== null)
                                                <a href="{{asset('documents/'.$user['user_details']['nic_or_passport_back'])}}" class="mt-3" download>Download</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Matriculation Marks Sheet</h4>
                                            <input type="file" name="matriculation_marks_sheet" id="matriculation_marks_sheet" class="dropify" />
                                            @if($user['user_details']['matriculation_marks_sheet'] !== null)
                                                <a href="{{asset('documents/'.$user['user_details']['matriculation_marks_sheet'])}}" class="mt-3" download>Download</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Matriculation Certificate</h4>
                                            <input type="file" name="matriculation_certificate" id="matriculation_certificate" class="dropify" />
                                            @if($user['user_details']['matriculation_certificate'] !== null)
                                                <a href="{{asset('documents/'.$user['user_details']['matriculation_certificate'])}}" class="mt-3" download>Download</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Intermediate Marks Sheet</h4>
                                            <input type="file" name="enter_marks_sheet" id="enter_marks_sheet" class="dropify" />
                                            @if($user['user_details']['enter_marks_sheet'] !== null)
                                                <a href="{{asset('documents/'.$user['user_details']['enter_marks_sheet'])}}" class="mt-3" download>Download</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Intermediate Certificate</h4>
                                            <input type="file" name="enter_certificate" id="enter_certificate" class="dropify" />
                                            @if($user['user_details']['enter_certificate'] !== null)
                                                <a href="{{asset('documents/'.$user['user_details']['enter_certificate'])}}" class="mt-3" download>Download</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second tab-->
                    <div class="tab-pane" id="basic_info" role="tabpanel">
                        <div class="card-body">
                            <form action="#">
                                <div class="form-body">
{{--                                    <h3 class="card-title">Person Info</h3>--}}
{{--                                    <hr>--}}
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">First Name</label>
                                                <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                                <small class="form-control-feedback"> This is inline help </small> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group has-danger">
                                                <label class="control-label">Last Name</label>
                                                <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                <small class="form-control-feedback"> This field has error. </small> </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-success">
                                                <label class="control-label">Gender</label>
                                                <select class="form-control custom-select">
                                                    <option value="">Male</option>
                                                    <option value="">Female</option>
                                                </select>
                                                <small class="form-control-feedback"> Select your gender </small> </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Date of Birth</label>
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Category</label>
                                                <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                    <option value="Category 1">Category 1</option>
                                                    <option value="Category 2">Category 2</option>
                                                    <option value="Category 3">Category 5</option>
                                                    <option value="Category 4">Category 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Membership</label>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Free</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Paid</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <h3 class="box-title m-t-40">Address</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 ">
                                            <div class="form-group">
                                                <label>Street</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>State</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Post Code</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="form-control custom-select">
                                                    <option>--Select your Country--</option>
                                                    <option>India</option>
                                                    <option>Sri Lanka</option>
                                                    <option>USA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
{{--                    <div class="tab-pane" id="settings" role="tabpanel">--}}
{{--                        <div class="card-body">--}}
{{--                            <form class="form-horizontal form-material">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="col-md-12">Full Name</label>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="example-email" class="col-md-12">Email</label>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="col-md-12">Password</label>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input type="password" value="password" class="form-control form-control-line">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="col-md-12">Phone No</label>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <input type="text" placeholder="123 456 7890" class="form-control form-control-line">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="col-md-12">Message</label>--}}
{{--                                    <div class="col-md-12">--}}
{{--                                        <textarea rows="5" class="form-control form-control-line"></textarea>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="col-sm-12">Select Country</label>--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <select class="form-control form-control-line">--}}
{{--                                            <option>London</option>--}}
{{--                                            <option>India</option>--}}
{{--                                            <option>Usa</option>--}}
{{--                                            <option>Canada</option>--}}
{{--                                            <option>Thailand</option>--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="col-sm-12">--}}
{{--                                        <button class="btn btn-success">Update Profile</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

    <script>
        document.getElementById('profile_picture').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.avatar')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });

        //nic_or_passport_front
        document.getElementById('nic_or_passport_front').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.nic.front')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });

        //nic_or_passport_back
        document.getElementById('nic_or_passport_back').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.nic.back')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });
        //matriculation_marks_sheet
        document.getElementById('matriculation_marks_sheet').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.matric.marksheet')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });
        //matriculation_certificate
        document.getElementById('matriculation_certificate').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.matric.certificate')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });
        //enter_marks_sheet
        document.getElementById('enter_marks_sheet').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.enter.marks')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });
        //enter_certificate
        document.getElementById('enter_certificate').addEventListener('change', function () {
            let input = this;
            let image = input.files[0];
            let formData = new FormData();
            console.log(formData);
            formData.append('image', image);

            let xhr = new XMLHttpRequest();
            xhr.open('POST', '{{route('user.profile.enter.certificate')}}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // let response = JSON.parse(xhr.responseText);
                    //
                    // let previewImage = document.getElementById('previewImage');
                    // previewImage.src = '/' + response.image.path;
                    location.reload()
                }
            };

            xhr.send(formData);
        });
    </script>
@endsection
