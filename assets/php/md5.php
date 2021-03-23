<!DOTYPE html>
 <html>
   <body bgcolor="black">
   <meta content="title" name="faza">
   <meta content="copyright" name="@faza">
      <style type='text/css'>
        .body{
             background-color:#000;
             border-style: 1px blue solid;
             }
        .p{
             font-color:white;
             }
       </style>
<center>
<font color="white" face="Cursive" size = "+ 2"> Konverter MD5 <br> <br>
<font size="1">
<form method="get">
<input style="border: 1px white blue;" name="Faza" type="text" id="Faza" /> 
<br> 
<br>	
<input class="con" type="submit" value="Convert ke MD5" />
</form>
<?php
//coders by tandex//

if (isset($_GET['Faza'])) {	
$kta = $_GET['Faza'];
echo'<p> Hash MD5 Dari <strong>'. $kta. '</strong></font>Adalah <br> <br /> <strong>'.md5($kta).'</li> </p>';
}
?>
