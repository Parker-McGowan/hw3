<div class ="row">
  <div class = "col">
<h1>Habitat</h1>
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
    <th>Type</th>
    <th></th>
  </tr>
  <thead>
    <tbody>
      <?php
while ($habitat = $habitats->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $animal['habitat_id']; ?><</td>
    <td><?php echo $animal['habitat_name']; ?><</td>
    <td><?php echo $animal['habitat_type']; ?><</td>
      <td>
        <?php
  include "view-animals-editform.php";
  ?>
      </td>
      <td>
        <form method="post" action="habitat-by-animal.php" >
          <input type = "hidden" name = "hid" value = "<?php echo $habitat['habitat_id']; ?>">
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
