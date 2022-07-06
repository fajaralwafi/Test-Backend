
<?php 
 

  if($tipe == 1){
    for($x=1;$x<=$angka;$x++)
    {
       for ($y=1;$y<=$x;$y++)
        {
         echo "*";
            if($y< $x)
             {
               echo " ";
             }
         }
     echo "<br>";
    }
  }

  else if($tipe == '2'){
    
      for($i=$angka; $i>=1; $i--)
      {
          for($j=1; $j<=$i; $j++)
          {
          echo ' * ';
          }
          echo '<br>';
      }
  }

  else if($tipe == '3'){
    
    $size = $angka;
    for($i=0; $i <$size; $i++){
      for($j = 1; $j < $size - $i; $j++){
        echo "&nbsp;&nbsp;";
      }

      for($k = 0; $k <= $i; $k++){
        echo "*";
      }

      echo "<br>";
    }

  }
   




    
   

 ?>
