<?php
  $sorgu=$db->prepare('DELETE FROM dbkutuphane WHERE id=?');
  $sorgu->execute([
    $_GET['id']

  ]);
  header('Location:index.php');
?>