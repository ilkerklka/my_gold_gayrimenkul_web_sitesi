<?php
include("ayar.php");

?>


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
          <a class="nav-link active" href="kiralik.php">kiralık daire</a>
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

<table style=" text-align: center; border-radius: 30px; ; border: 2px black solid; margin: 5px;">
<tr>
  <th style="border: 1px black solid; padding: 15px;">ID</th>
  <th style="border: 1px black solid; padding: 15px;">Adres Başlığı</th>
  <th style="border: 1px black solid; padding: 15px;">Adres</th>
  <th style="border: 1px black solid; padding: 15px;">Fiyat</th>
  <th style="border: 1px black solid; padding: 15px;">Oda Sayısı</th>
  <th style="border: 1px black solid; padding: 15px;">m <sup>2</sup> </th>
  <th style="border: 1px black solid; padding: 15px;">Eşya Durumu</th>
  <th style="border: 1px black solid; padding: 15px;">Banyo Sayısı</th>
  <th style="border: 1px black solid; padding: 15px;">Bina Yaşı</th>
  <th style="border: 1px black solid; padding: 15px;">Isıtma</th>
  <th style="border: 1px black solid; padding: 15px;">Asansör Durumu</th>
  <th style="border: 1px black solid; padding: 15px;">Kat</th>
  <th style="border: 1px black solid; padding: 15px;">Bulunduğu Kat</th>
  <th style="border: 1px black solid; padding: 15px;">Aidat</th>
  <th style="border: 1px black solid; padding: 15px;">Balkon Durumu</th>
  <th style="border: 1px black solid; padding: 15px;">Resimler</th>
</tr>
<?php
$formSorgu = $baglan->prepare("SELECT * FROM satilik ORDER BY ID ASC");
$formSorgu->execute();

while ($form = $formSorgu->fetch(PDO::FETCH_ASSOC)) {?>
    
      <tr>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["ID"] ?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["AdresBasligi"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["Adres"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["Fiyat"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["OdaSayisi"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["metrekare"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["EsyDurumu"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["BanyoSayisi"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["BinaYasi"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["Isitma"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["AsansorDurumu"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["Kat"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["BulunduguKat"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["Aidat"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["BalkonDurumu"]?></td>
        <td style="border: 1px black solid; padding: 15px;"><?php echo $form["resimler"]?></td>
      </tr>
    
<?php  }?>
</table>
<form action="" method="POST">
<div style="margin-left: 550px; margin-top: 50px;">
          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input name="sil" type="number" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Silmek İçin "ID" Yazınız</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">

            <!-- Submit button -->
            <button type="submit" class="btn btn-dark mb-4">
              Sil
            </button>
          </div>
          </div>
          </form>
</body>

<?php
include("ayar.php");
  
$ID = @$_POST["sil"];


$save = $baglan->prepare("DELETE FROM satilik WHERE 
  ID =:ID"
);

$insert = $save->execute(array(
  "ID"   => $ID
));

if ($insert) {
  echo "Silme işleminden sonra tekrar -Satılık İlan Sil- Bölümüne gidiniz ";
}else {
  echo "Hata Var";
};
?>

</html>
