<?php

$connect=mysqli_connect("localhost","root","root");
$db=mysqli_select_db($connect,'dbkutuphane');

if(isset($_POST['updatedata'])){
    
    $id = intval($_POST['update_id']);
    $kitapAdi=$_POST['kitapAdi'];
    $yazar=$_POST['yazar'];
    $sayfaSayisi=$_POST['sayfaSayisi'];
    $stok=$_POST['stok'];

    if($id>0){
    $query="UPDATE dbkutuphane SET kitapAdi='$kitapAdi',yazar='$yazar',sayfaSayisi='$sayfaSayisi',stok='$stok' WHERE id='$id'";
    
    $query_run=mysqli_query($connect,$query);
    if($query_run){
        echo '<script> alert("Güncelleme başarılı");</script>';
        header("Location:index.php");
    }
    else{
        echo "hata";
        //echo '<script> alert("Güncelleme başarısız");</script>';
    }
    }

}



?>