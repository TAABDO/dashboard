<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,200;1,9..40,300;1,9..40,400&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- =========== bootstrap ======-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!---boxicons link-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="Product.css">
</head>

<body>
    <!-- start first section  -->
    <?php require __DIR__ ."../../../includes/header.php"; ?>

    <!-- end first section  -->

    <div class="container mt-5">
        <div class="row col-sm-12  d-flex align-items-center">
            <div class=" col-md-6 col-sm-12">
                <div class="img-showcase">
                    <img src="img/burger.jpg" alt="shoe image" class="w-100 " style="border-radius: 20px;">
                </div>
            </div>
            <div class=" col-md-6 col-sm-12 ">
                <h2 class="product-title">Chicken Big Tasty (-20%)</h2>
                <div class="product-rating">
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star-half-alt" style='color:#ff6305'></i>
                    <span>4.7 <span style="color: #E0E0E0;">(121 Reviews)</span></span>
                </div>
                <div class="description">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="row col-sm-6">
                    <div class="col col-md-3">
                        <div class="product-price">
                            <p class="new-price"> Price:</p>
                            <p>$4.80</p>
                        </div>
                    </div>
                    <div class="col col-md-3">
                        <div class="purchase-info">
                            <p>Quantity:</p>
                            <input type="number" min="1" value="1">
                        </div>
                    </div>
                </div>

                <div class="toAdd" style="text-align: center;">
                    <p style="text-align: center;">Add On</p>
                </div>
                <div class="addingToCart">
                    <div class="row">
                        <div class=" col-md-6 mt-3 col-sm-12">
                            <img src="img/pic1.jpg" alt="" width="50px" style="border-radius: 5px;">
                            <input type="checkbox" name="checkbox" id="checkbox" />
                            <label for="checkbox">French Frise</label>
                        </div>
                        <br>
                        <div class=" col-md-6 mt-3 col-sm-12">

                            <img src="img/pic2.jpg" alt="" width="50px" style="border-radius: 5px;">
                            <input type="checkbox" name="checkbox" id="checkbox2" />
                            <label for="checkbox2">Extra Cheese</label>

                        </div>
                        <br>
                        <div class=" col-md-6 mt-3 col-sm-12">

                            <img src="img/pic3.jpg" alt="" width="50px" style="border-radius: 5px;">
                            <input type="checkbox" name="checkbox" id="checkbox3" />
                            <label for="checkbox3">Coca Cola</label>

                        </div>

                        <br>
                        <div class=" col-md-6 mt-3 col-sm-12">
                            <img src="img/pic4.jpg" alt="" width="50px" style="border-radius: 5px;">
                            <input type="checkbox" name="checkbox" id="checkbox4" />
                            <label for="checkbox4">Choco Lava</label>
                        </div>
                    </div>
                </div>
                <br>
                <div class="buttonOrder" style="text-align: center;">
                    <a href="OrderTracking/order.html"> <button type="button" class="btn"
                            style="border: 2px solid #ff6305; border-radius: 10px; padding: 10px; ">
                            Buy Now <i class='bx bx-cart-add' style='color:#ff6305'></i>
                        </button></a>
                </div>

            </div>
        </div>

    </div>
    <br><br>
    <div class="reviiews container p-5">
        <h1 style="text-align: center;"> <i class="fas fa-star" style='color:#ff6305'></i> Product Review</h1> <br>

        <div class="user1 d-flex justify-content-center mt-5">
            <div class="imagePerso">
                <img src="img/person1.jpg" alt="" class="me-5">
            </div>
            <div class="info">
                <h2>Monsur Rahman Lito</h2>
                <div class="ratiing">
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#bfbfbf'></i>
                </div>
                <p class="description2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    when an unknown printer took
                </p>
            </div>
            <br>
            <hr>
        </div>
        <hr>
        <div class="user1 d-flex justify-content-center mt-5">
            <div class="imagePerso">
                <img src="img/person1.jpg" alt="" class="me-5">
            </div>
            <div class="info">
                <h2>Monsur Rahman Lito</h2>
                <div class="ratiing">
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#bfbfbf'></i>
                    <i class="fas fa-star" style='color:#bfbfbf'></i>
                </div>
                <p class="description2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    when an unknown printer took
                </p>
            </div>
            <br>
        </div>
        <hr>

        <div class="user1 d-flex justify-content-center mt-5">
            <div class="imagePerso">
                <img src="img/person1.jpg" alt="" class="me-5">
            </div>
            <div class="info">
                <h2>Monsur Rahman Lito</h2>
                <div class="ratiing">
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                    <i class="fas fa-star" style='color:#ff6305'></i>
                </div>
                <p class="description2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                    when an unknown printer took
                </p>
            </div>
            <br>

        </div>

    </div>

    <div class="conatiner p-5 m-5 formRvw ">
        <h1><i class="fa fa-address-book" aria-hidden="true"></i> Add a review</h1>
        <div class="row mt-5">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-4">
                        <input type="text" placeholder="  Your Name">
                    </div>
                    <div class=" offset-md-1  col-md-6 col-sm-12 mt-4">
                        <input type="email" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5">
                <span class="ratingLabel me-5"> <i class="fa fa-angle-double-down  " aria-hidden="true"></i> Your
                    rating</span>
                <input type="number" id="number" min="1" max="5">
            </div>
            <div class="col-11 mt-5">
                <textarea name="msg" id="" cols="30" rows="10" placeholder="Type Review here"></textarea>
            </div>
            <div class="col-12 mt-5">
                <input type="submit" value="submit">
            </div>
        </div>
    </div>

    <!-- start footer  section  -->
    <?php require __DIR__ ."../../../includes/footer.php"; ?>

    <!-- end footer  section  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="Product.js"></script>
</body>

</html>