<?php
include 'header.php';
?>
<!doctype html>
<html lang="en">
<div class="hero-image"></div>
<div class="text">
  <h1 class="mini1">Formula One</h1>
  <p class="mini2">The fastest cars in history</p>
</div>
    <section class="content">

      <?php foreach($zoekresultaten as $result):?>
        <div class="result result-<?php echo $result ['type']?>">
        <h2><?php echo $result['title']?> (<?php echo $result['type']?></h2>
        <p><?php echo $result['description']?></p>
      <?php endforeach;?>
    </section>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
