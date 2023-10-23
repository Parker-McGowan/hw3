<h1>Animal by keeper</h1>
<div class="table-responsive">
  <table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Species_Name</th>
    <th>Keeper_id</th>
  </tr>
  <thead>
    <tbody>
      <?php
while ($animal = $animals->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $animal['animal_id']; ?><</td>
    <td><?php echo $animal['animal_name']; ?><</td>
    <td><?php echo $animal['species_name']; ?><</td>
    <td><?php echo $animal['keeper_id']; ?><</td>

  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
