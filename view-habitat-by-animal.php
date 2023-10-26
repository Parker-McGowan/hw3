<div class="row">
  <div class="col">
    <h1>Habitat by animal</h1>
  </div>
  <div class="col-auto">
  <?php
include "view-habitat-by-animal-newform.php";
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
    <th></th>
    <th></th>

  </tr>
  <thead>
    <tbody>
      <?php
while ($habitat = $habitats->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $habitat['habitat_id']; ?></td>
    <td><?php echo $habitat['habitat_name']; ?></td>
    <td><?php echo $habitat['habitat_type']; ?></td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
