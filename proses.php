<?php
session_start();
include "koneksi.php";
if (isset($_POST['insert'])) {
	$vote = $_POST['vote'];	

	$insert= mysqli_query($koneksi,"INSERT INTO TBL_VOTE(id_vote,jumlah,id_paslon) values ('','$vote','2')");
	header("Location:view.php");

}else{

	echo "gagal";
}





// // $query= mysqli_query($koneksi,"SELECT nama_paslon,jumlah FROM tbl_vote INNER JOIN tbl_paslon USING (id_paslon) where id_paslon ='1'");

// 	$dat ="";
// 	$jumlah= $data+1;
// 	// $total=$jumlah+1;
// $insert= mysqli_query($koneksi,"INSERT INTO TBL_VOTE(id_vote,jumlah,id_paslon) values ('','','1')");
// 	



// 	header("Location: view.php");
