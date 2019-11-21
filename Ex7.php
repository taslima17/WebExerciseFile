<?php
echo "<table border =\"1\" style= 'border-collapse:collapse'>";
for ($row=1; $row <=7 ; $row++) { 
     for ($col=1; $col<=7 ; $col++) { 
     	$a=$row*$col;
     	echo "<td>$a</td>";
     }
     echo "</tr>";

}
?>