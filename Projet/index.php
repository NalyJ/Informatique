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
    <script type="text/javascript" src="puzzle.js"></script>
  </head>

<body>
	<h1>Le Taquin</h1>
	<hr>

	<h2>Type d'image :</h2>
  <form action="puzzle.php" methode="get">

<?php
	foreach ( $array as $puzzle ) {
?>

	<div class="small">

			<img id="image" src="<?= "$puzzle/image.jpeg" ?>" alt="Image" onclick="select()"/>
      <input type="radio" name="image" value="<?= "$puzzle" ?>" checked />
      <label><?= file_get_contents("$puzzle/title.txt") ?></label>
	</div>
<?php } ?>

<div id="choix" >
  <h2> Choisissez la taille de la grille :
    <div id="example"> par exemple: une grille de 4 cases (2x2) </div></h2>

  <input type="radio" name="dimension" value="2x2" checked />
  <label>2x2</label>
  <input type="radio" name="dimension" value="3x3" />
  <label>3x3</label>
  <input type="radio" name="dimension" value="4x4" />
  <label>4x4</label>
  </div>

<input id="bouton" type="submit" value="Start"  />

</form>
</body>
</html>
