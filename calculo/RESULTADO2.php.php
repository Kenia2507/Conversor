<?php  

    function convertidorE_P()
    {
        $C_euro = $_POST['Euro'];

        $Precio_p = 166386;

        $total = $C_euro * $Precio_p;

       $formato= number_format ($total, 2,'.',',');

        echo $formato;
    }
?>

<!doctype html>

<html>
<head>
<title>Convertir Moneda</title>
</head>
<body>
    
    <?php
    
    if($_POST["Euro"] == "")
    {
        echo 'Debe de introducir una cantidad.';
    }
    
    else
    {
    echo 'El total es de: ';    
    echo ConvertidorE_P(). ' pts';
    }
    ?>

    

</body>

</html>