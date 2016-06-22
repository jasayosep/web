<?php $thisPage = "Index"; ?>

<!DOCTYPE html>
<html>
   <link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Wellcome to My Web</title>
</head>
<body>
	<h1 align="center">My Portal Web</h1>
	<ul id="menu">
		<li <?php if($thisPage == "Index") {echo "class='active'";} ?>><a href="index.php">Home</a></li>
  		<li <?php if($thisPage == "Berita") {echo "class='active'";} ?>><a href="berita.php">Berita</a></li>
  		<li <?php if($thisPage == "Contact") {echo "class='active'";}?>><a href="">Contact</a></li>
	</ul>
	<h2>Halaman Utama</h2>
</body>
</html>
