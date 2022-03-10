<?php
    // trước khi cho người dùng vào bên trong
    // phải kiểm tra thẻ làm việc
    session_start();
    if (!isset($_SESSION['isLoginOK'])){
        header("location:form.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Now Food</title>
</head>
<body>
    <head>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand pe-auto d-flex align-items-center" href="demo.html">
                                <div class="nowfood_header">
                                    <img src="images/nowfood.png" alt="" class="nowfood_img">
                                </div>
                                Now Food
                            </a>
                          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="demo.html">Home</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Categories</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Foods</a>
                              </li>
                              <li class="nav-item">
                                <div class="d-flex">
                                    <a class="nav-link" href="Signout.html">Sign out</a>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </head>
    <main>
        <div class="container">
            <div class="row">
                <h2 class="label_food">Explore Foods</h2>
                <div class="box-3">
                    <img src="images/mon4.jpg" class="rounded img_food" alt="...">
                </div>
                <div class="box-3">
                    <img src="images/mon9.jpg" class="rounded img_food" alt="...">
                </div>
                <div class="box-3">
                    <img src="images/mon6.jpg" class="rounded img_food" alt="...">
                </div>
                <div class="box-3">
                    <img src="images/menu-momo.jpg" class="rounded img_food" alt="...">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h2 class="label_food">Food Menu</h2>
                <div class="food_item col-6 box-2">
                    <div class="food_item--img">
                        <img src="images/mon1.jpg" class="img_food" alt="">
                    </div>
                    <div class="food_item--label">
                        <h5 class="my-0">Food Title</h5>
                        <p class="food_price">$2.3</p>
                        <p class="food_info">Made with Italian Sauce, Chicken, and organice vegetables.</p>
                        <a href="order.html" class="btn btn_order">Order Now</a>
                    </div>
                </div>
                <div class="food_item col-6 box-2">
                    <div class="food_item--img">
                        <img src="images/mon2.jpg" class="img_food" alt="">
                    </div>
                    <div class="food_item--label">
                        <h5 class="my-0">Food Title</h5>
                        <p class="food_price">$2.3</p>
                        <p class="food_info">Made with Italian Sauce, Chicken, and organice vegetables.</p>
                        <a href="order.html" class="btn btn_order">Order Now</a>
                    </div>
                </div>
                <div class="food_item col-6 box-2">
                    <div class="food_item--img">
                        <img src="images/mon3.jpg" class="img_food" alt="">
                    </div>
                    <div class="food_item--label">
                        <h5 class="my-0">Food Title</h5>
                        <p class="food_price">$2.3</p>
                        <p class="food_info">Made with Italian Sauce, Chicken, and organice vegetables.</p>
                        <a href="order.html" class="btn btn_order">Order Now</a>
                    </div>
                </div>
                <div class="food_item col-6 box-2">
                    <div class="food_item--img">
                        <img src="images/mon4.jpg" class="img_food" alt="">
                    </div>
                    <div class="food_item--label">
                        <h5 class="my-0">Food Title</h5>
                        <p class="food_price">$2.3</p>
                        <p class="food_info">Made with Italian Sauce, Chicken, and organice vegetables.</p>
                        <a href="order.html" class="btn btn_order">Order Now</a>
                    </div>
                </div>
                <div class="food_item col-6 box-2">
                    <div class="food_item--img">
                        <img src="images/mon5.jpg" class="img_food" alt="">
                    </div>
                    <div class="food_item--label">
                        <h5 class="my-0">Food Title</h5>
                        <p class="food_price">$2.3</p>
                        <p class="food_info">Made with Italian Sauce, Chicken, and organice vegetables.</p>
                        <a href="order.html" class="btn btn_order">Order Now</a>
                    </div>
                </div>
                <div class="food_item col-6 box-2">
                    <div class="food_item--img">
                        <img src="images/mon6.jpg" class="img_food" alt="">
                    </div>
                    <div class="food_item--label">
                        <h5 class="my-0">Food Title</h5>
                        <p class="food_price">$2.3</p>
                        <p class="food_info">Made with Italian Sauce, Chicken, and organice vegetables.</p>
                        <a href="order.php" class="btn btn_order">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>