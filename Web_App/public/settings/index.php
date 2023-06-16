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
                            <a class="nav-link" href="/forum">
                                <i class="bi-wallet me-2"></i>
                                Forum
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
                                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile-tab-pane" type="button" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="true">Profile</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="password-tab" data-bs-toggle="tab"
                                        data-bs-target="#password-tab-pane" type="button" role="tab"
                                        aria-controls="password-tab-pane" aria-selected="false">Password</button>
                                </li>

                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <h6 class="mb-4">User Profile</h6>

                                    <form class="custom-form profile-form" action="#" method="post" role="form">
                                        <input class="form-control" type="text" name="profile-name" id="profile-name"
                                            placeholder="John Doe">

                                        <input class="form-control" type="email" name="profile-email" id="profile-email"
                                            placeholder="Johndoe@gmail.com">

                                        <div class="input-group mb-1">
                                            <img src="images/profile/senior-man-white-sweater-eyeglasses.jpg"
                                                class="profile-image img-fluid" alt="">

                                            <input type="file" class="form-control" id="inputGroupFile02">
                                        </div>

                                        <div class="d-flex">
                                            <button type="button" class="form-control me-3">
                                                Reset
                                            </button>

                                            <button type="submit" class="form-control ms-2">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="password-tab-pane" role="tabpanel"
                                    aria-labelledby="password-tab" tabindex="0">
                                    <h6 class="mb-4">Password</h6>

                                    <form class="custom-form password-form" action="#" method="post" role="form">
                                        <input type="password" name="password" id="password" pattern="[0-9a-zA-Z]{4,10}"
                                            class="form-control" placeholder="Current Password" required="">

                                        <input type="password" name="confirm_password" id="confirm_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="New Password"
                                            required="">

                                        <input type="password" name="confirm_password" id="confirm_password"
                                            pattern="[0-9a-zA-Z]{4,10}" class="form-control"
                                            placeholder="Confirm Password" required="">

                                        <div class="d-flex">
                                            <button type="button" class="form-control me-3">
                                                Reset
                                            </button>

                                            <button type="submit" class="form-control ms-2">
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