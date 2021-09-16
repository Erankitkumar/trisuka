<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="../assets/img/favicon.png" type="image/x-icon">
    <!-- libraries are here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title>Trisuka | Admin Panel</title>
    <!-- custom css are here -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <!-- navbar starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark py-1 px-4" style="background-color: #151515;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img id="logo" class="img-fluid" src="../assets/img/favicon.png" alt="">&nbsp;&nbsp;&nbsp;Trisuka
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                <form class="d-flex">
                    <input id="search_input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button id="search_btn" class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <header class="header_wrapper py-2">
        <div class="sec_nav_container">
            <div class="hamburger">
                hamburger menu
            </div>
            <div class="prfile">
                <a href="#"><img style="width:40px;height:40px;" src="../assets/img/favicon.png" alt="profile photo"></a>
            </div>
        </div>
    </header>



    <main class="container-fluid px-0 py-2">

        <div id="side_bar" class="accordion" id="parentAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button id="btn_dash" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Dashboard
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#parentAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button style="color: white;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Blogs
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#parentAccordion">
                    <div class="accordion-body">
                        <ul>
                            <li><a href="#">All Blogs</a></li>
                            <li><a href="#">Add Blogs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="target">


            <?php
                
            ?>






         



        </div>



    </main>













    <!-- scripts libraries are here -->
    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- custom scripts are here -->
    <script src="./assets/js/script.js"></script>

</body>

</html>