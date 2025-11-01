<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //    $marks = 32;
    //    if($marks<=32){
    //     echo "Your GPA is (F)";
    //    }
    //    else{
    //     echo "Not correct value!"; 
    //    }

    &marks = 89;
    if(&marks <- 32){
        echo "Your GPA is (F)";
    }elseif(&marks >= 33){
        echo "Your GPA is (D)";
    }elseif(&marks >= 40){
        echo "Your GPA is (C)";
    }elseif(&marks >= 50){       
        echo "Your GPA is (B)";
    }elseif(&marks >= 60){
        echo "Your GPA is (A-)";
    }elseif(&marks >= 70){
        echo "Your GPA is (A)";
    }elseif(&marks >= 80){
        echo "Your GPA is (A+)";
    }else{
        echo "Invalid Marks!";
    ?>
</body>
</html>