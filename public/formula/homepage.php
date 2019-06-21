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

		<?php
        $statement = get_all_plants();

        foreach ( $statement as $plantje ):?>
        <div class="row">
          <div class="column">
                <h2><?php echo $plantje['titel'] ?></h2>
                <img src="<?php echo $plantje['image']?>"/>
                <p>
                    Geplaatst op <?php echo $plantje['datum'] ?>
                    <?php echo $plantje['beschrijving'] ?> <?php echo $plantje['auteur']; ?><br/>
                </p>
            </div>
          </div>
		<?php endforeach; ?>
    </section>
</div>
<?php
include 'footer.php';
?>
</body>
</html>
