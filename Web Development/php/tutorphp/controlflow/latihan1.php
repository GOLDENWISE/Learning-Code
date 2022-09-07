<?php
//pengulangan
//for
for( $i=0; $i<5; $i++ ) {
    echo "perulangan for $i <br>";
}

//while
$j = 0;
while( $j < 5 ) {
    echo "perulangan while $j <br>";
    $j++;
} 

//do...while
$k = 0;
do {
    echo "perulangan do while $k <br>";
    $k++;
} while ( $k < 5 );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
    <style>
        .ganjil {
            background-color: red;
            color: blue;
        }
        .genap {
            background-color: blue;
            color: red;
        }
    </style>
</head>
<body>
    <!--implementasi perulangan dan pengondisian-->
    <!--perulangan for dan pengondisian if pada html-->   
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 3; $i++ ) : ?>
            <tr>
                <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                    <?php if(($i % 2 == 0) || ($j % 2 == 0)) :?>    
                        <!--selain menggunakan echo, untuk mencetak tulisan ke layar juga bisa menggunakan syntax seperti dibawah?>-->
                        <td class="genap"><?= "$i, $j"; ?></td>
                    <?php else : ?>
                        <td class="ganjil"><?= "$i, $j"; ?></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <?php
        //pengondisian
        //if else
        $x = 10;
        if( $x < 20 ) {
            echo "$x lebih kecil dari 20";
        } else {
            echo "$x lebih besar atau sama dengan 20";
        }
        echo "<br>";
        //if  else if  else
        $x = 20;
        if( $x < 20 ) {
            echo "$x lebih kecil dari 20";
        } else if( $x === 20 ) {
            echo "$x sama dengan 20";
        } else {
            echo "$x lebih besar dari 20";
        }
        echo "<br>";
        //ternary
        $i = 11;
        $j = $i > 10 ? "$i lebih besar dari 10" : "$i lebih kecil atau sama dengan 10";
        echo $j;
        echo "<br>";
        //switch case
        $i = 3;
        switch( $i ) {
            case 1 : echo "ini angka 1";
            break;
            case 2 : echo "ini angka 2";
            break;
            default: echo "bukan angka 1 dan 2";
        }
    ?>
</body>
</html>