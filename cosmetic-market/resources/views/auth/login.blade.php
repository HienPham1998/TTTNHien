<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="{{asset('client/assets/css/login.css')}}" rel="stylesheet">

</head>

<body>
    <div class="login" id="login-form">
        <div class="container">
            <div class="row">
                <div class="col-6" id="left">
                    <div class="text" id="form-row">
                        <h1>Join with us</h1>

                    </div>
                </div>
                <div class="col-6" style="padding:1rem">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Sign Up</a>
                        </li>
                    </ul>
                    <!-- @if(session()->has("error"))
                    <div class="alert alert-primary" role="alert">
                        {{session("error")}}
                        </div>
                    @endif -->
                    @if($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-primary" role="alert">
                        {{$error}}
                        </div>
                    @endforeach
                    @endif
                    <form class="mt-3" method="POST" action="/login">
                        @csrf
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" class="form-control" name="username" placeholder="Your username... "
                                required>
                        </div>
                        <div class="form-group">
                                 <label>Password:</label>
                            <div class="input-group mb-3">
                                <input type="password" id="password" class="form-control" placeholder="Your password..." name="password" required>
                                <div class="input-group-prepend">
                                    <i class="far fa-eye input-group-text" id="eyes" onClick="change()"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <span>
                                <a href="#">Forgot Password?</a>
                            </span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary form-control" type="submit">Sign In</button>
                        </div>
                        <hr class="hr-text" data-content="Login with ">
                        <div class="form-group">
                            <div class="row" style="justify-content: space-evenly;">
                                <button class="btn btn-primary"><i class="fab fa-facebook"></i> Facebook</button>
                                <button class="btn btn-danger"><i class="fab fa-google"></i> Google</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{asset('client/assets/javascript/custom.js')}}"></script>
</body>

</html>
