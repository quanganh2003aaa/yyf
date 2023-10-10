<?php
    session_start();
    echo "<pre>";
    // session_destroy();

    //check session
    if ($_SESSION) {
        $productOder = $_SESSION['product'];
        echo "if<br>";
    }
    else{
        $productOder = [];
        echo "else<br>";
    }

    var_dump($productOder);

    $soid=count($productOder);
    $item['id'] = $_POST['id'];
    $item['soluong'] = $_POST['soluong'];

    if($soid==0){
        array_push($productOder, $item);
        $_SESSION['product'] = $productOder;
    }
    else{
        $checkid=0;
        for ($i=0; $i < $soid; $i++) { 
            if($productOder[$i]['id'] == $item['id']){
                $checkid=1;
                $idsua=$i;
            }
        }

        if($checkid==1){
            $productOder[$idsua]['soluong'] += $item['soluong'];
        }
        else{
            array_push($productOder, $item);
        }

        $_SESSION['product'] = $productOder;
    }

    echo "<br>";
    var_dump($_SESSION);
?>