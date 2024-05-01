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
                <h3>Araç Düzenleme Ekranı</h3>  
            </div>
            <div class="col-md-6 text-right">
                <a href="adminVehicle" class="btn btn-danger btn-sm">Araç Ekle</a>  
            </div>

            <div class="col-md-6">
                <form action="adminVehicle/editPost" method="post">
                    <div class="form-group">
                        <label>ARAC ID: <?=$arac->arac_id?></label>
                        <input type="hidden" name="arac_id_" value="<?=$arac->arac_id?>">
                    </div>
                    <div class="form-group">
                        <label>Marka:</label>
                        <input type="text" name="marka_" value="<?=$arac->marka?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Model:</label>
                        <input type="text" name="model_" value="<?=$arac->model?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Model Yılı:</label>
                        <input type="text" name="model_yili_" value="<?=$arac->model_yili?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Vites:</label><br>
                        <input type="radio" name="vites_" value="Manuel" <?=$arac->vites=='Manuel' ? 'checked':null ?>> Manuel
                        <input type="radio" name="vites_" value="Otomatik" <?=$arac->vites=='Otomatik' ? 'checked':null ?>> Otomatik
                        <input type="radio" name="vites_" value="Tiptonik" <?=$arac->vites=='Tiptonik' ? 'checked':null ?>> Yarı Otomatik
                    </div>
                    <div class="form-group">
                        <label>Yakıt</label>
                        <select name="yakit_" class="form-control">
                            <option <?=$arac->yakit=='Benzin' ? 'selected':null ?>>Benzin</option>
                            <option <?=$arac->yakit=='Dizel' ? 'selected':null ?>>Dizel</option>
                            <option <?=$arac->yakit=='LPG' ? 'selected':null ?>>LPG</option>
                            <option <?=$arac->yakit=='Elektrik' ? 'selected':null ?>>Elektrik</option>
                            <option <?=$arac->yakit=='Hibrit' ? 'selected':null ?>>Hibrit</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fiyatı (TL):</label>
                        <input type="number" name="fiyat_" value="<?=$arac->fiyat?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Düzenle" class="btn btn-dark btn-sm">
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