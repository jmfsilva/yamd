<?php $preTitle = "Home"; ?>
<?php require './parts/header.php'; ?>
<div class="container">
  <div class="row text-center">
    <?php
    $artists = $music_service->getTopArtists(1, 12);
    foreach($artists as $artist) {
    ?>
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card h-100">
        <img src="<?php echo $artist->getImage(); ?>" class="card-img-top" alt="<?php echo $artist->getName(); ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $artist->getName(); ?></h5>
          <p class="card-text">Listeners <?php echo $artist->getListeners(); ?></p>
          <a href="<?php echo $artist->getUrl(); ?>" class="btn btn-primary">Artist</a>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>

<?php require './parts/footer.php'; ?>