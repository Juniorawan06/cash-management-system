<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cash Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>

<body>
    <!-- main section starts -->
    <div class="form-bg container mt-5">
        <!-- bootstrap Grid -->
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <!-- empty column -->
                </div>
                <!-- Login form Starts -->
                <div class="col-6">
                    <form method="POST" class="login-box container p-3">
                        <h2 class="text-center account"><strong>Login</strong> an account.</h2>
                        <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                        <div class="form-group"><input class="form-control" type="password" name="password" placeholder="********"></div>
                        <div class="form-group">
                            <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">Remember me</label></div>
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">SIGN IN</button></div>
                    </form>
                </div>
                <!-- login form ends -->
                <div class="col-6">
                    <!-- empty column -->
                </div>
                <!-- section forgot password starts -->
                <div class="col-6 text-center">
                    <p class="forgot">
                        Forgotten your Password ?
                    </p>
                    <a class="forgot-link" href="{{ route('forgot-passward') }}">
                        Click here.
                    </a>
                </div>
                <!-- seciton forgot passward ends -->
            </div>
        </div>
    </div>
    <!-- main secion ends -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>