<head>
    <title>Tower tactics - Overview</title>
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
                            <a class="nav-link active" aria-current="page" href="/overview">
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
                            <a class="nav-link" href="/settings">
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
                    <h1 class="h2 mb-0">Overview</h1>

                    <small class="text-muted">Hello Thomas, welcome back!</small>
                </div>

                <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block custom-block-balance">
                            <small>Your last score</small>

                            <h2 class="mt-2 mb-3">10 rounds</h2>
                        </div>

                        <!-- <div class="custom-block bg-white">
                                <h5 class="mb-4">History</h5>

                                <div id="pie-chart"></div>
                            </div> -->
                        <div class="custom-block custom-block-exchange">
                            <h5 class="mb-4">Game history</h5>

                            <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/5453/5453658.png"
                                        class="exchange-image img-fluid" alt="">

                                    <div>
                                        <p>time / date</p>
                                        <h6>Score : 5 rounds</h6>
                                    </div>
                                </div>

                                <!-- <div class="ms-auto me-4">
                                        <small>Sell</small>
                                        <h6>1.0931</h6>
                                    </div>

                                    <div>
                                        <small>Buy</small>
                                        <h6>1.0821</h6>
                                    </div> -->
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                            <div class="custom-block-profile-image-wrap mb-4">
                                <img src="assets/images/medium-shot-happy-man-smiling.jpg"
                                    class="custom-block-profile-image img-fluid" alt="">
                            </div>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Username:</strong>

                                <span>ThomasLeChaud</span>
                            </p>

                            <!-- <p class="d-flex flex-wrap mb-2">
                                    <strong>Email:</strong>
                                    
                                    <a href="#">
                                        thomas@site.com
                                    </a>
                                </p> -->

                            <p class="d-flex flex-wrap mb-0">
                                <strong>Best score:</strong>

                                <a href="#">
                                    50
                                </a>
                            </p>
                        </div>


                        <div class="custom-block primary-bg">
                            <h5 class="text-white mb-4">Friends</h5>

                            <a href="#">
                                <img src="assets/images/profile/young-woman-with-round-glasses-yellow-sweater.jpg"
                                    class="profile-image img-fluid" alt="">
                            </a>

                            <a href="#">
                                <img src="assets/images/profile/young-beautiful-woman-pink-warm-sweater.jpg"
                                    class="profile-image img-fluid" alt="">
                            </a>

                            <a href="#">
                                <img src="assets/images/profile/senior-man-white-sweater-eyeglasses.jpg"
                                    class="profile-image img-fluid" alt="">
                            </a>

                            <div class="profile-rounded">
                                <a href="#">
                                    <i class="profile-rounded-icon bi-plus"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
                include_once('./public/_footer.php');
                ?>
            </main>

        </div>
    </div>