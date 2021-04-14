<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data["page_tag"]?></title>
</head>
<body>

<?php 
  
  dep($data);

?>
<h2>Bienvenido a mi tienda virtual</h2>


<?php echo SMONEY.formatMoney(1000000); ?>

<?php date_default_timezone_set(); ?>
    
</body>
</html>