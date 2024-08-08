<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </script>
    <!-- Bootstrap JavaScript and dependencies -->
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="icon" href="http://www.w3.org/2000/svg">
    <title>
        Admin Dashboard
    </title>
    <script type="text/javascript" hre="bootstrap.bundle.min.js/bootstrap.bundle.js"></script>
    <style>
        body {
            font-family: "Lato", sans-serif;
            background-color: black;
            color: white;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 30px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        .adminbody {
            max-width: 234.73px;
            max-height: 72px;
            margin: 20px;
            display: flex;
            justify-content: center;
        }

        .adminlogo {
            margin-bottom: 30px;
            max-width: fit-content;
            margin-left: auto;
        }

        .admintitle {
            margin: 15px;
            display: flex;
        }

        .adminbody:hover {
            cursor: pointer;
            border-color: grey;
            border-style: solid;
            border-width: 6px;
            border-radius: 4px;
        }
        
        .option:hover {
            border-color: white;
            border-style: solid;
            border-width: 6px;
            border-radius: 4px;
        }
        .burger:hover{
            transition: 3;
            cursor: pointer;
            opacity: 0.5;
        }
        
    </style>
</head>

<body>
    <header>
        <!-- side-bar -->

        <div id="mySidenav" class="sidenav">
            <div class="adminbody">
                <div admin="adminlogo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="60" fill="currentColor"
                        class="bi bi-person-check" viewBox="0 0 16 9">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                        <path
                            d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                    </svg>
                </div>
                <div class="admintitle">
                    <h1>Admin</h1>
                </div>
            </div>
            <hr>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="nav nav-pills flex-column mt-auto">
                <li class="nav-item option">
                    <a href="#" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="#"
                        class="nav-link text-white link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                        <i class="fs-5 fa fa-guage"></i><span>Pages</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="#" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>Admin</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="./admin/add_doctor.php" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>Add Doctor</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="./admin/list_doctor.php" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>List Doctor</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="./admin/add_medicine.php" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>Add
                            Medicine</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="./admin/list_medicine" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>
                            List Medicine</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="./admin/#add_medical_store.php" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>Add Medical
                            Store</span>
                    </a>
                </li>
                <li class="nav-item option">
                    <a href="./admin/#list_medical_store.php" class="nav-link text-white">
                        <i class="fs-5 fa fa-guage"></i><span>List Medical
                            Store</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- side-bar -->

        <!-- navbar -->
        <nav class="d-flex navbar bg-primary shadow-lg p-1 mb-5 rounded m-4 justify-content-around"
            data-bs-theme="dark ">
            <div class="p-2 flex-grow-1 burger">
                <span style="cursor:pointer" width="16" height="16" onclick="openNav()">&#9776;</span>
            </div>
            <!-- home logo -->
            <div class="p-2 burger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house"
                    viewBox="0 0 16 16">
                    <path
                        d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                </svg>
            </div>

            <!-- bell -->
            <div class="p-2 burger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                </svg>
            </div>
            <div class="border-left"></div>
            <!-- admin title -->
            <div class="p-3 burger">
                Admin
            </div>
            <!-- admin -- logo -->
            <div class="p-2 border-left burger">
                <img style="width:32px; height:32px; border-radius:16px;"
                    src="https://media.istockphoto.com/id/1332100919/vector/man-icon-black-icon-person-symbol.jpg?s=2048x2048&w=is&k=20&c=WRysog7FS3uk4_b3DWMmRyOVHYDtydJnkdC_4zLdGAY="
                    alt="admin image">
            </div>
        </nav>
        <!-- navbar -->

    </header>

    <main class="content" id="main">
        <div class="row m-2 d-flex justify-content-center">
            <div class="card border-primary mb-3" style="max-width: 24rem;">
                <div class="card-header">TOTAL ORDER</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-secondary mb-3" style="max-width: 24rem;">
                <div class="card-header">PRODUCTS</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-success mb-3" style="max-width: 24rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-danger mb-3" style="max-width: 24rem;">
                <div class="card-header">CATEGORY</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-warning mb-3" style="max-width: 24rem;">
                <div class="card-header">BLOG</div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-info mb-3" style="max-width: 24rem;">
                <div class="card-header">NEW ORDER</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-light mb-3" style="max-width: 24rem;">
                <div class="card-header">PROCESSING ORDER</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 24rem;">
                <div class="card-header">DELIVERED ORDER</div>
                <div class="card-body text-yellow">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
            <div class="card border-danger mb-3" style="max-width: 24rem;">
                <div class="card-header">CANCELLED ORDER</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
        <div>
            <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="hstack gap-3">
                    <button class="btn btn-success">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-plus-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                        </svg>
                        New
                    </button>


                    <button class="btn btn-primary">
                        Items Selected
                    </button>

                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Filter
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>

                    <button class="btn btn-danger">
                        Report
                    </button>

                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                </th>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Qualification</th>
                                <th scope="col">specialist</th>
                                <th scope="col">Doc Address</th>
                                <th scope="col">Hospital Address</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc001</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc002</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc003</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc004</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc005</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc006</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc007</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc008</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1"></label>
                                </th>
                                <td>doc009</td>
                                <td>Dr Banu Prasad Sharma</td>
                                <td>MBBS , FRCS , MD in mediccine</td>
                                <td>General doctor</td>
                                <td>Adjan</td>
                                <td>Rander</td>
                                <td>active</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </main>




    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

    <footer>
        <p>
            created by rsp
        </p>
    </footer>
</body>

</html>