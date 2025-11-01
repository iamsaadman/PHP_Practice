<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function personalInfo($name, $age) {
        // use interpolation to avoid concatenation/quoting issues
        echo "Name: $name And my age is $age Years old<br>";
        echo "Age: " . $age;
    }
    personalInfo("Saadman Sakib", 24);

    echo '<br>'. date("Y-m-d H:i:s");
    ?>
</body>
</html>