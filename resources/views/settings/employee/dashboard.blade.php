<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}} - Siriwardana Mobile</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://unpkg.com/ionicons@4.4.2/dist/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css') }}">
    <style>
        .profile-pic-wrapper {
            width: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .pic-holder {
            text-align: center;
            position: relative;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .pic-holder .pic {
            height: 100%;
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: center;
            object-position: center;
        }

        .pic-holder .upload-file-block,
        .pic-holder .upload-loader {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: rgba(90, 92, 105, 0.7);
            color: #f8f9fc;
            font-size: 12px;
            font-weight: 600;
            opacity: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .pic-holder .upload-file-block {
            cursor: pointer;
        }

        .pic-holder:hover .upload-file-block,
        .uploadProfileInput:focus~.upload-file-block {
            opacity: 1;
        }

        .pic-holder.uploadInProgress .upload-file-block {
            display: none;
        }

        .pic-holder.uploadInProgress .upload-loader {
            opacity: 1;
        }

        /* Snackbar css */
        .snackbar {
            visibility: hidden;
            min-width: 250px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 14px;
            transform: translateX(-50%);
        }

        .snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        #app-cover {
            position: absolute;
            top: 50%;
            right: 0;
            left: 0;
            width: 283px;
            height: 130px;
            margin: -65px auto 0 auto;
        }

        #genderChkBox {
            position: absolute;
            top: 0%;
            right: 0;
            bottom: 0;
            left: 0px;
            width: 100%;
            height: 80px;
            margin: 0;
            opacity: 0;
            cursor: pointer;
            z-index: 3;
        }

        #path {
            height: 80px;
            padding: 20px;
            background-color: #f1f3f8;
            border-radius: 100px;
            box-shadow: 0 0 20px #6381cd;
        }

        #knob {
            position: absolute;
            top: 5px;
            left: 10px;
            width: 70px;
            height: 70px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 6px #dae4ff;
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
            z-index: 1;
        }

        #bow {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -17px;
            width: 30px;
            margin: 0 auto;
            transition: 0.2s ease color;
        }

        #bow i {
            display: block;
            font-size: 34px;
            line-height: 1;
        }

        #gender {
            position: absolute;
            top: 30%;
            right: 40px;
            width: 80px;
            font-size: 30px;
            font-family: Roboto, Helvetica;
            text-align: right;
            line-height: 1;
            margin-top: -15px;
        }

        #fe {
            position: absolute;
            left: -125px;
            color: #e91e63;
            transition: 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55) all;
        }

        #male {
            left: 0;
        }

        #male,
        #male span {
            position: relative;
        }

        #bow,
        #male span {
            color: #7aa0ff;
        }

        #male span {
            z-index: 1;
        }

        #male:before {
            content: "MALE";
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            color: #e91e63;
            white-space: pre;
            overflow: hidden;
            transition: 0.2s cubic-bezier(0.4, 0, 1, 1) all;
            z-index: 2;
        }

        #path.fe {
            background-color: #f8f1f7;
        }

        #genderChkBox:checked~#knob {
            transform: rotateZ(-135deg);
            box-shadow: 0 0 6px #ffe2fe;
        }

        #knob #bow.fe {
            color: #e91e63;
        }

        #genderChkBox:checked~#gender #fe {
            left: -40px;
        }

        #male.fe:before {
            width: 100%;
        }

        #genderChkBox:checked~#gender #male {
            animation: move 0.2s ease 0.4s;
        }

        #male.ma {
            animation: move_l 0.2s ease 0.1s;
        }

        @keyframes move {
            0% {
                left: 0;
            }

            50% {
                left: 5px;
            }

            100% {
                left: 0;
            }
        }

        @keyframes move_l {
            0% {
                left: 0;
            }

            50% {
                left: 5px;
            }

            100% {
                left: 0;
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-navbar-fixed dark-mode">
    <div class="wrapper">

        @include('includes.subviews.nav')
        @include('includes.subviews.sidebar')

        <div class="content-wrapper">

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 style="text-transform: uppercase;">{{$title}}</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#">Module</a></li>
                                <li class="breadcrumb-item active">{{$title}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <a class="btn btn-app bg-success" data-toggle="modal" data-target="#modal-new-employee">
                                        <i class="fas fa-user-plus"></i> New Employee
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <div class="modal fade" id="modal-new-employee">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">New Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="newEmployee" method="$_post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="profile-pic-wrapper">
                                            <div class="pic-holder">
                                                <!-- uploaded pic shown here -->
                                                <img id="profilePic" alt="profile" class="pic" src="https://source.unsplash.com/random/150x150?person">
                                                <Input class="uploadProfileInput" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                                <label for="newProfilePhoto" class="upload-file-block">
                                                    <div class="text-center">
                                                        <div class="mb-2">
                                                            <i class="fa fa-camera fa-2x"></i>
                                                        </div>
                                                        <div class="text-uppercase">
                                                            Update <br /> Profile Photo
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-center">
                                            <div id="app-cover">
                                                <input type="checkbox" id="genderChkBox">
                                                <div id="path"></div>
                                                <div id="knob">
                                                    <div id="bow"><i class="icon ion-md-bowtie"></i></div>
                                                </div>
                                                <div id="gender">
                                                    <div id="fe">FE</div>
                                                    <div id="male"><span>MALE</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="employeeNameInput">First Name</label>
                                            <input type="text" class="form-control" id="employeeNameInput" placeholder="Employee Name" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="employeeNameInput">Last Name</label>
                                            <input type="text" class="form-control" id="employeeNameInput" placeholder="Employee Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="addressInput">Address</label>
                                    <input type="text" class="form-control" id="addressInput" placeholder="Address" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="contactNumberInput">Contact Number</label>
                                            <input type="tel" class="form-control" id="contactNumberInput" placeholder="Contact Number" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Date of Joining</label>
                                            <div class="input-group date" id="dateOfJoiningCtrl" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" data-target="#dateOfJoiningCtrl" />
                                                <div class="input-group-append" data-target="#dateOfJoiningCtrl" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        @include('includes.subviews.footer')

    </div>

    <script src="{{asset('assets/plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <script src="{{asset('assets/dist/js/adminlte.js')}}"></script>

    <script>
        $('#dateOfJoiningCtrl').datetimepicker({
            format: 'L'
        });

        var checkbox = $("#checkbox"),
            path = $("#path"),
            bow = $("#bow"),
            male = $("#male");

        checkbox.on("change", function() {
            if ($(this).is(":checked")) {
                male.removeClass("ma");
                setTimeout(function() {
                    path.addClass("fe");
                    male.addClass("fe");
                    bow.addClass("fe");
                }, 390);
            } else {
                male.addClass("ma");
                setTimeout(function() {
                    path.removeClass("fe");
                    male.removeClass("fe");
                    bow.removeClass("fe");
                }, 390);
            }
        });

        $("li.nav-item").find("a").removeClass("active");
        $("#settings").addClass("menu-is-opening menu-open");
        $("#settings_submenu").css("display", "block");
        $("#{{$slug}}").addClass("active");

        $('#newEmployee').submit(function(e){
            e.preventDefault();

            $.ajax({
                type: "POST",
                data: new FormData(this),
                contentType: false,
                url: "{{ route('employee.store') }}",
                dataType: 'json',
                processData: false,
                success: function(data){
                    
                }
            })
            $('#modal-new-employee').modal('hide');
        })
    </script>
</body>

</html>