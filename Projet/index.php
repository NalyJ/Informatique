<?php
    $array = glob("puzzle/*");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title>Le Taquin</title>
		<meta name="author" content="Marc Gaetano">
		<link type="text/css" rel="stylesheet" href="../css/tp2.css" />
    <link type="text/css" rel="stylesheet" href="puzzle.css" />
  </head>

<body>
	<h1>Le Taquin</h1>
	<hr>

	<h2>Type d'image :</h2>

<?php
	foreach ( $array as $puzzle ) {
?>
	<div class="small">
		<a href="puzzle.php?puzzle=<?= basename($puzzle) ?>">
			<img src="<?= "$puzzle/image.jpeg" ?>" alt="Image" />
		</a>
		<h3><?= file_get_contents("$puzzle/title.txt") ?></h3>
	</div>
<?php } ?>


  <h2> Choisissez la taille de la grille : (par exemple: 2x2 3x3 4x4)</h2>
  <p id="taillegrille">
    <input type="text" name="chiffre1" id="chiffre1" /> x <input type="text" name="chiffre2" id="chiffre2" />
  </p>
  <p>
      <input id="bouton" type="button" value="Start" onclick="valider();" />
  </p>


</body>
</html>
