<h1>Animals with keepers</h1>
<div class="card-group">  
<?php
while ($animal = $aniamls->fetch_assoc()) {
  ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $animal['animal_name'];?></h5>
      <p class="card-text">
  <?php
  $keepers = selectKeeperbyAnimal($animal['animal_id']);
  while ($keeper = $keeper->fetch_assoc()) {
    ?>
      <?php
  }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Species: <?php echo $animal['species_name']; ?></small></p>
    </div>
  <?php
}
?>
</div>
  
