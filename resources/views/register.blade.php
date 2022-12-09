<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/style.css">

    <title>Sign up| DevScope</title>
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
        <div class="bg-cover">
            <div class="container">
                <div class="row">
                    @if (session('success'))
                    <div class="col-md-6 mx-auto">
                        <div class="card mt-3 mb-5">
                            <div class="card-body text-center">
                                <h3>Registration Success</h3>
                                <p class="display-1 text-success">
                                    <i class="fas fa-check-circle"></i>
                                </p>
                                <p>Hurray!! Your account has been created successfully. We will contact you shortly</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="col-lg-4 ms-auto">
                        <div class="card mt-3 mb-5">
                            <div class="card-header bg-dark text-light">
                                <h3>Request Information</h3>
                            </div>
                            <div class="card-body px-4">
                                <form action="" method="post">
                                    @csrf
                                    {{-- First name --}}
                                    <div class="mb-2">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            aria-describedby="firstname">
                                        @error('firstname')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Last name --}}
                                    <div class="mb-2">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            aria-describedby="lastname">
                                        @error('lastname')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Username --}}
                                    <div class="mb-2">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            aria-describedby="username">
                                        @error('username')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Email --}}
                                    <div class="mb-2">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            aria-describedby="emailHelp">
                                        @error('email')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Phone --}}
                                    <div class="mb-2">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            aria-describedby="phone">
                                        @error('phone')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Password --}}
                                    <div class="mb-2">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            aria-describedby="password">
                                        @error('password')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Password COnfirmation --}}
                                    <div class="mb-2">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                            aria-describedby="password_confirmation">
                                        @error('password_confirmation')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Zip code --}}
                                    <div class="mb-2">
                                        <label for="zipcode" class="form-label">Zip Code</label>
                                        <input type="text" class="form-control" id="zipcode" name="zipcode"
                                            aria-describedby="zipcode">
                                        @error('zipcode')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- Country --}}
                                    <div class="mb-2">
                                        <label for="country" class="form-label">Country</label>
                                        <select class="form-control" id="country" name="country"
                                            aria-describedby="country">
                                        </select>
                                        @error('country')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    {{-- State --}}
                                    <div class="mb-2">
                                        <label for="state" class="form-label">State</label>
                                        <input type="text" class="form-control" id="state" name="state"
                                            aria-describedby="state">
                                        @error('state')
                                        <div class="form-text text-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                                    <input type="submit" class="btn btn-primary d-block" value="Create Account">
                                </form>
                            </div>
                        </div>
                    </div>
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
    <script src="/custom-script.js"></script>
</body>

</html>