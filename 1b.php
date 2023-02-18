<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1b.php</title>
</head>
<body>
    <?php 
    // 2 digit terakhir NPM
    $a = "09";
    // operasi matematika
    $b = "5";
    $c = "2";
    $d = "75";
    $e = "20";

    echo "Aku adalah angka <b>$a</b><br>";
    // dikali 5
    $x = $a*$b;
    echo "Jika aku dikali $b, maka aku sekarang menjadi <b>$x</b><br>";

    // dibagi 2
    $y = $a/$c;
    echo "Jika aku dibagi $c, maka aku sekarang menjadi <b>$y</b><br>";

    // ditambah 75
    $z = $a+$d;
    echo "Jika aku ditambah $d, maka aku sekarang menjadi <b>$z</b><br>";

    // dikurang 20
    $r = $a-$e;
    echo "Jika aku dikurang $e, maka aku sekarang menjadi <b>$r</b>";
     ?>
</body>
</html>
