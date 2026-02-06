<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="public/web-assets/imgs/logo/accity-icon.png" type="image/png" />
    <!-- loader-->

    <!-- Bootstrap CSS -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="public/assets/css/app.css" rel="stylesheet">
    <link href="public/assets/css/icons.css" rel="stylesheet">
    <title>The Academic City | Admin Panel</title>
    <style>
        .card {
            border-radius: 4px;
            background: #fafafa;
            box-shadow: 0 6px 10px rgba(177, 151, 151, 0.08), 0 0 6px rgba(233, 210, 210, 0.05);
            transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
            cursor: pointer;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper"
        style="background-image: url('public/web-assets/imgs/bg/overseas_education.jpg'); height: 100vh; background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto mt-5">
                        <!-- <div class="mb-4 mt-5 text-center">
                            <img src="public/assets/images/logo.gif" width="180" alt="" />
                             <p class="h4 text-uppercase font-weight-bold">Merchant Panel</p>
                        </div> -->
                        <div class="card card-success border border-success card-hover">
                            <div class="card-header bg-success">
                                <h3 class="text-center text-white">Sign in</h3>
                            </div>
                            <div class="card-body">
                                <div class="border border-success p-4 rounded">
                                    <div class="form-body">
                                        <form method="POST" class="row g-3 login_form">
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Mobile Number</label>
                                                <input type="number" class="form-control border border-success" name="number"
                                                    id="inputEmailAddress" placeholder="Number">
                                                @csrf
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter
                                                    Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border border-success"
                                                        name="password" id="inputChoosePassword"
                                                        placeholder="Enter Password"> <a href="javascript:;"
                                                        class="input-group-text bg-success border border-success"><i
                                                            class='bx bx-hide'></i></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 text-end"> <a href="{{ url('authentication-forgot-password') }}">Forgot Password ?</a> -->
                                    </div>
                                    <div class="error_msg mt-2 mb-2 d-flex">

                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success border border-success text-white"><i
                                                    class="bx bxs-lock-open"></i> Sign in</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    </div>
    <!--end wrapper-->

    <!--plugins-->
    <script src="public/assets/js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(".login_form").submit(function(e) {
                //prevent Default functionality
                e.preventDefault();
                //get the action-url of the form
                var actionurl = '/loginuser';
                //do your own request an handle the results
                $.ajax({
                    url: actionurl,
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        var response = JSON.parse(data);
                        if (response.success == 1) {
                            window.location.href = '/admin_dashboard';
                        } else {
                            $('.error_msg').html('<span class="alert alert-danger">' + response
                                .message + '</span>')
                        }
                    }
                });

            });
        })
    </script>
</body>

</html>
