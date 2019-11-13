<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>first php</h1>
    <?php
    // $color = 'green';
    // echo 'hello php '.$color.'<br/>';
    // echo 'hello world<br/>';

    // if(1>2){
    //     echo 'hello yang';
    // }else{
    //     echo 'hello lu';
    // }

    $x = 5;
    function test(){
        global $x;

        static $n = 0;

        $y = 10;

        $n++;

        echo 'x: '.$x.'<br/>';

        echo 'y: '.$y.'<br/>';

        echo $n.'<br />';
    };

    test();

    test();

    test();

    echo 'y:'.$y.'';


?>
</body>
</html>