<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=base_url()?>" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sakarya Bip Otomotiv</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <script src="assets/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-primary" href="admin">ANASAYFA</a>
                <a class="btn btn-primary" href="#">ARAÇLAR</a>
                <a class="btn btn-primary" href="#">KULLANICILAR</a>
                <a class="btn btn-primary" href="#">SİPARİŞLER</a> 
                <a class="btn btn-primary" href="#">ÇIKIŞ</a> 
            </div>
        </div>
    </div>    

    <div class="jumbotron text-center">
        <h1>Sakarya Bip Oto</h1>
        <h5>[Yönetim Paneli]</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h6>Araç Yönetimi</h6>
                Araçların eklenmesi ve araç bilgilerinin düzenlenmesini kapsar
                <hr>
                <a href="adminVehicle" class="btn btn-link btn-sm float-right">Git</a>
            </div>

            <div class="col-md-2">
                <h6>Kullanıcı Yönetimi</h6>
                Kullanıcıların takibi, rezervasyon durumları gibi işlemleri
                kapsar.
                <hr>
                <a href="#" class="btn btn-link btn-sm float-right">Git</a>
            </div>

            <div class="col-md-2">
                <h6>Sipariş Yönetimi</h6>
                Siparişlerin takibi, onaylanması ve iptali işlemlerini kapsar
                <hr>
                <a href="#" class="btn btn-link btn-sm float-right">Git</a>
            </div>

            <div class="col-md-6">
                <img src="assets/55.jpg" class="img-fluid">
            </div>
        </div>
    </div>    

    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12 text-center text-light">
                Bu site Sakarya MYO Bilgisayar Teknolojileri
                öğrencileri tarafından İnternet Programcılığı-1
                dersi için geliştirilmiştir.<br>
                Tüm hakları saklıdır (c) 2024
            </div>
        </div>        
    </div>
</body>
</html>