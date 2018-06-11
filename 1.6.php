<?php
  // 1.6 Получить все четырехзначные числа, в записи которых встречаются только цифры 0,2,3,7.

  for($i=1000; $i<10000; $i++)
  {
    $fourth = floor(($i%100)%10);
    $third = floor(($i%100)/10);
    $second = floor(($i%1000)/100);
    $first = floor($i/1000);

    if(($first==2 || $first==3 || $first==7) && ($second==0 || $second==2 || $second==3 || $second==7) && ($third==0 || $third==2 || $third==3 || $third==7) &&  ($fourth==0 || $fourth==2 || $fourth==3 || $fourth==7))
      {
        echo $i."</br>";
      }
  }
?>
