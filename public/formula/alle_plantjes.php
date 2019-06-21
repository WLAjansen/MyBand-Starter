<?php 
include 'header.php';
?>
<!doctype html>
<html lang="en">
    <section class="content">
        <h1>Alle plantjes</h1>
        <p>Hieronder zie je alle plantjes die ooit zijn ontdekt door mij.</p>

		<?php

        $statement = get_all_plants();

		foreach ( $statement as $plantje ):?>
            <div class="plantje">
                <h2><?php echo $plantje['titel'] ?> <em><?php echo $plantje['beschrijving'] ?></em></h2>
                <img src="<?php echo $plantje['image']?>" width="300" height="300"/>
                <p>
                    Gevonden op <?php echo $plantje['datum'] ?> geplaatst door <?php echo $plantje['auteur'] ?> Tags: <?php echo $plantje['keywords']; ?><br/>
                    <a href="http://maps.google.com/maps?z=12&t=m&q=<?php echo $plantje['latitude'] ?>,<?php echo $plantje['longitude'] ?>" target="_blank">Bekijk de vindplaats op Google Maps</a>
                </p>
            </div>
		<?php endforeach; ?>

    </section>
    <?php 
include 'footer.php';
?>
</div>
</body>
</html>
