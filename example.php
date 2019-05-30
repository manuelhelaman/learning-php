<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="uft-8">
    <title>Hola mundo</title>
    <link rel="stylesheet" href="styles/styles.scss">
</head>
<body>
    <div class="main-page-container" id="contenedor">

        <div class="header">
            <?php include("heading.php"); ?>
        </div>

        <div class="content-and-right-column-container" id="contenidoPrincipal">  

            <div class="left-column">
                <?php include("right_column.php"); ?>
            </div> 

            <?php include("content.php"); ?> 

        </div>

        <div class="footer">
            <?php include("footer.php"); ?>
        </div>
        
    </div>
</body>
</html>