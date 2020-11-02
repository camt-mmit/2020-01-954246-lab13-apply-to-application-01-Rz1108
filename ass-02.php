<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */

require_once './vendor/autoload.php';

use MathPHP\LinearAlgebra\Matrix;
use MathPHP\LinearAlgebra\MatrixFactory;

$file=fopen($_SERVER['argv'][1],'r');
$text=trim(fgets($file));
$number=preg_split('/\s+/',$text);
for ($i=0;$i<$number[0];$i++){
     $text=trim(fgets($file));
     $n=preg_split('/\s+/',$text);
     $matrixA=[];
     $matrixB=[];
     for($j=0;$j<$n[0];$j++){
          $text=trim(fgets($file));
          $num = preg_split('/\s+/', $text);
          $numclean=array_slice($num,0,$n[0]);
          $numclean0=array_slice($num,$n[0],1);
          $matrixA[]=$numclean;
          $matrixB[]=$numclean0;
     }
     $matrixa=MatrixFactory::create($matrixA);
     $matrixb=MatrixFactory::create($matrixB);
     $matrixain=$matrixa->inverse($matrixa);
     $result=$matrixain->multiply($matrixb);
     for ($j=0;$j<$n[0];$j++){
          for($z=0;$z<1;$z++){
          if ($j==0 && $z==0) printf("%10.2f",$result->get($j,$z));
          else printf(",%10.2f",$result->get($j,$z));
     }}echo "\n";
}








