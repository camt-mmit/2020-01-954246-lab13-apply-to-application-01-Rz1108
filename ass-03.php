<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */

    require_once './vendor/autoload.php';
    
    use MathPHP\Functions\Polynomial;

$file=fopen($_SERVER['argv'][1],'r');
$data=trim(fgets($file));
$number=preg_split('/\s+/',$data);
for ($i=0;$i<$number[0];$i++){
    $text=trim(fgets($file));
    $coe=preg_split('/\s+/',$text); 
    $polynomial = new Polynomial($coe);
    print($polynomial);
    echo"\n";
    echo "    Roots:";
    $roots = $polynomial->roots(); 
    $n=count($roots);
    for ($j=0;$j<$n;$j++){
        if ($j==0) printf(" %s",$roots[$j]);
        else printf(", %s",$roots[$j]);
    }
    echo"\n";
    
}

