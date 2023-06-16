<head>
    <title>Tower tactics - About the game</title>
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
                            <a class="nav-link" href="/settings">
                                <i class="bi-gear me-2"></i>
                                Settings
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="/about">
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
                    <h1 class="h2 mb-0">How can we help?</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-7 col-12">
                        <div class="custom-block bg-white">
                            <form class="custom-form search-form" action="#" method="post" role="form">
                                <div class="row">
                                    <div class="col-lg-12 mb-2">
                                        <h6>What is that fucking game ?</h6>
                                        <strong class="d-block mb-2">Just a shit, you can download this garbage here =>
                                            <a href="#garbage">xxx</a></strong>
                                    </div>


                                </div>
                            </form>
                        </div>

                        <div class="custom-block custom-block-faq">
                            <h5 class="mb-4">Frequently Asked Questions</h5>

                            <strong class="d-block mb-2">Can't reset my password</strong>

                            <p>Bc je suis con</p>

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

                            <a href="#" class="btn custom-btn custom-btn-bg-white mt-3">
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