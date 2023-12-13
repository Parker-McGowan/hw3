<?php
require_once("util-db.php");
require_once("model-animals-with-keepers.php");

$pageTitle = "Animals with Keepers";
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
   case "Edit":
    if (updateAnimal($_POST['aName'], $_POST['aSpecies'], $_POST['aHabitatid'], $_POST['aKeeperid'], $_POST['aid'])) {
     echo '<div class="alert alert-success" role="alert">Animal edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Delete":
    if (deleteAnimal($_POST['aid'])) {
     echo '<div class="alert alert-success" role="alert">Animal deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
  }
}


$animals = selectAnimal();
include "view-animals-with-keepers.php";
include "view-footer.php";
?>
