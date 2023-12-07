<?php include __DIR__.'/../../../config/conection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../asset/css/Dashboard.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,200;1,9..40,300;1,9..40,400&family=Roboto+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Dashboard</title>
	
</head>

<body>
	<!-- start first section  -->
	<header class="container-fluid first-section">
		<nav class="container d-flex justify-content-between flex-nowrap ">
			<span class="d-flex justify-content-center">
				<a class="navbar-brand " href="#"><img src="../../../asset/images/logo3.png" alt="" srcset=""></a>
				<a href="#" class="nav-link"><i class="fa-solid fa-user"></i></a>
				<a href="#" class="nav-link"><i class="fa-solid fa-bell"></i></a>
				<a href="#" class="nav-linkfloat-end "><i class="fa-sharp fa-solid fa-sun"></i></a>
			</span>
			<span>
				<i data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
					aria-controls="offcanvasWithBothOptions" class="fa-solid fa-bars"></i>
			</span>
		</nav>
	</header>
	<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
		aria-labelledby="offcanvasWithBothOptionsLabel">
		<div class="offcanvas-header">
			<img src="../images/logo3.png" alt="logo">
			<i class="fa-solid fa-xmark " data-bs-dismiss="offcanvas" aria-label="Close"></i>
		</div>
		<div class="offcanvas-body mt-5">
			<ul>
            <li><i class="fa fa-dashboard me-3"></i><a style="color: with;text-decoration: none;" href="dashboard.php">Dashboard</a></li>
				<li><i class="fa fa-store me-3"></i><a style="color:gainsboro; text-decoration: none;" href="../reservation/reservation.php">Reservation</a></li>
				<li><i class="fa fa-message me-3"></i><a style="color: with;text-decoration: none;" href="../orders/orders.php">Orders</a></li>
				<li><i class="fa-solid fa-check me-3"></i><a style="color: with;text-decoration: none;" href="../users/users.php">users</a> </li>
				<li><i class="fa fa-phone me-3"></i><a style="color: with;text-decoration: none;" href="#">log out</a></li>
			</ul>
		</div>
	</div>
	<!-- end first section  -->
	<!-- start second section  -->
	<div class="container second-section ">
		<div class=" row px-4">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<h1>Good Morning, M.Taouil !</h1>
				<p>Here's what's happening with your store today.</p>
			</div>
			<div class=" offset-lg-3 col-lg-3 col-md-6 col-sm-12 btns">
				<button> <i class="fa-solid fa-circle-plus"></i>Add Product</button>
				<button><i class="fa-solid fa-wave-sine"></i> <i class="fa-solid fa-circle-plus"></i></button>
			</div>
		</div>
	</div>
	<!-- end second section  -->
	<!-- start third section  -->
	<div class="container third-section">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">TOTAL EARNINGS</span>
				<small>+16.24 %</small>
				<p>$559.25k</p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-dollar-sign"></i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">ORDERS</span>
				<small> -3.34 % </small>
				<p>36,894</p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-yin-yang"></i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">CUSTOMERS</span>
				<small>+12.75 % </small>
				<p>13.35M</p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-person-rifle"></i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mt-5 card">
				<span class="title">MY BALANCE </span>
				<small>+1.64 %</small>
				<p>$165.89k</p>
				<span class="bottom">View More</span>
				<i class="fa-solid fa-wallet"></i>
			</div>
		</div>
	</div>
	<!-- end third section  -->
	<div class="affichage">

		<div class="users">
	<form method="post" action="update.php">
    <table class="table">
    <thead>
      <tr>		
        <th scope="col"class="User_id">User_id</th>
        <th scope="col"class="Nom">Nom</th>
        <th scope="col"class="email">Email</th>
        <th scope="col"class="role">role</th>
      </tr>
    </thead>
    <tbody>

	<?php
	 
	 $requet="SELECT * FROM `users`";
	 $result= mysqli_query($connect,$requet);
	 while ($row = mysqli_fetch_assoc($result)){
	?>
        <tr>		
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nom'] ?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['role']?></td>
      </tr>
	  <?php
	  }
	  ?>

    </tbody>
  </table>

    </form>
</div>
		<div class="orders">  
			<form action="ajouter.php" method="get">
<table class="table">
    <thead>
      <tr>
	  						
        <th scope="col"class="tableName">Order_ID</th>
        <th scope="col"class="tableName">Order_Name</th>
		<th scope="col"class="tableName">Location</th>
		<th scope="col"class="tableName">users_id</th>

      </tr>
    </thead>
    <tbody>

	<?php
	 
	 $stmt = $connect->prepare("SELECT * FROM orders");
	 $stmt->execute();
	 $result = $stmt->get_result();
	 
	 while ($row = $result->fetch_assoc()) {
		 // Output data or perform other actions
	?>
      <tr>
	    <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['nom']?></td>
        <td><?php echo $row['location']?></td>
		<td><?php echo $row['users_id']?></td>
      </tr>
	  <?php
	  }
	  ?>
 
    </tbody>
  </table>

    </form>
      </div>
	</div>

	<!-- start forth  section  -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6 col-md-12"><canvas id="myChart1"></canvas></div>
			<div class="col-lg-6 col-md-12"><canvas id="myChart2"></canvas></div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="Dashboard.js"></script>
</body>

</html>