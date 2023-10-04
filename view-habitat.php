<h1>Habitat</h1>
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
        <form method="post" action="habitat-by-animal.php" >
          <input type = "hidden" name = "cid" value = "<?php echo $animal['habitat_id']; ?>">
  <button type="submit" class="btn btn-primary">Habitats</button>
</form>
      </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
