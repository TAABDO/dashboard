<?php 

include "conection.php";

$id = $_GET["id"];

$delete_client= "DELETE FROM client WHERE client.id = $id";
$result = mysqli_query($connect, $delete_client);

if ($result) {
  header("Location: clients.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}

?>
