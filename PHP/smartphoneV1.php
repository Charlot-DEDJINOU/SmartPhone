<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/jsV1.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrainement</title>
    <script type="text/javascript">
       function Initelement(){}
    </script>
</head>
<body onload="Initelement();">
    <div class="big-container">
    <div class="before-container">
      <span class="first-trait"></span>
      <span class="first-trait"></span>
    </div>
    <div class="container">
        <div class="header">
           <span class="header-rond"></span>
           <div class="beauty">
            <span class="beauty-rond"></span>
            <span class="beauty-trait"></span>
           </div>
        </div>
        <div class="body">
           <div class="heure-date">
              <div class="heure"><?php echo date('H:i');?></div>
              <span class="date"><?php echo date('l d F'); ?></span>
           </div>
        </div>
        <div class="footer">
             <a href=""><input type="button" class="footer-rond"></a>
        </div>
    </div>
</div>
</body>
</html>