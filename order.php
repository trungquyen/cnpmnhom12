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
    </head>
    <main>
        <div class="container">
            <div class="row order_info">
                <div class="col-md-5 ">
                    <div class="order_food">
                        <div class="food_item--img">
                            <img src="images/menu-pizza.jpg" class="img_food" alt="">
                        </div>
                        <div class="food_item--label">
                            <h5 class="my-0">Food Title</h5>
                            <p class="food_price">$2.3</p>
                            <p>Quantity</p>
                            <input type="number" value="1" required>
                        </div>
                        <button type="button" class="btn-close" aria-label="Close"></button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-horizontal order_name">
                        <form action="">
                            <div class="col-md-8 mt-4 mb-3 w-100">
                                <input type="text" placeholder="Name"
                                    id="txtName" name="txtName" class="form-control" />
                            </div>
    
                            <div class="col-md-8 mb-3 w-100">
                                <input type="number" placeholder="Phone" 
                                    id="txtPhone" name="txtPhone" class="form-control" />
                            </div>

                            <div class="col-md-8 mb-3 w-100">
                                <input type="email" placeholder="Email" 
                                    id="txtEamil" name="txtEamil" class="form-control" />
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <input type="submit" name="submit" value="Đặt đơn" class="btn btn-primary">
                                <input type="submit" name="submit" value="Huỷ đơn hàng" class="btn btn-danger ms-">
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>