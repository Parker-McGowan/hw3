<h1>Animals with keepers</h1>
<div class="card-group">  
<?php
while ($animal = $animals->fetch_assoc()) {
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $animal['animal_name'];?></h5>
      <p class="card-text">
  <ul class="list-group">
  <?php
  $keepers = selectAnimalByKeeper($animal['animal_id']);
  while ($keeper = $keepers->fetch_assoc()) {
    ?>
    <li class="list-group-item"><?php echo $animal['animal_id']; ?> - <?php echo $animal['animal_name']; ?> - <?php echo $animal['species_name']; ?></li>
      <?php
  }
  ?>
  </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Species: <?php echo $animal['species_name']; ?></small></p>
    </div>
  <?php
}
?>
</div>
  
