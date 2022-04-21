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
</head>

<body>
    <section class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 pt-5">
               
                <form action="" class="rounded p-5 shadow bg-light">
                    <h3 class="text dark fw-bolder fs-4 mb-2">
                        Login to Continue 
                    </h3>

                   
                    <div class="text-muted fw-normal mb-4">
                        New here? <a href="" class="test-primary fw-bold text-decoration-none">Create new account</a>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" placeholder=" ">
                        <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder=" ">
                        <label for="password">Password</label>
                    </div>

                    <div class="mt-2 text-end">
                        <a href="#" class="text-primary fw-bold text-decoration-none">Forget password?</a>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 my-4 submit_btn">
                        Login
                    </button>

                    <div class="text-center text-muted text-uppercase mb-3 ">
                        or
                    </div>

                    <a href="" class="btn btn-dark w-100 mb-3  login_with">
                        <i class="fa-brands fa-google img-fluid me-3"></i>
                        Continue with Google
                    </a>

                    <a href="" class="btn btn-dark w-100 mb-3 login_with">
                        <i class="fa-brands fa-facebook img-fluid me-3"></i>
                        Continue with Facebook
                    </a>

                    <a href="" class="btn btn-dark w-100 mb-3 login_with">
                        <i class="fa-brands fa-linkedin img-fluid me-3"></i>
                        Continue with Linkedin
                    </a>

                </form>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>

</html>