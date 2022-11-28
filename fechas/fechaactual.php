<?php

/*





*/


$timestamp=time();


$fecha = date("d-m-Y H:i:s",$timestamp);

echo date("l") , "<br/>";  //sunday
echo date('l jS \of F Y h:i:s A'). "<br/>"; //Sunday 03rd of May 2009 08:22:51 PM	
echo date(DATE_RFC2822)."<br/>";  //Sunday, 03 de May de 2009 08:22:51 PM
echo date("F j, Y, g:i a")."<br/>";//May 3, 2009, 8:22 pm
echo date("D M j G:i:s T Y")."<br/>";  //Sun May 3 20:22:51 CEST 2009  
echo date("j, n, Y")."<br/>";  //3, 5, 2009
echo date("m.d.y")."<br/>"; // 05.03.09
echo date("Ymd")."<br/>"; // 20090503
echo date('\i\t \i\s \t\h\e jS \d\a\y')."<br/>";//it is the 3rd day.
echo date("H:i:s")."<br/>"; //20:22:51
echo date("H:i:s a ")."<br/>"; //20:05:51 pm 



?>