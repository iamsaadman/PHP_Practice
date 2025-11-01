<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .box{
            padding : 10px 20px;
            margin: 5px 10px;
            float : left;
            display: block;
            font-size: 20px;
            font-weight: bold;
            background-color: green;
            color: white;
            border-radius : 10px;
        }
    </style>
</head>
<body>
    <?php
    // for ($i = 0; $i < 5; $i++) {
    //     echo "The number is: $i <br>";
    // }
    
    for ($i = 1; $i<= 10; $i++) {
        echo "<div class='box'>";
        for($j=1;$j<=10;$j++){
            $total = $i*$j;
            echo $i. 'x'.$j. '='.$total.'<br>';
        }
        echo "</div><br>";
    }

    ?>
</body>
</html>