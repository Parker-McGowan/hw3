<h1>Animals</h1>
<div class="table-responsive">
  <table class="table">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
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
