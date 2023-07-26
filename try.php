<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once 'head.php';?>
</head>

<body>
    <!--Main Navigation-->
    <header class="mb-10">

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-md fixed-top navbar-before-scroll shadow-0">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Logo -->
                        <a class="navbar-brand me-1" href="#"><img
                                src="https://ascensus-mdb-uikit-tutorial.mdbgo.io/img/logo.png" height="20px" alt="Logo"
                                loading="lazy" /></a>

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#!">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#!">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#!">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#!">Contact</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav flex-row">
                        <!-- Icons -->
                        <li class="nav-item">
                            <a class="nav-link pe-2" href="#!">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#!">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="#!">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ps-2" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collapsible wrapper -->

            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->

        <!-- Section: Split screen -->
        <section class="">

            <div class="container-fluid px-0">
                <div class="row gx-0">

                    <!-- First column -->
                    <div class="col-lg-6 vh-100 d-flex flex-column justify-content-center align-items-center">

                        <!-- Headings -->
                        <div class="h-100 d-flex justify-content-center align-items-center px-5">

                            <div class="">
                                <h2 class="display-4" data-mdb-toggle="animation" data-mdb-animation-start="onLoad"
                                    data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                                    data-mdb-animation-delay="200">
                                    John Doe</h2>
                                <h1 class="display-2 fw-bold text-uppercase" data-mdb-toggle="animation"
                                    data-mdb-animation-start="onLoad" data-mdb-animation="fade-in"
                                    data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">Web developer
                                </h1>
                            </div>

                        </div>

                        <!-- CTA elements -->
                        <div class="d-flex align-items-center w-100 justify-content-between  px-5 mb-5"
                            data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                            <a href="https://github.com/mdbootstrap/mdb-ui-kit" target="_blank" class="text-dark"><i
                                    class="fab fa-github fa-xl"></i></a>
                            <hr class="hr d-none d-xl-flex" style="height: 2px; width: 200px;">
                            <a class="btn btn-primary btn-lg btn-rounded" href="#" role="button">See my projects<i
                                    class="fas fa-angle-down ms-2"></i></a>
                        </div>

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-6 d-none d-lg-inline-block vh-100">

                        <!-- Carousel wrapper -->
                        <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
                                    class="rounded-circle active" style="width: 7px; height: 7px" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                                    aria-label="Slide 2" class="rounded-circle"
                                    style="width: 7px; height: 7px"></button>
                                <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                                    aria-label="Slide 3" class="rounded-circle"
                                    style="width: 7px; height: 7px"></button>
                            </div>

                            <!-- Inner -->
                            <div class="carousel-inner shadow-5-strong" style="border-bottom-left-radius: 4rem">
                                <!-- Single item -->
                                <div class="carousel-item active">
                                    <img src="https://mdbootstrap.com/img/new/textures/full/243.jpg"
                                        class="d-block vh-100 vw-100 object-cover"
                                        alt="15 years of experience in the IT industry" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>15 years of experience in the IT industry</h5>
                                        <p>I am in love with technology and have spent half my life developing it</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="https://mdbootstrap.com/img/new/textures/full/102.jpg"
                                        class="d-block vh-100 vw-100 object-cover" alt="243 completed projects" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>243 completed projects</h5>
                                        <p>I love challenges and treat each project as my own</p>
                                    </div>
                                </div>

                                <!-- Single item -->
                                <div class="carousel-item">
                                    <img src="https://mdbootstrap.com/img/new/textures/full/107.jpg"
                                        class="d-block vh-100 vw-100 object-cover" alt="53 satisfied customers" />
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>53 satisfied customers</h5>
                                        <p>There is no better reward for me than a happy customer</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Inner -->

                            <!-- Controls -->
                            <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample"
                                data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample"
                                data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- Carousel wrapper -->

                    </div>
                    <!-- Second column -->

                </div>
            </div>

        </section>
        <!-- Section: Split screen -->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main>
        <div class="container">

            <!-- Section: My projects -->
            <section class="mb-10 text-center">
                <h2 class="fw-bold mb-7 text-center">My projects</h2>

                <div class="row gx-lg-5">

                    <!-- First column -->
                    <div class="col-lg-4 col-md-12 mb-6 mb-lg-0">

                        <div class="card rounded-6 h-100" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">
                            <div class="bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6 mt-n3"
                                data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/textures/small/148.jpg" class="w-100" />

                                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#project-1">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">AI engine</h5>
                                <p class="text-muted">
                                    <small>Finished <u>13.09.2021</u> for
                                        <a href="" class="text-dark">Techify</a></small>
                                </p>
                                <p class="card-text">
                                    Ut pretium ultricies dignissim. Sed sit amet mi eget urna
                                    placerat vulputate. Ut vulputate est non quam dignissim
                                    elementum. Donec a ullamcorper diam.
                                </p>
                                <a href="#!" class="btn btn-secondary btn-rounded" data-mdb-toggle="modal"
                                    data-mdb-target="#project-1">Read more</a>
                            </div>
                        </div>

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-4 mb-6 mb-lg-0">

                        <div class="card rounded-6 h-100" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="400">
                            <div class="bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6 mt-n3"
                                data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/textures/small/38.jpg" class="w-100" />
                                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#project-2">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Balanced design</h5>
                                <p class="text-muted">
                                    <small>Finished <u>12.01.2022</u> for
                                        <a href="" class="text-dark">Rubicon</a></small>
                                </p>
                                <p class="card-text">
                                    Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
                                    diam orci, nec ornare metus semper sed. Integer volutpat
                                    ornare erat sit amet rutrum. Ut vulputate est non quam.
                                </p>
                                <a href="#!" class="btn btn-secondary btn-rounded" data-mdb-toggle="modal"
                                    data-mdb-target="#project-2">Read more</a>
                            </div>
                        </div>

                    </div>
                    <!-- Second column -->

                    <!-- Third column -->
                    <div class="col-lg-4 mb-6 mb-lg-0">

                        <div class="card rounded-6 h-100" data-mdb-toggle="animation"
                            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                            data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                            <div class="bg-image hover-overlay ripple mx-3 shadow-4-strong rounded-6 mt-n3"
                                data-mdb-ripple-color="light">
                                <img src="https://mdbootstrap.com/img/new/textures/small/55.jpg" class="w-100" />
                                <a href="#!" data-mdb-toggle="modal" data-mdb-target="#project-3">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Metaverse 2.0</h5>
                                <p class="text-muted">
                                    <small>Finished <u>10.11.2022</u> for
                                        <a href="" class="text-dark">Venom Tech</a></small>
                                </p>
                                <p class="card-text">
                                    Curabitur tristique, mi a mollis sagittis, metus felis mattis
                                    arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
                                    massa volutpat feugiat. Donec.
                                </p>
                                <a href="#!" class="btn btn-secondary btn-rounded" data-mdb-toggle="modal"
                                    data-mdb-target="#project-3">Read more</a>
                            </div>
                        </div>

                    </div>
                    <!-- Third column -->

                </div>

            </section>
            <!-- Section: My projects -->

            <!-- Section: Projects modals -->
            <section class="">

                <!-- Modal project 1 -->
                <div class="modal fade" id="project-1" tabindex="-1" aria-labelledby="project-1Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="project-1Label">AI engine</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Section: Design Block -->
                                <section>

                                    <div class="row gx-lg-5 align-items-center">
                                        <div class="col-lg-5 mb-5 mb-lg-0">
                                            <div class="bg-image ripple rounded-7 shadow-5-strong"
                                                data-mdb-ripple-color="light">
                                                <img src="https://mdbootstrap.com/img/new/textures/full/98.jpg"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center h-100">
                                                            <div class="px-4 py-5 px-md-5 text-white text-center">
                                                                <h3 class="text-uppercase fw-bold mb-4">
                                                                    The future is <u
                                                                        style="color: hsl(210, 12%, 80%)">now</u>
                                                                </h3>
                                                                <p class="mb-0" style="color: hsl(210, 12%, 80%)">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Harum quia laboriosam error consequuntur fugit,
                                                                    doloribus rerum, iure nesciunt amet quidem veniam
                                                                    cupiditate hic fugiat dolore aperiam quisquam libero
                                                                    earum quibusdam?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 mb-4 mb-lg-0">
                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(204, 30%, 20%)">
                                                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Support 24/7</p>
                                                    <p class="text-muted mb-0">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                        Nihil quisquam quibusdam modi sapiente magni molestias
                                                        pariatur facilis reprehenderit facere aliquam ex.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(204, 30%, 20%)">
                                                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Safe and solid</p>
                                                    <p class="text-muted mb-0">
                                                        Eum nostrum fugit numquam, voluptates veniam neque quibusdam
                                                        ullam
                                                        aspernatur odio soluta,
                                                        quisquam dolore animi mollitia a omnis praesentium, expedita
                                                        nobis!
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(204, 30%, 20%)">
                                                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Extremely fast</p>
                                                    <p class="text-muted mb-0">
                                                        Enim cupiditate, minus nulla dolor cumque iure eveniet facere
                                                        ullam
                                                        beatae hic voluptatibus
                                                        dolores exercitationem? Facilis debitis aspernatur amet nisi
                                                        iure
                                                        eveniet facere?
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(204, 30%, 20%)">
                                                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Live analytics</p>
                                                    <p class="text-muted mb-0">
                                                        Illum doloremque ea, blanditiis sed dolor laborum praesentium
                                                        maxime
                                                        sint, consectetur atque
                                                        ipsum ab adipisci ullam aspernatur odio soluta, quisquam dolore
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Section: Design Block -->

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal project 2 -->
                <div class="modal fade" id="project-2" tabindex="-1" aria-labelledby="project-2Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="project-2Label">Balanced design</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Section: Design Block -->
                                <section>

                                    <div class="row gx-lg-5 align-items-center">
                                        <div class="col-lg-5 mb-5 mb-lg-0">
                                            <div class="bg-image ripple rounded-7 shadow-5-strong"
                                                data-mdb-ripple-color="light">
                                                <img src="https://mdbootstrap.com/img/new/textures/full/7.jpg"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center h-100">
                                                            <div class="px-4 py-5 px-md-5 text-white text-center">
                                                                <h3 class="text-uppercase fw-bold mb-4">
                                                                    The future is <u
                                                                        style="color: hsl(210, 12%, 80%)">now</u>
                                                                </h3>
                                                                <p class="mb-0" style="color: hsl(210, 12%, 80%)">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Harum quia laboriosam error consequuntur fugit,
                                                                    doloribus rerum, iure nesciunt amet quidem veniam
                                                                    cupiditate hic fugiat dolore aperiam quisquam libero
                                                                    earum quibusdam?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 mb-4 mb-lg-0">
                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Support 24/7</p>
                                                    <p class="text-muted mb-0">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                        Nihil quisquam quibusdam modi sapiente magni molestias
                                                        pariatur facilis reprehenderit facere aliquam ex.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Safe and solid</p>
                                                    <p class="text-muted mb-0">
                                                        Eum nostrum fugit numquam, voluptates veniam neque quibusdam
                                                        ullam
                                                        aspernatur odio soluta,
                                                        quisquam dolore animi mollitia a omnis praesentium, expedita
                                                        nobis!
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Extremely fast</p>
                                                    <p class="text-muted mb-0">
                                                        Enim cupiditate, minus nulla dolor cumque iure eveniet facere
                                                        ullam
                                                        beatae hic voluptatibus
                                                        dolores exercitationem? Facilis debitis aspernatur amet nisi
                                                        iure
                                                        eveniet facere?
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(0, 63%, 44%)">
                                                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Live analytics</p>
                                                    <p class="text-muted mb-0">
                                                        Illum doloremque ea, blanditiis sed dolor laborum praesentium
                                                        maxime
                                                        sint, consectetur atque
                                                        ipsum ab adipisci ullam aspernatur odio soluta, quisquam dolore
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Section: Design Block -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal project 3 -->
                <div class="modal fade" id="project-3" tabindex="-1" aria-labelledby="project-3Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="project-3Label">Metaverse 2.0</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Section: Design Block -->
                                <section>

                                    <div class="row gx-lg-5 align-items-center">
                                        <div class="col-lg-5 mb-5 mb-lg-0">
                                            <div class="bg-image ripple rounded-7 shadow-5-strong"
                                                data-mdb-ripple-color="light">
                                                <img src="https://mdbootstrap.com/img/new/textures/full/30.jpg"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.4)">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center h-100">
                                                            <div class="px-4 py-5 px-md-5 text-white text-center">
                                                                <h3 class="text-uppercase fw-bold mb-4">
                                                                    The future is <u
                                                                        style="color: hsl(210, 12%, 80%)">now</u>
                                                                </h3>
                                                                <p class="mb-0" style="color: hsl(210, 12%, 80%)">
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                                    elit.
                                                                    Harum quia laboriosam error consequuntur fugit,
                                                                    doloribus rerum, iure nesciunt amet quidem veniam
                                                                    cupiditate hic fugiat dolore aperiam quisquam libero
                                                                    earum quibusdam?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(251, 251, 251, 0.2)"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-7 mb-4 mb-lg-0">
                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-headset fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Support 24/7</p>
                                                    <p class="text-muted mb-0">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                                        Nihil quisquam quibusdam modi sapiente magni molestias
                                                        pariatur facilis reprehenderit facere aliquam ex.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-shield-alt fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Safe and solid</p>
                                                    <p class="text-muted mb-0">
                                                        Eum nostrum fugit numquam, voluptates veniam neque quibusdam
                                                        ullam
                                                        aspernatur odio soluta,
                                                        quisquam dolore animi mollitia a omnis praesentium, expedita
                                                        nobis!
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start mb-5">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-shipping-fast fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Extremely fast</p>
                                                    <p class="text-muted mb-0">
                                                        Enim cupiditate, minus nulla dolor cumque iure eveniet facere
                                                        ullam
                                                        beatae hic voluptatibus
                                                        dolores exercitationem? Facilis debitis aspernatur amet nisi
                                                        iure
                                                        eveniet facere?
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <div class="p-3 rounded-4 shadow-2-strong"
                                                        style="background-color: hsl(260, 84%, 43%)">
                                                        <i class="fas fa-chart-pie fa-lg text-white fa-fw"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-4">
                                                    <p class="fw-bold mb-1">Live analytics</p>
                                                    <p class="text-muted mb-0">
                                                        Illum doloremque ea, blanditiis sed dolor laborum praesentium
                                                        maxime
                                                        sint, consectetur atque
                                                        ipsum ab adipisci ullam aspernatur odio soluta, quisquam dolore
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Section: Design Block -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Section: Projects modals -->

            <!-- Section: About me -->
            <section class="mb-10">

                <div class="container">

                    <div class="row gx-0 align-items-center">

                        <!-- Firt column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div style="background: hsla(0, 0%, 100%, 0.55); 
                    backdrop-filter: blur(30px);
                    z-index: 1;" class="card rounded-7 me-lg-n5" data-mdb-toggle="animation"
                                data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="600">
                                <div class="card-body p-lg-5 shadow-5">
                                    <h2 class="fw-bold">
                                        <span class="text-primary">John Doe</span>
                                    </h2>
                                    <p class="fw-bold"><em>“Design is intelligence made visible.”</em></p>

                                    <p class="text-muted mb-4">
                                        Nunc tincidunt vulputate elit. Mauris varius purus malesuada
                                        neque iaculis malesuada. Aenean gravida magna orci, non
                                        efficitur est porta id. Donec magna diam.
                                    </p>
                                    <p class="text-muted">
                                        Ad, at blanditiis quaerat laborum officia incidunt
                                        cupiditate dignissimos voluptates eius aliquid minus
                                        praesentium! Perferendis et totam ipsum ex aut earum libero
                                        accusamus voluptas quod numquam saepe, consequuntur nihil
                                        quia tenetur consequatur. Quis, explicabo deserunt quasi
                                        assumenda ea maiores nulla, et dolor saepe praesentium natus
                                        error reiciendis voluptas iste. Esse, laudantium ipsum
                                        animi, quos voluptatibus atque vero repellat sit eligendi
                                        autem maiores quasi cum aperiam. Aperiam rerum culpa
                                        accusantium, ducimus deserunt aliquid alias vitae quasi
                                        corporis placeat vel maiores explicabo commodi!
                                    </p>
                                </div>
                            </div>

                        </div>
                        <!-- Firt column -->

                        <!-- Second column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div class="bg-image hover-overlay rounded-7 shadow-4 rotate-lg" data-mdb-toggle="animation"
                                data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200"
                                data-mdb-animation-offset="300">
                                <img src="https://mdbootstrap.com/img/new/standard/people/272.jpg" class="w-100"
                                    alt="" />
                                <div class="mask" style="background: linear-gradient(
                                   45deg,
                                   hsla(169, 84.5%, 52%, 0.3),
                                   hsla(263, 87.7%, 44.7%, 0.3) 100%
                                   )">
                                </div>
                            </div>

                        </div>
                        <!-- Second column -->

                    </div>

                </div>

            </section>
            <!-- Section: About me -->

            <!-- Section: Testimonials -->
            <section class="mb-10 text-center">

                <h2 class="fw-bold mb-7 text-center">Happy clients</h2>

                <div class="row gx-lg-5">

                    <!-- First column -->
                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                            data-mdb-animation-delay="200">
                            <div class="rounded-7 p-4 shadow-3" style="background-color: hsl(218, 62.2%, 95%)">
                                <hr class="hr hr-blurry">
                                <p class="text-muted mt-4 mb-2">Project Manager at Spotify</p>
                                <p class="h5 mb-4 text-primary">Garry Lindman</p>
                                <p class="pb-4 mb-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis molestias quidem
                                    itaque earum tempora distinctio soluta ut, eius, impedit porro iure praesentium
                                    ratione possimus quos suscipit, ratione nostrum cum odit.
                                </p>
                            </div>
                            <img src="https://mdbootstrap.com/img/new/avatars/22.jpg"
                                class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
                        </div>

                    </div>
                    <!-- First column -->

                    <!-- Second column -->
                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                            data-mdb-animation-delay="400">
                            <div class="rounded-7 p-4 shadow-3" style="background-color: hsl(218, 62.2%, 95%)">
                                <hr class="hr hr-blurry">
                                <p class="text-muted mt-4 mb-2">CEO at Reddit</p>
                                <p class="h5 mb-4 text-primary">Lisa Montessori</p>
                                <p class="pb-4 mb-4">
                                    Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
                                    soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                                    placeat facere possimus, omnis voluptas assumenda est omnis.
                                </p>
                            </div>
                            <img src="https://mdbootstrap.com/img/new/avatars/11.jpg"
                                class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
                        </div>

                    </div>
                    <!-- Second column -->

                    <!-- Third column -->
                    <div class="col-lg-4">

                        <div data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                            data-mdb-animation-delay="600">
                            <div class="rounded-7 p-4 shadow-3" style="background-color: hsl(218, 62.2%, 95%)">
                                <hr class="hr hr-blurry">
                                <p class="text-muted mt-4 mb-2">Senior Product Designer at Twitter</p>
                                <p class="h5 mb-4 text-primary">Ozzy McRyan</p>
                                <p class="pb-4 mb-4">
                                    Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                    eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque
                                    earum rerum hic tenetur a sapiente delectus ut aut reiciendis.
                                </p>
                            </div>
                            <img src="https://mdbootstrap.com/img/new/avatars/25.jpg"
                                class="w-100 rounded-7 mt-n5 shadow-5-strong" style="max-width: 100px" alt="Avatar" />
                        </div>

                    </div>
                    <!-- Third column -->

                </div>
            </section>
            <!-- Section: Testimonials -->

            <!-- Section: Contact -->
            <section class="mb-10 text-center">

                <div class="container">

                    <div class="row gx-0 align-items-center">

                        <!-- Firt column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div style="background: hsla(0, 0%, 100%, 0.55); 
                    backdrop-filter: blur(30px);
                    z-index: 1;" class="card rounded-7 me-lg-n5" data-mdb-toggle="animation"
                                data-mdb-animation-start="onScroll" data-mdb-animation="fade-in"
                                data-mdb-animation-show-on-load="false" data-mdb-animation-delay="500">
                                <div class="card-body p-lg-5 shadow-5">
                                    <form>
                                        <!-- Name input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form4Example1" class="form-control" />
                                            <label class="form-label" for="form4Example1">Name</label>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form4Example2" class="form-control" />
                                            <label class="form-label" for="form4Example2">Email address</label>
                                        </div>

                                        <!-- Message input -->
                                        <div class="form-outline mb-4">
                                            <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                                            <label class="form-label" for="form4Example3">Message</label>
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="form-check d-flex justify-content-center mb-4">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form4Example4" checked />
                                            <label class="form-check-label" for="form4Example4">
                                                Send me a copy of this message
                                            </label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- Firt column -->

                        <!-- Second column -->
                        <div class="col-lg-6 mb-5 mb-lg-0">

                            <div class="ratio ratio-1x1" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
                                data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
                                data-mdb-animation-delay="200" data-mdb-animation-offset="200">
                                <iframe class="shadow-3-strong rounded-7"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96813.17497894862!2d-73.97484803586903!3d40.68692922859912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2spl!4v1671718528728!5m2!1sen!2spl"
                                    allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>

                        </div>
                        <!-- Second column -->

                    </div>

                </div>

            </section>
            <!-- Section: Contact -->

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="text-center" style="background-color: hsl(218, 62.2%, 95%)">
        <div class="container py-4" data-mdb-toggle="animation" data-mdb-animation-start="onScroll"
            data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false" data-mdb-animation-delay="200">

            <!-- Facebook -->
            <a class="btn text-white btn-floating m-2" style="background-color: #3b5998;" href="#!" role="button"><i
                    class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn text-white btn-floating m-2" style="background-color: #55acee;" href="#!" role="button"><i
                    class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn text-white btn-floating m-2" style="background-color: #dd4b39;" href="#!" role="button"><i
                    class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn text-white btn-floating m-2" style="background-color: #ac2bac;" href="#!" role="button"><i
                    class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn text-white btn-floating m-2" style="background-color: #0082ca;" href="#!" role="button"><i
                    class="fab fa-linkedin-in"></i></a>
            <!-- Github -->
            <a class="btn text-white btn-floating m-2" style="background-color: #333333;" href="#!" role="button"><i
                    class="fab fa-github"></i></a>

        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: hsla(218, 62.2%, 35%, 0.2)" data-mdb-toggle="animation"
            data-mdb-animation-start="onScroll" data-mdb-animation="fade-in" data-mdb-animation-show-on-load="false"
            data-mdb-animation-delay="300">
            © 2022 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <?php include 'script.php';?>
</body>

</html>