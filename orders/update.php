<?php 
include "conection.php";

$id=$_GET['id'];

$requete="SELECT * FROM orderes";
$result=mysqli_query($connect,$requete);
$row=mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){

  $Order_Name = $_POST['Order_Name'];
   $client_Name = $_POST['client_Name'];
   $Location = $_POST['Location'];
   $Price = $_POST['Price'];

  $update="UPDATE `reservation`
  SET `Order_Name`= '$Order_Name', `date_reservation`= '$Order_Name' , `TableNumber`='$client_Name' , `client_id`='$Location' WHERE id = $id ";

  $resultupdate = mysqli_query($connect,$update);

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../Dashboard.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <style>
      a {
  text-decoration: none;
  color: black;
}
    </style>
</head>

<body>


<div class="container ajouter">
	<div class="container second-section ">
		<div class=" row px-4">
			<div class="col-lg-5 col-md-6 col-sm-12">
				<h1>Good Morning!</h1>
				<p>Here's what's happening with your store today.</p>
			</div>
			<div class=" offset-lg-3 col-lg-3 col-md-6 col-sm-12 btns">
				<button><a href="orders.php"> < Go Back </a></button>
				
			</div>
		</div>
	</div>
<form class="formajouter" method="POST" >

  
  <div class="mb-3">
    <label for="exampleInputorder" class="form-label" style="color:white">Order_Name</label>
    <input type="text" name="Order_Name" value="<?php echo $row['Order_Name'] ?>" class="form-control w-50" id="exampleInputorder" aria-describedby="orderHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div> 
  <div class="mb-3">
    <label for="exampleInputdelivery_adresse" class="form-label" style="color:white">client_Name</label>
    <input type="text" name="client_Name" value="<?php echo $row['client_Name'] ?>"class="form-control w-50" id="exampleInputdelivery_adresse" placeholder="YYYY/MM/DD">
  </div>
  <div class="mb-3">
    <label for="exampleInputvalue" class="form-label" style="color:white">Location</label>
    <input type="text" name="Location" value="<?php echo $row['Location'] ?>"class="form-control w-50" id="exampleInputvalue" aria-describedby="valueHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class=" mb-3" >
    <label for="exampleInputclient" class="form-label" style="color:white">Price</label>
    <input type="text" name="Price" value="<?php echo $row['Price'] ?>" class="form-control w-50 " id="exampleInputclient" aria-describedby="clientHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <button type="submit" name="submit" class="btn btn-primary">save</button>
</form>
</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</html>