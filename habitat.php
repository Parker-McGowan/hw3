<?php
require_once("util-db.php");
require_once("model-habitat.php";

$pageTitle = "Habitat";
include "view-header.php";

if (isset($_POST['actionType'])) {
switch ($_POST['actionType']) { 
  case "Add":
    if (insertHabitat($_POST['hName'], $_POST['htype'])) {
     echo '<div class="alert alert-success" role="alert">Habitat added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Edit":
    if (updateHabitat($_POST['hName'], $_POST['htype'], $_POST['hid'])) {
     echo '<div class="alert alert-success" role="alert">Habitat edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Delete":
    if (deleteHabitat($_POST['hid'])) {
     echo '<div class="alert alert-success" role="alert">Habitat deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
  }
}

$habitat = selectHabitat();
include "view-habitat.php";
include "view-footer.php";
?>
