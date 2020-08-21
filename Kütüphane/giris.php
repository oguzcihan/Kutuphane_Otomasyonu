<?php require 'template/layout.php' ?>

<div class="container">
    <div class="jumbotron">
        <div class="card">
            <h3 class="text-center">-- GİRİŞ YAP --</h3><br>
        </div>
        <div class="card" style="padding-left:390px ;">
            <div class="card-body">
                <form action="" method="POST">
                    Kullanıcı Adı: <br>
                    <input type="text" style="width:300px"><br><br>
                    Şifre: <br>
                    <input name="yazar" style="width:300px"><br><br>
                    <input type="hidden" name="submit" value="1">
                    <button type="submit" class="btn btn-primary" style="margin-left: 80px; width:120px">Giriş</button>


                </form>

            </div>
        </div>
    </div>
</div>