<h1>Keepers</h1>
<div class="table-responsive">
  <table class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>First_Name</th>
  <th>Last_Name</th>
    <th>Contact</th>
    <th></th>
  </tr>
  
data = {
    datasets: [{
        data: [10, 20, 30]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
        'Red',
        'Yellow',
        'Blue'
    ]
};
  <thead>
    <tbody>
      <?php
while ($keeper = $keepers->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $keeper['keeper_id']; ?></td>
    <td><?php echo $keeper['first_name']; ?></td>
      <td><?php echo $keeper['last_name']; ?></td>
    <td><?php echo $keeper['contact']; ?></td>
    <td><a href="animals-by-keepers.php?id=<?php echo $keeper['keeper_id']; ?>">Animals</a></td>
  </tr>
  <?php
}
?>
    </tbody>
  </table>
</div>
