<h1>Keepers</h1>
<div class="table-responsive">
  <table class="table">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script> 
    const mixedChart = new Chart(ctx, {
    data: {
        datasets: [{
            type: 'bar',
            label: 'Bar Dataset',
            data: [10, 20, 30, 40]
        }, {
            type: 'line',
            label: 'Line Dataset',
            data: [50, 50, 50, 50],
        }],
        labels: ['January', 'February', 'March', 'April']
    },
    options: options
});
      </script>
 
<thead>
  <tr>
    <th>ID</th>
    <th>First_Name</th>
  <th>Last_Name</th>
    <th>Contact</th>
    <th></th>
  </tr>
  
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
