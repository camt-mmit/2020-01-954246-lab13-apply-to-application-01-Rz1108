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
     $m=$number[0];$n=$number[1];$p=$number[2];
     for ($i=0;$i<$m;$i++){
          $text=trim(fgets($file));
          $matrixA[$i]=preg_split('/\s+/',$text);
     }
     for ($i=0;$i<$n;$i++){
          $text=trim(fgets($file));
          $matrixB[$i]=preg_split('/\s+/',$text);
     }
     $A=MatrixFactory::create($matrixA);
     $B=MatrixFactory::create($matrixB);
     $AB=$A->multiply($B);
     printf("Input matrix A( %d x  %d):\n",$m,$n);
     for ($i=0;$i<$m;$i++){
          for($j=0;$j<$n;$j++)
          printf("%5d",$A->get($i,$j));
          echo"\n";
     }
     echo"\n";
     printf("Input matrix B( %d x  %d):\n",$n,$p);
     for ($i=0;$i<$n;$i++){
          for($j=0;$j<$p;$j++)
          printf("%5d",$B->get($i,$j));
          echo"\n";
     }
     echo"\n";
     printf("The result matrix C( %d x  %d):\n",$m,$p);
     for ($i=0;$i<$m;$i++){
          for($j=0;$j<$p;$j++)
          printf("%5d",$AB->get($i,$j));
          echo"\n";
     }
      


