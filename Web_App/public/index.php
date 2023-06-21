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
                <form method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username"
                            required="required" id="login-username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            required="required" id="login-password">
                    </div>
                    <div class="form-group">
                        <button name="login" type="submit"
                            class="btn btn-primary btn-lg btn-block login-btn" onclick="loginAccount()">Login</button>
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
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                required="required" id="register-username">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="required" id="register-password">
                        </div>

                        <div class="form-group">
                            <input type="second-password" class="form-control" name="second-password"
                                placeholder="Valid password" required="required" id="register-password-repeat">
                        </div>

                        <div class="form-group">
                            <button name="register" type="submit"
                                class="btn btn-primary btn-lg btn-block login-btn" onclick="createAccount()">Register</button>
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
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username"
                                required="required">
                        </div>

                        <div class="form-group">
                            <input type="mail" class="form-control" name="email" placeholder="Email"
                                required="required">
                        </div>

                        <div class="form-group">
                            <button name="reset" type="submit"
                                class="btn btn-primary btn-lg btn-block login-btn">send</button>
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

<script>
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', e => {
            e.preventDefault();
        });
    })

    const url = "http://localhost:3000"

    async function createAccount(){
        var username = document.getElementById("register-username").value
        var password = document.getElementById("register-password").value
        var passwordRepeat = document.getElementById("register-password-repeat").value

        if(username == "" || password == "" || passwordRepeat == ""){
            displayNotification('Veuillez remplir tous les champs', 'error', 3000)
            return
        }
        
        if(password != passwordRepeat){
            displayNotification('Les mots de passe ne correspondent pas', 'error', 3000)
            return
        }

        var path = url + "/api/client/register"

        try {
            const response = await fetch(path, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    "username": username,
                    "password": password
                })
            });

            const json = await response.json();

            if(json.status == "error") {
                displayNotification('Erreur lors de la création du compte', 'error', 3000)
                return
            }
            displayNotification('Votre compte a bien été créé', 'success', 3000)
            // make cookie with token
            setCookie("token", json.data.token, 60)
            setTimeout(function(){ window.location.href = "/overview"; }, 3000);
        } catch (err) {
            displayNotification('Erreur lors de la création du compte', 'error', 3000)
        }
    }

    async function loginAccount(){
        var username = document.getElementById("login-username").value
        var password = document.getElementById("login-password").value

        if(username == "" || password == ""){
            displayNotification('Veuillez remplir tous les champs', 'error', 3000)
            return
        }

        var path = url + "/api/client/login"

        try {
            const response = await fetch(path, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    "username": username,
                    "password": password
                })
            });

            const json = await response.json();

            if(json.status == "error") {
                displayNotification('Erreur lors de la connexion', 'error', 3000)
                return
            }
            displayNotification('Vous êtes connecté', 'success', 3000)
            // make cookie with token
            setCookie("token", json.data.token, 60)
            setTimeout(function(){ window.location.href = "/overview"; }, 3000);
        } catch (err) {
            displayNotification('Erreur lors de la connexion', 'error', 3000)
        }
    }

    
</script>

<script>
    
    function setCookie(cname, cvalue, exdays) {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function displayNotification(message, status, duration) {
    const notification = document.createElement('div');
  
    // Set class and text
    notification.className = `notification ${status}`;
    notification.textContent = message;
  
    // Add the notification to the body
    document.body.appendChild(notification);
  
    // CSS for the notification
    const css = `
        .notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 20px;
            color: white;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: all 0.5s ease;
            font-size: 16px;
        }
  
        .notification.success {
            background-color: green;
        }
  
        .notification.error {
            background-color: red;
        }
  
        @media (max-width: 600px) {
            .notification {
                bottom: 10px;
                right: 10px;
                font-size: 14px;
            }
        }
    `;
  
    // Create style element
    const style = document.createElement('style');
    style.textContent = css;
  
    // Add the style element to the head
    document.head.appendChild(style);
  
    // Remove the notification after `duration` milliseconds
    setTimeout(() => {
        notification.style.opacity = '0';
        setTimeout(() => {
            document.body.removeChild(notification);
            document.head.removeChild(style);
        }, 500);  // Matches the transition duration in the CSS
    }, duration);
  }

</script>