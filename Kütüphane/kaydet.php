<?php 
    require 'baglan.php';
    

    if (isset($_POST['submit'])) {
        $kullaniciAdi = isset($_POST['kadi']) ? $_POST['kadi'] : null;
        $mailAdresi = isset($_POST['adres']) ? $_POST['adres'] : null;
        $sifre = isset($_POST['pw']) ? $_POST['pw'] : null;
    
        if (!$kullaniciAdi) {
            echo '<p class="container">Kullanıcı Adı yazınız.</p>';
        } elseif (!$mailAdresi) {
            echo 'mail adresi gereklidir';
        } else {
            $sorgu = $db->prepare('INSERT INTO kullanicilar SET
            kullaniciAdi=?,
            email=?,
            sifre=?');
    
            $ekle = $sorgu->execute([
                $kullaniciAdi, $mailAdresi, $sifre
            ]);
    
            if ($ekle) {
                header('Location:giris.php');
            } else {
                $hata = $sorgu->errorInfo();
                echo 'mysql hatası' . $hata[2];
            }
        }
    }

?>