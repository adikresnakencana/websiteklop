<?php
session_start();
//koneksi database
$koneksi = mysqli_connect("localhost","root","","klopstore");
?>

<?php include 'include/navbar.php';?>
<?php include 'include/konten.php';?>
<?php include 'include/footer.php';?>