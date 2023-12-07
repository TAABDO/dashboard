

<?php

include __DIR__.'/../../config/conection.php';

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $connect->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            if ($row['role'] == 'admin') {
                header("location: ../Dashboard/dashboard/dashboard.php");
                exit;
            } else {
                header("location: ../dashboard_user/dashboard_user.php");
                exit;
            }
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "Email is not registered.";
    }

    $stmt->close();
    $connect->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>
   <link rel="stylesheet" href="../../asset/css/auth.css">
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="container mt-6" id="Regester">
<div class="imag">
    <img src="../../asset/images/backround2.png" style="width: 40em; height: 30em;" alt="backgroud">
</div>
<div class="row mt-6">
    <h4> ohh Nice You Are One Of Use</h4>
    <form method="post" action="">
        
        <div class="form-group">
            <label for="name">email:</label>
            <input type="text" class="form-control w-100" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="email">password:</label>
            <input type="password" class="form-control " name="password" id="password" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100">Signin</button>
        

    </form>
</div>

<!-- Add Bootstrap JS and Popper.js CDN links -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>