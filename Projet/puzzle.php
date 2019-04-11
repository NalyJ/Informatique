<?php


	function extract_letter($s) { # puzzle/image1/part-b.jpeg
		$a = explode(".",basename($s));
		$a = explode("-",$a[0]);
		return $a[1];
	}


	$dimension=$_GET["dimension"];
	$puzzle = $_GET["image"];

	$array = glob("$puzzle/part-*.jpeg");
	shuffle($array);
	$title = file_get_contents("$puzzle/title.txt");
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
    <title>Le taquin</title>
	<meta name="author" content="Marc Gaetano">
	<link type="text/css" rel="stylesheet" href="../css/tp2.css" />
    <link type="text/css" rel="stylesheet" href="puzzle.css" />
    <script type="text/javascript" src="puzzle.js"></script>
  </head>

<body>
	<h1>Le Taquin</h1>
	<hr>

<h2><?= $title ?></h2>
<h3><?= $dimension ?></h3>


<img id="image" src="<?= $puzzle ?>/image.jpeg" />

<div id="puzzle">
	<div>
<?php
	for ( $i = 0; $i < count($array); $i++ ) {
		if ( $i > 0 && $i % 4 == 0 ) {
?>
	</div><div>
<?php
		}
?>
      <img name="<?= extract_letter($array[$i]) ?>" src="<?= $array[$i] ?>" />
<?php
	}
?>
	</div>
</div>

<div id="result">Bravo vous avez terminé le puzzle !!</div>

</body>
</html>
