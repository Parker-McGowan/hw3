<h1>Animals</h1>
<div class="table-responsive">
  <table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Office</th>
  </tr>
  <thead>
    <tbody>
      <?php
while ($animal = $aniamls->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $animal['animal_id']; ?><</td>
    <td><?php echo $animal['animal_name']; ?><</td>
    <td><?php echo $animal['species_name']; ?><</td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>