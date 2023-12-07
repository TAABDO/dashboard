<?php 

include __DIR__.'/../../../config/conection.php';

$id = $_GET["id"];
$delete_orderes = "DELETE FROM `orderes` WHERE id = $id";
$result = mysqli_query($connect, $delete_orderes);

if ($result) {
  header("Location:orderes.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($connect);
}

?>