<?php
session_start();
include "koneksi.php";
if (isset($_POST['insert'])) {
	$vote = $_POST['vote'];	

	$insert= mysqli_query($koneksi,"INSERT INTO TBL_VOTE(id_vote,jumlah,id_paslon) values ('','$vote','1')");
	header("Location:view.php");

}else{

	echo "gagal";
}
