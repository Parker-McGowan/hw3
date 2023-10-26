<?php
require_once("util-db.php");
require_once("model-habitat-by-animal.php");

$pageTitle = "Habitat by Animal";
include "view-header.php";

if (isset($_POST['actionType'])) {
switch ($_POST['actionType']) { 
  case "Add":
    if (insertHabitatbyAnimal($_POST['hName'], $_POST['hType'])) {
     echo '<div class="alert alert-success" role="alert">Habitat added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Edit":
    if (updateHabitatbyAnimal($_POST['hName'], $_POST['hType'], $_POST['hid'])) {
     echo '<div class="alert alert-success" role="alert">Habitat edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Delete":
    if (deleteHabitatbyAnimal($_POST['hid'])) {
     echo '<div class="alert alert-success" role="alert">Habitat deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
  }
}

$habitats = selectHabitatbyAnimal($_POST['aid']);
include "view-habitat-by-animal.php";
include "view-footer.php";
?>
