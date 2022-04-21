<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/themes/base/jquery-ui.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css" integrity="sha512-g2SduJKxa4Lbn3GW+Q7rNz+pKP9AWMR++Ta8fgwsZRCUsawjPvF/BxSMkGS61VsR9yinGoEgrHPGPn2mrj8+4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />




</head>


<body>
    <section class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 py-5 ">

                <form action="register" method="post" class="rounded p-5 shadow bg-light">
                    <h1 class="text-dark fw-bolder mb-2">
                        Register
                    </h1>

                    <div class="text-muted fw-normal mb-4 ms-1">
                        Already a user? <a href="login" class="test-primary fw-bold text-decoration-none">Login</a>
                    </div>

                    <div class="row mb-3">
                        <div class="form-floating col">
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First name">
                            <label class="ps-4" for="firstname">First name</label>
                        </div>
                        <div class="form-floating col">
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last name">
                            <label class="ps-4" for="lastname">Last name</label>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder=" ">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password" id="password" placeholder=" ">
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password_confirmation" id="cpassword" placeholder=" ">
                        <label for="cpassword">Confirm password</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="dob" id="dob" class="form-control" placeholder=" ">
                        <label for="dob">Date of birth</label>
                    </div>

                    <div class="d-flex mb-3">
                        <label for="" class="ms-2 me-1">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input mx-2" type="radio" name="gender" id="male" value="male" checked>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input mx-2" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>

                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="income" id="income" placeholder=" ">
                        <label for="income">Annual income</label>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6 text-start">
                            <h7 class="">Select job type</h7>
                        </div>
                        <div class="col-6">
                            <select class="p-1 rounded" name="job" id="job" placeholder="">
                                <option value="private job">Private job</option>
                                <option value="government job">Government job</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6 text-start">
                            <h7 class="">Select family type</h7>
                        </div>
                        <div class="col-4 w-50">
                            <select class="p-1 rounded" name="family" id="family" placeholder="">
                                <option value="joint">Joint family</option>
                                <option value="nuclear">Nuclear family</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-6 text-start">
                            <h7 class="">Are you Manglik?</h7>
                        </div>
                        <div class="col-4">
                            <select class="p-1 rounded" name="manglik" id="manglik" placeholder="">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <hr>

                    <h3>Partener Preferences</h3>

                    <p>
                        <label for="partner_income">Partner expected income:</label>
                        <input type="text" name="partner_income" id="partner_income" class="border-0 bg-light" readonly">
                    </p>

                    <div id="slider-range"></div>

                    <br>

                    <div class="multi_job_box">
                        <label>Partner occupation (multiselect)</label>
                        <select id="" name="partner_job" multiple class="multi_job">
                            <option value="private">Private job</option>
                            <option value="government">Government job</option>
                            <option value="business">Business</option>
                        </select>
                    </div>

                    <br>

                    <div class="multi_family_box">
                        <label>Partner Family type (multiselect)</label>
                        <select id="" name="partner_family" multiple class="multi_family">
                            <option value="joint">Joint family</option>
                            <option value="nuclear">Nuclear family</option>
                        </select>
                    </div>

                    
                    <div class="my-3 row">
                        <div class="col-6 text-start">
                            <h7 class="">Prefer manglik ?</h7>
                        </div>
                        <div class="col-4">
                            <select class="p-1 rounded" name="partner_manglik" id="partner_manglik" placeholder="">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 my-4 submit_btn">
                        Register
                    </button>

                    <div class="text-center text-muted text-uppercase mb-3 ">
                        or
                    </div>

                    <a href="" class="btn btn-dark w-100 mb-3  login_with">
                        <i class="fa-brands fa-google img-fluid me-3"></i>
                        Continue with Google
                    </a>



                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js" integrity="sha512-yrOmjPdp8qH8hgLfWpSFhC/+R9Cj9USL8uJxYIveJZGAiedxyIxwNw4RsLDlcjNlIRR4kkHaDHSmNHAkxFTmgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function() {
            $('.multi_job, .multi_family').selectpicker();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#dob').datepicker({
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
                dateFormat: 'dd MM yy'
            });

            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 500000,
                values: [7500, 300000],
                slide: function(event, ui) {
                    $("#partner_income").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                }
            });

            $("#partner_income").val("₹" + $("#slider-range").slider("values", 0) +
                " - ₹" + $("#slider-range").slider("values", 1));

        });
    </script>



</body>

</html>