<?php require 'template/layout.php' ?>
<?php

if (isset($_POST['submit'])) {
    $kitapAdi = isset($_POST['kitapAdi']) ? $_POST['kitapAdi'] : null;
    $yazar = isset($_POST['yazar']) ? $_POST['yazar'] : null;
    $sayfaSayisi = isset($_POST['sayfaSayisi']) ? $_POST['sayfaSayisi'] : null;
    $stok = isset($_POST['stok']) ? $_POST['stok'] : null;

    if (!$kitapAdi) {
        echo '<p class="container">Kitap Adı gereklidir.</p>';
    } elseif (!$yazar) {
        echo 'yazar gereklidir';
    } else {
        $sorgu = $db->prepare('INSERT INTO dbkutuphane SET
        kitapAdi=?,
        yazar=?,
        sayfaSayisi=?,
        stok=?');

        $ekle = $sorgu->execute([
            $kitapAdi, $yazar, $sayfaSayisi, $stok
        ]);

        if ($ekle) {
            header('Location:index.php');
        } else {
            $hata = $sorgu->errorInfo();
            echo 'mysql hatası' . $hata[2];
        }
    }
}



?>


<div class="container ">

</div>

<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h3 class="text-center">Kitap Kayıt Formu</h3><br>
        </div>
        <div class="card" style="padding-left:300px ;">
            <div class="card-body">

                <form action="" method="POST">
                    Kitap Adı: <br>
                    <input type="text" style="width:400px" value="<?php echo isset($_POST['kitapAdi']) ? $_POST['kitapAdi'] : null; ?>" name="kitapAdi"><br><br>

                    Yazar: <br>
                    <input name="yazar" style="width:400px" value="<?php echo isset($_POST['yazar']) ? $_POST['yazar'] : null; ?>" cols="30" rows="10"><br><br>
                    Stok Sayısı: <br>
                    <input type="number" style="width:400px" value="<?php echo isset($_POST['stok']) ? $_POST['stok'] : null; ?>" name="stok"><br><br>
                    Sayfa Sayısı: <br>
                    <input type="number" style="width:400px" value="<?php echo isset($_POST['sayfaSayisi']) ? $_POST['sayfaSayisi'] : null; ?>" name="sayfaSayisi"><br><br>
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary" style="margin-left: 140px; width:120px">Kaydet</button>


                </form>

            </div>
        </div>
    </div>
</div>