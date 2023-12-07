<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contact.css">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<?php require __DIR__ ."../../../includes/header.php"; ?>

    <!-- end first section  -->
    <section class="container-fluid section-fluid">
        <div>
            <h1 class="contact color">Contact Us</h1>
        </div>
    </section>
    <section class="cardes">

        <div class="pt-5 pb-5">
            <div class="container">
                <div class="row justify-content-evenly justify-content-center align-items-center">

                    <div class="card" style="width: 20rem; background: #eeeeee;">
                        <!-- Location -->
                        <div class="icon">
                            <i class="fa-solid fa-map-location fa-4x" style="color: #ff822e;"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style=" color: #ff822e;">Location</h5>
                            <p class="card-text">5468 Youcode,
                                Youssoufia.</p>
                        </div>

                    </div>

                    <div class="card" style="width: 20rem;  background: #eeeeee;">
                        <!-- Phone Number -->
                        <div class="icon">
                            <i class="fa-solid fa-phone fa-4x" style="color: #ff822e;"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style=" color: #ff822e;">Phone Number</h5>
                            <span>+(212)05345687</span>
                            <span>+(212)63498653</span>
                        </div>
                    </div>


                    <div class="card" style="width: 20rem;  background: #eeeeee;">
                        <!-- Email & Adress -->
                        <div class="icon">
                            <i class="fa-solid fa-envelope fa-4x" style="color: #ff822e;"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style=" color: #ff822e;">Email & Adress</h5>
                            <span>rest-iam@gmail.com</span>
                            <span>contact@gmail.com</span>
                        </div>
                    </div>


                    <div class="card" style="width: 20rem;  background: #eeeeee;">
                        <!-- open & closing -->
                        <div class="icon">
                            <i class="fa-regular fa-clock fa-4x" style="color: #ff822e;"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style=" color: #ff822e;">open & closing</h5>
                            <span>Mon-Fri : 09:00 Am
                                <span> to 07:00 Pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <div class="reservation" style="margin-top: 7%;">
            <h2 style="margin-bottom: 10%; font-size: xx-large;">Reservation</h2>
            <form id="formContact" class="container justify-content-evenly justify-content-center align-items-center">
                <div class="row justify-content-evenly justify-content-center align-items-center">

                    <div class="row justify-content-evenly  mt-4">
                        <div class="col-6 d-flex flex-column gap-0">
                            <label for="input-Name">Your Name</label>
                            <input type="text" id="input-Name " placeholder="Your Name" class="input-size" >
                            <span id="msg-valid-Nam" class="msg-validation"> ecrire un valide Nom</span>
                        </div>

                        <div class="col-6 d-flex flex-column mt-1">
                            <label for="input-Email">Email</label>
                            <input type="email" id="input-Email" placeholder="Email" class="input-size">
                            <span id="msg-valid-Email" class="msg-validation">ecrire un valide Email</span>
                        </div>
                    </div>

                    <div class="row justify-content-evenly  mt-4">

                        <div class="col-6 d-flex flex-column mt-1">
                            <label for="input-phoneNumber">phone Number</label>
                            <input type="tel" id="input-phoneNumber" placeholder="(+211)65432987" class="input-size">
                            <span id="msg-valid-phoneNumber" class="msg-validation">ecrire un valide Number</span>
                        </div>
                        <div class="col-6 d-flex flex-column mt-1">
                            <label for="input-Members">Members</label>
                            <input type="text" id="input-Nembers" placeholder="Members" class="input-size">
                            <span id="msg-valid-Members" class="msg-validation"> ecrire un valide Membres </span>
                        </div>

                    </div>

                    <div class="row justify-content-evenly mt-4 ">
                        <div class="col-6 d-flex flex-column mt-1">
                            <label for="input-Message">Message</label>
                            <textarea id="input-Message" class="input-size input-message" cols="30" placeholder="message"
                                rows="10"></textarea>
                            <span id="msg-valid-Message" class="msg-validation"> ecrire un valide text </span>
                        </div>

                        <div id="captcha" class="col-6 d-flex flex-column mt-1">
                            <div class="captcha g-5 align-items-center bg-light"
                                style="border: 1px solid black;height: 4rem;width:50%; ">
                                <input type="checkbox" id="inputCheckbox" class="" style="height: 1rem;width: 1rem;">
                                <p>je ne suis pas un robot</p>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-lg" style="background-color: #ff822e; margin-top: 8%;">book a
                        table</button>
                </div>
            
            </form>
        </div>
    
    <!-- start footer  section  -->
    <?php require __DIR__ ."../../../includes/footer.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="Contact.js"></script>
</body>

</html>