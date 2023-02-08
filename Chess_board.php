<!DOCTYPE html>
     <html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->
      <?php
      for($row=1;$row<=8;$row++)
	  {
          echo "<tr>";
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;//It will sum and then take modulus of to total: 
          if($total%2==0)//1+1=2/2+2=4/3+3=6/
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>".$row." <-row(white)".$col."col(white)".$total." <-total(white)";
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td> ".$col."col(black)".$row." <-row(black)".$total."<-total(black)";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>
