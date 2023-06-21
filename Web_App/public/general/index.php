<head>
    <title>Tower tactics - General chat</title>
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
                            <a class="nav-link active" href="/general">
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
                    <h1 class="h2 mb-0">Chat general</h1>

                </div>

                <div class="row my-4">
                    <div class="col-lg-12 col-12">
                        <div class="custom-block bg-white">
                            <div class="table-responsive chat" style="max-height: 500px;">
                                <p>Chargement...</p>   
                            </div>
                            <br>
                            <form class="custom-form header-form " role="form">
                                <input class="form-control" name="message" id="message-send" type="text"
                                    placeholder="Seak with your friends" aria-label="message">
                            </form>

                        </div>
                    </div>
                </div>
                <?php
                include_once('./public/_footer.php');
                ?>
            </main>

        </div>

        <script>
    var url = "http://localhost:3000"

    async function getMessages() {
        try {
            const token = document.cookie.replace(/(?:(?:^|.*;\s*)token\s*\=\s*([^;]*).*$)|^.*$/, "$1");

            const response = await fetch(url + "/api/channel/get/messages/1687380021722/99", {
                method: "GET",
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "application/json",
                }
            });

            if (response.ok) {
                const data = await response.json();
                console.log(data);
                const chat = document.querySelector(".chat");
                chat.innerHTML = "";
                data.data.forEach(message => {
                    chat.innerHTML += `<p>[${message.message.created_at}] - ${message.author.username} : ${message.message.message}</p>`;
                });
            } else {
                console.error('HTTP error', response.status);
            }

        } catch (error) {
            console.error("Error: ", error);
        }
    }

    async function sendMessage() {
        try {
            const token = document.cookie.replace(/(?:(?:^|.*;\s*)token\s*\=\s*([^;]*).*$)|^.*$/, "$1");
            var messageU = document.querySelector("#message-send").value;
            if(messageU == "") return;
            const message = {
                message: messageU
            }

            console.log(message, token)

            const response = await fetch(url + "/api/message/send/1687380021722", {
                method: "POST",
                headers: {
                    "Authorization": `Bearer ${token}`,
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(message)
            });

            if (response.ok) {
                const data = await response.json();
                console.log(data);
            } else {
                console.error('HTTP error', response.status);
            }
            
        } catch (error) {
            console.error("Error: ", error);
        }
    }

    document.querySelectorAll("form").forEach(form => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
        })
    })

    setInterval(getMessages, 1000)

    document.querySelector("#message-send").addEventListener("keyup", (e) => {
        if (e.key === "Enter") {
            sendMessage();
            document.querySelector("#message-send").value = "";
        }
    })
</script>

    </div>
</body>