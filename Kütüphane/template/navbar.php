<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">Kütüphane Otomasyonu</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Anasayfa <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item active">
		<a class="nav-link" href="index.php?sayfa=insert">Kitap Kayıt</a>
		</li>
		<li class="nav-item active">
		<a class="nav-link" href="">Kitap Listesi</a>
		</li>
		<li class="nav-item active">
		<a class="nav-link" href="">Rapor</a>
        </li>
		<li class="nav-item active">
		<a class="nav-link" href="contact.php">İletişim</a>
		</li>
		
      </ul>

        <ul class="navbar-nav ml-auto">
		
		 <a type="button" class="btn btn-success" href="index.php?sayfa=giris">Giriş Yap</a>
         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kayitol">Kayıt Ol</button>


        </ul>
      <!--<form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Aranacak Kelime">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
      </form>-->
    </div>
</nav>

<div class="modal fade" id="kayitol" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Ücretsiz Kayıt OL</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="kaydet.php" method="POST">
								<label>Kullanıcı Adı</label>
								<input class="form-control" type="text" name="kadi">
								<label>Mail Adresi</label>
								<input class="form-control" type="text" name="adres">
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="pw">
								<br>
								<input type="hidden" name="submit" value="1">
								<button type="submit" class="btn btn-success">Kayit Ol</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>
<!-- Modal Üye Girişi -->
<div class="modal fade" id="uyegiris" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Giriş Yap</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<form action="giris.php" method="POST">
								<label>Kullanıcı Adınız</label>
								<input class="form-control" type="text" name="kadi">
								<label>Şifreniz</label>
								<input class="form-control" type="password" name="pw">
								<br>
								<button type="submit" class="btn btn-primary">Giriş Yap</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
							</form>
						</div>
					</div>
				</div>
			</div>	
		</div>  