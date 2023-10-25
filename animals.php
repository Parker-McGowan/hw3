<?php
require_once("util-db.php");
require_once("model-animals.php");

$pageTitle = "Animals";
include "view-header.php";

if (isset($_POST['actionType'])) {
switch ($_POST['actionType']) { 
  case "Add":
    if (insertAnimal($_POST['aName'], $_POST['aSpecies'], $_POST['aHabitatid'], $_POST['aKeeperid'])) {
     echo '<div class="alert alert-success" role="alert">Animal added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
  }
}
$animals = selectAnimal();
include "view-animals.php";
include "view-footer.php";
?>
