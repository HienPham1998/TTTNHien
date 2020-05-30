<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{asset('client/assets/css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{asset('client/assets/css/responsive.css')}}" rel="stylesheet">
</head>

<body style="height:auto">
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12" style="display:flex;justify-content:space-between;">
                        <div class="top-left float-xs-left">
                            <div class="wel-come-msg"> Welcome to HD market! </div>
                            <div class="language">
                                <form action="#" method="post" enctype="multipart/form-data" id="language">
                                    <div class="btn-group">
                                        <button class="btn btn-link dropdown-toggle" style="margin-top:3px"
                                            data-toggle="dropdown" aria-expanded="false"> English <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Arabic</a></li>
                                            <li><a href="#"> English</a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="top-right float-xs-right" style="display:flex;align-items:center">
                            <div id="top-links" class="nav float-xs-right">
                                @if(Auth::user())
                                <ul class="list-inline" style="display:inherit">
                                    <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle"
                                            data-toggle="dropdown"><i class="fa fa-user"
                                                aria-hidden="true"></i><span>{{Auth::user()->username}}</span> <span
                                                class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="/profile">Your Profile</a></li>
                                            <li><a href="/order">Your Order</a></li>
                                            <li><a href="/history">Your History</a></li>
                                            <li><a href="/logout">Logout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"
                                                aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
                                </ul>
                                @else
                                <li class="nav-item" style="border-right: 1px solid rgba(255, 255, 255, 0.2);">
                                    <a class="nav-link" href="/login">
                                        Log in
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/register">
                                        Register
                                    </a>
                                </li>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div id="box">
            <div class="col-12">
                <hr class="hr-text" data-content="Profile Infomation">
                <div class="row">
                    <div class="col-3">
                        <div class="left-profile">
                            @if($user->avatar != null)
                            <img src="{{$user->avatar}}" alt="" class="rounded-circle" style="width:12vw; height:12vw">
                            @else
                            <img src="https://cdn3.iconfinder.com/data/icons/vector-icons-6/96/256-512.png"
                                alt="" class="rounded-circle" style="width:12vw; height:12vw">
                            @endif
                            <h3 class="mt-2">{{Auth::user()->username}}</h3>
                            @if($user->role_id == 3)
                            <button class="btn btn-outline btn-outline-success">
                                <a href="/update-profile/{{$saler->id}}">Edit Profile</a>
                            </button>
                            @endif
                        </div>
                    </div>
                    <div class="col-9">
                        @if($user->role_id == 2)
                        <form action="/profile/changepassword" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Current Password</label>
                                    <input type="password" name="currentPassword" class="form-control"
                                        placeholder="******">
                                </div>
                            </div>
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="******">
                                </div>
                            </div>
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Confirmation Password</label>
                                    <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="******">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline btn-outline-success">Change password</button>
                        </form>
                        @else
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p>Firstname: </p>
                            </div>
                            <div class="col-sm-10">
                                {{$saler->firstname}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p>Lastname : </p>
                            </div>
                            <div class="col-sm-10">
                                {{$saler->lastname}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p>Email:</p>
                            </div>
                            <div class="col-sm-10">
                                {{$user->email}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2">
                                <p>Phone:</p>
                            </div>
                            <div class="col-sm-10">
                                {{$saler->phone}}
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <hr class="hr-text" data-content="Store Infomation">
                @if($user->role_id != 3 )
                <h2 class="pb-3">You haven't any store yet! Wanna become a salers? <a href="/send">Join us
                        now </a></h2>
                @else
                <h2 class="pb-3"><a href="/profile/index">Go to your store now?</a></h2>
                @endif
            </div>
        </div>
    </div>
    </div>
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
</body>

</html>
