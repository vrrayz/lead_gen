<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/style.css">

    <title>DevScope Courses!</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DevScope</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="breadcrumb-container">
                        <ul>
                            <li><a href="#">Courses</a></li>
                            <li>|</li>
                            <li>Cybersecurity</li>
                        </ul>
                    </div>
                    <section class="hero-section mb-5">
                        <img src="/img/hero-1.jpg" class="img-fluid" alt="">
                        <div class="caption">
                            <h3>Cybersecurity</h3>
                            <p>Amy Jenkins</p>
                        </div>
                    </section>
                    <a href="/register" class="btn btn-dark d-block py-3 my-3">Start This Course</a>
                    <section class="course-details mb-5">
                        <h3>Build a future in Cybersecurity</h3>
                        <ul>
                            <li>24hrs total course length</li>
                            <li>20 videos</li>
                            <li>10 practice drills</li>
                            <li>Course completion certificate</li>
                            <li>Cybersecurity community access</li>
                        </ul>
                        <a href="/register" class="btn btn-dark py-2 mb-3">Start This Course</a>
                    </section>
                    <section class="course-overview mb-5">
                        <div class="card bg-secondary">
                            <div class="card-body px-4">
                                <h3 class="mb-3">Course Overview</h3>
                                <p>Cyber security is the application of technologies, processes, and controls to protect
                                    systems,
                                    networks, programs, devices and data from cyber attacks.
        
                                    It aims to reduce the risk of cyber attacks and protect against the unauthorised
                                    exploitation of
                                    systems, networks, and technologies.</p>
        
                                <a href="/register" class="btn btn-dark py-2 mb-3">Start This Course</a>
                            </div>
                        </div>
                    </section>
                    <section class="other-details mb-5">
                        <div class="row">
                            <div class="col-lg-6 mb-3">
                                <div class="card bg-secondary">
                                    <div class="card-body px-4">
                                        <h3 class="mb-3">What you'll learn</h3>
                                        <ul>
                                            <li>User education</li>
                                            <li>Application Security</li>
                                            <li>Network Security</li>
                                            <li>Leadership Commitment</li>
                                            <li>Password Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <div class="card bg-secondary">
                                    <div class="card-body px-4">
                                        <h3 class="mb-3">How you'll learn</h3>
                                        <p>At Devscopes you learn at your pace and can always get support from us even after
                                            course completion. We provide helpful learning resources along the way, you'll have
                                            everything you need to reach your goals.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-4">
                    {{-- Contact us --}}
            <section class="contact-us mb-5 mt-lg-5">
                <div class="card">
                    <div class="card-header bg-dark text-light">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="card-body">
                        <p class="text-secondary mb-0">Email Address</p>
                        <a href="mailto:support@devscopes.org">support@devscopes.org</a>
                        <br><br>
                        <p class="text-secondary mb-0">Call us</p>
                        <a href="tel:+123456789">+123456789</a>
                    </div>
                </div>
            </section>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark p-4 text-light">
        <div class="d-flex justify-content-center mb-3">
            <a href="#" class="text-light mx-2"><i class="fab fa-facebook fa-2x"></i></a>
            <a href="#" class="text-light mx-2"><i class="fab fa-twitter fa-2x"></i></a>
            <a href="#" class="text-light mx-2"><i class="fab fa-telegram fa-2x"></i></a>
            <a href="#" class="text-light mx-2"><i class="fab fa-discord fa-2x"></i></a>
        </div>
        <div class="text-center">
            <p>&#169; Devscopes</p>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>