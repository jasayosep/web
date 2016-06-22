<?php
$koneksi=mysql_connect("localhost","root","allbase") or die("Tidak bisa konek");
if ($koneksi) 
{
	$db=mysql_select_db("web_ku");
	if (!$db) 
	{
		echo "Tidak ada database";
	}
}
else
{
	echo "Tidak dapat konek";
}

?>