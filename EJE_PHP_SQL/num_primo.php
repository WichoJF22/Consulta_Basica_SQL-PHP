<html>
<head><title>Numeros Primos</title></head>
<body>
    <?php
    for($i=1;$i<=50;$i++){
        if($i%2!=0&&$i%3!=0&&$i%5!=0&&$i%7!=0||$i==2||$i==3||$i==5||$i==7){
            echo "$i <br>";
        }
    }
    ?>
    
    </body>
</html>