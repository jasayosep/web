<?php

include "database.php";
$thisPage = "Berita";
?>
<!DOCTYPE html>
<html>
   <link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>Wellcome to My Web - <?php echo $thisPage ?></title>
</head>
<body>

	<h1 align="center">My Portal Web</h1>
	<ul id="menu">
		<li <?php if($thisPage == "Index") {echo "class='active'";} ?>><a href="index.php">Home</a></li>
  		<li <?php if($thisPage == "Berita") {echo "class='active'";} ?>><a href="berita.php">Berita</a></li>
  		<li <?php if($thisPage == "Contact") {echo "class='active'";}?>><a href="">Contact</a></li>
	</ul>

<?php
if(empty($_GET['id']))
{
?>
	<h2>List Berita</h2>
<?php
$q_list = "select id_berita,judul_berita from berita ORDER BY id_berita ASC";
$hasil_q_list = mysql_query($q_list);
while($tampil = mysql_fetch_array($hasil_q_list))
	{
		$judul = $tampil['judul_berita'];
		$id = $tampil['id_berita'];
		echo '<a href="berita.php?id='.$id.'">'.$judul.'</a>';
		echo '<hr>';
	}
}
else if (isset($_GET['id']))
{
	$id = mysql_real_escape_string($_GET['id']);
	$q_berita_lengkap = "select * from berita where id_berita=$id";
	$hasil_get = mysql_fetch_array(mysql_query($q_berita_lengkap));
	echo '<h2>'.$hasil_get['judul_berita'].'</h2>';
	echo '<p>'.$hasil_get['isi_berita'].'</p>';
	echo (mysql_error());
}
?>
</body>
</html>