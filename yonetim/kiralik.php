
<?php
error_reporting(0);?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
    <meta name="google-site-verification" content="Q5F3fwZNK83xOyNS49QMVuYKWDPHPG0ncwnKk0KafCM" />
    <meta name="robots" content="index,follow"/>
    <meta name="description" content="MY GOLD Emlak Aydın'ın altın yüzü "/>
    <link rel="stylesheet" href="../style.css">
    <!--ANİMATE-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--ANİMATE-->
    <!--favicon-->
    <link rel="shortcut icon" href="../favicon.ico">
    <!--favicon-->
    <!--BOOSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--BOOSTRAP-->
    <!--MDB-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css"rel="stylesheet"/>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    <!--MDB-->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="anasayfa.php">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="kiralik.php">Kiralık Daire</a>
        </li>

       
        <li class="nav-item">
          <a class="nav-link active"
           href="kiralikdetay.php" >Kiralık İlan Sil</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active"
           href="satilik.php" >Satılık Daire</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active"
           href="satilikdaire.php" >Satılık İlan Sil</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active"
           href="../mygoldemlak.zip" download >Kira Sözleşmesini İndirmek İçin</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link active"
           href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz ?')) return false;">Çıkış</a
          >
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>

<div style="position: absolute ;
   top: 80%; left: 50%;
    transform: translate(-50%,-50%); margin-top: 150px;">
<form action="" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    
      <div class="form-outline">
        <input type="text" name="AdresBasligi" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Adres Başlığı</label>
   
    </div>


  <!-- Text input -->
  <div class="form-outline mb-4">
    <input name="ID" type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Daire ID</label>
  </div>
 

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input name="Adres" type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Adres</label>
  </div>

  <!-- Email input -->
  

  <!-- Number input -->
  <div class="form-outline mb-4">
    <input name="Fiyat" type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">fiyat</label>
  </div>



  <div class="form-outline mb-4">
    <input name="OdaSayisi" type="text" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Oda Sayısı</label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" name="metrekare" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">m<sup>2</sup></label>
  </div>



  <div class="form-outline mb-4">
    <input type="text" name="EsyDurumu" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Eşya Durumu</label>
  </div>


  <div class="form-outline mb-4">
    <input type="number" name="BanyoSayisi" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Banyo Sayısı</label>
  </div>


  <div class="form-outline mb-4">
    <input type="number" name="BinaYasi" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Bina Yaşı</label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" name="Isitma" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Isıtma</label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" name="AsansorDurumu" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Asansör Durumu</label>
  </div>


  <div class="form-outline mb-4">
    <input type="number" name="Kat" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Kat</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="number" name="BulunduguKat" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Bulunduğu Kat</label>
  </div>

  
  <div class="form-outline mb-4">
    <input type="number" id="form6Example4" name="Aidat" class="form-control" />
    <label class="form-label" for="form6Example4">Aidat</label>
  </div>
    
  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" name="BalkonDurumu" class="form-control" />
    <label class="form-label" for="form6Example4">Balkon Durumu</label>
  </div>


  <div class="form-outline mb-4">
    <input type="text" id="form6Example4" name="resimler" class="form-control" />
    <label class="form-label" for="form6Example4">Resimler</label>
  </div>
  
  </div>

  

  
  <div class="form-outline mb-4">
  <!-- Submit button -->
  <button type="submit" class="btn btn-dark btn-block mb-4">Kaydet</button>
  </div>

</form>


</div>
<?php
include("ayar.php");

$AdresBasligi = @$_POST["AdresBasligi"];
$ID = @$_POST["ID"];
$Adres = @$_POST["Adres"];
$Fiyat = @$_POST["Fiyat"];
$OdaSayisi = @$_POST["OdaSayisi"];
$metrekare = @$_POST["metrekare"];
$EsyDurumu = @$_POST["EsyDurumu"];
$BanyoSayisi = @$_POST["BanyoSayisi"];
$BinaYasi = @$_POST["BinaYasi"];
$Isitma = @$_POST["Isitma"];
$AsansorDurumu = @$_POST["AsansorDurumu"];
$Kat = @$_POST["Kat"];
$BulunduguKat = @$_POST["BulunduguKat"];
$Aidat = @$_POST["Aidat"];
$BalkonDurumu = @$_POST["BalkonDurumu"];
$resimler = @$_POST["resimler"];

$save = $baglan->prepare("insert into kiralik set
ID =:ID,
AdresBasligi =:AdresBasligi,
Adres =:Adres,
Fiyat =:Fiyat,
OdaSayisi =:OdaSayisi,
metrekare =:metrekare,
EsyDurumu =:EsyDurumu,
BanyoSayisi =:BanyoSayisi,
BinaYasi =:BinaYasi,
Isitma =:Isitma,
AsansorDurumu =:AsansorDurumu,
Kat =:Kat,
BulunduguKat =:BulunduguKat,
Aidat =:Aidat,
BalkonDurumu =:BalkonDurumu,
resimler =:resimler
");

$insert = $save ->execute(array(
  "AdresBasligi" => $AdresBasligi,
  "ID" => $ID ,
  "Adres" => $Adres,
  "Fiyat" => $Fiyat,
  "OdaSayisi" =>$OdaSayisi,
  "metrekare" =>$metrekare,
  "EsyDurumu" =>$EsyDurumu,
  "BanyoSayisi" =>$BanyoSayisi,
  "BinaYasi" =>$BinaYasi,
  "Isitma" =>$Isitma,
  "AsansorDurumu" =>$AsansorDurumu,
  "Kat" =>$Kat,
  "BulunduguKat" =>$BulunduguKat,
  "Aidat" =>$Aidat,
  "BalkonDurumu" =>$BalkonDurumu,
  "resimler" =>$resimler
));

if ($insert) {
  echo "Form Başarıyla Kaydedildi...";
}else {
  
}
?>




</body>
</html>