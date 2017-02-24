<table border=1 cellpadding=10><tr>
<?php

	for ($y=1; $y<=10; $y++)
		echo "<td>$y</td>";

			for ($j=1; $j<=10; $j++):
					echo "<tr><td>$j</td>";
					
					for ($i=2; $i<=10; $i++):
						
						echo "<td>".$i*$j."</td>";
						
					endfor;	
					
			echo "</tr>";
			
			endfor;

?>
</tr></table>