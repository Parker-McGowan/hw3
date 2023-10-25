<div class ="row">
  <div class ="col">
  <h1>Animals</h1>
  </div>
  <div class="col-auto">
   <?php
include "view-animals-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Species</th>
    <th></th>
  </tr>
  <thead>
    <tbody>
      <?php
while ($animal = $animals->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $animal['animal_id']; ?></td>
    <td><?php echo $animal['animal_name']; ?></td>
    <td><?php echo $animal['species_name']; ?></td>
    <td>
<form method="post" action="habitat-by-animal.php">
<input type="hidden" name="aid" value="<?php echo $animal['animal_id']; ?>">
<button type="submit" class="btn btn-primary">Habitat</button>
</form>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
