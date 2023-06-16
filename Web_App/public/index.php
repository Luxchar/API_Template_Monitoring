<head>
    <title>Tower tactics</title>
</head>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <header style="display:flex;">
        <div class="col-md-3 col-lg-3 me-0 px-3 fs-6">
            <a class="navbar-brand" href="/">
                <i class="bi-box"></i>
                Tower tactics
            </a>
        </div>
    </header>

    <!-- Modal HTML -->

    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Member Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username"
                            required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                    </div>
                </form>

            </div>
            <div class="modal-footer">
                <p><a href="#register" data-toggle="modal">Create new account</a></p>
                <p><a href="#forgot" data-toggle="modal">Forgot Password?</a></p>

                <!-- <p><a href="#error" data-toggle="modal">ERROR</a></p>
                <p><a href="#validation" data-toggle="modal">VALIDATION</a></p> -->

            </div>
        </div>

    </div>

    <div id="register" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                required="required">
                        </div>

                        <div class="form-group">
                            <input type="mail" class="form-control" name="email" placeholder="Email"
                                required="required">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="required">
                        </div>

                        <div class="form-group">
                            <input type="second-password" class="form-control" name="second-password"
                                placeholder="Valid password" required="required">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="forgot" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                required="required">
                        </div>

                        <div class="form-group">
                            <input type="mail" class="form-control" name="email" placeholder="Email"
                                required="required">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="error" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-block">Ok</button>
                </div>
            </div>
        </div>
    </div>

    <div id="validation" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Awesome!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Your booking has been confirmed. Check your email for detials.</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>