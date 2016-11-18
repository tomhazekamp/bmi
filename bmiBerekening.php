<?php
$gewicht = "";
$lengte = "";
if (isset($_POST["submit"])){
  $gewicht = $_POST["gewicht"];
  $lengte = $_POST["lengte"];
  echo "gewicht = $gewicht" . " ";
  echo "lengte = $lengte";

$bmi = $gewicht/($lengte*$lengte);

echo "bmi = $bmi";
} else {

}
?>
