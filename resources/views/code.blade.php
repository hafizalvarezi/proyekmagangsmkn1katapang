<?php
session_start();
$con = mysqli_connect("localhost","root","","siswa");

if(isset($_POST['save_radio']))
{
    $name  = $_POST['nama'];
    $gender  = $_POST['jkel'];

    $query = "INSERT INTO demo (nama,jkel) VALUES ('$nama','$jkel')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: daftar.blade.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: daftar.blade.php");
    }
}
?>