<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <title>Now Food</title>
</head>

<body style="background-color:rgb(228, 220, 220) ;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <div class="nowimg">
                            <img src="image/now3.png" alt="" class="nowimg">
                        </div>
                        <a class="navbar-brand pe-auto ms-2" href="#">Now Food</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Categories</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Foods</a>
                                </li>
                                <li class="nav-item">
                                    <div class="d-flex">
                                        <a class="nav-link" href="#">Sign in</a>
                                        <a class="nav-link" href="#">/ Sign up</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="form_login">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-5">
                    <div class="imagefood mt-5 ms-5">
                        <img src="image/mon4.jpg" alt="" class="food">
                        <img src="image/mon2.jpg" alt="" class="food mt-5">
                    </div>
                </div>
                <div class="col-md-2">

                </div>
                <div class="col-md-3 formlog mt-5">
                    <div class="signin">
                        <div class="now_img">
                            <img src="image/now3.png" alt="" class="nowimg ms-5">
                            <h4 class="ms-2 mt-2">Welcom to Nowfood</h4>
                        </div>
                        <div class="form-horizontal">
                            <form action="process-signin.php" method="post">
                                <div class="col-md-8 mt-4 mb-3 w-100">
                                    <input type="email" placeholder="Phone or Email" id="txtEmail" name="txtEmail"
                                        class="form-control" required autofocus />
                                </div>

                                <!-- Password input -->
                                <div class="col-md-8 mb-3 w-100">
                                    <input type="password" placeholder="Password" id="txtPass" name="txtPass"
                                        class="form-control" required />
                                </div>

                                <!-- 2 column grid layout for inline styling -->
                                <div class="row mb-4 d-flex">
                                    <div class="col d-flex">
                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-danger btn-block btnSignIn"
                                            name="btnSignIn">Sign in</button>
                                        <!-- Simple link -->
                                        <a href="mail.php" class="d-block btnForgot ms-5" name="btnForgot">Forgot your
                                            password?</a>
                                    </div>
                                    <?php
                                    if(isset($_GET['error'])){
                                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                                    }
                                ?>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="signinin mt-4">
                    <div class="now_img">
                            <img src="image/now3.png" alt="" class="nowimg ms-5">
                            <h4 class="ms-2 mt-2"> Please register here!</h4>
                        </div>
                        <form action="dk.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> ID </label>
                                <input type="text" name="id" readonly class="form-control" id="id">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    aria-describedby="emailHelp" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone
                                    else.</small>
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required="">
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input type="password" name="cpassword" class="form-control" id="cpassword" required="">
                            </div>

                            <input type="submit" name="btnRegister" class="btn btn-danger mt-3">
                        </form>
                    </div>
                </div>
                <div class="col-md-1">

                </div>
            </div>
        </div>

    </div>
    <hr>


</body>

</html>