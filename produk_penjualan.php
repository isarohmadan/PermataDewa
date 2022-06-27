
<?php 
if (!isset($_GET['items'])) {
  header("location: home.php");
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/produk.css">
    <link rel="stylesheet" href="asset/main.css">
    <link rel="stylesheet" href="view/asset/produk.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"><link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    
      <?php 
        switch ($_GET['items']) {
          case 'solar_tracking':
              include '../PermataDewa/view/produk_penjualan/solar.php';
            break;
          
            case 'Panel_vfd':
              include '../PermataDewa/view/produk_penjualan/vfd.php';
            break;
            case 'perbaikan_panel':
              include '../PermataDewa/view/produk_penjualan/perbaikan_panel.php';
            break;
            case 'rewinding':
              include '../PermataDewa/view/produk_penjualan/rewinding.php';
            break; 
            case 'produk_inovatif':
              include '../PermataDewa/view/produk_penjualan/produk_inovatif.php';
            break;
            case 'problem':
              include '../PermataDewa/view/produk_penjualan/problem.php';
            break;
        }
      ?>
  </body>
</html>
