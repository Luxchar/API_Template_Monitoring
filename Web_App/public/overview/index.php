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

                    <small class="text-muted">Hello <?= $username ?>, welcome back!</small>
                </div>

                <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block custom-block-balance">
                            <small>Your last score</small>

                            <h2 class="mt-2 mb-3"><?= $scorelist[count($scorelist)-1] ? $scorelist[count($scorelist)-1] : "None" ;  ?></h2>
                        </div>
                        <div class="custom-block custom-block-exchange">
                            <h5 class="mb-4">Game history</h5>
                            <?php
                                for ($i = 0; $i < count($scorelist); $i++) {
                            ?>
                            <div class="d-flex align-items-center border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/profile/user.png"
                                        class="exchange-image img-fluid" alt="">
                                   

                                    <div>
                                        <h6>Score : <?= $scorelist[$i]; ?></h6>
                                    </div>

                                    
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12">
                        <div class="custom-block custom-block-profile-front custom-block-profile text-center bg-white">
                            <div class="custom-block-profile-image-wrap mb-4">
                                <img src="assets/images/profile/user.png"
                                    class="custom-block-profile-image img-fluid" alt="">
                            </div>

                            <p class="d-flex flex-wrap mb-2">
                                <strong>Username:</strong>

                                <span><?= $username ?></span>
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
                                    <?= $scoren ?> rounds
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                include_once('./public/_footer.php');
                ?>
            </main>

        </div>
    </div>