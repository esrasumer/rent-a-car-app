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
                <h3>Araçlarımız</h3>  
            </div>
            <div class="col-md-6 text-right">
                <a href="adminVehicle/add" class="btn btn-danger btn-sm">Araç Ekle</a>  
            </div>

            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Arac ID</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Model Yılı</th>
                        <th></th>
                    </tr>
                    <? foreach($araclar as $arac) { ?>
                    <tr>
                        <td>
                            <? if($arac->resim_var_mi=='E') { ?>
                            <img src="arac_resimleri/<?=$arac->arac_id?>.jpg" width="150" class="rounded">
                            <? } ?>
                        </td>
                        <td><?=$arac->arac_id?></td>
                        <td><?=$arac->marka?></td>
                        <td><?=$arac->model?></td>
                        <td><?=$arac->model_yili?></td>
                        <td>
                            <a href="adminVehicle/edit/<?=$arac->arac_id?>" class="btn btn-success btn-sm">Düzenle</a>
                            <a href="adminVehicle/delete/<?=$arac->arac_id?>" class="btn btn-success btn-sm" onclick="return confirm('Bu aracı silmek istiyor musunuz?')">Sil</a>
                            <a href="adminVehicle/UploadImage/<?=$arac->arac_id?>" class="btn btn-success btn-sm">Resim Ekle</a>
                        </td>
                    </tr>
                    <? } ?>
                </table>
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