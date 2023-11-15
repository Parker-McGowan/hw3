<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keepers with Plotly Chart</title>
  <link rel="stylesheet" href="path/to/your/bootstrap/css/file.css"> <!-- Include your Bootstrap CSS file if not already included -->
  <!-- Include Plotly library -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
</head>
<body>

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
    </thead>
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

<!-- Your JavaScript code for the Plotly chart -->
<script>
  var trace1 = {
    x: [1, 2, 3, 4],
    y: [10, 15, 13, 17],
    mode: 'markers',
    type: 'scatter'
  };

  var trace2 = {
    x: [2, 3, 4, 5],
    y: [16, 5, 11, 9],
    mode: 'lines',
    type: 'scatter'
  };

  var trace3 = {
    x: [1, 2, 3, 4],
    y: [12, 9, 15, 12],
    mode: 'lines+markers',
    type: 'scatter'
  };

  var data = [trace1, trace2, trace3];

  // Create the Plotly chart in the specified div
  Plotly.newPlot('myDiv', data);
</script>

</body>
</html>
