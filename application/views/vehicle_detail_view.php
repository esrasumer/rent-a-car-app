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
    <div class="container-fluid bg-success">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="btn btn-success" href="home">Anasayfa</a>
                <a class="btn btn-success" href="home/about">Hakkımızda</a>
                <a class="btn btn-success" href="vehicle">Araçlar</a>
                <a class="btn btn-success" href="home/contact">İletişim</a> 
            </div>
        </div>
    </div>    

    <div class="jumbotron text-center">
        <h1>Sakarya Bip Oto</h1>
        <h5>[Sakarya'nın ilk online araç kiralama sitesi]</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Araçlarımız</h3>  
            </div>
            
            <div class="col-md-6">
                <img src="arac_resimleri/<?=$arac->arac_id?>.jpg" class="img-fluid rounded">
            </div>

            <div class="col-md-6">
                <table class="table">
                    <tr>
                        <td>ARAC ID</td>
                        <td>:</td>
                        <td><?=$arac->arac_id?></td>
                    </tr>

                    <tr>
                        <td>MARKA</td>
                        <td>:</td>
                        <td><?=$arac->marka?></td>
                    </tr>
                    <tr>
                        <td>MODEL</td>
                        <td>:</td>
                        <td><?=$arac->model?></td>
                    </tr>
                    <tr>
                        <td>MODEL YILI</td>
                        <td>:</td>
                        <td><?=$arac->model_yili?></td>
                    </tr>
                    <tr>
                        <td>VİTES</td>
                        <td>:</td>
                        <td><?=$arac->vites?></td>
                    </tr>
                    <tr>
                        <td>YAKIT</td>
                        <td>:</td>
                        <td><?=$arac->yakit?></td>
                    </tr>
                    <tr>
                        <td>FİYAT</td>
                        <td>:</td>
                        <td><?=$arac->fiyat?> TL</td>
                    </tr>
                    <tr>
                        <td>MÜSAİT Mİ</td>
                        <td>:</td>
                        <td><?=$arac->musait_mi=='E' ? 'EVET':'HAYIR' ?></td>
                    </tr>
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