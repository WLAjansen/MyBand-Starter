<?php include 'header.php';?>
<div class="hero-image-cars"></div>
<section class="content1">
    <h1 class="mini1">Zoekresultaten</h1>
    <p class="mini2">Er zijn <?php echo count($zoekresultaten)?> zoekresultaten voor "<?php echo $searchterm; ?>"</p>

  <?php foreach($zoekresultaten as $result):?>
    <div class="result result-<?php echo $result ['type']?>">
    <h2><?php echo $result['title']?> (<?php echo $result['type']?></h2>
    <p><?php echo $result['description']?></p>
  <?php endforeach;?>

</section>
<?php include 'footer.php';?>
