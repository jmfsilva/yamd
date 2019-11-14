<?php $preTitle = "Home"; ?>
<?php require './parts/header.php'; ?>
<?php
$artists = $music_service->getTopArtists(1, 12);

foreach($artists as $artist) {
?>
<div class="card" style="width: 18rem;">
  <img src="<?php echo $artist->getImage(); ?>" class="card-img-top" alt="<?php echo $artist->getName(); ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $artist->getName(); ?></h5>
    <p class="card-text">Listeners <?php echo $artist->getListeners(); ?></p>
    <a href="<?php echo $artist->getUrl(); ?>" class="btn btn-primary">Artist</a>
  </div>
</div>
<?php
}
?>

<?php require './parts/footer.php'; ?>