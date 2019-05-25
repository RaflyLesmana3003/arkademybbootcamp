soal no.4 pattern loop<br>

result in console
<br><br>
<?php 
 $n =5; 
 cetak_gambar($n); 
function cetak_gambar($n) 
{ 
	$tengah = ($n + 1) / 2;
   for ($i = 0; $i < $n; $i++) { 
        for ($j = 0; $j < $n; $j++) { 
            if ($i == 0 || $i == $n - 1 || $j == $tengah - 1)              
                echo "+ ";        
            else
                echo "= "; 
        } 
  
        echo "<br>"; 
    } 
} 
  
   
  
?> 