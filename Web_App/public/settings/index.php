<head>
    <title>Tower tactics - Settings</title>
</head>

<body>
    <?php
    include_once('./public/_navbar.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-3 d-md-block sidebar collapse">
                <div class="position-sticky py-4 px-3 sidebar-sticky">
                    <ul class="nav flex-column h-100">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/overview">
                                <i class="bi-house-fill me-2"></i>
                                Overview
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/general">
                                <i class="bi-wallet me-2"></i>
                                General chat
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/settings">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/about">
                                <i class="bi-question-circle me-2"></i>
                                About the game
                            </a>
                        </li>

                        <li class="nav-item border-top mt-auto pt-2">
                            <a class="nav-link" href="/logout">
                                <i class="bi-box-arrow-left me-2"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                <div class="title-group mb-3">
                    <h1 class="h2 mb-0">Settings</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block bg-white">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                        data-bs-target="#password-tab-pane" type="button" role="tab"
                                        aria-controls="password-tab-pane" aria-selected="false">Password</button>
                                </li>

                            </ul>

                                <div class="tab-pane fade show active" id="password-tab-pane" role="tabpanel"
                                    aria-labelledby="password-tab" tabindex="0">
                                    <h6 class="mb-4">Password</h6>

                                    <form class="custom-form password-form" action="#" method="post" role="form">
                                        <input type="password" name="confirm_password" id="confirm_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="New Password"
                                            required="">

                                        <input type="password" name="confirm_password" id="repeat_confirm_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control"
                                            placeholder="Confirm Password" required="">

                                        <div class="d-flex">
                                            <button type="button" class="form-control me-3">
                                                Reset
                                            </button>

                                            <button type="submit" class="form-control ms-2" onclick="updatePassword()">
                                                Update Password
                                            </button>
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-contact">
                            <h6 class="mb-4">Still can’t find what you looking for?</h6>
                            <p>
                                <strong>Call us:</strong>
                                <a href="tel: 305-240-9671" class="ms-2">
                                    06 00 00 00 00
                                </a>
                            </p>
                            <a mailto="test@gmail.com" class="btn custom-btn custom-btn-bg-white mt-3">
                                Chat with us
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                include_once('./public/_footer.php');
                ?>
            </main>

        </div>
    </div>
</body>

<script>
    var url = 'http://localhost:3000';
    async function updatePassword() {
        try {
            // pass bearer token too in the fetch
            const token = document.cookie.replace(/(?:(?:^|.*;\s*)token\s*\=\s*([^;]*).*$)|^.*$/, "$1");
            var new_password = document.getElementById('confirm_password').value;
            var repeat_new_password = document.getElementById('repeat_confirm_password').value;
            
            if(new_password.length < 6 || new_password.length > 50){
                displayNotification('Password must be between 4 and 10 characters', 'error', 3000);
                return;
            }

            if(new_password != repeat_new_password){
                displayNotification('Passwords do not match', 'error', 3000);
                return;
            }
            
            const response = await fetch(url + '/api/client/update/password/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer ' + token
                },
                body: JSON.stringify({
                    newpassword: new_password,
                })
            });

            const data = await response.json();

            if (data.status == 'success') {
                displayNotification('Password updated', 'success', 3000);
                setTimeout(() => {
                    window.location.href = '/';
                }, 3000);
            } else {
                displayNotification('Something went wrong', 'error', 3000);
            }
        } catch(err) {
            displayNotification('Something went wrong', 'error', 3000);
            console.log(err);
        }
    }
</script>

<script>
        document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
        })
    })
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