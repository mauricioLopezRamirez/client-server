<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <span>Hello from <b><em>PHP/HTML</em></b></span>
    <?php
        $outcome = 0;
        $img = "";
        $happy = "https://upload.wikimedia.org/wikipedia/commons/8/88/Yellow_Happy.jpg";
        $unhappy = "https://upload.wikimedia.org/wikipedia/commons/3/37/Frowny.svg";
        $n1 = $_REQUEST["n1"];
        $n2 = $_REQUEST["n2"];
        $operator = $_REQUEST["operator"];
        switch ($operator) {
            case 's':
                $outcome = $n1 + $n2;
                break;
            case 'r':
                $outcome = $n1 - $n2;
                break;
            case 'm':
                $outcome = $n1 * $n2;
                break;
            case 'd':
                $outcome = $n1 / $n2;
                break;
        }
   
        if($outcome > 0){
            $img = $happy;
        }
        else {
            $img = $unhappy;
        }
    ?>
    <div>
        <span>La suma es: <b><?php echo $outcome; ?></b></span>
    </div>    
    <div>
        <?php echo "<img src='".$img."' width='300'>"; ?>
    </div>    
</body>
</html>
