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
    <style>
        .hata {
            color: red;
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-dark" href="admin">Anasayfa</a>
                <a class="btn btn-dark" href="adminVehicle">Araç Yönetimi</a>
                <a class="btn btn-dark" href="#">Kullanıcılar</a>
                <a class="btn btn-dark" href="#">Siparişler</a> 
                <a class="btn btn-dark" href="#">Oturumu Kapat</a> 
            </div>
        </div>
    </div>    

    <div class="jumbotron text-center">
        <h1>Sakarya Bip Oto</h1>
        <h5>[Sakarya'nın ilk online araç kiralama sitesi]</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Araç Resmi Ekleme Ekranı</h3>  
            </div>
            <div class="col-md-6 text-right">
                <a href="adminVehicle" class="btn btn-danger btn-sm">Geri Dön</a>  
            </div>

            <div class="col-md-6">
                <form action="adminVehicle/UploadImagePost" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>ARAC ID: <?=$arac_id?></label>
                        <input type="hidden" name="arac_id_" value="<?=$arac_id?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="file" name="resim" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Yükle" class="btn btn-dark btn-sm">
                        <span class="hata"><?=$uyari?></span>
                    </div>
                </form>
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