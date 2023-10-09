<h1>Keppers</h1>
<div class="table-responsive">
  <table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>First_Name</th>
  <th>Last_Name</th>
    <th>Contact</th>
  </tr>
  <thead>
    <tbody>
      <?php
while ($keepers = $keepers->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $keeper['keeper_id']; ?><</td>
    <td><?php echo $keeper['first_name']; ?><</td>
      <td><?php echo $keeper['last_name']; ?><</td>
    <td><?php echo $keeper['contact']; ?><</td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
