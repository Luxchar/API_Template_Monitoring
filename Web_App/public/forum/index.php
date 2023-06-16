<head>
    <title>Tower tactics - Forum</title>
</head>

<?php
include_once('./public/_navbar.php');
?>

<body>
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
                            <a class="nav-link active" href="/forum">
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
                    <h1 class="h2 mb-0">Forum</h1>
                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">
                            <div class="table-responsive">
                                <table class="account-table table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>

                                            <th scope="col">Title</th>

                                            <th scope="col">Description</th>

                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>

                                            <th scope="col">Username</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td scope="row">July 5, 2023</td>

                                            <td scope="row">title_01</td>

                                            <td scope="row">lorem lorem lorem lorem lorem</td>

                                            <td scope="row"></td>

                                            <td scope="row"></td>

                                            <td scope="row"></td>

                                            <td scope="row">
                                                <span class="badge text-bg-danger">
                                                    Username
                                                </span>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>

                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">Prev</span>
                                        </a>
                                    </li>

                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">1</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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