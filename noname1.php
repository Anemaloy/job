<?php
  
  define('ROOT', dirname(__FILE__));
        
    $znach = '';
    $file = '';
         
  function binarySearchByKey($file, $znach){
      $handle = fopen($file, "r");
      while (!feof($handle))  {
          $string = fgets($handle,4000);
          mb_convert_encoding($string, 'cp1251');          
          array_pop($expstring);
          foreach ($expstring as $key => $value) {
              $arr[] = explode('\t', $value);
          }
          $start = 0;
          $end = count($arr)-1;
          
          while ($start<=$end) {
              $center = floor(($start + $end) / 2);
              $strnatcmp = strnatcmp($arr[$center][0], $znach);
              
              if ($strnatcmp > 0) {
                  $end = $center - 1;
                  
              }   elseif ($strnatcmp < 0) {
                      $start = $center +1;
              } else {
                  return $arr[$center][1];
              }
          }
      }
      return 'undef';
  } 


?>
 