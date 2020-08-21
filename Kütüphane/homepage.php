<?php require 'template/layout.php' ?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

<body>
    <!--##################### OPERATION START ####################################-->
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h3 class="text-center">-- Kütüphane Otomasyonu --</h3><br>
            </div>
            <div class="card">
                <div class="card-body">
                    <a href="index.php?sayfa=insert" class="btn btn-primary"  >
                        Kitap Ekle
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <?php
                    $conn = mysqli_connect("localhost", "root", "root");
                    $db = mysqli_select_db($conn, "dbkutuphane");

                    $query = "SELECT*FROM dbkutuphane";
                    $query_run = mysqli_query($conn, $query);
                    ?>
                    <table class="table tabler-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Kitap Adı</th>
                                <th scope="col">Yazar</th>
                                <th scope="col">Sayfa Sayısı</th>
                                <th scope="col">Stok</th>
                                <th scope="col">İşlemler</th>
                            </tr>
                        </thead>
                        <?php
                        if ($query_run) {
                            foreach ($query_run as $row) {
                        ?> <tbody>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['kitapAdi']; ?></td>
                                        <td><?php echo $row['yazar']; ?></td>
                                        <td><?php echo $row['sayfaSayisi']; ?></td>
                                        <td><?php echo $row['stok']; ?></td>
                                        <td>
                                            <button type="button" class="btn btn-primary editbtn">Düzenle</button>
                                            <a href="index.php?sayfa=delete&id=<?php echo $row['id']; ?>" onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-danger">SİL</a>
                                        </td>
                                    </tr>
                                </tbody>
                        <?php
                            }
                        } else {
                            echo 'Kayıt Yok';
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--##################### OPERATION END ####################################-->
    <!--MODAL EDIT START-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kitap Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="update.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id" value="1">
                        <div class="form-group">
                            <label>Kitap Adı</label>
                            <input type="text" name="kitapAdi" id="kitapAdi" class="form-control" placeholder="Kitap Adı">
                        </div>
                        <div class="form-group">
                            <label>Yazar</label>
                            <input type="text" name="yazar" id="yazar" class="form-control" placeholder="Yazar">
                        </div>
                        <div class="form-group">
                            <label>Sayfa Sayısı</label>
                            <input type="text" name="sayfaSayisi" id="sayfaSayisi" class="form-control" placeholder="Sayfa Sayısı">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="submit" name="updatedata" id="updatedata" class="btn btn-primary ">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--MODAL EDIT END-->

    <!--MODAL ADD START-->
    <div class="modal fade" id="kitapeklemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kitap Kayıt</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="insert.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="submt" id="submit">
                        <div class="form-group">
                            <label>Kitap Adı</label>
                            <input type="text" name="kitapAdi" id="kitapAdi" class="form-control" placeholder="Kitap Adı">
                        </div>
                        <div class="form-group">
                            <label>Yazar</label>
                            <input type="text" name="yazar" id="yazar" class="form-control" placeholder="Yazar">
                        </div>
                        <div class="form-group">
                            <label>Sayfa Sayısı</label>
                            <input type="text" name="sayfaSayisi" id="sayfaSayisi" class="form-control" placeholder="Sayfa Sayısı">
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--MODAL ADD END-->

</body>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $('.editbtn').on('click', function() {

            $('#editmodal').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            console.log(data);


            $('#update_id').val(data[0]);
            $('#kitapAdi').val(data[1]);
            $('#yazar').val(data[2]);
            $('#sayfaSayisi').val(data[3]);
            $('#stok').val(data[4]);

        });
    });
</script>

</html>