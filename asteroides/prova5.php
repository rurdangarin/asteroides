<?php 
 
$valores = $_GET ['valores'];


  for ($i =0; $i<=$valores; $i++){ 
    
      if ($i % 2 == 0) { 
          echo "Seus números pares ao anterior: $i  <br/>";
             
        }
    }



 
 
?>