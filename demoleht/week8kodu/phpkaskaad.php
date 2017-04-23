<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Kaskaad läbi PHP</title>
    <?php
    $sample="Sellest saab kujundatud tekst";
    $backcolor="#F0F0F0";
    $border="2";
    $borderradius="0";
    $textsize="12";
    $textcolor="#000000";
    if (isset($_POST['sampleText']) && $_POST['sampleText']!="") {
        $sample=htmlspecialchars($_REQUEST['sampleText']);
    }
    if (isset($_POST['backColor']) && $_POST['backColor']!="") {
        $backcolor=htmlspecialchars($_REQUEST['backColor']);
    }
    if (isset($_POST['borderSize']) && $_POST['borderSize']!="") {
        $border=htmlspecialchars($_REQUEST['borderSize']);
    }
    if (isset($_POST['slaider']) && $_POST['slaider']!="") {
        $borderradius=htmlspecialchars($_REQUEST['slaider']);
    }
    if (isset($_POST['textSize']) && $_POST['textSize']!="") {
        $textsize=htmlspecialchars($_REQUEST['textSize']);
    }
    if (isset($_POST['textColor']) && $_POST['textColor']!="") {
        $textcolor=htmlspecialchars($_REQUEST['textColor']);
    }
    ?>
    <style>
        .tulemus {
            align-items: center;
            height: 200px;
            width: 400px;
            font-family: 'Monospaced', cursive;
            background-color: <?php echo $backcolor;?>;
            color: <?php echo $textcolor;?>;
            border: <?php echo $border;?>px solid black;
            font-size: <?php echo $textsize;?>px;
            border-radius: <?php echo $borderradius;?>px;
        }
    </style>
</head>
<body>
<form action="phpkaskaad.php" method="post">
    <input type="text" name="sampleText" placeholder="Trüki teksti"><br>
    Tausta värv: <input type="color" name="backColor" value="#FFFFFF"><br>
    <input type="text" name="borderSize" placeholder="Raami paksus"><br>
    <input type="text" name="textSize" placeholder="Teksti suurus"><br>
    Teksti värv: <input type="color" name="textColor" value="#000000"><br>
    Piirjoone raadius: <input type="range" name="slaider" min="0" max="10" value="0"><br>
    <input type="submit" name="changeData" value="Muuda">
</form>
<div class="tulemus">
    <?php echo $sample;?>
</div>
</body>
</html>