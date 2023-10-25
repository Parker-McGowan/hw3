<?php
require_once("util-db.php");
require_once("model-keeper.php");

$pageTitle = "Keeper";
include "view-header.php";

if (isset($_POST['actionType'])) {
switch ($_POST['actionType']) { 
  case "Add":
    if (insertKeeper($_POST['kFirst'], $_POST['kLast'], $_POST['kContact'])) {
     echo '<div class="alert alert-success" role="alert">Keeper added.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Edit":
    if (updateKeeper($_POST['kFirst'], $_POST['kLast'], $_POST['kContact'], $_POST['kid'])) {
     echo '<div class="alert alert-success" role="alert">Keeper edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
   case "Delete":
    if (deleteKeeper($_POST['kid'])) {
     echo '<div class="alert alert-success" role="alert">Keeper deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
  }
}
$keepers = selectKeeper();
include "view-keeper.php";
include "view-footer.php";
?>
